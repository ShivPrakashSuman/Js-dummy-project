<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .mane_box{
            background-color:red;
            height:100%;
        }
        .ca1 {
            border-left: 4px solid #0061f1; 
            border-radius: 8px;
            padding: 20px 15px;
            margin-right :10px;
        }
        .crad-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }
        .icon1 {
            border-radius: 6px;
            position: absolute;
            margin: -44px 360px;
            padding: 0px 3px;
        }
        .nave {
            margin: -16px -30px 0px;
        }
        .icon2 {
            text-decoration: none;
            background-color: transparent;
        }
        .reset {
            border-radius: 6px;
            position: absolute;
            margin: -44px 419px;
            padding: 10px;
            font-size: 16px;
            background: #d7e9ff;
            text-decoration: none;
        }
        .reset:hover {
            background: #d7e9ff;
            text-decoration: none;
        }
    </style>
<body>
<?php
    session_start();
    if (!isset($_SESSION['userData1'])) {
		header('location:../../frontend/auth/register.php');
	}
    $rowData = $_SESSION['userData1'];
    include('../../include/db.php');

     //user count query -----
     $sql1 = "select count(id) as UserCount from add_user2";
     $result1 = $comm->query($sql1);
     $userCount = $result1->fetch_assoc ();

     //user Sum query -----
     $sql2 = "select sum(salary) as UserSum from add_user2";
     $result2 = $comm->query($sql2);
     $userSum = $result2->fetch_assoc ();
?>    
    <div style="float:left;">
         <?php include('../layout/sidebar.php'); ?>
    </div>
    <div style="padding:20px; margin-left:246px; ">
        <div class=" container-fluid">
            <div class=" p-4 mb-4 shadow-lg bg-light nave">
                <div class="row">
                    <div class="col-sm-6">
                        <div style=" width:50%;  ">
                            <?php 
                                if(isset($_GET['search'])) { 
                            ?>
                                <form action="" method="GET">
                                    <input type="search"name="search" class="form-control p-2 m-2" style="font-size: 20px;"  placeholder="Search...." value="<?php echo $_GET['search']; ?>">
                                    <button type="submit" class="btn-primary icon1" ><i class="fa fa-search "></i> </button>
                                    <a href="http://localhost/blog/backend/user/" class="reset" >Reset</a>
                                </form>
                            <?php 
                                } else {
                            ?>
                                <form action="" method="GET">
                                    <input type="search"name="search" class="form-control p-2 m-2" style="font-size: 20px;"  placeholder="Search....">
                                    <button type="submit" class="btn-primary icon1" ><i class="fa fa-search "></i> </button>
                                    <a href="http://localhost/blog/backend/user/" class="reset" >Reset</a>
                                </form>
                            <?php } ?>    
                        </div> 
                    </div>
                    <div class="col-sm-6">
                        <div style="float:right; margin-right:20px;" >
                            <i class="fa fa-bell m-4  text-primary"></i>
                            <i class="fa fa-envelope m-4  text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
            
          <!-- USER LIST SETTINGS  -->  
            <div class="row " style="margin-top:25px;">
                <div class="col-md-6">
                    <h1 style="color:grey;"> User List </h1>
                </div>
                <div class="col-md-6 ">
                    <a hred="#" class="btn btn-primary" style="float:right;"> <h3 style="margin:-4px 2px;"><i class="fa fa-download"></i> Generate Report </h3></a>
                </div>
            </div>
            
            <!-- EMPLOYEES DATA -->
            <div class="row mt-4 pt-4">
                <div class="col-sm-8 ">
                    <div class="shadow-lg ">
                        <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                            <div class="col">
                                <div class="text-primary p-3 ">
                                    <h3> Employees Data </h3>
                                </div>   
                            </div>
                            <div class="col-auto mt-2 text-primary ">
                                <a href="add.php" style="background-color: transparent;"><i class="fa fa-cart-plus"></i> </a> 
                            </div>  
                        </div>
                        <!--  TABLE   -->
                        <div class="row p-4">
                            <table class="table table-striped table-hover">
                                <?php
                                    include('../../include/db.php');
                                    $sql = "select*from add_user2";
                                        if(isset($_GET['search'])){
                                            $search = $_GET['search'];
                                            $sql = "SELECT * FROM add_user2 WHERE name LIKE '%$search%' or email LIKE '%$search%' or salary LIKE '%$search%' or city LIKE '%$search%' ";
                                        }
                                    $result = $comm->query($sql);
                                ?>
                                <tr>
                                    <th> id </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Salary </th>
                                    <th> City </th>
                                    <th> created </th>
                                    <th> Action </th>
                                </tr>
                                    <?php
                                        if($result->num_rows > 0) {
                                        while($rowData = $result->fetch_assoc () ) {
                                        $d = strtotime($rowData['created']);    
                                    ?>
                                <tr>
                                    <td> <?php echo $rowData['id']; ?> </td>
                                    <td> <?php echo $rowData['name']; ?> </td>
                                    <td> <?php echo $rowData['email']; ?> </td>
                                    <td> <?php echo $rowData['salary']; ?> </td>
                                    <td> <?php echo $rowData['city']; ?> </td>
                                    <td> <?php echo date("d-M-Y  / h:i:sa", $d) ?> </td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $rowData['id']; ?>" class="icon2" style=" background-color: transparent;"><i class="fa fa-pencil"></i> </a>
				                        <a href="delete.php?id=<?php echo $rowData['id']; ?>" class="icon2 " style="color:red; background-color: transparent;"> <i class="fa fa-trash"></i> </a>   
                                    </td>
                                </tr>
                                    <?php
                                            }
                                        } else {
                                    ?>
                                <tr>
                                    <td colspan="7" align="center"> No Data Found </td>
                                </tr>
                                  <?php } ?>
                            </table>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="shadow-lg ">
                        <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                            <div class="col">
                                <div class="text-primary p-3  ">
                                    <h3> All Count User </h3>
                                </div>   
                            </div>
                            <div class="col-auto mt-2 text-primary ">
                                <i class="fa fa-user-plus"></i>
                            </div>  
                        </div>
                        <div class="row p-4 m-4">
                            <div class=" col-xl-12 mr-4 mb-4">
                                <div class=" ca1 shadow-lg  ">
                                    <div class="card-body  ">
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-primary text-uppercase ">
                                                    <h3> User ( Tptal Salary ) </h3>
                                                </div>
                                                <div class="h3">
                                                    $<?php echo $userSum['UserSum']; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto text-primary" style="font-size:25px;" >
                                                <i style="font-size:30px;"class="fa fa-user"></i><?php echo $userCount['UserCount']; ?> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>          
</body>    
</html>