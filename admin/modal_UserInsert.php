<?php
require_once '../config/database.php';
require_once '../class/model.php';

extract($_POST);

if (isset($_POST['usn']) && isset($_POST['lname']) && isset($_POST['fname']) 
&& isset($_POST['course']) && isset($_POST['year']) && isset($_POST['status'])){

    $success = $obj->insert($usn,$lname,$fname,$course,$year,$status);
    
    

}
?>