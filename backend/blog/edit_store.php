<?php
    $response = array('status'=>false, 'message'=>'oops something went wrong', 'data'=>null);
        
        include('../../include/db.php');
        if (isset($_POST)) {
            $id             = $_POST['id'];
            $title          = $_POST['title'];
            $description	= $_POST['description']; 
            $status         = $_POST['status'];

            if(!empty($_FILES['file']["name"])){
                $image     = time().$_FILES['file']["name"];
            } else {
                $sql1 = "SELECT `id`,`image` FROM `blog_data2` WHERE id = $id;";
                $result1 = $comm->query($sql1);
                $rowData1 = $result1->fetch_assoc ();
                $image  = $rowData1['image'];
            }
                $sql = "update `blog_data2` set `title`='$title', `description`='$description', `status`='$status'  where id ='$id'";

                    if (isset($_FILES) && !empty($_FILES['file']['name'])) { 
                        $image  = time().$_FILES['file']["name"];

                        $target_dir = "../../uploads/";
                        $target_file = $target_dir . basename($image);
                        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

                        $sql = "update `blog_data2` set `title`='$title', `description`='$description', `image`='$image', `status`='$status' where id ='$id'";
                    }
                $result = $comm->query($sql);
        
                if($result) {
                    $response['message'] = "Dtat Save Success";
                    $response['status'] = true;
                } else {
                    $response['message'] = "Dtat Failed Success";
                }
        }  else {
            $response['message'] = "Form Failed";
        } 
    echo json_encode($response);    
?>