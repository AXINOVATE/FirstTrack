<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix');
?>
<div class="top-content-container hidden-xs" >
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<img src="<?php echo $assetsPath;?>/images/logo.png" class="img-responsive logo-img hidden-xs" alt="LOGO">
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9 ">				
				<div class="header-top">
					<ul style="display:block; float:right;">
						<li style="border-right:none;"><a href="#"><i class="fa fa-map-marker"></i>Bangalore</a></li>
						<li style="background-color:#FFD400;"><a href="#" style="color:grey;"><i class="fa fa-tags" style="color:grey;"></i>Deals</a></li>
						<li><a href="#">24X7 Customer Care</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Track Order</a></li>
						<li><a href="#"><i class="fa fa-bell"></i></a></li>
						<li><a href="#"><span>Signup</span></a></li>
						<li class="border-none-r"><a href="#">Login</a></li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-11 col-sm-10 col-xs-12">
						<div class="input-group">
							<input type="text" class="form-control no-border-radius-all " placeholder="Find your vehicle here" aria-describedby="basic-addon2" />
							<span class=" btn input-group-addon no-border-radius-all input-group-addon1" id="basic-addon2">Search</span>
						</div>	
					</div>
					<div class="col-md-1 col-sm-2 col-xs-12">
						<div class="shopping-img-top">
							<img src="<?php echo $assetsPath;?>/images/shopping.png" class=" shopping-img-top"></img>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default navbar-static-top" style="min-height:30px;">
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
				<li class=""><a href="#" class="pd-tp-3">Latest Models</a></li>
				<li><a href="#about" class="pd-tp-3">Popular Models</a></li>
				<li><a href="#contact" class="pd-tp-3">Upcoming Models</a></li>
				<li><a href="#compare" class="pd-tp-3">Compare Models</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Service 1</a></li>
						<li><a href="#">Service 2</a></li>
						<li><a href="#">Service 3</a></li>
					</ul>
				</li>
			</ul> 
		</div>
	</div>
</nav>
	