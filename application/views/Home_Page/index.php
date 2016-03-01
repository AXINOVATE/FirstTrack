<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetpath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome Fast Track</title>
	<link href="<?php echo $assetpath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetpath;?>/css/bootstrap.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetpath;?>/css/home_page_style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetpath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<style type="text/css">

	</style>
</head>
<body>
	<div class="top-content-container">
		<div class="container">
			<div class="row">
				<div class="col-md-4 hidden-xs col-sm-3"></div>
				<div class="col-md-8 col-xs-12 col-sm-12">				
					<div class="header-top">
						<ul>
							<li><a href="#"><i class="fa fa-map-marker"></i>Bangalore</a></li>
							<li><a href="#"><i class="fa fa-tags"></i>Deals</a></li>
							<li><a href="#">24X7 Customer Care</a></li>
							<li><a href="#"><i class="fa fa-map-marker"></i>Track Order</a></li>
							<li><a href="#"><i class="fa fa-bell"></i></a></li>
							<li><a href="#"><span>Signup</span></a></li>
							<li class="border-none-r"><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="search-group">		
			<div class="row">
				<div class="col-md-4 hidden-xs col-sm-3">
					<img src="<?php echo $assetpath;?>/images/logo.png" class="img-responsive logo-img hidden-xs" alt="LOGO">
				</div>
				<div class="col-md-7 col-xs-10 col-sm-7">
					<div class="input-group">
					  <input type="text" class="form-control no-border-radius-all " placeholder="Find your vehicle here" aria-describedby="basic-addon2">
					  <span class=" btn input-group-addon no-border-radius-all input-group-addon1" id="basic-addon2">Search</span>
					</div>					
				</div>
				<div class="col-md-1 col-sm-2 col-xs-2">
					<div class="shopping-img-top">
						<img src="<?php echo $assetpath;?>/images/shopping.png" class=" shopping-img-top"></img>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="navigation-menu">
		<div class="container">
			<ul>
				<li class="padding-left-none"><a href="#"><span><img src="<?php echo $assetpath;?>/images/menu-list.png" alt="location png" class="top-location-img"></span><span class="top-location-img-content">Categories</span></a></li>
				<li><a href="#"><span>Latest Cars</span></a></li>
				<li><a href="#"><span>Popular Cars</span></a></li>
				<li class=""><a href="#"><span>Upcoming Cars</span></a></li>
				<li class="border-none-r"><a href="#"><span>Compare Cars</span></a></li>
			</ul>
		</div>
	</div>
	<div class="categories-list-container">
		<div class="container">
			<div class="row">
				<div class="col-md-4 border-all-lite ">
					<div class="categories-list">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4 img-box-1">
								<div class="categori-box">
									<div >
									<center>
									<img src="<?php echo $assetpath;?>/images/car1.png" class="" alt="car">
									<div><center><h6>Car</h6></center></div>
									</center>
									</div>
									
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 img-box-all">
								<div class="categori-box">
									<div>
									<center>
									<img src="<?php echo $assetpath;?>/images/bike1.png" class="" alt="car">
									<div><center><h6>Bike</h6></center></div>
									</center>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 img-box-all">
								<div class="categori-box">
									<div>
									<center>
									<img src="<?php echo $assetpath;?>/images/more1.png" class="" alt="car">
									<div><center><h6>More</h6></center></div>
									<center>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h4>Body Type</h4>
					<div class="col-md-6 border-all-lite">
						<img src="<?php echo $assetpath;?>/images/car1.png" class="" alt="car">
					</div>
					
					<div class="col-md-6 border-all-lite">
						<img src="<?php echo $assetpath;?>/images/car1.png" class="" alt="car">
					</div>
					
				</div>
				<div class="col-md-8">
				sadasdasasd
				asd
				asdasd
				asdasd</br>
				asdasd</br>
				asdasd</br>
				asdasd</br>
				asdasd</br>
				</div>
			</div>
		</div>
	</div>
		
	

</body>
</html>