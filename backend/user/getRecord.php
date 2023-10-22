<?php 
    $response = array('status'=>false, 'message'=>'oops someting went wrong', 'data'=>null);
    $id = $_GET['id'];
        if($id) {
            
            include('../../include/db.php');
            $sql = "select*from add_user2 where id = $id";
            $result = $comm->query($sql);
        
            $datarow = $result->fetch_assoc();

            $response['data'] = $datarow;
            $response['message'] = 'Data Fetch SuccessFull';
            $response['status'] = true;
        } 
       
        echo json_encode($response);
?>