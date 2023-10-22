<?php
    $response = array('status'=>false, 'message'=>'oops something went wrong', 'data'=>null);
    include('../../include/db.php');
    if (isset($_POST)) {
        $name       = $_POST['name']; 
        $email      = $_POST['email']; 
        $salary     = $_POST['salary']; 
        $city       = $_POST['city']; 

            $sql = "select * from add_user2 where email = '$email'";
            $result = $comm->query($sql);
            if($result->num_rows > 0 ) {
                $response['message'] = "Email Already Exist";
                echo json_encode($response); die;
            }
        
        $sql = "insert into add_user2 (id,name,email,salary,city) values (0,'$name','$email','$salary','$city')";
        $result = $comm->query($sql);

        if ($result) {
            $response['message'] = "Data Submit Success";
            $response['status'] = true;
        } else {
            $response['message'] = "Data Submit Failed";
        }
    } else {
        $response['message'] = "Form Failed";
    }
    echo json_encode($response);
?>