<?php
    include('../../include/db.php');
    if (isset($_POST['submit'])) {
        $id             = $_POST['id'];
        $title          = $_POST['title'];
        $description	= $_POST['description'];
        $image          = time().$_FILES['file']["name"];
        $status         = $_POST['status'];

            $sql = "update `blog_data2` set `title`='$title', `description`='$description', `status`='$status'  where id ='$id'";

                if (isset($_FILES)) { 
                    $image  = time().$_FILES['file']["name"];

                    $target_dir = "../../uploads/";
                    $target_file = $target_dir . basename($image);
                    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

                    $sql = "update `blog_data2` set `title`='$title', `description`='$description', `image`='$image', `status`='$status' where id ='$id'";
                }
            $result = $comm->query($sql);
    
            if($result) {
                echo "Dtat Save Success";
             header('location:index.php');
            } else {
                echo "Dtat Failed Success";
            }
    }  else {
        echo "Form Failed";
    } 
?>