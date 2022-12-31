<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
		session_start();
		if (isset($_SESSION['userData1'])) {
			header('location:../auth/register.php');

		}
		include('topbar.php');

	$id = $_GET['id'];
	if (!$id){
		header('location:index.php');
	} 
		include('../../include/db.php');
		$sql ="select * from blog_data2 where id = $id";
		$result = $comm->query($sql);

		if($result->num_rows > 0) {

			$row = $result->fetch_assoc(); 
			// print_R($row);die;
?>
	<div class="container mt-5">
		<div class="text-center text-primary mb-5 pb-2">
			<h1 style="font-size:60px;">  <?php echo $row['title']; ?> </h1>
		</div>
	<!-- blog Data Fetch ---------------->

		<div class="row mt-5 pt-5 mb-5">
			<div class="col-sm-7 p-5">
				<div class="mb-4 text-info mt-5 " >
					<p style="font-size:40px;"> <?php echo $row['title']; ?>  </p>
				</div>
				<div class="text-muted mb-4 pt-3" style="font-family: auto;">
					<p style="line-height: 1.7;"><?php echo $row['description']; ?></p> 
				</div>
			</div>
			<div class="col-sm-5 p-5">
				<div class="  shadow-lg bg-light rounded-5  ">
					<img src="../../uploads/<?php echo $row['image']; ?>" class="rounded-5 zoom1 shadow-lg bg-light" width="100%" height="450px">
				</div>
			</div>
		</div>
		<hr>
	</div>

	<?php }else{ ?>
		<div class="container mt-5">
		<div class="text-center text-primary mb-5 pb-2">
			<h1 style="font-size:60px;"> No Blog Found </h1>
		</div>
	</div>

	<?php } ?>
</body>
</html>