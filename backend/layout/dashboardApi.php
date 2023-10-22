<?php
    session_start();
    if (!isset($_SESSION['userData1'])) {
		header('location:../../frontend/auth/register.php');
	}
    $response = array('atatua'=>false, 'message'=>'opps something went wrong', 'data'=>null);
    include('../../include/db.php');

    if(isset($_GET)) {
        $rowData = $_SESSION['userData1'];       
        $baseURL = 'http://localhost/ajax_js/JS_blog';

        //user Salary query -----
        $sql1 = "select sum(salary) as TotalSalary from add_user2";
        $result1 = $comm->query($sql1);
        $totalSalary = $result1->fetch_assoc ();

        //user count query -----
        $sql1 = "select count(id) as UserCount from add_user2";
        $result1 = $comm->query($sql1);
        $userCount = $result1->fetch_assoc ();

        //blog count query ------
        $sql2 = "select count(id) as BlogCount from blog_data2";
        $result2 = $comm->query($sql2);
        $blogCount = $result2->fetch_assoc ();

        // Mane login user count query --- 
        $sql3 = "select count(id) as ManeCount from blog_user2";
        $result3 = $comm->query($sql3);
        $maneCount = $result3->fetch_assoc ();

        //age users ----
        $sql4 = "select avg(id) as SalaryAvg from add_user2";
        $result4 = $comm->query($sql4);
        $salaryAvg = $result4->fetch_assoc ();

        $all = array('RowData'=>$rowData, 'userCount'=>$userCount, 'totalSalary'=>$totalSalary, 'blogCount'=>$blogCount, 'maneCount'=>$maneCount, 'salaryAvg'=>$salaryAvg);
        
        $response['data'] = $all;
        $response['message'] = 'Fetch deshboard Data';
        $response['status'] = true;
    } else {
        $response['message'] = 'Form Submit Failed';
    }
    echo json_encode($response);
?> 