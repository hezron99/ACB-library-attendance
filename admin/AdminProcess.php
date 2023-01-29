<?php

    if(isset($_POST['submitAdmin'])){

        $fname = $_POST['Fname'];
        $address =$_POST['address'];
        $position = $_POST['position'];
        $username =$_POST['username'];
        $pass = $_POST['pass'];
        $rpass = $_POST['rpass'];


        $orig_file= $_FILES['avatar']['tmp_name'];
        $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        $target_dir = '.uploads/';
        $destination  = "$target_dir$pass.$ext";
        move_uploaded_file($orig_file,$destination);

        exit();
    

   
        //$result = $obj->verefy($fname, $address, $course,$username,$pass,$rpass,$avatar);


        require_once '../class/adminDatabase.php';
        require_once '../class/adminModel.php';
        require_once '../class/controller.php';

        $new = new User($fname,$address,$position,$username,$pass,$rpass,$destination);
        $new->datacontroller();
       
    
   
    header("Location:admin_team.php?error=SuccessfullySignup");   
}
?>