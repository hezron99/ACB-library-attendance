<?php
require_once '../config/database.php';
require_once '../class/model.php';

// SEE the user details for more information


// Connect to the database and perform any necessary setup
try {
if (isset($_POST['updateid'])) {
    // Retrieve the user data using the updateid parameter
    $updateid = $_POST['updateid'];

    $result1 = $obj->getDetails($updateid);
    

    

    if ($result1) {
        // Return the user data as a JSON string
        $response = array();
        $response['status'] = 200;
        $response['message'] = "success";
        $response['data'] = $result;
        echo json_encode($response);
    } else {
        // Return an error message as a JSON string
        $response = array();
        $response['status'] = 400;
        $response['message'] = "invalid update";
        echo json_encode($response);
    }
} elseif (isset($_POST['hiddendata'])) {
    // Update the user data using the hiddendata and other POST parameters
    $hiddendata = $_POST['hiddendata'];
    $usn = $_POST['updateUSN'];
    $lname = $_POST['updateLname'];
    $fname = $_POST['updateFname'];
    $course = $_POST['updateoption1'];
    $year = $_POST['updateoption2'];
    $status = $_POST['updateoption3'];
    //$time = date('Y-m-d H:i:s');
    $result = $obj->update_Users($hiddendata, $usn, $lname, $fname, $course, $year, $status);

    if ($result) {
        // Return a success message as a JSON string
        $response = array();
        $response['status'] = 200;
        $response['message'] = "success";
        echo json_encode($response);
    } else {
        // Return an error message as a JSON string
        $response = array();
        $response['status'] = 400;
        $response['message'] = "update failed";
        echo json_encode($response);
    }
} else {
    // Return an error message if no valid POST parameters are present
    $response = array();
    $response['status'] = 400;
    $response['message'] = "invalid request";
    echo json_encode($response);
}
}catch(Exception $e) {
    $response = array();
    $response['status'] = 500;
    $response['message'] = "server error";
    echo json_encode($response);

}




// update USERS ONLY


?>