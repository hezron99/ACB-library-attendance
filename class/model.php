<?php
require_once '/xampp/htdocs/library-attendance/config/database.php';
class Attendance {
    
    private $dbname;
    

    public function __construct($db){
        $this->dbname = $db;
       
    }
 
   //////////////////////////// THIS IS MODEL CLASS ALL DATA INPUT HERE IT INCLUDES /////////////////
   /////////////////////////////////////////////STUDENT DATA AND ADMIN DATA /////////////////////////////////

    // INSERT operation for the student record information
    public function insert($usn,$lname,$fname,$course,$year,$status){
        
        $stmt = "INSERT INTO student_info (USN,lastname,firstname,course,year_level,at_status) VALUES (:usn,:lname,:fname,:course,:year_level,:Student_status)";
        
        $query = $this->dbname->prepare($stmt);
        $query->bindParam(':usn',$usn);
        $query->bindParam(':lname',$lname);
        $query->bindParam(':fname',$fname);
        $query->bindParam(':course',$course);
        $query->bindParam(':year_level',$year);
        $query->bindParam(':Student_status',$status);

        $query->execute();
        
        $stmt = null;
        
        
    
    }
    // getting the details of the STUDENT
    public function getDetails($id){
        $stmt = "SELECT * FROM student_info WHERE student_id =:updateid";
        $query = $this->dbname->prepare($stmt);
        $query->bindParam(':updateid',$id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);

        

    }
    
    public function getAll(){
        
        $stmt = "SELECT * FROM student_info";
        $query = $this->dbname->prepare($stmt);
        $query->execute();
        return $query;
    }
    // UPDATE portion of crud operations in admin
    public function update_users($id, $usn, $lname, $fname, $course, $year, $status){
        $stmt = $this->dbname->prepare("UPDATE student_info SET USN = :updateUsn, lastname= :updateLname, firstname= :updateFname, course = :updateoption1, year_level = :updateoption2,
        at_status = :updateoption3 WHERE student_id = :hiddendata");

        $stmt->bindParam(':updateUsn', $usn, PDO::PARAM_STR);
        $stmt->bindParam(':updateLname', $lname, PDO::PARAM_STR);
        $stmt->bindParam(':updateFname', $fname, PDO::PARAM_STR);
        $stmt->bindParam(':updateoption1', $course, PDO::PARAM_STR);
        $stmt->bindParam(':updateoption2', $year, PDO::PARAM_STR);
        $stmt->bindParam(':updateoption3', $status, PDO::PARAM_STR);
        //$stmt->bindParam(':date_time', $time, PDO::PARAM_STR);
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
 
   
    // admin team members INSERT crud operations
   
   
    //  fetch query :fetching all the data and display them in table format AND also pagination
    public function pagination($start,$per_page){
        $query = "SELECT COUNT(*) FROM student_info";
        $stmt = $this->dbname->prepare($query);
        $stmt->execute();
        

        $query = "SELECT * FROM student_info LIMIT :start, :per_page";
        $stmt = $this->dbname->prepare($query);
        $stmt->bindValue(':start', $start, PDO::PARAM_INT);
        $stmt->bindValue(':per_page', $per_page, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt;
    }
    public function search($search){
        $sql = "SELECT * FROM student_info WHERE lastname LIKE :search OR firstname LIKE :search ORDER BY lastname";
        $stmt = $this->dbname->prepare($sql);
        $stmt->bindValue(':search', $search, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;

    }
 
   
}
        


