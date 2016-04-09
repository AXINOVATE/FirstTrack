<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
//var_dump($details); exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com is India's first Online market place for all the Brand New Vehicles.|Book Online, Buy Online , Test Ride all New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV in India,  New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV at your Door Step.</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<style type="text/css">
		.page-title{font-size: 18px;
    color: #7D7D7D;
    margin-bottom: 10px;}
	
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<!--<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="page-title">Track Order Request - TR123</div>
					<hr class="mt-0"></hr>
				</div>
			</div> -->
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<div class="page-title">My Requests</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<?php 
					$loginStatus=$this->session->userdata('login');
					if($loginStatus =='' || $loginStatus == null){
						echo "<tr><td>Please Login to track the orders<td><tr>";
					}else{
			?>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th>Request No</th>
								<th>Product Name</th>
								<th>Variant Name</th>
								<th>Request Date</th>
								<th class="hidden-xs">Request Type</th>													
								<th>Status</th>													
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach($requests as $REQ){
									$date = date_create($REQ['dateTime']);
									$date = date_format($date,"jS \of M Y");
									?>
								<tr>
									<td><a href="#" class="track_request" data-id="<?php echo $REQ['bookingID']; ?>"><?php echo $REQ['requestNo']; ?></a></td>
									<td><?php echo $REQ['productName']; ?></td>
									<td><?php echo $REQ['variantName']; ?></td>
									<td><?php echo $date; ?></td>
									<td class="hidden-xs">Booking</td>
									<td><?php echo $REQ['reqStatus']; ?></td>
								</tr>
							<?php }
							?>
							
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
			<div id="track_history">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
						<div class="page-title">History of Track Request - <span id="trNo">No data</span></div>
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
							<tbody id="trackData">
							</tbody>
						</table>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script>	
	$(document).ready(function() {
		$("#track_history").hide();
	});
	$(".track_request").click(function(){
		var bID=$(this).data('id');
		$("#trNo").text('No Data');
		$.ajax({
			url:'<?php echo $prefix; ?>/home/get_track_order/GET/'+bID,
			dataType:'JSON',
			type:'POST',
		}).done(function(data){
			var len=data.length;
			var html='';
			for(var i=0;i<len;i++){
				html +='<tr>'+
							'<td>'+data[i].firstName+'</td>'+
							'<td>'+data[i].respondDate+'</td>'+
							'<td>'+data[i].status+'</td>'+
							'<td class="hidden-xs">'+data[i].respodMessage+'</td>'+
						'</tr>'+
						$("#trNo").text(data[i].requestNo);
			}
			$("#trackData").html(html);
			$("#track_history").show();
		}); 
	});
</script>
</body>
</html>