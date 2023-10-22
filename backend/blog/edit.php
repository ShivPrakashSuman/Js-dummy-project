<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>   
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
        .mane_form {
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .box{
            width:100%;
            height:auto;
        }
    </style>
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
            <div class="mane_form">
                <div class="row mt-4  box">
                    <div class="col-sm-12 ">
                        <div class="shadow-lg ">
                            <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                                <div class="text-center">
                                    <div class="text-primary p-3 ">
                                        <h1> Edit Page  ! </h1>
                                    </div>   
                                </div>
                            </div>
                            <!--  EDIT EMPLOYEES  -->

                            <div class="row p-4">
                                <form class= "form p-4" action="edit_store.php" id="editForm" enctype="multipart/form-data">

                                    <input type="text" class="form-control "  placeholder="Enter Title" name="title" id="title" style="font-size:18px;" required > <br>
                                    <textarea name="description"  class="form-control input2" id="editor1" required > </textarea><br>
                                    <input type="file" class="form-control bor"  placeholder="Enter File" name="file" id="file" style="font-size:17px;" > <br> 

                                    <img id="image" width="150px" height="150px">

                                    <div class="text-secondary">
                                        Status :	
                                        <input type="radio" name="status" value="yes" id="Yes"  checked='checked' required>
                                        <lable for="yes"> Yse </lable>
                                        <input type="radio" name="status" value="no" id="No" required>
                                        <lable for="no"> No </lable> 
                                    </div>
                                    <div style = " margin: 25px 0px -15px ;">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block"  name= "submit" value = " SAVE " style="font-size:18px;"> 
                                    </div>
                                </form>
                            </div>

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

$(document).ready(function(e){
    var url_string = window.location;
    var url = new URL(url_string);
    var search_params = url.searchParams;
    var id = search_params.get('id');

    getRecord(id);

    function getRecord(id){
        $.ajax({
            type:'GET',
            url :'getRecord.php?id='+id,
            dataType:'text',
            cache:false,
            contentType:false,
            prossecType:false,
            data:'',
            success: function(data){
                let resp = JSON.parse(data);
                if(resp.status){
                    document.getElementById('title').value = resp.data.title;
                    document.getElementById('editor1').value = resp.data.description;
                    document.getElementById('image').src  = '../../uploads/'+ resp.data.image;
                    let status = resp.data.status;
                        if(status == 'yes'){
                            document.getElementById('Yes').checked = status;
                        } else {
                            document.getElementById('No').checked = status;
                        }
                } else {
                    alert(resp.message);
                }
            }
        });
    }

    $('#editForm').on('submit', function(e){
        e.preventDefault();

        var form = $(this);
        var radios = document.querySelector('input[name="status"]:checked').value; 
        var desc = CKEDITOR.instances['editor1'].getData();
        var file_data = $('#file').prop('files')[0];
        var form_data = new FormData();

            form_data.append('id', id);
            form_data.append('title', $('#title').val());
            form_data.append('description', desc);
            if(file_data != undefined){
                form_data.append('file', file_data);
            }
            form_data.append('status', radios);

        $.ajax({
            type:'POST',
            url:'edit_store.php',
            dataType:'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function(data){
                let resp = JSON.parse(data);
                console.log('data www', resp);
                if(resp.status){                     
                    //alert(resp.message);
                    window.location.href = 'index.php'; 
                } else{
                    alert(resp.message); 
                }
            }
        });    
    });
});
</script>    
<script>
    CKEDITOR.replace('editor1', {
      // Define the toolbar groups as it is a more accessible solution.
      toolbarGroups: [{
          "name": "basicstyles",
          "groups": ["basicstyles"]
        },
        {
          "name": "paragraph",
          "groups": ["list", "blocks"]
        },
        {
          "name": "document",
          "groups": ["mode"]
        },
        {
          "name": "insert",
          "groups": ["insert"]
        },
        {
          "name": "styles",
          "groups": ["styles"]
        },
        {
          "name": "about",
          "groups": ["about"]
        }
      ]
    });
  </script>         
</body>    
</html>