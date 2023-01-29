<?php

require_once '/xampp/htdocs/library-attendance/class/adminDatabase.php';
require_once '/xampp/htdocs/library-attendance/class/adminModel.php';


if(isset($_POST['export_data'])){
    $r = $admin->getAdminAttendees();
    $i = 1;

    if($numrow = $r->rowCount() > 0){
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=admindata.csv');
        $output = fopen('php://output', 'w');
        fputcsv($output, array('#', 'Full Name','Position','Time In'));

        while($data = $r->fetch()){
            $data = array($i,$data['fullname'],$data['position'],$data['admin_time_in']);
            fputcsv($output, $data);
            $i++;
        }
        fclose($output);

    }

}
