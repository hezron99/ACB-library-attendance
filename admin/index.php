<?php
    $title = "Home Admin";
    
    require_once '/xampp/htdocs/library-attendance/view/header.php';
    require_once '/xampp/htdocs/library-attendance/view/authentication.php';
    require_once "/xampp/htdocs/library-attendance/class/model.php";
    require_once "/xampp/htdocs/library-attendance/config/database.php";
    

    require_once "../class/model.php";
    require_once "../class/adminDatabase.php";
    require_once "../class/adminModel.php";
    require_once "../class/UserModel.php";
   
    if(isset($_POST['submitSearch'])){
        $key = $_POST['key'];

        $rowdata = $obj->search($key);
        
        $output = $rowdata->fetchALL();
        $row = $rowdata->rowCount();
    }


    $per_page = 15;
    $page = 1;
    if(isset($_GET['page'])){
      $page = (int)$_GET['page'];
    
    }else{
      $page = 1;
    }
    
    $start = ($page - 1) * $per_page;
    if (isset($_POST['display'])) {
    
    }
    $query = $obj->pagination($start,$per_page);
    
    
    ?>

    
<?php
// students attendance count 
    $numLogins = $object->recordLoginCount();
    $count = $numLogins->rowCount();

?> 
<div class="container-fluid" style="background-color: skyblue; height:300px;">
                    <nav class="navbar">   
                        <div class="container-fluid">
                            <button class="navbar-toggler mt-3" type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="">
                                <span class="fs-2 navbar-brand px-4" style="font-weight: bolder;color:white;">
                                    ADMIN
                                </span>
                            </div>
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
                                                <a href="../admin/index.php" class="list-group-item list-group-item-action list-group-item-subtle shadow-lg border-0 "  style="border-radius:10px;">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard2-data float-start" viewBox="0 0 16 16">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check-fill float-start" viewBox="0 0 16 16">
                                                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                                    </svg>   
                                                    <span class="font-monospace fw-lighter" style="font-weight:500; font-size:15px">Calendar</span>
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
                                        </div>   
                                    </div>     
                                </div>
                            </div>
                        </div> 
                    </nav>
                </div>
                <div id="success-message"></div>

    <div class="container">
        <div class="container mx-auto text-center"style="position:relative; bottom:50px;">
            <div class="row mx-5">
                <div class="col mx-4 py-auto">
                    <div class="card shadow-lg bg-body rounded border border-0" style="width: 18rem;height:12rem;">
                        <div class="card-body">
                            <h1 class="card-title display-6">Student</h1>
                            <p class="card-text display-6" style="font-size: 1.4"><?php echo strval($count);?></p>
                            <button class="btn btn-outline-primary shadow-sm" onclick="sample1()" type="button" data-toggle="modal" data-target="#centerModal1">
                                View more
                              
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col mx-4 py-auto">
                    <div class="card shadow-lg  bg-body rounded border border-0" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title display-6">Instructor</h5>
                            <p class="card-text display-6" style="font-size: 1.4">13</p>
                            <button class="btn btn-outline-primary shadow-sm" onclick="sample2()" type="button" data-toggle="modal" data-target="#centerModal2">
                                View more
                                
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col mx-4">
                    <div class="card shadow-lg  bg-body rounded border border-0" style="width:18rem; height:12rem;">
                        <div class="card-body">
                            <h5 class="card-title display-6">Administrator</h5>
                            <?php
                                            // admin attendance count
                                $adminlogs = $admin->countAdminAttendees();
                                $count1 = $adminlogs->rowCount();   
                            ?>
                            <p class="card-text display-6" style="font-size: 1.4"><?php echo strval($count1);?></p>
                            <button class="btn btn-outline-primary shadow-sm" onclick="sample()" type="button" data-toggle="modal" data-target="#centerModal3">
                                View more
                                        
                            </button>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="container text-center" >
            <div class="card text-center shadow rounded-5 border-0">
                <div class="card-body">
                    
                    <div class="row mx-auto mb-3" style="padding: 20px;">
                        <form  class = "w-25 d-flex" role = "search" method="POST" action="index.php">
                            <input  class="form-control me-2" aria-label="Search" type="text" placeholder="Search" key="search" name="key">
                            <input class="btn btn-warning" type="submit" value="submit" name="submitSearch">

                        </form>
                        <button type="button" class="btn btn-primary  font-monospace shadow-sm" onclick="modalInsert()" data-toggle="modal" data-target="#exampleModal" style="width: 100px;">ADD User</button>

                    </div>
                    
                    
                        <div  class="table-responsive-xl" id="displaytabledata"></div>
                   
                                <table class="table rounded border-0">
                                    <thead class="table">
                                    <tr class="font-monospace" style="font-size: 14px;">
                                        <th scope="col">#</th>
                                        <th scope="col">USN</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Year Level</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">UPDATE</th>
                                        <th scope="col">DELETE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $row = 0;
                                            if(isset($output) && !empty($output)) {
                                                $row = count($output);
                                            }
                                            if(($row) != 0){
                                                
                                                foreach($output as $searchrow){ 
                                                    echo "<tr class='bg-warning'>
                                                                <td>".$searchrow['student_id']."</td>
                                                                <td>".$searchrow['USN']."</td>
                                                                <td>".$searchrow['lastname']."</td>
                                                                <td>".$searchrow['firstname']."</td>
                                                                <td>".$searchrow['course']."</td>
                                                                <td>".$searchrow['year_level']."</td>
                                                                <td>".$searchrow['at_status']."</td>
                                                                <td><button class='btn btn-danger font-monospace' onclick='GetDetails(".$searchrow['student_id'].")'>UPDATE</button></td>
                                                                <td><button class='btn btn-dark font-monospace' onclick='deleteOption(".$searchrow['student_id'].")'>DELETE</button></td>
                                                        </tr";
                                                }
                                            }else{
                                                //echo "data not found";
                                                //echo var_dump($row);
                                            }
                                            
                                        ?>
                                        
                                        <?php 
                                        $countRow = $query->fetchColumn();
                                        
                                        
                                        $number = 1;
                                        while($data = $query->fetch(PDO::FETCH_ASSOC)){?>
                                            <?php $data['student_id']?>
                                            <tr>
                                                <td><?php echo $number?></td>
                                                <td><?php echo $data['USN']?></td>
                                                <td><?php echo $data['lastname']?></td>
                                                <td><?php echo $data['firstname']?></td>
                                                <td><?php echo $data['course']?></td>
                                                <td><?php echo $data['year_level']?></td>
                                                <td><?php echo $data['at_status']?></td>
                                                <td><button class="btn btn-danger font-monospace" onclick="GetDetails(<?php echo $data['student_id'];?>)">UPDATE</button></td>
                                                <td><button class="btn btn-dark font-monospace" onclick="deleteOption(<?php echo $data['student_id'];?>)">DELETE</button></td>
                                                    
                                            </tr>
                                            
                                        <?php $number++; }?>
                                    </tbody>
                                </table>
                                <?php 
                                $total_pages = ceil($countRow / $per_page);
                                ?>
                                <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item <?php if ($page == 1) echo 'disabled'; ?>">
                                    <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    </li>
                                    <?php for($i = 1; $i<=$total_pages; $i++): ?>
                                    <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                                        <a class="page-link" href="?page=<?php echo  $i;?>"><?php echo $i; ?></a>
                                    </li>
                                    <?php endfor;?>
                                    <li class="page-item <?php if ($page == $total_pages) echo 'active'; ?>">
                                    <a class="page-link" href="?page=<?php echo $page + 1;?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </li>
                                </ul>
                                </nav>
                                	
                </div>
            </div>
        </div>
    </div>
</div>

<br/>

<!-- Insert Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Registered New Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">USN</label>
                                    <input type="name" class="form-control" id="usn" aria-describedby="emailHelp" placeholder="Please Enter Usn">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Please Enter Student Lastname">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="Please Enter Student Fastname">
                                </div>
                                <label for="option1" class="form-label">Course</label>
                                <select class="form-select" aria-label="Default select example" id="course">
                                    <option selected disabled>Select Course</option>
                                    <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                    <option value="Bachelor of Science in Business Administration Major in Marketin">Bachelor of Science in Business Administration Major in Marketing</option>
                                    <option value="Bachelor of Science in Business Administration Major in Finance">Bachelor of Science in Business Administration Major in Finance</option>
                                    <option value="Technical Education And Skills Development Authority Scholar">Technical Education And Skills Development Authority Scholar</option>
                                </select>
                                <label for="option2" class="form-label">Year Level</label>
                                <select class="form-select" aria-label="Default select example" id="year">
                                    <option selected disabled>Select Year</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Fourth Year">Fourth Year</option>
                                </select>
                                <label for="option3" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example" id="status">
                                    <option selected disabled>Select Status</option>
                                    <option value="New">New</option>
                                    <option value="Old">Old</option>
                                </select>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" onclick="insertUser()" class="btn btn-success">Save</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
<!-- Update MODAL -->
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Student Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="updateInputEmail1" class="form-label">USN</label>
                                    <input type="name" class="form-control" id="updateUSN" aria-describedby="emailHelp" >
                                </div>
                                <div class="mb-3">
                                    <label for="updateInputEmail1" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="updateLname" aria-describedby="emailHelp" >
                                </div>
                                <div class="mb-3">
                                    <label for="updateInputEmail1" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="updateFname" aria-describedby="emailHelp" >
                                </div>
                                <label for="updateoption1" class="form-label">Course</label>
                                <select class="form-select" aria-label="Default select example" id="updateoption1">
                                    <option selected disabled>Select Course</option>
                                    <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                    <option value="Bachelor of Science in Business Administration Major in Marketin">Bachelor of Science in Business Administration Major in Marketing</option>
                                    <option value="Bachelor of Science in Business Administration Major in Finance">Bachelor of Science in Business Administration Major in Finance</option>
                                    <option value="Technical Education And Skills Development Authority Scholar">Technical Education And Skills Development Authority Scholar</option>
                                </select>
                                <label for="updateoption2" class="form-label">Year Level</label>
                                <select class="form-select" aria-label="Default select example" id="updateoption2">
                                    <option selected disabled>Select Year</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Fourth Year">Fourth Year</option>
                                </select>
                                <label for="updateoption3" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example" id="updateoption3" >
                                    <option selected disabled>Select Status</option>
                                    <option value="New">New</option>
                                    <option value="Old">Old</option>
                                </select>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger" onclick="updateUser()">Save Changes</button>
                                    <input type="hidden" id="hiddendata">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
<!-- Vertically centered modal of student countings -->
            <div class="modal fade" id="centerModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Number of Student Enter at Library</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <p class="card-text display-6" style="font-size: 1.4">
                                Today Currently Students login is only:

                                <?php echo strval($count);?>
                                </p>
                               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="centerModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Number of Instructor Enter at Library</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <p class="card-text display-6" style="font-size: 1.4">
                                Today Currently Instructor login is only:

                                13
                                </p>
                               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="centerModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Number of Admin that login</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <p class="card-text display-6" style="font-size: 1.4">
                                Today Currently Admin login is only:

                                <?php echo strval($count1);?>
                                </p>
                               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
<!--- Modal delete -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Warning</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="font-monospace"> Are you sure you want to delete?</span>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary" onclick="deleteUser()">Yes</button>
                        <input type="hidden" id="deletedata">
                    </div>
                </div>
            </div>
<!-- button add user and table data -->
            </div>
            
            
            <br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>            
 <script>
// MODAL JAVASCRIPT
   function sample(){
    $(document).ready(function() {
    $('#centerModal3').modal('show');
});

   }
   function sample1(){
    $(document).ready(function() {
    $('#centerModal1').modal('show');
});

   }
   function sample2(){
    $(document).ready(function() {
    $('#centerModal2').modal('show');
});

   }
   function modalInsert(){
    $(document).ready(function() {
        $('#exampleModal').modal('show');
    });
   }

    //INSERT user data 
    function insertUser(){
        var usn=$("#usn").val();
        var lname=$("#lname").val();
        var fname=$("#fname").val();
        var course=$("#course").val();
        var year=$("#year").val();
        var status=$("#status").val();
        
    $.ajax({
        type: "POST",
        url: "modal_UserInsert.php",
        data: {
            usn:usn,
            lname:lname,
            fname:fname,
            course:course,
            year:year,
            status:status
        },
       
       
        success:function(data,status) {

            //console.log(data);
            
            $('#exampleModal').modal('hide');  
            window.location.reload();
        }
    });
    
    }
    // get delete user
    function deleteOption(deleteID){
        console.log("Deleting user with id = ",deleteID);
        $('#deleledata').val(deleteID);

        $.post("modal_UserDelete.php",{

            deleteID:deleteID

        },function(data,status){
            //console.log(status);
           
        });
        $("#staticBackdrop").modal('show');
    }
    //delete user
   function deleteUser(){
    var deleteUserRequest = $("#deletedata").val();

        $.post("modal_UserDelete.php",{
            deleteUserRequest:deleteUserRequest
            },
           function(data,status){
             //displaydata();
            
            //console.log(data);
            $("#staticBackdrop").modal('hide');
            window.location.reload();
           });
     }
   // GET DETAILS
   function GetDetails(updateid){
    
    $("#hiddendata").val(updateid);
    
    $.post("modal_UserUpdate.php",
    {
        updateid:updateid
    },
    
    function(data,status){
        var id = JSON.parse(data);
            
        $("#usn").val(id.username);
        $("#updatepassword").val(id.user_pass);
      
    });
    $("#updateModal").modal('show');
   }
   
   // UPDATE DATA
   function updateUser(){
    var updateUSN=$("#updateUSN").val();
    var updateLname=$("#updateLname").val();
    var updateFname=$("#updateFname").val();
    var updateoption1=$("#updateoption1").val();
    var updateoption2=$("#updateoption2").val();
    var updateoption3=$("#updateoption3").val();
    var hiddendata=$("#hiddendata").val();

   $.post("modal_UserUpdate.php",{
        updateUSN:updateUSN,
        updateLname:updateLname,
        updateFname:updateFname,
        updateoption1:updateoption1,
        updateoption2:updateoption2,
        updateoption3:updateoption3,
        hiddendata:hiddendata
   },
    function(data,status){
        //console.log(data);
        window.location.reload();
   
    });
    $("#updateModal").modal('hide');
}

//
 </script>
 <?php 
   require_once "../view/footer.php";
 ?>
   