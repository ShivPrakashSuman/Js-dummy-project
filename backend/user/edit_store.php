<?php
    $response = array('status'=>false, 'message'=>'oops something rong wromg', 'data'=>null);
    include('../../include/db.php');
    if (isset($_POST)) {
        $id         = $_POST['id'];
        $name       = $_POST['name']; 
        $email      = $_POST['email']; 
        $salary     = $_POST['salary']; 
        $city       = $_POST['city']; 
        
        $sql = "update add_user2 set `name`='$name', `email`='$email', `salary`='$salary', `city`='$city' where id = '$id' ";
        $result = $comm->query($sql);

        if ($result) {
            $response['message'] = "Data Update Success";
            $response['status'] = true; 
        } else {
            $response['message'] = "Data Update Failed";
        }
    } else {
        $response['message'] = "Form Failed";
    }
    echo json_encode($response);
?>