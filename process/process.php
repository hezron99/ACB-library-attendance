<?php 
   require_once '../class/adminDatabase.php';
   require_once '../class/UserModel.php';
   require_once '../class/UserControl.php';
   
    if(isset($_POST['submit'])){
            $usn = $_POST['usn'];
            $purpose = $_POST['purpose'];
            $others = $_POST['others'];


            //$RESULT = $object->getAllLoginDetails($usn, $purpose);
        //instantiate data

     

        $obj2  = new UserController($usn,$purpose,$others);
        $obj2->EmptyUserLogin();

        

        header("location: ../index.php?error=done");
    }
   
