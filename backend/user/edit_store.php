<?php
    include('../../include/db.php');
    if (isset($_POST['submit'])) {
        $id         = $_POST['id'];
        $name       = $_POST['name']; 
        $email      = $_POST['email']; 
        $salary     = $_POST['salary']; 
        $city       = $_POST['city']; 

        
        $sql = "update add_user2 set `name`='$name', `email`='$email', `salary`='$salary', `city`='$city' where id = '$id' ";
        $result = $comm->query($sql);

        if ($result) {
            echo"Data Update Success";
            header('location:index.php');
        } else {
            echo"Data Update Failed";
        }
    } else {
        echo "Form Failed";
    }
?>