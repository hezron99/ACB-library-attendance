<?php


try {
    $host = "localhost";
    $dbname = "admin1";
    $user = "root";
    $pass = "";
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   

}catch(PDOException $e){
    echo "ERROR database connection failed. " . $e->getMessage();

}
require_once '/xampp/htdocs/library-attendance/class/model.php';
$obj = new Attendance($conn);

?>

