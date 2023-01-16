<?php
require_once '../config/database.php';
require_once '../class/model.php';


try {
    if (isset($_POST['deleteID'])) {
        // Retrieve the user data using the updateid parameter
        $updateid = $_POST['deleteID'];
        $result = $obj->delete_users($updateid);
        
    
        
    
        if ($result) {
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
?>