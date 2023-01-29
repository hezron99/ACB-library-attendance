<?php

require_once '/xampp/htdocs/library-attendance/class/adminDatabase.php';
require_once '/xampp/htdocs/library-attendance/class/UserModel.php';


if(isset($_POST['export_studentdata'])) {
    $r = $object->getAllLoginDetails();
    $i = 1;
    if($numrow = $r->rowCount() > 0){
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=studentdata.csv');
        $output = fopen('php://output', 'w');
        fputcsv($output, array('#', 'USN', 'Last Name', 'First Name', 'Purpose', 'Other Purpose', 'Time In'));

        while ($data = $r->fetch()) {
            $data = array($i,$data['USN'],$data['lastname'],$data['firstname'],$data['option_name'],$data['others'],$data['at_time']);
            fputcsv($output, $data);
            $i++;
        }
        fclose($output);
    }
}

    

?>


 




   

