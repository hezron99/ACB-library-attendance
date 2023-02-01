-<?php
class AdminModel extends Db {
       // lOGIN authenticating users or login password validation in ADMIN
    protected function get_users($name,$pass){
                $stmt = $this->connect()->prepare("SELECT user_pass FROM authorized WHERE user_name = ?;");
                if(!$stmt->execute(array($name))){
                    $stmt = null;
                    header("Location:../admin/login_admin.php?error=STMTFAILED");
                    exit();
                }
                if($stmt->rowCount()==0){
                    $stmt = null;
                    header("Location:../admin/login_admin.php?error=USER_NOT_FOUND!");
                    exit();

                }
                $passhashed = $stmt->fetchALL(PDO::FETCH_ASSOC);
                $checkpass = password_verify($pass, $passhashed[0]['user_pass']);

                if($checkpass == false){
                    $stmt= null;
                    header("Location:../admin/login_admin.php?error=PasswordDon't match");
                    exit();
                }elseif($checkpass == true){
                    $stmt = $this->connect()->prepare("SELECT * FROM authorized WHERE user_name = ? OR user_pass = ?;");
                    if(!$stmt->execute(array($name,$pass))){
                        $stmt = null;
                        header("Location:../admin/login_admin.php?error=STMTFAILED");
                        exit();
                    }
                    if($stmt->rowCount()== 0){
                        $stmt = null;
                        header("Location:../admin/login_admin.php?error=USER_NOT_FOUND");
                        exit();
    
                    }
                    $user=$stmt->fetchALL(PDO::FETCH_ASSOC);

                    session_start();
                    $id = $_SESSION['user'] = $user[0]['id_admin'];
                    $_SESSION['username'] = $user[0]['fullname'];
                    date_default_timezone_set('Asia/Manila');
                    $time = date("Y-m-d h:i:s");
                    
                    $sql = "INSERT INTO admin_attendance(id_admin,admin_time_in) VALUES (:id_admin, :admin_time_in)";
                    if($stmt = $this->connect()->prepare($sql)){
                        $stmt->bindParam(':id_admin',$id);
                        $stmt->bindParam(':admin_time_in',$time);
                        $stmt->execute();
                    }
                      
                    
                    $stmt = null;
                    
                    }
                }
        
           
            
       
            public function getAdminAttendees(){
               
                $sql = "SELECT authorized.fullname,authorized.position,authorized.user_name, admin_attendance.admin_time_in FROM authorized 
                INNER JOIN admin_attendance ON authorized.id_admin = admin_attendance.id_admin WHERE admin_attendance.admin_time_in > NOW() - INTERVAL 24 HOUR ORDER by admin_attendance.admin_time_in DESC";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                return $stmt;
            }
            public function countAdminAttendees(){
                $sql = "SELECT * FROM admin_attendance WHERE admin_time_in >= CURDATE()";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                return $stmt;
            }
            public function deleteAdminAttendees(){
                $sql = "DELETE FROM admin_attendance WHERE admin_time_in < CURDATE();";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                return $stmt;
            }
            public function insert_admin($fname, $address, $position,$username,$pass,$avatar){
                $stmt ="INSERT INTO authorized (fullname, address_at, position , user_name, user_pass, picture) VALUES (:fullname, :address_at, :position, :user_name, :user_pass, :picture)";
        
                $password = password_hash($pass, PASSWORD_DEFAULT);
        
                $query = $this->connect()->prepare($stmt);
        
                $query->bindParam(':fullname',$fname);
                $query->bindParam(':address_at',$address);
                $query->bindParam(':position',$position);
                $query->bindParam(':user_name',$username);
                $query->bindParam(':user_pass',$password);
                //$query->bindParam(':rpass',$repass,PDO::PARAM_STR);
                $query->bindParam(':picture',$avatar);
                $query->execute();
                
                $stmt = null;
        
            }
            public function UpdateAdmin($id,$fname, $address, $position,$username,$pass,$avatar) {
                $stmt ="UPDATE authorized SET fullname=:fullname, address_at=:address_at, position=:position , user_name=:user_name, user_pass=:user_pass, picture=:picture WHERE id_admin = :id_admin";
        
                $password = password_hash($pass, PASSWORD_DEFAULT);
        
                $query = $this->connect()->prepare($stmt);
        
                $query->bindParam(':fullname',$fname);
                $query->bindParam(':address_at',$address);
                $query->bindParam(':position',$position);
                $query->bindParam(':user_name',$username);
                $query->bindParam(':user_pass',$password);
                //
                $query->bindParam(':picture',$avatar);
                $query->bindParam(':id_admin',$id,PDO::PARAM_INT);
                $query->execute();
                
                $stmt = null;
        
            
                

            }
            public function Delete_members($id){
                $stmt = "DELETE FROM authorized WHERE id_admin = :id_admin";
                $query = $this->connect()->prepare($stmt);
                $query->bindParam(':id_admin', $id);
                $query->execute();
                return $query;
                
            }

            public function changePassword($id,$current_password, $new_password) {
                // Prepare statement to select current password from database
                $stmt = $this->connect()->prepare("SELECT user_pass FROM authorized WHERE id_admin = :id_admin");
                $stmt->bindParam(':id_admin',$id,PDO::PARAM_INT);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
                // Check if current password matches
                if (!password_verify($current_password, $result[0]['user_pass'])) {
                    header("Location: UpdatePassword.php?error=current password matches not match");
                }
        
                // Prepare statement to update password in database
                $stmt = $this->connect()->prepare("UPDATE authorized SET user_pass = :user_pass WHERE id_admin = :id_admin");
                $stmt->bindParam(':id_admin', $id,PDO::PARAM_INT);
                $stmt->bindParam(':user_pass', password_hash($new_password, PASSWORD_DEFAULT));
                $stmt->execute();
        
                return $stmt;
            }
        
        

            
            
            public function get_admin_team_members(){
                $stmt = "SELECT * FROM authorized";
                $query = $this->connect()->prepare($stmt);
                $query->execute();
                return $query;
                
            }
           
            
       
    }
    $admin = new AdminModel();