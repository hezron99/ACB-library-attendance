<?php
    $title = "Attendance";
    require_once '/xampp/htdocs/library-attendance/view/header.php';
    //require_once '/xampp/htdocs/library-attendance/view/authentication.php';
    require_once '/xampp/htdocs/library-attendance/class/adminDatabase.php';
    require_once '/xampp/htdocs/library-attendance/class/UserModel.php';

    $r = $object->getAllLoginDetails();

?>
<nav class="navbar nav-main-dashboard navbar-bg-light" style="height:300px">
    <div class="navbar-header">
        <button class="navbar-toggler" type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="position:relative; bottom:120px;left:20px">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="display-5 " style="font-weight: bolder;color:white;position:relative;bottom:105px;margin-left:30px;"><a href="index.php" class="text-decoration-none text-light">ADMIN</a></span>
    </div> 
    <figure class="text-center"style="position:relative;">
        <blockquote class="blockquote"></blockquote>
            <p class="text-light" style="font-size:30px">"All hard work brings a profit, but mere talk leads only to poverty."</p>
        </blockquote>
        <figcaption class="blockquote-footer" style="font-style:italic;">
        Proverbs 14:23
        </figcaption>
    </figure>   
    <div class="row align-items-start mx-4">
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
    <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> --->
    <!---<h1 class="display-5"  style="font-weight: bolder;color:white;position:relative; bottom:120px;right:30px">ADMIN</h1>--->
    <div class="offcanvas offcanvas-start border border-0 shadow-lg" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background-color:white;width:260px; margin-top:70px;border-top-right-radius:20px">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title " id="offcanvasScrollingLabel" style="margin-left:60px;"></h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
            </div>
                    <div class="offcanvas-body float-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-left: 90px;">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                       
                        <div class="dropdown " style="margin-bottom: 50px;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 70px;position:relative; bottom:-10px;">
                                Activity
                            </button>
                            <ul class="dropdown-menu dropdown-menu-info">

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
                             ?>  
                            <br>
                            <br>
                            <div class="d-flex w-100 justify-content-between">
                                <a href="../admin/dashboard.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0"  style="border-radius:10px;">
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
<br/>
</div>
<div class="container text-center " style="position: relative; bottom:80px;">
  <div aria-label="Page navigation example">
    <ul class="pagination ">
    
      <li class="page-item active-light" >

        <a class="page-link text-dark shadow fw-semibold font-monospace p-4" style="border-bottom-left-radius: 50px;border-top-right-radius: 50px" href="home.php">       

        Student Attendance</a>
      
      </li>
      
      <li class="page-item ms-3"><a class="btn btn-subtle text-light shadow fw-semibold font-monospace p-4 " style="border-bottom-left-radius: 50px;border-top-right-radius: 50px;" href="teacherAttendance.php">Teacher Attendance</a></li>
      <li class="page-item ms-3 "><a class="btn btn-subtle text-light shadow fw-semibold font-monospace p-4" style="border-bottom-left-radius: 50px;border-top-right-radius: 50px;" href="adminAttendance.php">Admin Attendance</a></li>
    
    </ul>
    <div class="card text-center shadow-lg py-5 px-5">

        <div class="card-body"> 
            <div class="well-sm ">
                <div class="btn-group mb-4">	
                    <form action="export_studentdata.php" method="POST" style="margin-right: 1000px;padding:10px;">					
                            <button  type="submit" id="exportdata" name='export_studentdata' value="Export" class="btn btn-info shadow-sm">Download</button>
                    </form>
                </div>
            </div>	  
                
            <table class="table rounded">
                <thead class="table border-0 ">
                <tr class="font-monospace" style="font-size: 14px;">
                
                    <th scope="col">#</th>
                    <th scope="col">USN</th>
                    <th scope="col">Last Name</th>
                    <th scope="col"></th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Other Purpose</th>
                    
                    <th scope="col">Time IN</th>
                    
                </tr>
                </thead>
                <tbody>
          
                    <?php 
                    //if(isset($_SESSION['id'] )&& $_SESSION['usn']){
                    if (isset($r) && !empty($r)) {
                    $number = 1;
                    foreach ($r as $data){?>
                        <tr>
                            <td class="py-3 px-3"><?php echo $number?></td>
                            <td><?php echo $data['USN']?></td>
                            <td><?php echo $data['lastname']?><td>
                            <td><?php echo $data['firstname']?></td>
                            <td><?php echo $data['option_name']?></td>
                            <td><?php echo $data['others'] ?></td>
                            <td><?php echo $data['at_time']?></td>
                            
                        </tr>
                    <?php $number++; }
                    }?>
                </tbody>
            </table>
        </div>
    </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center ">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link text-secondary" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>



<?php 
   require_once "../view/footer.php";
 ?>
