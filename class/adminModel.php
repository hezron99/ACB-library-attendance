<?php
class AdminModel extends Db {
       // lOGIN authenticating users or login password validation in ADMIN
    protected function get_users($name,$pass){
        
                
                $stmt = $this->connect()->prepare("SELECT * FROM authorized WHERE user_name = ? AND user_pass = ?");
                if(!$stmt->execute(array($name,$pass))){
                    $stmt = null;
                    header("Location:../admin/login_admin.php?error=STMTFAILED");
                    exit();
                }
                if($stmt->rowCount()==0){
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
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(':id_admin',$id);
            $stmt->bindParam(':admin_time_in',$time);
            $stmt->execute();   

            
        

            $stmt = null;
            
            }
            public function getAdminAttendees(){
                $sql = "SELECT authorized.fullname,authorized.position,authorized.user_name, admin_attendance.admin_time_in FROM authorized 
                INNER JOIN admin_attendance ON authorized.id_admin = admin_attendance.id_admin";
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
           
       
    }
    $admin = new AdminModel();