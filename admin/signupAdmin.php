<?php 
 $title = "SignUp Admin";
    
 require_once '/xampp/htdocs/library-attendance/view/header.php';
//require_once '/xampp/htdocs/library-attendance/view/authentication.php';

?>

            <?php
                $Url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if(strpos($Url,"error=PleaseInputALL")==true){
                        echo "<div class='alert alert-danger text-center fs-5' role='alert'>
                            <strong>Please fill up the information! </strong>
                            </div>";
                    }elseif(strpos($Url,"error=PasswordDontMatch")==true){
                        echo "<div class='alert alert-danger text-center fs-5' role='alert'>
                            <strong>The Password you entered is not Match! </strong>
                            </div>";
                    }
            ?>

<div class="container-fluid">


        <div class="container mt-3 ">
            <form method="POST" action="AdminProcess.php" class="w-50 mx-auto">
                <div class="modal-header">
                    <div class="modal-body">
                    <h1 class="modal-title" id="exampleModalLabel">Registered New Admin</h1>    
                        <div class="mb-3">
                            <label for="Fname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="Fname" placeholder="Enter your Full Name">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address"  placeholder="Your Address">
                        </div>
                        <label for="position" class="form-label">Position</label>
                        <select class="form-select" name="position">
                            <option selected disabled>Select Position</option>
                            <option value="Head Librarian">Head Librarian</option>
                            <option value="Assistant Librarian">Assistant Librarian</option>
                        </select>
                                    
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" name="username"  placeholder="User Name">
                        </div>
                            
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>
                        <div class="mb-3">
                            <label for="rpass" class="form-label">Repeat Password</label>
                            <input type="password" class="form-control" name="rpass" aria-describedby="emailHelp" placeholder="Please Re-enter your Password">
                        </div>      
                        <div class="custom-file mb-3">                 
                            <input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" name="avatar" id="avatar">
                            <label for="avatar" class="custom-file-label"></label>
                            <small id="avatar" class="form-text text-success">This is Optional</small>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"  name="submitAdmin" class="btn btn-primary">SignUp</button>
                        </div>
                    </div>
                </div>                             
            </form>
        </div>
    </div>
<?php 
   require_once "../view/footer.php";
?>
