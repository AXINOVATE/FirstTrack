<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com is India's first Online market place for all the Brand New Vehicles.|Book Online, Buy Online , Test Ride all New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV in India,  New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV at your Door Step.</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		
	
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="page-title">Road Test Request</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box bg-yellow">
						<h5>100</h5>
						<p>Total Request</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5>40</h5>
						<p>New Request</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5>35</h5>
						<p>In-progress</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5>25</h5>
						<p>Closed</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th class="hidden-xs">Request No</th>
								<th>Requester Name</th>
								<th>Phone</th>													
								<th class="hidden-xs">Email</th>													
								<th>Vehicle Variant</th>													
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="hidden-xs">REQ0001</td>
								<td><a href="<?php echo $prefix;?>/admin/request_report">Jay Prakash</a></td>
								<td>9874561230</td>
								<td class="hidden-xs">jay@gmail.com</td>
								<td>Alto 800</td>
								
							</tr>
							<tr>
								<td class="hidden-xs">REQ0002</td>
								<td><a href="<?php echo $prefix;?>/admin/request_report">Ram Prakash</a></td>
								<td>9124561230</td>
								<td class="hidden-xs">ram@gmail.com</td>
								<td>Alto 800</td>
							</tr>
							<tr>
								<td class="hidden-xs">REQ0003</td>
								<td><a href="<?php echo $prefix;?>/admin/request_report">Hari Prakash</a></td>
								<td>8745621230</td>
								<td class="hidden-xs">hari@gmail.com</td>
								<td>Alto 800</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script>
	$('.request-count-box').on('click', function(){
		$('.request-count-box').removeClass('bg-yellow');
		$(this).addClass('bg-yellow');
	});
</script>
</body>
</html>