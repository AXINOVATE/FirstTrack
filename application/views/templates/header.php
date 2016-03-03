<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix');
?>
<div class="top-content-container hidden-xs" >
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<a href="<?php echo $prefix;?>"><img src="<?php echo $assetsPath;?>/images/logo.png" class="img-responsive logo-img hidden-xs" alt="LOGO"></a>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9">				
				<div class="header-top">
					<ul style="display:block; float:right;">
						<li style="border-right:none;"><a href="#"><i class="fa fa-map-marker" style="color:#FFD400;"></i>Bangalore</a></li>
						<li style="background-color:#FFD400;"><a href="#" style="color:grey;"><i class="fa fa-tags" style="color:grey;"></i>Deals</a></li>
						<li><a href="#">24X7 Customer Care</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Track Order</a></li>
						<li><a href="#"><i class="fa fa-bell" style="color:#FFD400;"></i></a></li>
						<li><a href="#"><span>Signup</span></a></li>
						<li class="border-none-r"><a href="#">Login</a></li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-10 col-sm-9 col-xs-12">
						<div class="input-group">
							<input type="text" class="form-control no-border-radius-all " placeholder="Find your vehicle here" aria-describedby="basic-addon2" />
							<span class=" btn input-group-addon no-border-radius-all input-group-addon1" id="basic-addon2">Search</span>
						</div>	
					</div>
					<div class="col-md-2 col-sm-3 col-xs-12">
						<a href="javascript:void(0)" class="cart-btn">
							<i class="fa fa-shopping-cart"></i>  Cart 
							<span class="cart-item">1</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default navbar-static-top" style="min-height:28px;">
	<div class="navbar-header visible-xs">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div id="navbar" class="navbar-collapse collapse bg-lightblue">
		<div class="container">
			<ul class="nav navbar-nav" id="second-header">
				<li class=""><a href="#" class="pd-tp-3">Latest</a></li>
				<li><a href="#about" class="pd-tp-3">Popular</a></li>
				<li><a href="#contact" class="pd-tp-3">Upcoming</a></li>
				<li><a href="#compare" class="pd-tp-3">Compare</a></li>
				<li class="<?php if($currentPage=='NEWS'){echo 'active';}?>"><a href="<?php echo $prefix.'/home/news';?>" class="pd-tp-3">News</a></li>
				<li><a href="#compare" class="pd-tp-3">Reviews</a></li>
				<li><a href="#compare" class="pd-tp-3">Blogs</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">EMI Calculator</a></li>
						<li><a href="#">Service Cost Analyzer</a></li>
						<li><a href="#">Locate a Dealer</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Request for Test Drive</a></li>
						<li><a href="#">Advance Booking</a></li>
						<li><a href="#">Apply for Vehicle Loan</a></li>
						<li><a href="#">Corporate Deals</a></li>
						<li><a href="#">Apply for Insurance</a></li>
						<li><a href="#">By on Road Assistance</a></li>
					</ul>
				</li>
			</ul> 
		</div>
	</div>
</nav>
	