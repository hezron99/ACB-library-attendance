<?php
  $title = "Time IN";
  session_start();

  $page = $_SERVER['PHP_SELF'];
  $sec = "30";
  //require_once './view/header.php';

  require_once '../library-attendance/class/adminDatabase.php';
  require_once '../library-attendance/class/UserModel.php';

  $r = $object->get_purpose();
 
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title><?php echo $title; ?></title>
    <!-- MDB -->
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->

  </head>
  <body class="w-auto">
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>-->
   
      


    <div class="container-fluid-lg">
      <nav class="navbar px-5" style="background-color:skyblue; height:300px">
        <div class="container navbar-header mx-5 mb-auto">   
          <span class="display-5 " style="font-weight: bolder;color:white;">Library Attendance</span>
            <button class="btn btn-outline-primary float-start" >
            <a href="../library-attendance/admin/login_admin.php" class="text-light text-decoration-none">Admin Login</a>
            </button> 
            <div class="navbar-content mt-5 px-5 mx-5">
              <figure class="text-center mx-5">
                  <blockquote class="blockquote"></blockquote>
                      <p class="text-light mx-5" style="font-size:30px">"All hard work brings a profit, but mere talk leads only to poverty."</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                  Proverbs 14:23
                  </figcaption>
              </figure>
            </div>
      </nav>
      
          <div class="container rounded-5 shadow-lg w-25" style="background-color:azure;position:relative; bottom:80px;">
              <form class="text-center py-5 px-3" method="POST" action="../library-attendance/process/process.php">
              <!-- Name input -->
                    <div class="form-outline mb-4 ">
                      <input type="number" id="integer" name="usn" class="form-control form-control-lg  rounded-5" placeholder="Enter your USN" required>
                      <label class="form-label" for="form5Example1" >USN</label>
                    </div>
                    <div class="grid text-center">
                      <div class="col">
                        <select class="form-select form-select-lg mb-3 rounded-5" name="purpose" aria-label=".form-select-lg example">
                            <option disabled selected>Select Your Purpose</option>
                              <option  value="Study">Study</option>
                              <option value="Reading a Books">Reading a Books</option>
                              <option value="Stanby">Stanby</option>
                              <option value="Others">Others</option>  
                        </select>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-outline-primary btn-block mb-4" type="button" id="warning-outlined" autocomplete="off" data-bs-toggle="collapse" href="#collapseExample">If you choose others, Please Click Here to know your Purpose</button>
                      </div>
                      <div class="collapse" id="collapseExample">
                        <div class="form-outlined">
                          <textarea class="form-control-lg" name="others" id="textAreaExample" rows="3" placeholder="Enter Your Purpose here..."></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-4">
                    
                      <input class="form-check-input me-2" type="checkbox" value="" id="form5Example3" />
                      <label class="form-check-label" for="form5Example3">
                        I have read and agree to the terms
                      </label>
                    </div>

                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary btn-block mb-3" >Log in</button> 
                <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullUrl,"error=INVALID_YOUMUSTFILLUPALL")==true){

                  echo "<div class='alert alert-danger tex-center' role='alert'>
                  <strong>Please fill in all fields!.</strong>
                </div>";
                }elseif(strpos($fullUrl,"error=USER_NOT_FOUND")==true){
                  echo "<div class='alert alert-danger tex-center' role='alert'>
                        <strong>This USN not found!</strong>
                        </div>";
                }elseif(strpos($fullUrl,"error=done")==true){
                  echo "<div class='alert alert-success tex-center' role='alert'>
                        <strong>You Successfully Time IN!</strong>
                        </div>";
                }
              ?>
              </form>
            
          </div>
    </div>
        

  </body>
</html>

