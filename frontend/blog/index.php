<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>       
<style>
	.zoom1:hover {
		transform:scale(1.1);
	} 
	.zoom1 {
		transition: transform.8s ;
	}
	p {
		font-size: 15px;
	}
	.overflow {
		overflow: hidden;
		height:52px;
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
</style>
</head>

<body>
	<?php
		include('topbar.php');
	?>
	<div class="container mt-5">
		<div class="text-center text-primary mb-5 pb-2">
			<h1 style="font-size:60px;">  Our Features </h1>
		</div>
	<!-- blog Data Fetch ---------------->
		<div class="row">
			<div id="blogList">

			</div>
		</div>

		<div class="row mt-5 pt-5 mb-5">
			<div class="col-sm-7 p-5">
				<div class="mb-4 text-primary mt-5 " >
					<p style="font-size:55px;"> About Cyber<br>Security </p>
				</div>
				<div class="text-muted mb-4 pt-3" style="font-family: auto;">
					<h4 style="line-height: 1.7;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum fringilla lacus eget mattis. Integer blandit rutrum ultricies. 
						In nec turpis finibus, sodales enim id, malesuada dui. Fusce tempor ex non molestie placerat. Nulla pellentesque varius dui, a posuere elit.
						 Donec et tellus magna. Donec ut luctus augue. Pellentesque tortor lectus, ultricies eu ipsum vel, sodales euismod enim. 
					</h4> 
					<button type="button" class="btn btn-info btn-lg rounded-5 p-3 mt-5 text-light"> <h2> Read more </h2></button>
				</div>
			</div>
			<div class="col-sm-5 p-5">
				<div class="  shadow-lg bg-light rounded-5 ">
					<img src="../../image/leptop.jpg" class="rounded-5 zoom1 shadow-lg bg-light" width="100%" height="450px">
				</div>
			</div>
		</div>	
	</div>
	<hr>
	<br>
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

	function getBlog(){
		$('#blogList').empty();
		$.ajax({
			type:'GET',
			url: 'bloglistApi.php',
			data:'',
			success: function(data){
				let resp = JSON.parse(data);
				if(resp.status){
					let html = '';
					if(resp.data.length > 0){
						resp.data.forEach((val, key)=>{
							html +=	'<div class="col-sm-4 pb-5">'+
										'<div class="shadow-lg bg-light mt-4 rounded-5 m-4 ">'+
											'<!-- <a href="javascript:void(0);" style="text-decoration: none;"> -->'+
												'<div class="p-4 overflow-hidden ">'+
													'<img src="../../uploads/'+ val.image +'" class="rounded-5 zoom1" width="100%" height="300px">'+
												'</div>'+
												'<div class="p-5">'+
													'<div class=" text-primary overflow ">'+
														'<h1>'+ val.title +'</h1>'+
													'</div>'+
													'<div class="text-muted mb-4 pt-1 overflow">'+
														'<span>'+ val.description +'</span>'+
													'</div>'+
													'<div class=" text-info pt-3 pb-3">'+
														'<a href="blog.php?id='+ val.id +'" class="text-decoration-none"><h3> Read more..</h3> </a>'+
													'</div>'+
												'</div>'+
											'<!-- </a> -->'+
										'</div>'+
									'</div>';
						})
					}
					$('#blogList').append(html);
				} else{
					alert(resp.message);
				}
			}
		});
	}
	getBlog();
</script>	
</body>
</html>