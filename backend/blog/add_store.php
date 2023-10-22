<?php
    $response = array('status'=>false, 'message'=>'oops sometion went wrong', 'data'=>null);

    include('../../include/db.php');
    if (isset($_POST)) {
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
                $response['message'] = "Data Save Success";
                $response['status'] = true;
            } else {
                $response['message'] =  "Data Failed Success";
            }
    }  else {
        $response['message'] = "Form Failed";
    } 
    echo json_encode($response);
?>