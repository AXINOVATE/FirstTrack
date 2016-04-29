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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">


	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
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
					<h3 class="mt-0 mb-20">Car Models</h3>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT CATEGORY <i class="fa fa-minus"></i>
						</div>
						<center>
							<select class="form-control select2" id="city" style="width:95%;">
								<option value="1">Car</option>
								<option value="1" >Bike</option>
								<option value="1" >Truck</option>
							</select>
						</center>
					</div>
					<div class="filter-price">
						<div class="filter-heading">
							PRICE RANGE <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex1" type="text" class="span2" data-slider-min="10" data-slider-max="500" data-slider-step="5" data-slider-value="[10,500]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT MANUFACTURERS <i class="fa fa-minus"></i>
						</div>
						<center>
							<select class="form-control select2" id="city" style="width:95%;">
								<option value="1">Aston martin</option>
								<option value="1" >Audi</option>
								<option value="1" >Bentley</option>
								<option value="1" >Chevrolet</option>
								<option value="1" >Datsun</option>
							</select>
						</center>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT FUEL TYPE <i class="fa fa-minus"></i>
						</div>
						<center>
							<select class="form-control select2" id="city" style="width:95%;">
								<option value="1">Petrol</option>
								<option value="1" >Diesel</option>
								<option value="1" >LPG</option>
								<option value="1" >CNG</option>
								<option value="1" >Electric Power</option>
							</select>
						</center>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT TRANSMISSION <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Manual</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Automatic</label>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							MILEAGE <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex2" type="text" class="span2" data-slider-min="10" data-slider-max="500" data-slider-step="5" data-slider-value="[10,500]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SEATING CAPACITY <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">2</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">3</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">4</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">5</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">5+</label>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							ENGINE CAPACITY <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex3" type="text" class="span2" data-slider-min="800" data-slider-max="5000" data-slider-step="5" data-slider-value="[800,5000]"/>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							MANUFACTURING YEAR <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex4" type="text" class="span2" data-slider-min="1999" data-slider-max="2016" data-slider-step="1" data-slider-value="[1999,2016]"/>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							WAITING PERIOD <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex5" type="text" class="span2" data-slider-min="0" data-slider-max="150" data-slider-step="5" data-slider-value="[0,150]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							DEALER NAME <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Sireesh Automobiles</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Surya Nissan</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Pratham Motors</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Trinity Cars</label>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							EMISSION STANDARD <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">BS III</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">BS IV</label>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							POWER STEERING <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Yes</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">No</label>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							POWER<i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex6" type="text" class="span2" data-slider-min="200" data-slider-max="2000" data-slider-step="5" data-slider-value="[200,2000]"/>
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
								<a href="<?php echo $prefix;?>/details"><img src="<?php echo $prefix;?>/assets/images/baner-car.png"></a>
							</div>
							<div class="col-md-6 col-sm-6">
								<a href="<?php echo $prefix;?>/details"><h4> Hyundai Xcent </h4></a>
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
								<a href="<?php echo $prefix;?>/details"><img src="<?php echo $prefix;?>/assets/images/baner-car.png"></a>
							</div>
							<div class="col-md-6 col-sm-6">
								<a href="<?php echo $prefix;?>/details"><h4> Hyundai Xcent </h4></a>
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
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-slider.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2({
			placeholder: "Select",
			allowClear: true
		});
		$("#ex1").slider({tooltip: 'always'});
		$("#ex2").slider({tooltip: 'always'});
		$("#ex3").slider({tooltip: 'always'});
		$("#ex4").slider({tooltip: 'always'});
		$("#ex5").slider({tooltip: 'always'});
		$("#ex6").slider({tooltip: 'always'});
	});
</script>
</body>
</html>