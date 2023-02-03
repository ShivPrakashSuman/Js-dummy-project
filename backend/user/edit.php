<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>                                              
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
        .mane_form {
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .box{
            width:48%;
            height:auto;
        }
        .input2  {
		    margin-bottom: 5px ;
	    }
    </style>
<body>
<?php
    session_start();
    if (!isset($_SESSION['userData1'])) {
		header('location:../layout/dashboard.php');
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
                    <h1 style="color:grey;"> User List </h1>
                </div>
                <div class="col-md-6 ">
                    <a hred="#" class="btn btn-primary" style="float:right;"> <h3 style="margin:-4px 2px;"><i class="fa fa-download"></i> Generate Report </h3></a>
                </div>
            </div>
            
            <!-- EMPLOYEES DATA -->
            <div class="mane_form">
                <div class="row mt-4 pt-4 box">
                    <div class="col-sm-12 ">
                        <div class="shadow-lg ">
                            <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                                <div class="text-center">
                                    <div class="text-primary p-3 ">
                                        <h1> Edit Page ! </h1>
                                    </div>   
                                </div>
                            </div>
                            <!-- Edit EMPLOYEES  -->
                            <?php 
                                $id = $_GET['id'];
                                    if(!$id) {
                                        header('location:index.php');
                                    }
                                        include('../../include/db.php');
                                        $sql = "select*from add_user2 where id = $id";
                                        $result = $comm->query($sql);
                                    
                                        if ($result->num_rows > 0 ) {
                                            $datarow = $result->fetch_assoc()
                            ?>
                            <div class="row p-4">
                                <form class= "form p-4" action="edit_store.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $datarow['id']; ?>" >
                                    <input type="text" class="form-control  input2 "  placeholder="Enter Name" name="name" value="<?php echo $datarow['name']; ?>" style="font-size:18px;" required > <br>
                                    
                                    <span class="text-danger"><?php echo (isset($_GET['isEmail']) && $_GET['isEmail'] == 1)?'Email Already Exist':'';?></span>
                                    <input type="email" class="form-control input2"  placeholder="Enter E-mail" name="email" value="<?php echo $datarow['email']; ?>" style="font-size:18px;" required > <br>

                                    <input type="text" class="form-control bor"  placeholder="Enter Salary" name="salary" value="<?php echo $datarow['salary']; ?>" style="font-size:18px;" required > <br> 
                        
                                    <input type="text" class="form-control bor"  placeholder="Enter City" name="city" value="<?php echo $datarow['city']; ?>" style="font-size:18px;" required > <br>
                        
                                    <div style = " margin: 35px 0px 0px ;">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block"  name= "submit" value = " SAVE " style="font-size:18px;"> 
                                    </div>
                                </form>
                            </div>
                            <?php 
                                } else {
                                    header('location:index.php');
                                }
                            ?>
                            <a href="index.php" style="text-decoration: none;"> 
                                <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                                    <div class="text-center">
                                        <div class="text-primary p-3 ">
                                            <h1>  Cancel ? </h1>
                                        </div>   
                                    </div>
                                </div> 
                            </a>   
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>          
</body>    
</html>