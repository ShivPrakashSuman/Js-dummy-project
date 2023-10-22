
<?php
    $response = array('status'=>false, 'message'=>'oops something romg wromg', 'data'=>null);

    include('../../include/db.php');
       
        $limit = 4; 
        $offset = 1; 
        $page = 1;
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $page = $_GET['page'];
            $offset = ($page - 1) * $limit;
        }       
        $sql1 = "select*from add_user2";
        $result1 = $comm->query($sql1);
        $total = $result1->num_rows;
        $total_page = ceil($total/$limit);

        $current_page =  isset($_GET['page'])?$_GET['page'] : 1 ;

        $sql = "select*from add_user2 limit $limit offset $offset";
        if(isset($_GET['search'])){
            $search = $_GET['search'];
            $sql = "SELECT * FROM add_user2 WHERE name LIKE '%$search%' or email LIKE '%$search%' or salary LIKE '%$search%' or city LIKE '%$search%' limit $limit offset $offset";
        }
        $result = $comm->query($sql);
        if($result){
            $response['data']['data'] =  $result->fetch_all(MYSQLI_ASSOC);
            $response['data']['total'] = $result->num_rows;
            $response['data']['total_page'] = $total_page;
            $response['data']['current_page'] = $current_page;
            $response['message'] = 'Data Fetch SuccessFull';
            $response['status'] = true;
        } else {
            $response['message'] = 'Failed';
        } 
    echo json_encode($response);
?>