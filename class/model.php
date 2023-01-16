<?php
require_once '/xampp/htdocs/crud_oop/config/database.php';
class Attendance{
    
    private $dbname;
    

    public function __construct($db){
        $this->dbname = $db;
       
    }
    //sample fetch queries
   

    // INSERT portion of crud operations in admin
    public function insert($usn,$lname,$fname,$course,$year,$status){
        
        $stmt = "INSERT INTO student_info (USN,lastname,firstname,course,year_level,at_status) VALUES (:usn,:lname,:fname,:course,:year_level,:Student_status)";
        
        $query = $this->dbname->prepare($stmt);
       // $hashpass = password_hash($pass,PASSWORD_DEFAULT);
        $query->bindParam(':usn',$usn);
        $query->bindParam(':lname',$lname);
        $query->bindParam(':fname',$fname);
        $query->bindParam(':course',$course);
        $query->bindParam(':year_level',$year);
        $query->bindParam(':Student_status',$status);

        $query->execute();

        $stmt = null;
        
    
    }
    // getting the details of the user
    public function getDetails($id){
        $stmt = "SELECT * FROM student_info WHERE student_id =:updateid";
        $query = $this->dbname->prepare($stmt);
        $query->bindParam(':updateid',$id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);

        

    }
    //  fetch query :fetching all the data and display them in table format
    public function getAll(){
        
        $stmt = "SELECT * FROM student_info";
        $query = $this->dbname->prepare($stmt);
        $query->execute();
        return $query;
    }
    // UPDATE portion of crud operations in admin
    public function update_users($id, $usn, $lname, $fname, $course, $year, $status,$time){
        $stmt = $this->dbname->prepare("UPDATE student_info SET USN = :updateUsn, lastname= :updateLname,firstname= :updateFname,course = :updateoption1,year_level = :updateoption2,
        at_status = :updateoption3 WHERE student_id = :hiddendata");

        $stmt->bindParam(':updateUsn', $usn, PDO::PARAM_STR);
        $stmt->bindParam(':updateLname', $lname, PDO::PARAM_STR);
        $stmt->bindParam(':updateFname', $fname, PDO::PARAM_STR);
        $stmt->bindParam(':updateoption1', $course, PDO::PARAM_STR);
        $stmt->bindParam(':updateoption2', $year, PDO::PARAM_STR);
        $stmt->bindParam(':updateoption3', $status, PDO::PARAM_STR);
        $stmt->bindParam(':date_time', $time, PDO::PARAM_STR);
        $stmt->bindParam(':hiddendata', $id, PDO::PARAM_INT);

        $stmt->execute();

        $stmt = null;


    }
    // DELETE portion of crud operations in admin
    public function delete_users($delete){
        try{
            $stmt = $this->dbname->prepare("DELETE FROM student_info WHERE student_id =:deleteUserRequest");
            $stmt->bindParam(':deleteUserRequest',$delete, PDO::PARAM_INT);
            echo "Executing DELETE statement with id = $delete...\n";
            $stmt->execute();
            echo "DELETE statement executed successfully!\n";
        
            return $stmt;
        }catch(PDOException $e){
            echo "hey you have an error".$e->getMessage();

        }


    }
    
    // admin team members crud operations
    public function get_admin_team_members(){
        $stmt = "SELECT * FROM authorized";
        
        $query = $this->dbname->prepare($stmt);
        $query->execute();
        return $query;
        
    }
    // admin team members INSERT crud operations
    public function insert_admin($fname, $address, $position,$username){
        $stmt ="INSERT INTO authorized (fullname,address_at,position,user_name) VALUES (:fname,:address_at,:position,:username)";

        $query = $this->dbname->prepare($stmt);
        $query->bindParam(':fname',$fname,PDO::PARAM_STR);
        $query->bindParam(':address',$address,PDO::PARAM_STR);
        $query->bindParam(':position',$position,PDO::PARAM_STR);
        $query->bindParam(':username',$username,PDO::PARAM_STR);
        //$query->bindParam(':pass',$pass,PDO::PARAM_STR);
        //query->bindParam(':rpass',$rpass,PDO::PARAM_STR);
        //$query->bindParam(':avatar',$avatar);
        $query->execute();
        return true;

    }
 
    /*/ COUNT THE NUMBERS THAT LOG IN
        public function checkUser(){
            $sql = "SELECT count(*) FROM authorized";
            $stmt = $this->dbname->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;

           
            }
    */
}
        


