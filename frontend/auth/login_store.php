<?php
    
    include('../../include/db.php');
    $response = array('status'=>false, 'message'=>'oops something went wrong?', 'data'=>null);

    if (isset($_POST)) {
        $email      = $_POST['email'];
        $password   = $_POST['password'];

        if (empty($email)) {
            echo " Email Filed Requierd"; die ; 
         } elseif (empty($password)) {
            echo "Password Fialed Requierd" ;die;
         } 

            $sql = "select *from blog_user2 where email = '$email'";
            $result = $comm->query($sql);
            if ($result->num_rows == 0) {
                $response['message'] = "Email Not found";
                echo json_encode($response); die;
            } 

            $sql = "select *from blog_user2 where password = '$password'";
            $result = $comm->query($sql);
            if ($result->num_rows == 0) {
                $response['message'] = "Password Not found";
                echo json_encode($response); die;
            } 

            $sql = "select*from `blog_user2` where email = '$email' && password = '$password' ";
            $result = $comm->query($sql);
            if ($result->num_rows > 0 ) {
              
                 $userdata = $result->fetch_assoc() ;
                 
                 session_start();
                    $_SESSION['userData1'] = $userdata;
                    $response['message'] =  "Login SuccesFull";
                    $response['status'] = true;
                    $response['data']['session']= true;
                    echo json_encode($response); 
                    die;

            } else {
                $response['message'] = "Login Failed";
            }
    } 
    echo json_encode($response);
?>
