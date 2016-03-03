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
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/bootstrap-slider.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.filter-heading{ background-color: #DDD; padding: 5px 10px; font-size: 15px; }
		.filter-heading .fa-minus, .filter-heading .fa-plus{ float: right; margin-top: 3px; cursor: pointer; }
		.filter-price,.filter-manufacture,.filter-mileage{border-right:2px solid #DDD;}
		.filter-price .slider-example,.filter-mileage .slider-example{ padding: 45px 15px 10px 15px;}
		.filter-price .slider.slider-horizontal,.filter-mileage .slider.slider-horizontal{ width:100%; }
		.filter-price .tooltip-inner,.filter-mileage .tooltip-inner{ background-color:#DDD; color: #000;}
		.filter-price .tooltip.top .tooltip-arrow,.filter-mileage .tooltip.top .tooltip-arrow{ border-top-color:#DDD; }
		.filter-manufacture ul,.sort-by ul,.product-car ul{ list-style-type:none; margin-bottom: 0px; }
		.filter-manufacture ul li{ height: 30px; border-bottom: 1px solid #DDD; padding: 5px 10px; }
		.sort-by{border-bottom:1px solid #027cd5; display: inline-block; width: 100%;padding-bottom:5px; } 
		.sort-by li{display: inline; padding-right: 10px; border-right: 1px solid #DDD;}  
		.sort-by li:last-child{padding-right: 5px; border-right: 0px;}
		.product-car{border:1px solid #DDD; margin-top:5px;}
		.product-car img{width: 100%; height: 112px;}
		.product-car h4{font-weight: 600;}
		.product-car ul li{display:inline-block; width:49%; height: 30px;font-size: 14px; color: #777;}
		.product-price{margin-top:30px;text-align:center;font-size:24px;font-weight:600;color:#027cd5;}
		.product-on-road{font-size:12px;font-weight:0px; color: #777;}
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
				<div class="col-md-12">
					<h3 class="mt-0">Car Models</h3>
				</div>
				<div class="col-md-3">
					<div class="filter-price">
						<div class="filter-heading">
							Price Range <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex1" type="text" class="span2" data-slider-min="10" data-slider-max="500" data-slider-step="5" data-slider-value="[10,500]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading">
							Select Manufactures <i class="fa fa-minus"></i>
						</div>
						<ul>
							<li> Aston martin </li>
							<li> Audi </li>
							<li> Bentley </li>
							<li> BMW </li>
							<li> Chevrolet </li>
							<li> Datsun </li>
							<li> Ferrari </li>
							<li> Flat </li>
							<li> Ford </li>
						</ul>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							Mileage <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex2" type="text" class="span2" data-slider-min="10" data-slider-max="500" data-slider-step="5" data-slider-value="[10,500]"/>
						</div>
					</div>
				</div>
				<div class="col-md-9 pl-0">
					<div class="sort-by">
						<ul class="pull-right">
							<li>Sort By</li>
							<li>Price</li>
							<li>Popularity</li>
							<li>Latest</li>
						</ul>
					</div>
					<div class="product-car">
						<div class="row">
							<div class="col-md-3">
								<img src="<?php echo $prefix;?>/assets/images/baner-car.png">
							</div>
							<div class="col-md-6">
								<h4> Hyundai Xcent </h4>
								<ul>
									<li><i class="fa fa-car"></i> Sedan</li>
									<li><i class="fa fa-cog"></i> Manual,Automatic</li>
									<li><i class="fa fa-clock-o"></i> 19.1 - 24.4 kmpl</li>
									<li><i class="fa fa-filter"></i> Diesel,Petrol</li>
								</ul>
							</div>
							<div class="col-md-3 text-center">
								<div class="product-price"><i class="fa fa-inr"></i> 5.5 - 8.74 L </div>
								<span class="product-on-road">(On-road Proce <b>New Delhi</b>)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-slider.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#ex1").slider({tooltip: 'always'});
		$("#ex2").slider({tooltip: 'always'});
	});
</script>
</body>
</html>