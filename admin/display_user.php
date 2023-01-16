<?php
//require_once "/xampp/htdocs/crud_oop/view/header.php";
require_once "/xampp/htdocs/crud_oop/class/model.php";
require_once "/xampp/htdocs/crud_oop/config/database.php";


if(isset($_POST['display'])){

    $query = $obj->getAll();
}
?>
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

<?php
    require_once "/xampp/htdocs/crud_oop/view/footer.php";
?>