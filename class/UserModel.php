<?php 
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
        //  Create session 

        $user = $stmt->fetchALL(PDO::FETCH_ASSOC);
        session_start();

        $id = $_SESSION['id'] = $user[0]['student_id'];
        $usn = $_SESSION['usn'] = $user[0]['USN'];

        // Create Insertin statements as a new attendance record for students

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

  //    Function to get all login details

  public function getAllLoginDetails() {
    $sql = "SELECT student_info.USN, student_info.lastname, student_info.firstname, at_attendance.at_time,at_attendance.option_name,at_attendance.others
            FROM student_info 
            INNER JOIN at_attendance ON student_info.student_id=at_attendance.student_id WHERE at_attendance.at_time > NOW() - INTERVAL 24 HOUR  ORDER BY at_attendance.at_time DESC";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    return $stmt;

  }


//      function to login Count of the day for students

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

  //  =========== THIS FUNCTION IS FOR FACULTY ONLY  =============== \\

  // Insert Data faculty
  public function CreateFaculty($id,$fname,$address,$department)
  {
    $sql = "INSERT INTO faculty_member (faculty_usn,faculty_fullname,faculty_email,department) VALUES (:faculty_usn, :faculty_fullname, :faculty_address, :department)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam(':faculty_usn',$id);
    $stmt->bindParam(':faculty_fullname',$fname);
    $stmt->bindParam(':faculty_address',$address);
    $stmt->bindParam(':department',$department);
    $stmt->execute();
    return $stmt;
  }    
  // get All data faculty
  public function getFaculty(){
    $sql = "SELECT * FROM faculty_member";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    return $stmt;
  }
  // Delete data faculty
  public function deleteFaculty($delete_id){
    $sql = "DELETE FROM faculty_member WHERE faculty_id = :faculty_id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam(':faculty_id',$delete_id);
    $stmt->execute();
    return $stmt;
  }
  public function get_faculty_attendee($usn_faculty,$option,$purpose){
    $stmt = $this->connect()->prepare("SELECT * FROM faculty_member WHERE faculty_usn = ?");
    if(!$stmt->execute(array($usn_faculty))){
      $stmt = null;
      header("Location: ../index.php?error=stmtfailed");
      exit();
    }
    if($stmt->rowCount()==0){
      $stmt = null;
      header("Location: ../index.php?error=UserNOTFound");
      exit();
    }
    // create a sesson in faculty attendance table

    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    session_start();
    $userFaculty = $_SESSION['user_faculty'] = $user['faculty_id'];
    $faculyUSN = $_SESSION['user_usn'] = $user['faculty_usn'];

    if(isset($userFaculty)&&($faculyUSN)==true){

      date_default_timezone_set('Asia/Manila');
      $datetime = ('Y-m-d h:i:s');

      $sql = "INSERT INTO faculty_attendance (faculty_id,faculty_Purpose,Others,faculty_time_in) VALUES (:student_id,:faculty_Purpose,:Others,:time_in)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(':student_id', $userFaculty);
      $stmt->bindParam(':faculty_Purpose', $option);
      $stmt->bindParam(':Others', $purpose);
      $stmt->bindParam(':time_in',$datetime);
      $stmt->execute();
    }
    $stmt = null;
  }
  // Create an Login details in the facutly member attendance

  public function facultyLoginDetails() {
    $sql = "SELECT faculty_member.faculty_usn, faculty_member.faculty_fullname, faculty_member.department, faculty_attendance.faculty_time_in, faculty_attendance.faculty_Purpose, faculty_attendance.Others
            FROM faculty_member
            INNER JOIN faculty_attendance ON faculty_member.faculty_id=faculty_attendance.faculty_id WHERE faculty_attendance.faculty_time_in > NOW() - INTERVAL 24 HOUR  ORDER BY faculty_attendance.faculty_time_in DESC";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    return $stmt;

  }


//      function to login Count of the day for students

  public function facultyLoginCount() {
    
      $sql = "SELECT * FROM faculty_attendance WHERE faculty_time_in >= CURDATE()";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt;
      


  }

}

$object = new UserModel();