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
    <link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.c-compare{width: 80px;float: left;height: 70px;display: inline-block;text-align: center;border: 1px solid #ccc;background-color: #eeeeee;padding: 5px;}
		.bg-blue{background-color: #027CD5;color: #FFF;border: 1px solid #027cd5;}
		.c-compare i{font-size:40px;}
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
					<h4 class="pull-left mr-10">Compare</h4> 
					<div class="c-compare bg-blue"><i class="fa fa-car"></i><div>Car</div></div>
					<div class="c-compare"><i class="fa fa-motorcycle"></i><div>Bike</div></div>
				</div>
			</div>
			<div class="row mt-20">
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
					<div class="compare-box">
						<img src="<?php echo $assetsPath;?>/images/car-news1.jpg" alt="" class="news-thumbnail-img"/>
						<div class="compare-title">
							Maruti Suzuki Cias SHVS ZDI Plus Sedan, Diesel Manual
						</div>
						<select class="form-control select2 mb-10">
							<option value="">Select Maker</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<select class="form-control select2 mb-10">
							<option value="">Select Model</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<select class="form-control select2 mb-10">
							<option value="">Select Variant</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
					<div class="compare-box">
						<img src="<?php echo $assetsPath;?>/images/car-news1.jpg" alt="" class="news-thumbnail-img"/>
						<div class="compare-title">
							Maruti Suzuki Cias SHVS ZDI Plus Sedan, Diesel Manual
						</div>
						<select class="form-control select2 mb-10">
							<option value="">Select Maker</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<select class="form-control select2 mb-10">
							<option value="">Select Model</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<select class="form-control select2 mb-10">
							<option value="">Select Variant</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
					</div>
					<div class="mt-30">
						<a href="<?php echo $prefix;?>/home/detailed_comparison" class="search-btn" >Compare</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
					<div class="compare-box">
						<img src="<?php echo $assetsPath;?>/images/car-news1.jpg" alt="" class="news-thumbnail-img"/>
						<div class="compare-title">
							Maruti Suzuki Cias SHVS ZDI Plus Sedan, Diesel Manual
						</div>
						<select class="form-control select2 mb-10">
							<option value="">Select Maker</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<select class="form-control select2 mb-10">
							<option value="">Select Model</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<select class="form-control select2 mb-10">
							<option value="">Select Variant</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
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
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
</body>
</html>