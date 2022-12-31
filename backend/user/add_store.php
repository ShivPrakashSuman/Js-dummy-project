<?php
    include('../../include/db.php');
    if (isset($_POST['submit'])) {
        $name       = $_POST['name']; 
        $email      = $_POST['email']; 
        $salary     = $_POST['salary']; 
        $city       = $_POST['city']; 

            $sql = "select * from add_user2 where email = '$email'";
            $result = $comm->query($sql);
            if($result->num_rows > 0 ) {
                echo "in Email";
                header('location:add.php?isEmail=1'); die;
            }
        
        $sql = "insert into add_user2 (id,name,email,salary,city) values (0,'$name','$email','$salary','$city')";
        $result = $comm->query($sql);

        if ($result) {
            echo"Data Submit Success";
            header('location:index.php');
        } else {
            echo"Data Submit Failed";
        }
    } else {
        echo "Form Failed";
    }
?>