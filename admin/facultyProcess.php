<?php
if (isset($_POST['create'])){
    $id = $_POST['id_faculty'];
    $fullname = $_POST['faculty_fn'];
    $address = $_POST['faculty_Ad'];
    $department = $_POST['department'];


    // INSTANTIATE THE DATA 
    require '../class/adminDatabase.php';
    require '../class/UserModel.php';
    require '../class/facultyController.php';


    $facultyObj = new facultyControl($id,$fullname,$address,$department);
    $facultyObj->facultyController();

}
header("Location: faculty_members.php?error=DONE");

?>