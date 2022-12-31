<?php
    include('../../include/db.php');
    if (isset($_POST['submit'])) {
        $brand          = $_POST['brand'];
        $description	= $_POST['description'];

        $sql = "insert into cat_data2 (id,brand,description) values (0,'$brand','$description')";

        $result = $comm->query($sql);
        if ($result) {
            echo "Dtat Save Success";
            header('location:index.php');
           } else {
               echo "Dtat Failed Success";
           }
        } else {
            echo "From submit ";
        }
?>