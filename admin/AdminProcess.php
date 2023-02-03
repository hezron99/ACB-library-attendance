<?php

    if(isset($_POST['submitAdmin'])){

        $fname = $_POST['Fname'];
        $address =$_POST['address'];
        $position = $_POST['position'];
        $username =$_POST['username'];
        $pass = $_POST['pass'];
        $rpass = $_POST['rpass'];


       
    

   
        //$result = $obj->verefy($fname, $address, $course,$username,$pass,$rpass,$avatar);


        require_once '../class/adminDatabase.php';
        require_once '../class/adminModel.php';
        require_once '../class/controller.php';

        $new = new User($fname,$address,$position,$username,$pass,$rpass);
        $new->datacontroller();
       
    
   
    header("Location:admin_team.php?error=SuccessfullySignup");   
}
?>