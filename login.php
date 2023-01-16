<?php
  $title = "Time IN";
  require_once './view/header.php';

  require_once '../crud_oop/class/adminDatabase.php';
  require_once '../crud_oop/class/UserModel.php';

  $r = $object->get_purpose();
?>


<div class="container-fluid-lg">
  <nav class="navbar px-5" style="background-color:skyblue; height:300px">
    <div class="container navbar-header mx-5 mb-auto">   
      <span class="display-5 " style="font-weight: bolder;color:white;">Library Attendance</span>
        <button class="btn btn-outline-primary float-start" >
        <a href="../crud_oop/admin/login_admin.php" class="text-light text-decoration-none">Admin Login</a>
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
        <form class="text-center py-5 px-3" method="POST" action="../crud_oop/process/process.php">
        <!-- Name input -->
              <div class="form-outline mb-4  ">
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
                  <button class="btn btn-outline-primary btn-block mb-4" type="button" id="warning-outlined" autocomplete="off" data-bs-toggle="collapse" href="#collapseExample">If choose others, Please Click Here to know your Purpose</button>
                </div>
                <div class="collapse" id="collapseExample">
                  <div class="form-outlined">
                    <textarea class="form-control-lg" name="others" id="textAreaExample" rows="3" placeholder="Enter Your Purpose here...">
                    </textarea>
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

<?php
  require_once './view/footer.php';
?>
