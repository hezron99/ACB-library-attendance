<?php 
require_once '../class/adminDatabase.php';
require_once '../class/UserModel.php';

if(isset($_GET['faculty_delete'])){
    $delete = $_GET['faculty_delete'];
    $result = $object->deleteFaculty($delete);
}
header('Location: faculty_members.php?error=Delete');
?>
