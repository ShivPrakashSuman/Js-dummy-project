<?php   
    $response = array('status'=>false, 'message'=>'oops something went wrong?', 'data'=>null);

    include('../../include/db.php');
    if(isset($_POST)) {
        $fname  = $_POST['fname'];
        $lname  = $_POST['lname'];
        $email  = $_POST['email'];
        $password  = $_POST['password'];

        if(empty($fname)) {
            echo "First Name Requierd";die;
        } elseif (empty($lname)) {
            echo "Last Name Requierd";die;
        } elseif (empty($email)) {
            echo "Email Requierd";die;
        } elseif (empty($password)) {
            echo "Password Requierd";die;
        }

        $sql = "select*from blog_user2 where email ='$email'";
		$result = $comm->query($sql);
		if ($result->num_rows > 0) {
			$response['message'] =  "Email Already Exist";
			echo json_encode($response); die; 
		}

        $sql = "select*from blog_user2 where password = '$password' ";
        $result = $comm->query($sql);
        if ($result->num_rows > 0 ) {
            $response['message'] =  "Password Already Exist";
			echo json_encode($response); die; 
        } 

        $sql = "insert into blog_user2 (id,fname,lname,email,password) values (0,'$fname','$lname','$email','$password')";
        $result = $comm->query($sql);

        if ($result) {
            $response['message'] = "Data Submit Success";
            $response['status'] = true;
        } else {
            $response['message'] =  "Data Submit Failed";
        }
    } 
    echo json_encode($response);
?>