<?php
$title = "Instructor Attendance";
require_once '/xampp/htdocs/library-attendance/view/header.php';
require_once '/xampp/htdocs/library-attendance/view/authentication.php';
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
            <p class="text-light" style="font-size:30px">"I can do all things through him who strengthens me."</p>
        </blockquote>
        <figcaption class="blockquote-footer" style="font-style:italic;">
        Philippians 4:13
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
   
    <div class="offcanvas offcanvas-start border border-0 shadow-lg" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="background-color:skyblue;width:300px; margin-top:70px;border-top-right-radius:20px">           
     <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">DASHBOARD</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> --->
            </div>
            <div class="offcanvas-body overflow-hidden">
                
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"style="margin-left: 70px;">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <br/>
                    <br/>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 70px;">
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
                
                <span style="font-size:large; font-weight:bold; margin-left:30px;">hi, Welcome Ms. Pria</span>
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
                    <a href="home.php" class="list-group-item list-group-item-action list-group-item-info shadow-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <p class="display-7 " style="font-weight:500;">Attendance Monitoring</p> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">  
                            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
                            </svg>
                             
                        </div>
                    </a>
                    <br>
                    <br>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-info shadow-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <p class="display-7 " style="font-weight:500;">Calendar</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg>   
                        </div>        
                    </a>
                    <br>
                    <br>
            
                    <a href="admin_team.php" class="list-group-item list-group-item-action list-group-item-info shadow-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <p class="display-7 " style="font-weight:500;">Admin Team</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>   
                        </div>        
                    </a>
                </div>   
            </div>
        </div>
    </nav>
</div>

<br />

</div>
<div class="container text-center " style="position: relative; bottom:80px;">
  <div aria-label="Page navigation example">
    <ul class="pagination ">
    
        <li class="page-item" >
            <a class="btn btn-subtle text-light shadow fw-semibold font-monospace p-4" style="border-bottom-left-radius: 50px;border-top-right-radius: 50px" href="home.php">       
                Student Attendance
            </a>
        </li>
        <li class="page-item ms-3 active-light">
            <a class="page-link text-dark shadow fw-semibold font-monospace p-4 " style="border-bottom-left-radius: 50px;border-top-right-radius: 50px;" href="teacherAttendance.php">
                Teacher Attendance
            </a>
        </li>
        <li class="page-item ms-3 ">
            <a class="btn btn-subtle text-light shadow fw-semibold font-monospace p-4" style="border-bottom-left-radius: 50px;border-top-right-radius: 50px;" href="adminAttendance.php">
            Admin Attendance
            </a>
        </li>
    </ul>
    <div class="card text-center shadow-lg">
      <div class="card-body">
        
        <table class="table   bg-body rounded border border-0">
        <caption>List of users</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
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




<!---
  <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
    
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
  
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
  
        </div>
        <br />
    </div>
</div>
--->
<?php 
   require_once "../view/footer.php";
 ?>
