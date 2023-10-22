<?php
    $response = array('status'=>false, 'message'=>'oops sometion went wrong', 'data'=>null);
    include('../../include/db.php');
    if (isset($_POST)) {
        $brand          = $_POST['brand'];
        $description	= $_POST['description'];

        $sql = "insert into cat_data2 (id,brand,description) values (0,'$brand','$description')";

        $result = $comm->query($sql);
        if ($result) {
            $response['message'] = "Dtat Save Success";
            $response['status'] = true;
        } else {
            $response['message'] = "Dtat Failed Success";
        }
    } else {
        $response['message'] = "Form Failed";
    } 
    echo json_encode($response);
?>