<?php
    $id = $_GET['id'] ;
     if($id) {
        include('../../include/db.php');
        $sql = "delete from cat_data2 where id = '$id'";

        $result = $comm->query($sql);

        if ($result) {
            echo "Delete Success";
            header('location:index.php');
        } else {
            echo "data not Delete";
        }
        header('location:index.php');
     }
?>