<?php
    $response = array('status'=> false, 'message'=>'oops somethimg went wrong', 'data'=>null);
        include('../../include/db.php');
        $sql ="select*from blog_data2";
        $result = $comm->query($sql);
        if($result) {
            $response['data'] = $result->fetch_all(MYSQLI_ASSOC);
            $response['message'] = 'Data Fetch success';
            $response['status'] = true;
        } else {
            $response['message'] = 'Data Fetch Failed';
        }
    echo json_encode($response);
    ?>