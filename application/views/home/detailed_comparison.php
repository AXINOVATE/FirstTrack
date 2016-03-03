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
					<h4>Compare</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10" style="border-right: 1px solid #dfdfdf;">
					<div class="compare-box" style="border-bottom: 1px solid #dfdfdf;">
						<div class="comp-car-title text-center">Maruti Suzuki Cias</div>
						<select class="form-control select2 mb-20">
							<option value="">SHVS ZDI Plus</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<img src="<?php echo $assetsPath;?>/images/ciaz.jpg" alt="" class="news-thumbnail-img mb-20"/>
					</div>
					<div class="compare-box mt-20 text-center">
						<h4 class="text-center"><i class="fa fa-inr"></i>11.79 lakhs</h4>
						<button class="comp-book-btn" type="btn">Book Test Drive</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10" style="border-right: 1px solid #dfdfdf;">
					<div class="compare-box" style="border-bottom: 1px solid #dfdfdf;">
						<div class="comp-car-title text-center">Hyundai Fluidic Verna</div>
						<select class="form-control select2 mb-20">
							<option value="">1.6 CRDI SX</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<img src="<?php echo $assetsPath;?>/images/verna.jpg" alt="" class="news-thumbnail-img mb-20"/>
					</div>
					<div class="compare-box mt-20 text-center">
						<h4 class="text-center"><i class="fa fa-inr"></i>11.79 lakhs</h4>
						<button class="comp-book-btn" type="btn">Book Test Drive</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
					<div class="compare-box" style="border-bottom: 1px solid #dfdfdf;">
						<div class="comp-car-title text-center">Honda City</div>
						<select class="form-control select2 mb-20">
							<option value="">VX(0) Diesel</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<img src="<?php echo $assetsPath;?>/images/hondacity.jpg" alt="" class="news-thumbnail-img mb-20"/>
					</div>
					<div class="compare-box mt-20 text-center">
						<h4 class="text-center"><i class="fa fa-inr"></i>11.79 lakhs</h4>
						<button class="comp-book-btn" type="btn">Book Test Drive</button>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<table class="table table-bordered">
						<thead>
						  <tr style="background-color: #e7e7e7;">
							<th colspan="4">Cost Analysis</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>Cost Per kilometer</td>
							<td><i class="fa fa-inr"></i> 10.59</td>
							<td><i class="fa fa-inr"></i> 12.98</td>
							<td><i class="fa fa-inr"></i> 12.79</td>
						  </tr>
						  <tr>
							<td>TCO for 5 years</td>
							<td><i class="fa fa-inr"></i> 9,94,818</td>
							<td><i class="fa fa-inr"></i> 11,91,153</td>
							<td><i class="fa fa-inr"></i> 11,89,031</td>
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
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
</body>
</html>