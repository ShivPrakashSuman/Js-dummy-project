<?php
$response = array('status'=> false, 'message'=>'oops something went wromg?', 'data'=>null);
    $id = $_GET['id'] ;
     if($id) {
        include('../../include/db.php');
        $sql = "delete from cat_data2 where id = '$id'";

        $result = $comm->query($sql);

        if ($result) {
            $response['message'] = "Delete Success";
            $response['status'] = true; 
        } else {
            $response['message'] = "data not Delete";
        }
    }
echo json_encode($response);     
?>