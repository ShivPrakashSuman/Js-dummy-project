<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>   
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
            height:55px;
            line-height:22px;
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
            padding: 5px;
            font-size: 20px;
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
    <div style="float:left;">
         <?php include('../layout/sidebar.php'); ?>
    </div>
    <div style="padding:20px; margin-left:246px; ">
        <div class=" container-fluid">
            <div class=" p-4 mb-4 shadow-lg bg-light nave">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">   
                            <form action="" method="get">
                                <div class="col-sm-6" style="padding-right: 8px;">  
                                    <input type="search"name="search" class="form-control p-2 m-2" style="font-size: 20px;" id="val_search" placeholder="Search...." >
                                </div>
                                <div class="col-sm-6 p-0">
                                    <button type="button" class="btn-primary" onclick="searchData();" style="border-radius: 5px; margin: 4px 0px;"><i style="margin: 4px 0px;" class="fa fa-search "></i> </button>
                                    <a href="http://localhost/ajax_js/JS_blog/backend/category/" class="reset" >Reset</a>
                                </div>
                            </form>
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
            
          <!-- USER LIST SETTINGS  -->  
            <div class="row " style="margin-top:25px;">
                <div class="col-md-6">
                    <h1 style="color:grey;"> Category List </h1>
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
                                    <h3> Category Data </h3>
                                </div>   
                            </div>
                            <div class="col-auto mt-2 text-primary ">
                                <a href="add.php" style="background-color: transparent;"><i class="fa fa-cart-plus"></i> </a>
                            </div>  
                        </div>
                        <!--  TABLE   -->
                        <div class="row p-4">
                            <table class="table table-striped table-hover table ">
                                <thead>
                                    <tr>
                                        <th> id </th>
                                        <th> Brand </th>
                                        <th> Description </th>
                                        <th> Created </th>
                                        <th> Updated </th>
                                    </tr>
                                </thead>
                                <tbody id="listData">

                                </tbody>
                            </table>
                        </div> 
                      <!-- Pagination  --->     
                        <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom: 1px solid #297dc4;">
                            <div style="align-items: center; display: flex; justify-content: center;">
                                <ul class="pagination" id="pagination" style="font-size: 13px; margin: 10px;">

                                </ul>
                            </div>
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
            url:'../layout/dashboardApi.php',
            data:'',
            success: function(data){
                let resp = JSON.parse(data);
                let comm = resp.data;
                if(resp.status){
                    document.getElementById('fname').innerHTML = comm.RowData.fname;
                    document.getElementById('lname').innerHTML = comm.RowData.lname;
                } else {
                    alert(resp.message);
                }
            }
        });
    }
    dashboardApi(); 

    function deleteRow(id){
        $.ajax({
            type:'GET',
            url:'delete.php?id='+id,
            data:'',
            success: function(data){
                let resp = JSON.parse(data);
                if(resp.status){
                    //alert(resp.message);
                    window.location.reload();
                } else {
                    alert(resp.message);
                }
            }
        });
    }

    function getList(page=1, search=''){
        $('#listData').empty();
        $('#pagination').empty();
        $.ajax({
            type:'GET',
            url:'listApi.php?search='+search+'&page='+page,
            data:'',
            success: function(data){
                let resp = JSON.parse(data);
                let total_page = resp.data.total_page;
                let current_page = resp.data.current_page;
                if(resp.status){
                    let html = '';
                    let pagination = '';

                    if(resp.data.data.length > 0){
                        resp.data.data.forEach((val, key)=>{
                            html += '<tr >'+
                                        '<td>'+ val.id +'</td>'+
                                        '<td> <div class="overflow"><p>'+ val.brand +'</p></div></td>'+
                                        '<td> <div class="overflow">'+ val.description +'</div></td>'+
                                        '<td> '+ val.created +'</td>'+
                                        '<td>'+
                                            '<a href="edit.php?id='+ val.id +'" class="icon2" style="color:blue; background-color: transparent;"><i class="fa fa-pencil"></i> </a>'+
                                            '<a href="javascript:void(0);" onclick="deleteRow('+ val.id +');" class="icon2 " style="color:red; background-color: transparent;"> <i class="fa fa-trash"></i> </a>'+  
                                        '</td>'+
                                    '</tr>';
                        });
                      // pagination start -------
                            pagination += '<li><a href="javascript:void(0);" onclick="getList('+ 1 +')">frist</a></li>';
                                for(let i = 0; i < total_page; i++){
                                    if((i+1) == current_page){
                                        pagination += '<li class="active"><a href="javascript:void(0);" onclick="getList('+( i+1 )+');">'+ (i+1) +'</a></li>';
                                    } else {
                                        pagination += '<li><a href="javascript:void(0);" onclick="getList('+( i+1 )+');">'+ (i+1) +'</a></li>';
                                    }
                                }
                            pagination += '<li><a href="javascript:void(0);" onclick="getList('+ total_page +')">last</a></li>';    
                      // pagination End ------------  
                    }
                    $('#pagination').append(pagination);
                    $('#listData').append(html);
                } else {
                    alert(resp.message);
                }
            }
        });
    }
    getList();

    function searchData(){
        let search = document.getElementById('val_search').value;
        getList(1, search);
    }
</script>             
</body>    
</html>