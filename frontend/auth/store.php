<?php

    include('../../include/db.php');
    if(isset($_POST['submit'])) {
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
			echo "in Email";
			header('location:register.php?isEmail=1');die;
		}

        $sql = "select*from blog_user2 where password = '$password' ";
        $result = $comm->query($sql);
        if ($result->num_rows > 0 ) {
            echo "in Password";
            header('location:register.php?isPassword=1'); die;
        } 

        $sql = "insert into blog_user2 (id,fname,lname,email,password) values (0,'$fname','$lname','$email','$password')";
        $result = $comm->query($sql);
        //print_r($result);
        if ($result) {
            echo "Data Submit Success";
            header('location:register.php');
        } else {
            echo "Data Submit Failed";
        }

    } else {
        echo "Fomr Submit Failed";
    }
?>