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
        .overflow {
            overflow: hidden;
            height:50px;
            line-height:25px;
        } 

        .overflow h1:first-of-type  {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1; 
            -webkit-box-orient: vertical;
        }
        .overflow p:first-of-type  {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; 
            -webkit-box-orient: vertical;
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
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION['userData1'])) {
		header('location:../../frontend/auth/register.php');
	}
    $rowData = $_SESSION['userData1'];
    include('../../include/db.php');

    //blog count query ------
    $sql2 = "select count(id) as BlogCount from blog_data2";
    $result2 = $comm->query($sql2);
    $blogCount = $result2->fetch_assoc ();
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
                                    <a href="http://localhost/blog/backend/blog/" class="reset" >Reset</a>
                                </form>
                            <?php 
                                } else {
                            ?>
                                <form action="" method="GET">
                                    <input type="search"name="search" class="form-control p-2 m-2" style="font-size: 20px;"  placeholder="Search....">
                                    <button type="submit" class="btn-primary icon1" ><i class="fa fa-search "></i> </button>
                                    <a href="http://localhost/blog/backend/blog/index.php" class="reset" >Reset</a>
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
                    <h1 style="color:grey;"> Blog List </h1>
                </div>
                <div class="col-md-6 ">
                    <a hred="#" class="btn btn-primary" style="float:right;"> <h3 style="margin:-4px 2px;"><i class="fa fa-download"></i> Generate Report </h3></a>
                </div>
            </div>
            
            <!-- EMPLOYEES DATA -->
            <div class="row mt-4 pt-4">
                <div class="col-sm-12 ">
                    <div class="shadow-lg ">
                        <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                            <div class="col">
                                <div class="text-primary p-3 ">
                                    <h3> Blog Data </h3>
                                </div>   
                            </div>
                            <div class="col-auto mt-2 text-primary ">
                                <a href="add.php" style="background-color: transparent;"><i class="fa fa-cart-plus"></i> </a>
                            </div>  
                        </div>
                        <!--  TABLE   -->
                        <div class="row p-4">
                            <table class="table table-striped table-hover table ">
                                <?php
                                    include('../../include/db.php');
                                    $sql = "select*from blog_data2";
                                    if(isset($_GET['search'])) {
                                        $search = $_GET['search'];
                                        $sql = "SELECT * FROM blog_data2 WHERE title LIKE '%$search%' or description LIKE '%$search%' or status LIKE '%$search%' ";
                                    }
                                    $result = $comm->query($sql);
                                ?>
                                <tr>
                                    <th> id </th>
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th> Image </th>
                                    <th> Status </th>
                                    <th> Created </th>
                                    <th> Updated </th>
                                </tr>
                                    <?php
                                        if($result->num_rows > 0) {
                                        while($rowData = $result->fetch_assoc () ) {
                                        $d = strtotime($rowData['created']);    
                                    ?>
                                <tr >
                                    <td> <?php echo $rowData['id']; ?> </td>
                                    <td> <div class="overflow"><p><?php echo $rowData['title']; ?></p></div></td>
                                    <td> <div class="overflow"><?php echo $rowData['description']; ?></div></td>
                                    <td> <img src="../../uploads/<?php echo $rowData['image']; ?>" width="80px" height="80px"> </td>
                                    <td> <?php echo $rowData['status']; ?> </td>
                                    <td> <?php echo date("d-M-Y  / h:i:sa", $d) ?> </td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $rowData['id']; ?>" class="icon2" style="color:blue; background-color: transparent;"><i class="fa fa-pencil"></i> </a>
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
            </div>
        </div>   
    </div>          
</body>    
</html>