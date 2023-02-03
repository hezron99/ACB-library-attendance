-<?php 
class UserModel extends Db{
   
      
  // Function to get user details based on USN
  public function get_attendee($usn,$option,$others) {
        $stmt = $this->connect()->prepare("SELECT * FROM student_info WHERE USN = ?");
        if (!$stmt->execute(array($usn))) {
           $stmt = null;
            header("Location:../index.php?error=STMTFAILED");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("Location:../index.php?error=USER_NOT_FOUND");
            exit();
        }
        $user = $stmt->fetchALL(PDO::FETCH_ASSOC);
        session_start();

        $id = $_SESSION['id'] = $user[0]['student_id'];
        $usn = $_SESSION['usn'] = $user[0]['USN'];
        if(isset($id)&&($usn)==true){
          
          date_default_timezone_set('Asia/Manila');
          $date = date("Y-m-d h:i:s");
  
          $query = "INSERT INTO at_attendance (student_id,option_name,others,at_time) VALUES (:student_id,:purpose,:others,:at_time)";
          $stmt = $this->connect()->prepare($query);
          $stmt->bindParam(':student_id', $id);
          $stmt->bindParam(':purpose',$option);
          $stmt->bindParam(':others',$others);
          $stmt->bindParam(':at_time',$date );
          $stmt->execute();
  
        }
        
        $stmt = null;
    }

  // Function to record login details
  

// Function to




  

  // Function to get all login details
  public function getAllLoginDetails() {
    $sql = "SELECT student_info.USN, student_info.lastname, student_info.firstname, at_attendance.at_time,at_attendance.option_name,at_attendance.others
            FROM student_info 
            INNER JOIN at_attendance ON student_info.student_id=at_attendance.student_id WHERE at_attendance.at_time > NOW() - INTERVAL 24 HOUR  ORDER BY at_attendance.at_time DESC";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    return $stmt;

  }


// On login form submission
  public function recordLoginCount() {
    
      $sql = "SELECT * FROM at_attendance WHERE at_time >= CURDATE()";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt;
      


  }
  public function recordDeleteCount() {
    $sql = "DELETE  FROM at_attendance WHERE at_time < CURDATE()";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    return $stmt;

  }

    
            
  public function get_purpose(){
    $sql = "SELECT * FROM at_purpose";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    return $stmt;


  }
        
        
        

}

$object = new UserModel();