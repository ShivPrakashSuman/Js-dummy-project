<?php
    $response = array('status'=>false, 'message'=>'oope something went wrong', 'data'=>null);

    $id = $_GET['id'];
    if($id){
        include('../../include/db.php');
        $sql ="delete from add_user2 where id = '$id' ";
        $result = $comm->query($sql);

        if ($result) {
            $response['message'] = "Delete Success";
            $response['status'] = true;
        } else {
            $response['message'] = "Delete Failed";
        }
    } else {
        $response['message'] = 'id not found';
    }
    echo json_encode($response);
?>