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
				<div class="col-md-5 col-sm-12">
					<div class="item-img">
						<img id="item-img" src="<?php echo $prefix;?>/assets/images/flash-red.jpg">
						<div class="item-colors text-right">
							<span>Colors &nbsp;</span>
							<ul class="pull-right">
								<li class="active"><div style="background-color:#EE3435;" data-img="assets/images/flash-red.jpg"></div></li>
								<li><div style="background-color:#5A483C;" data-img="assets/images/cappuccino-beige.jpg"></div></li>
								<li><div style="background-color:#7C756D;" data-img="assets/images/Toffee-Brown.jpg"></div></li>
								<li><div style="background-color:#626665;" data-img="assets/images/deep-black.jpg"></div></li>
								<li><div style="background-color:#FFF;" data-img="assets/images/candy-white.jpg"></div></li>
								<li><div style="background-color:#CBD7E3;" data-img="assets/images/brilliant-silver.jpg"></div></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="row item-name">
						<div class="col-md-6 col-sm-7">
							<h3 class="mt-0">Hyundai Xcent </h3>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<div class="col-md-3 col-sm-2 col-xs-6 text-center">
							<img src="<?php echo $prefix; ?>/assets/images/special-offer-image.png" width="60px">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 item-rating">
							<div class="chart" data-percent="86">
								<span class="percent">8.6</span>
							</div>
							<div>Nayagaadi Rating</div>
						</div>
					</div>
					<hr class="item-hr">
					<div class="item-location mt-10 mb-10">
						<div class="col-md-5 col-sm-5 col-xs-12 pl-0">
							<span class="pull-left">Variant : </span>
							<div class="dropdown pull-left ml-10">
							  <div data-toggle="dropdown"><b> Base Petrol </b>&nbsp;&nbsp;<span class="caret"></span></div>
							  <ul class="dropdown-menu">
								<li><a href="#">Petrol</a></li>
								<li><a href="#">Diesel</a></li>
							  </ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 pl-0">
							<span class="pull-left">Location : </span>
							<div class="dropdown pull-left ml-10">
							  <div data-toggle="dropdown"><b> Bangalore </b>&nbsp;&nbsp;<span class="caret"></span></div>
							  <ul class="dropdown-menu">
								<li><a href="#">Hyderabad</a></li>
								<li><a href="#">Delhi</a></li>
								<li><a href="#">Mumbai</a></li>
							  </ul>
							</div>
						</div>
						<div class="col-md-1 col-sm-1 pl-0 hidden-xs">
							<i class="fa fa-share-alt"></i>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 br-right">
							<div class="item-price"><span ><i class="fa fa-inr"></i> 3,18,939 </span> On-Road Price </div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="item-subprice"><span>Ex-Showroom </span>: <i class="fa fa-inr"></i> 2,73,594</div>
							<div class="item-subprice"><span>Insurance </span>: <i class="fa fa-inr"></i> 2,73,594 </div>
						</div>
					</div>
					<div class="row mt-10">
						<div class="col-md-12 item-action">
							<button class="btn">Buy Now</button>
							<button class="btn">Advance Booking</button>
							<button class="btn">Book Test Drive</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-md-12">
					<div class="item-benfit">Benfits buying from nayagaadi</div>
					<div class="item-benfits">Benfits 1</div>
					<div class="item-benfits">Benfits 2</div>
					<div class="item-benfits">Benfits 3</div>
					<div class="item-benfits">Benfits 4</div>
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-md-12">
					<div class="item-feature"> <b>Engine</b> <hr class="mb-5 mt-5"> 1.1-ltr 12V U2 CRDI Diesel Engine </div>
					<div class="item-feature"> <b>Displacement</b> <hr class="mb-5 mt-5"> 1197 CC </div>
					<div class="item-feature"> <b>Max Power</b> <hr class="mb-5 mt-5"> 81 bhp @ 6000 rph</div>
					<div class="item-feature"> <b>Mileage</b> <hr class="mb-5 mt-5">  19-24 Kmpl </div>
					<div class="item-feature"> <b>Fuel</b> <hr class="mb-5 mt-5"> Diesel,Petrol </div>
					<div class="item-feature"> <b>Transmission</b> <hr class="mb-5 mt-5"> Manual,Automatic </div>
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-md-12 item-features">
					<ul id = "myTab" class = "nav nav-tabs">
					   <li class = "active"> <a href = "#home" data-toggle = "tab"> Overview </a></li>
					   <li> <a href = "#ios" data-toggle = "tab"> Specifications </a></li>
					   <li> <a href = "#ios" data-toggle = "tab"> Features </a></li>
					   <li> <a href = "#ios" data-toggle = "tab"> Photos </a></li>
					   <li> <a href = "#ios" data-toggle = "tab"> Videos </a></li>
					</ul>

					<div id = "myTabContent" class = "tab-content">

					   <div class = "tab-pane fade in active" id = "home">
						  <p>Tutorials Point is a place for beginners in all technical areas.
							 This website covers most of the latest technologies and explains each of
							 the technology with simple examples. You also have a 
							 <b>tryit</b> editor, wherein you can edit your code and 
							 try out different possibilities of the examples.</p>
					   </div>
					   
					   <div class = "tab-pane fade" id = "ios">
						  <p>iOS is a mobile operating system developed and distributed 
							 by Apple Inc. Originally released in 2007 for the iPhone, iPod Touch,
							 and Apple TV. iOS is derived from OS X, with which it shares the 
							 Darwin foundation. iOS is Apple's mobile version of the OS X 
							 operating system used on Apple computers.</p>
					   </div>
					 
					   
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.easypiechart.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTab').tabCollapse();
		$('.chart').easyPieChart({
			size:'40',
			scaleColor:false,
			easing: 'easeOutBounce'
		});
	});
	$(".item-colors li").on('click',function(){
		var img = $(this).find('div').data('img');
		$("#item-img").attr("src","<?php echo $prefix;?>/"+img);
		$(".item-colors li").removeClass('active');
		$(this).addClass('active');
	});
</script>
</body>
</html>