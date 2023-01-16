<?php
    require_once '../config/database.php';
    require_once '../class/model.php';
    

    extract($_POST);

    if(isset($_POST['Fname']) && isset($_POST['address']) && isset($_POST['position']) && isset($_POST['username'])){

        $result = $obj->insert_admin($fname, $address, $course,$username);

    }
?>