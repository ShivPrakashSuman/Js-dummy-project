<?php
    include('../../include/db.php');
    if (isset($_POST['submit'])) {
        $id             = $_POST['id'];
        $brand          = $_POST['brand'];
        $description    = $_POST['description'];

        $sql = "update `cat_data2` set `brand` = '$brand', `description`='$description' where id = '$id'";

        $result = $comm->query($sql);

        if($result) {
            echo "Success";
            header('location:index.php');
        } else {
            echo "Failed";
        }
    } else {
        echo "From Data Update Failed ";
    }
?>