<?php
   $title = "Admin";
   require_once "../view/header.php";
   require_once '/xampp/htdocs/library-attendance/view/validation.php';
?>
<nav class="navbar" style="background-color: skyblue; height:300px">
        
        <div class="navbar-header ">
            <button class="navbar-toggler" type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="position:relative; bottom:120px;left:20px">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="display-5 " style="font-weight: bolder;color:white;position:relative;bottom:105px;margin-left:30px;">ADMIN</span>
        </div> 
        
        <figure class="text-center"style="position:relative; right:20px">
            <blockquote class="blockquote"></blockquote>
           
                <p class="text-light" style="font-size:30px">"All hard work brings a profit, but mere talk leads only to poverty."</p>
            </blockquote>
            <figcaption class="blockquote-footer">
            Proverbs 14:23
            </figcaption>
        </figure>   
</nav>    
    <div class="container shadow-lg" style="width: 500px;background-color:azure;position:relative; bottom:100px;border-radius:30px;padding:30px;">
      <h1 class="font-monospace text-center">Login Admin</h1>
      <?php $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if (strpos($url,"error=INVALID_YOUMUSTFILLUPALL")==true){
            echo "<div class='alert alert-danger tex-center' role='alert'>
            <strong>Please fill in all fields!.</strong>
            </div>";
      }elseif (strpos($url,"error=USER_NOT_FOUND")==true){
            echo "<div class='alert alert-danger tex-center' role='alert'>
            <strong>User Not Found!.</strong>
            </div>";
      }


       ?>
            <form method="POST" action="../process/login_process.php">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input name="user" type="name" id="form2Example1" class="form-control" />
                    <label class="form-label" for="form2Example1">User</label>
                </div>
    
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input name="pass" type="password" id="form2Example2" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->

                <!-- Submit button -->
                  <button name="enter" type="submit" class="btn btn-primary btn-block mb-4" style="margin-left: 180px;">Log in</button>
            </form>
          <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
                </button>
            </div>  
        
                
    </div>
  </body>
</html>
