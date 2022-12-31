<?php
    include('../../include/db.php');
    if (isset($_POST['submit'])) {
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
                echo "in Email";
                header('location:login.php?isEmail=1'); die;
            } 

            $sql = "select *from blog_user2 where password = '$password'";
            $result = $comm->query($sql);
            if ($result->num_rows == 0) {
                echo "in Password";
                header('location:login.php?isPassword=1'); die;
            } 

            $sql = "select*from `blog_user2` where email = '$email' && password = '$password' ";
            $result = $comm->query($sql);
            if ($result->num_rows > 0 ) {
                echo "Login Success";
                 $userdata = $result->fetch_assoc () ;

                 session_start();
                 $_SESSION['userData1'] = $userdata;

                 header('location:../../backend/layout/dashboard.php');

            } else {
            echo "Login Failed";
            }
    } else {
        echo "Fomr Login Failed";
    }
?>