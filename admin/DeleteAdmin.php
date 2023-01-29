<?php 
require '../class/adminDatabase.php';
require '../class/adminModel.php';

if(isset($_GET['id_delete'])){
    $id = $_GET['id_delete']; 
    $delete = $admin->Delete_members($id);

}
header("Location:admin_team.php");
?>