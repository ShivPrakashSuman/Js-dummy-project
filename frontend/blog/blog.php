<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>     
<style>
	.tex {
		font-size:20px;
	}
	.zoom1:hover {
		transform:scale(1.1);
	} 
	.zoom1 {
		transition: transform.8s ;
	} 
	p {
		font-size: 15px;
	}
</style>
</head>

<body>
	<?php
		include('topbar.php');
	?>
	<div class="container mt-5">
		<div class="text-center text-primary mb-5 pb-2">
			<h1 style="font-size:60px;" id="title1"> </h1>
		</div>
	<!-- blog Data Fetch ---------------->

		<div class="row mt-5 pt-5 mb-5">
			<div class="col-sm-7 p-5">
				<div class="mb-4 text-info mt-5 " >
					<p style="font-size:40px;" id="title" ></p>
				</div>
				<div class="text-muted mb-4 pt-3" style="font-family: auto;">
					<p style="line-height: 1.7;" id="description"></p> 
				</div>
			</div>
			<div class="col-sm-5 p-5">
				<div class="  shadow-lg bg-light rounded-5  ">
					<img id="image" class="rounded-5 zoom1 shadow-lg bg-light" width="100%" height="450px">
				</div>
			</div>
		</div>
		<hr>
	</div>
<script>

	function sessionApi(){
        $.ajax({
            type:'GET',
            url:'../../include/sessionApi.php',
            data:'',
            success:function(data){
                let resp = JSON.parse(data);
                if(resp.status && resp.data.session){ 
                    window.location.href = '../../backend/layout/dashboard.php';
                }
            }
        });
    }
    sessionApi();

	var url_string = window.location;
    var url = new URL(url_string);
    var search_params = url.searchParams;
    var id = search_params.get('id');

	function getBlog(id){

		$.ajax({
			type:'GET',
			url: 'dataRow.php?id='+id,
			data:'',
			success: function(data){
				let resp = JSON.parse(data);
				if(resp.status){
					document.getElementById('title').innerHTML = resp.data.title;
					document.getElementById('title1').innerHTML = resp.data.title;
					document.getElementById('description').innerHTML = resp.data.description;
					document.getElementById('image').src = "../../uploads/"+resp.data.image;
				} else{
					alert(resp.message);
				}
			}
		});
	}
	getBlog(id);
</script>
</body>
</html>