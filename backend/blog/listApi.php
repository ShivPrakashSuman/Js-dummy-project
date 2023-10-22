<?php
    $response = array('status'=>false, 'message'=>'oops something went wrong ?', 'data'=>null);
        include('../../include/db.php');

        $limit = 3 ;
        $offset = 0;
	    $page = 1;

        if(isset($_GET['page']) && !empty($_GET['page'])){
            $page = $_GET['page'];
            $offset = ($page - 1) * $limit;
        }
        $sql1 = "select*from blog_data2";
        $result1 = $comm->query($sql1);
        $total = $result1->num_rows;
        $total_page = ceil($total/$limit);

        $current_page = isset($_GET['page'])?$_GET['page'] :1 ;

        $sql = "select*from blog_data2 limit $limit offset $offset";
            if(isset($_GET['search'])) {
                $search = $_GET['search'];
                $sql = "SELECT * FROM blog_data2 WHERE title LIKE '%$search%' or description LIKE '%$search%' or status LIKE '%$search%' limit $limit offset $offset";
            }
        $result = $comm->query($sql);

        if($result){
            $rowData = $result->fetch_all(MYSQLI_ASSOC);
            $response['data']['data'] = $rowData ;
            $response['data']['total'] = $result->num_rows ;
            $response['data']['total_page'] = $total_page ;
            $response['data']['current_page'] = $current_page ;
            $response['message'] = 'Fetch Data success Full';
            $response['status'] = true;
        } else {
            $response['message'] = 'Data Fetch False';
        } 
    echo json_encode($response);    
?>