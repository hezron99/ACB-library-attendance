<?php
if(isset($_POST['enter'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
   
    

// Instantiate the data
include '../class/adminDatabase.php';
include '../class/adminModel.php';
include '../class/adminControl.php';



//$success = $obj->get_users($user, $pass);
$loginAdmin = new AdminControl($user, $pass);

$loginAdmin->EmptyUser();

header("Location:../admin/dashboard.php");
exit();

}

