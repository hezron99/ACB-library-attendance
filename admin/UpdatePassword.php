<?php 
$title = "Password Recovery";
require_once '/xampp/htdocs/library-attendance/view/header.php';
//require_once '/xampp/htdocs/library-attendance/view/authentication.php';
require '../class/adminDatabase.php';
require '../class/adminModel.php';

if(isset($_GET['ID'])){
    $id = $_GET['ID'];
    $result_1 = $admin->get_admin_team_members($id);
}

?>
<div class="container-fluid">


        <div class="container mt-3 ">
            <form method="POST" action="password_Recover.php" class="w-50 mx-auto">

                <div class="modal-header">
                    <div class="modal-body">
                    <h1 class="modal-title" id="exampleModalLabel">Change Password</h1>    
                    <input type="hidden" name="user_id">
                        <div class="mb-3">
                            <label for="pass" class="form-label">Old Password</label>
                            <input type="password" class="form-control" name="old_pass" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="new_pass" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>
                        <div class="mb-3">
                            <label for="rpass" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_pass" aria-describedby="emailHelp" placeholder="Please Re-enter your Password">
                        </div>      
                        
                        <div class="modal-footer">
                            <button type="submit"  name="submitPass" class="btn btn-primary">Change Password</button>
                        </div>
                    </div>
                </div>                             
            </form>
        </div>
    </div>

