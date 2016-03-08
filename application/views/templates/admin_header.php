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
						<li><a href="#">Welcome: Gautam Choudhury</a></li>
						<li><a href="#">Administrator</a></li>
						<li class="border-none-r"><a href="#">Sign Out</a></li>
					</ul>
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
			<?php if(!isset($currentPage))$currentPage="";?>
			<ul class="nav navbar-nav" id="second-header">
				<li <?php if($currentPage == 'DASHBOARD')echo 'class="active"';?>><a href="<?php echo $prefix;?>/admin/admin_dashboard" class="pd-tp-3">Dashboard</a></li>
				<li class="dropdown <?php if($currentPage == '')echo 'active';?>">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Product <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Location</a></li>
						<li><a href="#">Manufacture</a></li>
						<li><a href="#">Category</a></li>
						<li><a href="#">Body Type</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Products Category</a></li>
					</ul>
				</li>
				<li class="dropdown <?php if($currentPage == '')echo 'active';?>">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Dealers <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Add Dealers</a></li>
						<li><a href="#">Add Products</a></li>
					</ul>
				</li>
				<li class="dropdown <?php if($currentPage == '')echo 'active';?>">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#test-drive-modal">Request for Test Drive</a></li>
						
					</ul>
				</li>
			</ul> 
		</div>
	</div>
</nav>