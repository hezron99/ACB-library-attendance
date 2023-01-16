<?php
$title = "Admin Team";
require_once '/xampp/htdocs/crud_oop/view/header.php';
require_once '/xampp/htdocs/crud_oop/view/authentication.php';
?>


<nav class="navbar navbar-bg-light" style="background-color: skyblue; height:300px">  
    <div class="navbar-header ">
        <button class="navbar-toggler" type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="position:relative; bottom:120px;left:20px">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="display-5 " style="font-weight: bolder;color:white;position:relative;bottom:105px;margin-left:30px;">ADMIN</span>
    </div> 
    <figure class="text-center"style="position:relative;">
        <blockquote class="blockquote"></blockquote>
            <p class="text-light" style="font-size:25px">"God promises to make something good out of the storms that bring devastation to your life."</p>
        </blockquote>
        <figcaption class="blockquote-footer" style="font-style:italic;">
        Romans 8:28
        </figcaption>
    </figure>   
    <div class="row align-items-start mx-4">
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid-1x2" viewBox="0 0 16 16" style="position:relative; bottom:110px;right:20px">
                <path d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9v5h-5v-5h5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z"/>
            </svg>
        </div>
        <div class="col">          
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16" style="position:relative; bottom:110px;right:20px">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
            </svg>
        </div>
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16" style="position:relative; bottom:110px;right:20px;">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
            </svg>
        </div>
    </div>
    <!---<h1 class="display-5"  style="font-weight: bolder;color:white;position:relative; bottom:120px;right:30px">ADMIN</h1>--->
    <div class="offcanvas offcanvas-start border border-0 shadow-lg" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background-color:white;width:260px; margin-top:70px;border-top-right-radius:20px">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel" style="margin-left:60px;"></h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
            </div>
                    <div class="offcanvas-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-left: 90px;">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                       
                        <div class="dropdown " style="margin-bottom: 50px;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 70px;position:relative; bottom:-10px;">
                                Activity
                            </button>
                            <ul class="dropdown-menu dropdown-menu-info" style="margin-left: 90px;">


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
                             <span style="font-size:large; font-weight:bold; margin-left:30px;position:relative; bottom:5px;">hi, Welcome</span>
                             <?php
                                }
                             ?>                            <br>
                            <br>
                            <div class="d-flex w-100 justify-content-between">
                                <a href="../admin/index.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0"  style="border-radius:10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
                                            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                                            <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                                            <path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z"/>
                                        </svg>
                                        <span class="font-monospace fw-lighter" style="font-weight:500;font-size:15px">AttendanceMonitoring</span> 
                                    </a>
                                </div>  
                            <br>
                            <br>
                                <div class="d-flex w-100 justify-content-between ">
                                    <a href="calendar.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0" style="border-radius:10px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                        </svg>   
                                        <span class="font-monospace fw-lighter" style="font-weight:500; font-size:15px">Calendar</span>
                                    </a>
                                </div>        
                            </a>
                            <br>
                            <br>
                                <div class="d-flex w-100 justify-content-between">
                                <a href="admin_team.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0" style="border-radius:10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    </svg>  
                                    <span class="font-monospace fw-lighter" style="font-weight:500;font-size:15px">Admin Team</span>
                                </a> 
                                </div>        
                            
                        </div>   
                    </div>       
      </div>
</nav>

<!---
<div class="container">
    <h1 class="text-muted text-center">WELCOME TO ADMIN<span class="glyphicon glyphicon-th"></span></h1>
    <nav class="navbar navbar-bg-light">
    <button  class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">DASHBOARD</button>

        <div class="offcanvas offcanvas-start" ta-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background-color: skyblue;;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">DASHBOARD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-left: 130px;">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <br/>
                    <br/>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 130px;">
                            Activity
                        </button>
                        <ul class="dropdown-menu dropdown-menu-info" style="margin-left: 90px;">

                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </div>
                <br>
                
                <span style="font-size:large; font-weight:bold; margin-left:80px;">hi, Welcome Ms. Pria</span>
                <br>
                <br>
                <div class="list-group">
                <a href="../admin/index.php" class="list-group-item list-group-item-action list-group-item-info">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3">Dashboard</h5> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1Zm0-7a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                            </svg>                      
                        </div>
                    </a>
                    <br>
                    <br>
                    <a href="home.php" class="list-group-item list-group-item-action list-group-item-info">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3">Attendance Monitoring</h5> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">  
                            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
                            </svg>
                             
                        </div>
                    </a>
                    <br>
                    <br>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3">Calendar</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg>   
                        </div>        
                    </a>
                    <br>
                    <br>
                    <a href="admin_team.php" class="list-group-item list-group-item-action list-group-item-info">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3">Admin Team</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>   
                        </div>        
                    </a>
                </div>   
            </div>
        </div>
    </nav>
--->
<!--- Admin Insert Modal -->
<div class="modal fade" id="AdminModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalLabel">Registered New Admin</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="Fname" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="Fname" placeholder="Enter your Full Name">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address"  placeholder="Your Address">
                                </div>
                                <label for="position" class="form-label">Position</label>
                                <select class="form-select" id="position">
                                    <option selected disabled>Select Position</option>
                                    <option value="Bachelor of Science in Information Technology">Head Librarian</option>
                                    <option value="Bachelor of Science in Computer Science">Assistant Librarian</option>
                                </select>
                                 
                                <div class="mb-3">
                                    <label for="username" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="username"  placeholder="User Name">
                                </div>
                                <!----
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="pass" aria-describedby="emailHelp" placeholder="Enter Password">
                                </div>
                                <div class="mb-3">
                                    <label for="rpass" class="form-label">Repeat Password</label>
                                    <input type="password" class="form-control" id="rpass" aria-describedby="emailHelp" placeholder="Please Re-enter your Password">
                                </div>
                               
                                <div class="mb-3">
                                    
                                    <input type="file" accept="image/*" class="custom-file-input" id="avatar">
                                    <label for="avatar" accept="image/*" class="custom-file-label"></label>
                                    <small id="avatar" class="form-text text-success">This is Optional</small>
                                </div>
                                ---->
                                <div class="modal-footer">
                                    <button type="button"  data-bs-dismiss="modal">Close</button>
                                    <button type="button" onclick="Admin()" >Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
           
            
    <div class="container my-3">
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#AdminModal" style="margin-left:1000px; margin-bottom:30px;">ADD User</button>
                
        <div id="displayAdmintable"></div>
    </div>
            <br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>            
 <script>
    //DISPLAY USER DATA AND MANAGEMENT
    $(document).ready(function(){
        displayadmindata();
    });

    function displayadmindata(){
        var displayadmindata = "true";
    
    $.ajax({
        type: 'POST',
        url: 'display_admin.php',
        data: {
            displayadmin:displayadmindata,
        },
        success:function(data,status){
            $('#displayAdmintable').html(data);
        }
    });
    }
    // SELECT ELEMENT DATA  

    //INSERT admin data 
    function Admin(){
        alert('hello');
         //var fname=$("#Fname").val();
         //var address=$("#address").val();
         //var position=$("#position").val();
         //var username=$("#username").val();
         //var pass=$("#pass").val();
         //var rpass=$("#rpass").val();
         //var $avatar= $("#avatar").val();

    $.post("modal_AdminInsert.php",
        {
            Fname:Fname,
            address:address,
            position:position,
            username:username,
            //pass:pass,
            //rpass:rpass
            //avatar:avatar
        },
       
        function(data,status) {

           console.log(data);
            //displayadmindata();

        
    });
    $('#AdminModal').modal('show');
           
    }
 </script>

   