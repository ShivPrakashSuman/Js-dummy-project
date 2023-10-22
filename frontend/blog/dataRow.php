<?php
    $response = array('status'=> false, 'message'=>'oops somethimg went wrong', 'data'=>null);
        $id = $_GET['id'];
        if ($id){
         
            include('../../include/db.php');
            $sql ="select * from blog_data2 where id = $id";
            $result = $comm->query($sql);

            $response['data'] = $result->fetch_assoc();
            $response['message'] = 'Data Fetch Success';
            $response['status'] = true;
        }
    echo json_encode($response);
?>