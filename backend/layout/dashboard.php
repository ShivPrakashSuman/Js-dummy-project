<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
   
    <div style="float:left;">
         <?php include('sidebar.php'); ?>
    </div>
    <div style="padding:20px; margin-left:246px; ">
        <div class=" container-fluid">
            <div class=" p-4 mb-4 shadow-lg bg-light nave">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 m-2" style="font-size: 20px;"  placeholder="Search....">
                            </div>
                            <div class="col-sm-6 p-0">
                                <a href="#"><i style="margin: 4px 0px;"class=" btn-primary icon1 fa fa-search fa-sm"></i> </a>
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-10 text-right pt-3" >
                                <div class='row'>
                                    <div class='col-sm-10 p-0'>
                                        <h1 id='fname' class="float-right" ></h1>
                                    </div>
                                    <div class='col-sm-2'>
                                        <h1 id='lname'></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div style="margin-right:10px;" >
                                    <i class="fa fa-bell m-4  text-primary"></i>
                                    <i class="fa fa-envelope m-4  text-primary"></i>        
                                </div>
                            </div>
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
                                        $<span id="TotalSalary"> </span>
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
                                        <span id="blogCount"> </span>
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
                                        <span id="maneCount"> </span>
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
                                        <span id="salaryAvg"></span> %
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
 
<script>
    function authCheck(){ 
	    let x = localStorage.getItem('auth'); 
		console.log('auth',x);
		if(x == null){
	    	console.log('redirect');
			window.location.assign('../../frontend/auth/register.php');
		}
    }
    authCheck(); 

    
    function dashboardApi(){
        $.ajax({
            type:'GET',
            url:'dashboardApi.php',
            data:'',
            success: function(data){
                let resp = JSON.parse(data);
                let comm = resp.data;
                if(resp.status){
                    document.getElementById('fname').innerHTML = comm.RowData.fname;
                    document.getElementById('lname').innerHTML = comm.RowData.lname;
                    document.getElementById('TotalSalary').innerHTML = comm.totalSalary.TotalSalary;
                    document.getElementById('blogCount').innerHTML = comm.blogCount.BlogCount;
                    document.getElementById('maneCount').innerHTML = comm.maneCount.ManeCount;
                    document.getElementById('salaryAvg').innerHTML = comm.salaryAvg.SalaryAvg;
                } else {
                    alert(resp.message);
                }
            }
        });
    }
    dashboardApi();
</script>             
</body>    
</html>