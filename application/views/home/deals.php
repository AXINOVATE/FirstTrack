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
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
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
					<h4>Deals</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<div style="margin: -10px -10px 0px -10px;">
							<img src="<?php echo $assetsPath;?>/images/bookFlightHotel.jpg" alt="" class="news-thumbnail-img"/>
						</div>
						<div class="deal-title">
							Book a Flight + Hotel
							<p>And Save More</p>
						</div>
						<div class="row mt-10">
							<div class="col-md-7 col-sm-7 col-xs-12 deal-validity">
								Validity:
								<p>Mar 31, 2016</p>
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<a href="javascript:void(0)" class="deal-view-btn">
									View Details
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<div style="margin: -10px -10px 0px -10px;">
							<img src="<?php echo $assetsPath;?>/images/cashbackOnHotels.jpg" alt="" class="news-thumbnail-img"/>
						</div>
						<div class="deal-title">
							Get Upto 60% Off + 100% Cashback
							<p>+use 25% ecash(No Limits) on Domestic Hotels</p>
						</div>
						<div class="row mt-10">
							<div class="col-md-7 col-sm-7 col-xs-12 deal-validity">
								Validity:
								<p>Mar 21, 2016</p>
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<a href="javascript:void(0)" class="deal-view-btn">
									View Details
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<div style="margin: -10px -10px 0px -10px;">
							<img src="<?php echo $assetsPath;?>/images/awesomeOffer.jpg" alt="" class="news-thumbnail-img"/>
						</div>
						<div class="deal-title">
							Awesome Threesome Offer
							<p>On Domestic Hotels</p>
						</div>
						<div class="row mt-10">
							<div class="col-md-7 col-sm-7 col-xs-12 deal-validity">
								Validity:
								<p>Mar 21, 2016</p>
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<a href="javascript:void(0)" class="deal-view-btn">
									View Details
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	<!-- Footer start -->
	<?php echo $footer; ?>
	<!-- Footer end -->
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.typeahead.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
</body>
</html>