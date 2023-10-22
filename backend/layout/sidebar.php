<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .mane{
            background-color: #4582ff; 
            width: 250px;
            height:100%;
            color: white;
            padding: 20px;
        }
        .bar{
            margin-left: 10px;
        }
        .box {
            color: white;
            text-decoration:none;
            font-size: 20px;
        }
        h5 {
            color: #c9c9c9;
        }
        ul {
            list-style-type: none;
        }
        .fa {
            font-size:22px;
            margin: 10px;
        }
        .drop {
            float: right;
        }
        a:hover{
            background-color:#ffff;
            text-decoration:none;
        }
        .list2:hover {
            background: #ebe9e9;
        }
    </style>
    </head>
    <body>
        <?php
            $baseURL = 'http://localhost/Javascript_Work/Js-dummy-project';
        ?>
        <div class="mane ">
            <div class=" text-center">
                <i class="fa fa-apple" style="font-size: 58px;"></i>
            </div>
            <hr>
            <!-- DASHBOARD -->
            <div class=" row bar mt-4">
                <a href="<?php echo $baseURL; ?>/backend/layout/dashboard.php" class="box " style="text-decoration: none;" > 
                    <i class="fa fa-book"></i>
                    <span>Dashboard </span> 
                    <i class="drop fa fa-angle-right"></i>
                </a>
            </div>
            <hr>
            <div class="pb-4 mb-4 ">
                <h5>INTERFACE</h5>
                <ul>
                <!-- USER SETTINGS -->
                    <li class="row">
                        <a class="box mt-4 mb-4 " href="#" data-bs-toggle="collapse" data-bs-target="#demo" style="text-decoration: none;">
                            <i class="fa fa-user"></i>
                            <span> User </span>
                            <span class="drop p-4 mt-1 dropdown-toggle"></spam>
                        </a>
                    </li>
                    <li id="demo" class="collapse ">
                        <ul class="list-group " style="border-radius: 7px;" >
                            <li class="list-group-item list2 " style="padding-top: 10px;">
                                <a href="../user/add.php" style="text-decoration: none;"><h3>User Add <i class="drop fa fa-angle-right"></i> </h3>  </a> 
                            </li>
                            <li class="list-group-item  list2 "> 
                                <a href="../user/index.php"  style="text-decoration: none;"><h3>User List <i class="drop fa fa-angle-right"></i> </h3></a> 
                            </li> 
                        </ul>  
                    </li>
                <!-- BLOGS SETTINGS -->
                    <li class="row " > 
                        <a href="#" class="box  mt-2 mb-4" style="text-decoration: none;" data-bs-toggle="collapse" data-bs-target="#demo1" >
                            <i class="fa fa-stack-overflow"></i>
                            <span> Blogs  </span>
                            <span class="drop p-4 mt-1 dropdown-toggle"></spam>
                        </a> 
                    </li>
                    <li id="demo1" class="collapse ">
                        <ul class="list-group " style="border-radius: 7px;" >
                            <li class="list-group-item list2 " style="padding-top: 10px;">
                                <a href="../blog/add.php" style="text-decoration: none;"><h3>Blog Add <i class="drop fa fa-angle-right"></i> </h3>  </a> 
                            </li>
                            <li class="list-group-item  list2 "> 
                                <a href="../blog/index.php"  style="text-decoration: none;"><h3>Blog List <i class="drop fa fa-angle-right"></i> </h3></a> 
                            </li> 
                        </ul>  
                    </li>
                    <!-- CATEGORY SETTINGS -->
                    <li class="row">
                        <a class="box mt-4 mb-4 " href="#" data-bs-toggle="collapse" data-bs-target="#demo2" style="text-decoration: none;">
                            <i class="fa fa-user"></i>
                            <span> Category </span>
                            <span class="drop p-4 mt-1 dropdown-toggle"></spam>
                        </a>
                    </li>
                    <li id="demo2" class="collapse ">
                        <ul class="list-group " style="border-radius: 7px;" >
                            <li class="list-group-item list2 " style="padding-top: 10px;">
                                <a href="../category/add.php" style="text-decoration: none;"><h3>Category Add <i class="drop fa fa-angle-right"></i> </h3>  </a> 
                            </li>
                            <li class="list-group-item  list2 "> 
                                <a href="../category/index.php"  style="text-decoration: none;"><h3>Category List <i class="drop fa fa-angle-right"></i> </h3></a> 
                            </li> 
                        </ul>  
                    </li>
                </ul>
            </div>
            <hr>
             <!-- ADDONS SETTINGS -->
            <div class="pb-4  ">
                <h5>ADDONS</h5>
                <ul>
                    <li class="row" > 
                        <a href="../other/charts.php" class="box  mt-4 mb-4" style="text-decoration: none;" >
                            <i class="fa  fa-slack"></i>
                            <span> Charts  </span>
                            <i class=" drop fa fa-angle-right"></i>
                        </a> 
                    </li>
                    <li class="row" > 
                        <a href="../other/table.php" class="box active" style="text-decoration: none;" >
                            <i class="fa  fa-table"></i>
                            <span> Tables </span> 
                            <i class=" drop fa fa-angle-right"></i>
                        </a> 
                    </li>
                </ul>
            </div>
            <hr>
            <!-- LOG OUT SETTINGS -->
            <div class=" row bar mt-4">
                <a href="<?php echo $baseURL ; ?>/frontend/auth/logout.php" class="box "> 
                    <i class="fa fa-lock"></i>
                    <span><b> Log Out</b> </span> 
                    <i class="drop fa fa-angle-right"></i>
                </a>
            </div>
        </div> 
    </body>     
</html>