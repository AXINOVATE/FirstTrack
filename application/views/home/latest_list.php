<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/bootstrap-slider.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
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
				<div class="col-md-12">
					<h3 class="mt-0 mb-20">Latest</h3>
				</div>
				<div class="col-md-3 col-sm-3">
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
				<div class="col-md-9 col-sm-9 pl-0">
					<div class="sort-by">
						<span>Showing 1-12 of 202 </span>
						<ul class="pull-right">
							<li>Sort By</li>
							<li>Price</li>
							<li>Popularity</li>
							<li>Latest</li>
						</ul>
					</div>
					<div class="product-car">
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<a href="<?php echo $prefix;?>/home/details"><img src="<?php echo $prefix;?>/assets/images/baner-car.png"></a>
							</div>
							<div class="col-md-6 col-sm-6">
								<a href="<?php echo $prefix;?>/home/details"><h4> Hyundai Xcent </h4></a>
								<ul class="product-variant">
									<li><i class="fa fa-car"></i> Sedan</li>
									<li><i class="fa fa-cog"></i> Manual, Automatic</li>
									<li><i class="fa fa-clock-o"></i> 19.1 - 24.4 kmpl</li>
									<li><i class="fa fa-filter"></i> Diesel, Petrol</li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-3 text-center">
								<div class="product-price"><i class="fa fa-inr"></i> 5.5 - 8.74 L </div>
								<span class="product-on-road">(On-road Proce <b>New Delhi</b>)</span>
							</div>
							<div class="col-md-12 col-sm-12 text-center">
								<div class="dropdown">
									<div data-toggle="dropdown">6 variants available<span class="caret"></span></div>
									<ul class="dropdown-menu">
										<li><a href="#">Petrol</a></li>
										<li><a href="#">Diesel</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product-car">
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<a href="<?php echo $prefix;?>/home/details"><img src="<?php echo $prefix;?>/assets/images/baner-car.png"></a>
							</div>
							<div class="col-md-6 col-sm-6">
								<a href="<?php echo $prefix;?>/home/details"><h4> Hyundai Xcent </h4></a>
								<ul class="product-variant">
									<li><i class="fa fa-car"></i> Sedan</li>
									<li><i class="fa fa-cog"></i> Manual, Automatic</li>
									<li><i class="fa fa-clock-o"></i> 19.1 - 24.4 kmpl</li>
									<li><i class="fa fa-filter"></i> Diesel, Petrol</li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-3 text-center">
								<div class="product-price"><i class="fa fa-inr"></i> 5.5 - 8.74 L </div>
								<span class="product-on-road">(On-road Proce <b>New Delhi</b>)</span>
							</div>
							<div class="col-md-12 col-sm-12 text-center">
								<div class="dropdown">
									<div data-toggle="dropdown">6 variants available<span class="caret"></span></div>
									<ul class="dropdown-menu">
										<li><a href="#">Petrol</a></li>
										<li><a href="#">Diesel</a></li>
									</ul>
								</div>
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
<script src="<?php echo $assetsPath; ?>/js/bootstrap-slider.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#ex1").slider({tooltip: 'always'});
		$("#ex2").slider({tooltip: 'always'});
	});
</script>
</body>
</html>