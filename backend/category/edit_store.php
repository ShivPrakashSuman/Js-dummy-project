<?php
    $response = array('status'=>false, 'message'=>'oops something went wrong', 'data'=>null);

    include('../../include/db.php');
    if (isset($_POST)) {
        $id             = $_POST['id'];
        $brand          = $_POST['brand'];
        $description    = $_POST['description'];

        $sql = "update `cat_data2` set `brand` = '$brand', `description`='$description' where id = '$id'";

        $result = $comm->query($sql);

        if($result) {
            $response['message'] =  "Update SuccessFull";
            $response['status'] =  true;
        } else {
            $response['message'] =  "Failed";
        }
    } else {
        $response['message'] =  "From Data Update Failed ";
    }
    echo json_encode($response);  
?>