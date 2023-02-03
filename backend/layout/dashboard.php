<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
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
    $sql1 = "select sum(salary) as UserSum from add_user2";
    $result1 = $comm->query($sql1);
    $userSum = $result1->fetch_assoc ();

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
?>    
    <div style="float:left;">
         <?php include('sidebar.php'); ?>
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
            
          <!-- mane chart -->  
            <div class="row " style="margin-top:25px;">
                <div class="col-md-6">
                    <h1 style="color:grey;"> Dashboard </h1>
                </div>
                <div class="col-md-6 ">
                    <a hred="#" class="btn btn-primary" style="float:right;"> <h3 style="margin:-4px 2px;"><i class="fa fa-download"></i> Generate Report </h3></a>
                </div>
            </div>
            <div class="row mt-4 mb-4 pb-4">
               <!--- USER DATA --> 
                <div class=" col-xl-3 mr-4 mb-4">
                    <div class=" ca1 shadow-lg  ">
                        <div class="card-body  ">
                            <div class="row">
                                <div class="col">
                                    <div class="text-primary text-uppercase ">
                                        <h3> User (Total Salary) </h3>
                                    </div>
                                    <div class="h3">
                                        $<?php echo $userSum['UserSum']; ?>
                                    </div>
                                </div>
                                <div class="col-auto text-primary" >
                                <i style="font-size:30px;"class="fa fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
              <!-- BLOG DATA -->
                <div class=" col-xl-3  mb-4">
                    <div class=" ca1 shadow-lg border-success " >
                        <div class="card-body  ">
                            <div class="row">
                                <div class="col">
                                    <div class="text-success text-uppercase ">
                                        <h3> blogs (count) </h3>
                                    </div>
                                    <div class="h3">
                                        <?php echo $blogCount['BlogCount']; ?>
                                    </div>
                                </div>
                                <div class="col-auto" >
                                <i class="fa fa-stack-overflow text-success" style="font-size:31px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- ALL TABLE -->
                <div class=" col-xl-3  mb-4">
                    <div class=" ca1 shadow-lg border-info ">
                        <div class="card-body  ">
                            <div class="row">
                                <div class="col">
                                    <div class="text-info text-uppercase ">
                                        <h3> Table (id_count) </h3>
                                    </div>
                                    <div class="h3">
                                        <?php echo $maneCount['ManeCount']; ?>
                                    </div>
                                </div>
                                <div class="col-auto" >
                                <i class="fa  fa-table text-info" style="font-size:31px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- OTHER -->
                <div class=" col-xl-3  mb-4">
                    <div class=" ca1 shadow-lg border-warning  ">
                        <div class="card-body  ">
                            <div class="row">
                                <div class="col">
                                    <div class="text-warning  text-uppercase ">
                                        <h3> charts (Salary Avg) </h3>
                                    </div>
                                    <div class="h3">
                                        <?php echo $salaryAvg['SalaryAvg']; ?> %
                                    </div>
                                </div>
                                <div class="col-auto" >
                                <i class="fa  fa-slack text-warning  " style="font-size:31px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- CRAD GARF -->
            <div class="row mt-4 pt-4">
                <div class="col-sm-8 ">
                    <div class="shadow-lg ">
                        <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                            <div class="col">
                                <div class="text-primary p-3 ">
                                    <h3> Earnings Overview </h3>
                                </div>   
                            </div>
                            <div class="col-auto mt-2 text-primary ">
                            <i class="fa fa-exclamation"></i>
                            </div>  
                        </div>
                        <!--  chart   -->
                        <div class="row p-4">
                            <canvas id="myChart" style="width:100%; height:400px;"></canvas>
                             <script>
                                var xValues = [50,60,70,80,90,100,110,120,130,140,150];
                                var yValues = [7,8,8,9,9,9,10,11,14,14,15];

                                new Chart("myChart", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    fill: false,
                                    lineTension: 0,
                                    backgroundColor: "rgba(0,0,255,1.0)",
                                    borderColor: "rgba(0,0,255,0.1)",
                                    data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    scales: {
                                    yAxes: [{ticks: {min: 6, max:16}}],
                                    }
                                }
                                });
                             </script>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="shadow-lg ">
                        <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                            <div class="col">
                                <div class="text-primary p-3  ">
                                    <h3> Revenue Sources </h3>
                                </div>   
                            </div>
                            <div class="col-auto mt-2 text-primary ">
                            <i class="fa fa-exclamation"></i>
                            </div>  
                        </div> 
                        <div class="row"> 
                            <canvas id="myChart" style="width:530px; height:430px;"></canvas>
                                <script>
                               /* var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                                var yValues = [55, 49, 44, 24, 15];
                                var barColors = ["red", "green","blue","orange","brown"];

                                new Chart("myChart", {
                                type: "bar",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    title: {
                                    display: true,
                                    text: "World Wine Production 2018"
                                    }
                                }
                                }); */
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>          
</body>    
</html>