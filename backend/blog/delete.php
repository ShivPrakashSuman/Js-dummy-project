<?php
    $response = array('status'=>false, 'message'=>'oops something went wrong', 'data'=>null);

    $id = $_GET['id'];
    if($id){
        include('../../include/db.php');
        $sql ="delete from blog_data2 where id = '$id' ";
        $result = $comm->query($sql);

        if ($result) {
            $response['message'] = "Delete Success";
            $response['status'] = true;
        } else {
            $response['message'] = "Delete Failed";
        }
    } else {
        $response['message'] = 'id Not Found';
    } 
    echo json_encode($response);
?>