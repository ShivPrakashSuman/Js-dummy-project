<?php
    $response = array('status'=>false, 'message'=>'oops someting went wrong', 'data'=>null);
        $id = $_GET['id'];
            if($id) {

            include('../../include/db.php');
            $sql = "select*from blog_data2 where id = $id";
            $result = $comm->query($sql);

            $dataRow = $result->fetch_assoc();

            $response['data'] = $dataRow;
            $response['message'] = 'Data Fetch SuccessFull';
            $response['status'] = true;
         } 
    echo json_encode($response);            
?>