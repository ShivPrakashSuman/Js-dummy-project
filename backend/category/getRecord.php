<?php
    $response = array('status'=>false, 'message'=>'oops someting went wrong', 'data'=>null);
      $id = $_GET['id'];
        if($id) {
            include('../../include/db.php');
            $sql = "select*from cat_data2 where id = $id";
            $result = $comm->query($sql);
        
            $datarow = $result->fetch_assoc();
            $response['data'] = $datarow;
            $response['message'] = 'Data Fetch Success';
            $response['status'] = true;
        }
    echo json_encode($response);        
?>