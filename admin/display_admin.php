<?php
//require_once "/xampp/htdocs/crud_oop/view/header.php";
require_once "/xampp/htdocs/crud_oop/class/model.php";
require_once "/xampp/htdocs/crud_oop/config/database.php";


if(isset($_POST['displayadmin'])){

    $result =$obj->get_admin_team_members();
}
?>
<div class="card text-center shadow-lg border-0 rounded-4 py-5 px-5">
    <div class="card-body">
      <table class="table border-0">
        <thead class="table border-0">
          <tr class="rounded-4">
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Full Name</th>
            <th scope="col">Address</th>
            <th scope="col">Position</th>
          </tr>
        </thead>
          <tbody>
              
              <?php 
              $number = 1;
              while($data = $result->fetch(PDO::FETCH_ASSOC)){?>
                <?php $data['id_admin']?>
                  <tr>
                      <td><?php echo $number?></td>
                      <td><?php echo $data['picture']?></td>
                      <td><?php echo $data['fullname']?></td>
                      <td><?php echo $data['address_at']?></td>
                      <td class="py-3"><?php echo $data['position']?></td>
                  </tr>
                <?php $number++; }?>
          </tbody>
        </div>
</div>