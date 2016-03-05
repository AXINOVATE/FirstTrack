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
					<div class="page-title">Road Test Request - REQ00001</div>
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
				<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
					Requester Name:
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
					Jay Prakash
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
					Contact No.:
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
					9874561230
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
					City:
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
					Bangalore
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
					Email-id:
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
					jay@gmail.com
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
					Maker:
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
					Maruti Suzuki
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
					Model:
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
					Alto 800
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
					Variant:
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
					VXI
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
					Received Date:
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
					21 Feb 2016
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					Description
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
					<textarea type="text" class="form-control"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					Respond
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
					<textarea type="text" class="form-control"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					&nbsp;
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 mb-10 mt-10">
					<select class="form-control entity-type select2" id="" style="width:100%;">
						<option value="">--Select Status--</option>
						<option value="1" >Yes</option>
						<option value="1" >No</option>
					</select>
				</div>
				<div class="col-md-1 col-sm-1 hidden-xs mb-10 mt-10">
					&nbsp;
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					<a href="javascript:void(0)" class="search-btn" >Save</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<div class="page-title">My Requests</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th class="hidden-xs">Request No</th>
								<th>Request Date</th>
								<th>Request Type</th>													
								<th>Status</th>													
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="hidden-xs">REQ0001</td>
								<td>20 Feb 2016</td>
								<td>Test Drive</td>
								<td>In-progress</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					Respond
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
					<textarea type="text" class="form-control"></textarea>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					<a href="javascript:void(0)" class="search-btn" >Save</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<div class="page-title">History of Road Test Request - REQ00001</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th>Responded By</th>
								<th>Respond Date</th>
								<th>Status</th>													
								<th class="hidden-xs">Respond Message</th>													
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Agent</td>
								<td>20 Feb 2016</td>
								<td>In-Progress</td>
								<td class="hidden-xs">Thank you. We will confirm the time in 30 mins.</td>
								
							</tr>
							<tr>
								<td>Agent</td>
								<td>20 Feb 2016</td>
								<td>In-Progress</td>
								<td class="hidden-xs">We got the time at 3pm on 25th Feb 2016. Is that ok for you?</td>
							</tr>
							<tr>
								<td>Jay Prakash</td>
								<td>20 Feb 2016</td>
								<td>In-Progress</td>
								<td class="hidden-xs">Yes. That is fine.</td>
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