<?php
    $response = array('status'=>false, 'message'=>'oops something went wrong ?', 'data'=>null);
    session_start();
    if (isset($_SESSION['userData1'])) {
		$response['message'] = 'Auth Success';
        $response['status'] = true;
        $response['data']['session'] = true;
	} else {
        $response['message'] = 'auth Failed';
    }
    echo json_encode($response); 
?> 