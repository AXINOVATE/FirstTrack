<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix');
?>
<input type="hidden" data-prefix="<?php echo $prefix;?>" id="prefix">
<div class="top-content-container hidden-xs" >
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<a href="<?php echo base_url();?>"><img src="<?php echo $assetsPath;?>/images/logo.png" style="margin-top: 1px;"class="img-responsive logo-img hidden-xs" alt="LOGO"><span style="color: #fff;font-size: 10px;">Mera Time | Mera Choice | Mera Price</span></a>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9">				
				<div class="header-top">
					<ul style="display:block; float:right;">
						<li><a href="#">Welcome: <?php echo $this->session->userdata('name');?></a></li>
						<li><a href="#"><?php echo $this->session->userdata('roleName'); ?></a></li>
						<li class="border-none-r"><a href="<?php echo $prefix;?>/home/logout">Sign Out</a></li>
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
				<?php if($this->session->userdata('roleName') == $this->config->item('admin_role')){ ?>
				
				<li <?php if($currentPage == 'DASHBOARD')echo 'class="active"';?>><a href="<?php echo $prefix;?>/admin/admin_dashboard" class="pd-tp-3">Dashboard</a></li>
				<li class="dropdown <?php if($currentPage == 'MANAGE PRODUCT')echo 'active';?>">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Product <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $prefix;?>/admin/add_location">Location</a></li>
						<li><a href="<?php echo $prefix;?>/admin/add_category">Category</a></li>
						<li><a href="<?php echo $prefix;?>/admin/add_manufacture">Manufacture</a></li>
						<li><a href="<?php echo $prefix;?>/admin/add_body_type">Body Type</a></li>
						<li><a href="<?php echo $prefix;?>/admin/add_products">Products</a></li>
						<li><a href="<?php echo $prefix;?>/admin/add_products_category">Products Category</a></li>
						<li><a href="<?php echo $prefix;?>/admin/showcase_list">Showcase Products</a></li>
					</ul>
				</li>
				<li class="dropdown <?php if($currentPage == 'DEALERS' || $currentPage == 'DEALER_PRODUCTS')echo 'active';?>">
					<a href="<?php echo $prefix;?>/home/dealers" class="pd-tp-3"> Manage Dealers </a>
					<!--a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Dealers <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $prefix;?>/home/add_dealer">Add Dealers</a></li>
						<li><a href="<?php echo $prefix;?>/home/dealer_products">Dealer Products</a></li>
					</ul-->
				</li>
				<li class="dropdown <?php if($currentPage == 'USERS')echo 'active';?>">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Manage users <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#test-drive-modal">Users</a></li>
						<li><a href ="<?php echo $prefix;?>/home/buylater_details">Future-Order-Details</a></li>
					</ul>
				</li>
				<?php }else if($this->session->userdata('roleName') == $this->config->item('dealer_role')){ ?>
					<li <?php if($currentPage == 'DEALERS')echo 'class="active"';?>><a href="<?php echo $prefix;?>/home/dealer/<?php echo $this->session->userdata('userID');?>" class="pd-tp-3">Profile</a></li>
					<li <?php if($currentPage == 'DEALER_PRODUCTS')echo 'class="active"';?>><a href="<?php echo $prefix;?>/home/DEALER_PRODUCTS/<?php echo $this->session->userdata('userID');?>" class="pd-tp-3">Manage Products</a></li>
				<?php } ?>
			</ul> 
		</div>
	</div>
</nav>