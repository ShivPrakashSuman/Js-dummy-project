<?php
    include('../../include/db.php');
    if (isset($_POST['submit'])) {
        $title          = $_POST['title'];
        $description	= $_POST['description'];
        $image          = time().$_FILES['file']["name"];
        $status         = $_POST['status'];

            $target_dir = "../../uploads/";
            $target_file = $target_dir . basename($image);
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

            $sql = "insert into blog_data2 (id,title,description,image,status) values (0,'$title','$description','$image','$status')";
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