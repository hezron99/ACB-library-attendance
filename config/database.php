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
require_once '/xampp/htdocs/crud_oop/class/model.php';
$obj = new Attendance($conn);



