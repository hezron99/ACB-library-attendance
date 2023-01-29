<?php
require '../class/adminDatabase.php';
require '../class/adminModel.php';

if(isset($_POST['submitPass'])){

    $id = $_POST['user_id'];
    $oldpass = $_POST['old_pass'];
    $newpass = $_POST['new_pass'];
    $repeatPass = $_POST['confirm_pass'];

    $pass = $admin->ChangePassword($id,$oldpass,$newpass);
    echo var_dump($pass);
}
//header("location: admin_team.php?error=done");

?>