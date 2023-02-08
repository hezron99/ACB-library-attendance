<?php
$title = "Admin Team";
require_once '/xampp/htdocs/library-attendance/view/header.php';
//require_once '/xampp/htdocs/library-attendance/view/authentication.php';
require_once "/xampp/htdocs/library-attendance/class/adminDatabase.php";
require_once "/xampp/htdocs/library-attendance/class/adminModel.php";


$result =$admin->get_admin_team_members();
?>


<nav class="navbar nav-main-dashboard">   
        <div class="container-fluid container-main-dashboard">
            <button class="navbar-toggler" type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <span class="navbar-toggler-icon"></span>
            </button>
        
                <span class="fs-1 navbar-brand px-4" style="font-weight: bolder;color:white; text-shadow:5px 2px 5px black">
                    ADMIN
                </span>
            
            <div class="container text-center mx-auto my-auto">
                <figure class="text-center">
                    <blockquote class="blockquote"></blockquote>
                        <p class="text-light" style="font-size:30px">"All hard work brings a profit, but mere talk leads only to poverty."</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Proverbs 14:23
                    </figcaption>             
                </figure>   
                <div class="offcanvas offcanvas-start border border-0 shadow-lg" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background-color:white;width:260px; margin-top:70px;border-top-right-radius:20px">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel" style="margin-left:60px;"></h5>              
                    </div>
                    <div class="offcanvas-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        <div class="dropdown" style="margin-bottom: 50px;">
                            <button class="btn btn-secondary dropdown-toggle mt-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Activity
                            </button>
                                <ul class="dropdown-menu dropdown-menu-info mx-3 text-center" >
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../admin/logout_admin.php">Log out</a></li>
                                </ul>
                        </div>
                        <div class="list-group">
                            <?php  
                                    if(isset($_SESSION['user']))
                                        {
                                ?>
                                        <span style="font-size:large; font-weight:bold; margin-left:30px;position:relative; bottom:5px;">hi, Welcome <?php echo $_SESSION['username']?></span>
                                <?php
                                        }
                                    else
                                        {
                                ?>
                                        <span class="text-center" style="font-size:large; font-weight:bold">hi, Welcome</span>
                                <?php
                                        }
                                ?>
                                <br>
                                <br>
                            <div class="d-flex w-100 justify-content-between">
                                <a href="../admin/dashboard.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0 "  style="border-radius:10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-dash float-start" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1Zm0-7a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                    </svg>  
                                    <span class="font-monospace fw-lighter" style="font-weight:500;font-size:15px">Dashboard</span> 
                                </a>
                            </div>
                            <br>
                            <br>
                            <div class="d-flex w-100 justify-content-between">
                                <a href="home.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0" style="border-radius:10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                                </svg>
                                    <span class="font-monospace fw-lighter" style="font-weight:500;font-size:15px">AttendanceMonitoring</span> 
                                </a>
                            </div>     
                            <br>
                            <br>
                            <div class="d-flex w-100 justify-content-between">
                                <a href="admin_team.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0" style="border-radius:10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill float-start " viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    </svg>  
                                    <span class="font-monospace fw-lighter" style="font-weight:500;font-size:15px">Admin Team</span>
                                </a> 
                            </div>
                            <br>
                            <br>
                            <div class="d-flex w-100 justify-content-between">
                                <a href="faculty_members.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0" style="border-radius:10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill float-start " viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    </svg> 
                                    <span class="font-monospace fw-lighter" style="font-weight:500;font-size:15px">Faculty Team</span>
                                </a> 
                            </div>       
                        </div>   
                    </div>     
                </div>
            </div>
        </div> 
    </nav>
<?php
$Url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($Url,"error=SuccessfullySignup")==true){
        echo "<div class='alert alert-success text-center fs-5' role='alert'>
       
            <strong>You Successfully</strong> Sign Up!
            <button type='button' class='btn-close float-end' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
    }
?>
<div class="mt-4 mx-5 px-3">
    <button type="button" class="btn btn-success" onclick="modalAdmin()">ADD Admin</button>

</div>

<div class="card text-center border-0  py-5 px-5">
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
    <div class="card-body shadow-lg">
   

      <table class="table border-0">
  
        <thead class="table border-0">

          <tr class="rounded-4">
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Address</th>
            <th scope="col">Position</th>
            <th scope="col">Action</th>
            
            
          </tr>
        </thead>
          <tbody>
              
              <?php
             
              $number = 1;
              while($data = $result->fetch(PDO::FETCH_ASSOC)){?>
                <?php $data['id_admin']?>
                  <tr>
                      <td><?php echo $number?></td>
                     
                      <td><?php echo $data['fullname']?></td>
                      <td><?php echo $data['address_at']?></td>
                      <td class="py-3"><?php echo $data['position']?></td>
                      <td class="py-3">
                        <a href="UpdatePassword.php?ID=<?php echo $data['id_admin']?>" class="btn btn-warning">Change Password</a>
                        <a  onclick=" return confirm('Are you sure you want to delete this account?')" href="DeleteAdmin.php?id_delete=<?php echo $data['id_admin']?>" class="btn btn-danger">Delete Account</a>
                    </td>
                    
                  </tr>
                <?php $number++; }?>
          </tbody>
    </div>
</div>
            <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalLabel">Registered New Admin</h1>    
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                       
                            <form method="POST" action="AdminProcess.php">
                                <div class="mb-3">
                                    <label for="Fname" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="Fname" placeholder="Enter your Full Name">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="address"  placeholder="Your Email Address">
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
                                <div class="modal-footer">
                                    <button type="submit"  name="submitAdmin" class="btn btn-primary">SignUp</button>
                                </div>
                            </form>
                        </div>
                    </div>                             
                </div>
            </div>
           
            
    
            <br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>            
 <script>
    //DISPLAY USER DATA AND MANAGEMENT
  
    function modalAdmin(){
        $(document).ready(function(){
            $('#adminModal').modal('show');
        });
    }

 </script>

<?php 
   require_once "../view/footer.php";
 ?>
