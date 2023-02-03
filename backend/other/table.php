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
            padding: 7px;
            border-radius: 6px;
            position: absolute;
            margin: -56px 360px;
        }
        .nave {
            margin: -16px -30px 0px;
        }
        .icon2 {
            text-decoration: none;
            background-color: transparent;
        }
    </style>
<body>
<?php
    session_start();
    if (!isset($_SESSION['userData1'])) {
		header('location:../../frontend/auth/register.php');
	}
    $rowData = $_SESSION['userData1'];
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
                            <input type="text" class="form-control p-2 m-2" style="font-size: 20px;"  placeholder="Search....">
                            <a href="#" class="icon1" ><i class=" btn-primary icon1 fa fa-search fa-sm"></i> </a>
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
                    <h1 style="color:grey;"> Login List </h1>
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
                                    <h3> Employees Data </h3>
                                </div>   
                            </div>
                            <div class="col-auto mt-2 text-primary ">
                                <a href="#" style="background-color: transparent;"><i class="fa fa-cart-plus"></i> </a> 
                            </div>  
                        </div>
                        <!--  TABLE   -->
                        <div class="row p-4">
                            <table class="table table-striped table-hover">
                                <?php
                                    include('../../include/db.php');
                                    $sql = "select*from blog_user2";
                                    $result = $comm->query($sql);
                                ?>
                                <tr>
                                    <th> id </th>
                                    <th> First Name </th>
                                    <th> Last Name </th>
                                    <th> Email </th>
                                    <th> created </th>
                                </tr>
                                    <?php
                                        if($result->num_rows > 0) {
                                        while($rowData = $result->fetch_assoc () ) {
                                        $d = strtotime($rowData['created']);    
                                    ?>
                                <tr>
                                    <td> <?php echo $rowData['id']; ?> </td>
                                    <td> <?php echo $rowData['fname']; ?> </td>
                                    <td> <?php echo $rowData['lname']; ?> </td>
                                    <td> <?php echo $rowData['email']; ?> </td>
                                    <td> <?php echo date("d-M-Y  / h:i:sa", $d) ?> </td>
                                </tr>
                                    <?php
                                            }
                                        } else {
                                    ?>
                                <tr>
                                    <td colspan="5" align="center"> No Data Found </td>
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