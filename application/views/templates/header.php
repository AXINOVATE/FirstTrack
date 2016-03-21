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
				<a href="<?php echo $prefix;?>"><img src="<?php echo $assetsPath;?>/images/logo.png" class="img-responsive logo-img hidden-xs" alt="LOGO"></a>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9">				
				<div class="header-top">
					<ul style="display:block; float:right;">
						<li><a href="<?php echo $prefix;?>/home/md_sign_up_page_dealers"><span>Dealer Signup</span></a></li>
						<li style="border-right:none;"><a href="#"><i class="fa fa-map-marker" style="color:#FFD400;"></i>Bangalore</a></li>
						<li style="background-color:#FFD400;"><a href="<?php echo $prefix;?>/home/deals" style="color:grey;"><i class="fa fa-tags" style="color:grey;"></i>Deals</a></li>
						<li><a href="<?php echo $prefix;?>/home/customer_care">24X7 Customer Care</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Track Order</a></li>
						<li><a href="#"><i class="fa fa-bell" style="color:#FFD400;"></i></a></li>
						<?php if($this->session->userdata('login')){ ?>
							<li class="dropdown border-none-r user-options">
								<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('name');?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?php if($this->session->userdata('roleID') == '02cb2679-e453-11e5-8594-74867ad2fb90'){ ?>
									<li><a href="<?php echo $prefix;?>/admin/admin_dashboard">Admin Panel</a></li>
									<?php } ?>
									<li><a href="#">Profile</a></li>
									<li><a href="<?php echo $prefix;?>/home/logout">Logout</a></li>
								</ul>
							</li>
						<?php }else{ ?>
							<li><a href="<?php echo $prefix;?>/home/login"><span>Signup</span></a></li>
							<li class="border-none-r"><a href="<?php echo $prefix;?>/home/login">Login</a></li>
						<?php } ?>
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
			<?php if(!isset($currentPage))$currentPage="";?>
			<ul class="nav navbar-nav" id="second-header">
				<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#get-instant-quote" id="get_instant_quote_popup" class="pd-tp-3">Get Instant Quote</a></li>
				<li><a href="#" data-toggle="modal" data-target="#Get-Proforma-Invoice" class="pd-tp-3">Pro forma Invoice</a></li>
				<li class="<?php if($currentPage=='COMPARE'){echo 'active';}?>"><a href="<?php echo $prefix.'/home/compare';?>" class="pd-tp-3">Compare</a></li>
				
				<li class="dropdown <?php if($currentPage=='LATEST' || $currentPage=='POPULAR' || $currentPage=='UPCOMING'){echo 'active';}?>">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trends <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li <?php if($currentPage == 'LATEST')echo 'class="active"';?>><a href="<?php echo $prefix;?>/home/latest">Latest</a></li>
						<li <?php if($currentPage == 'POPULAR')echo 'class="active"';?>><a href="<?php echo $prefix;?>/home/popular">Popular</a></li>
						<li <?php if($currentPage == 'UPCOMING')echo 'class="active"';?>><a href="<?php echo $prefix;?>/home/upcoming">Upcoming</a></li>
					</ul>
				</li>
				
				

				<li class="<?php if($currentPage=='NEWS'){echo 'active';}?>"><a href="<?php echo $prefix.'/home/news';?>" class="pd-tp-3">News</a></li>
				<li class="<?php if($currentPage=='REVIEW'){echo 'active';}?>"><a href="<?php echo $prefix.'/home/review';?>" class="pd-tp-3">Review</a></li>
				<li><a href="#blog" class="pd-tp-3">Blogs</a></li>
				<li class="dropdown <?php if($currentPage=='TOOLS'){echo 'active';}?>">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">EMI Calculator</a></li>
						<li><a href="<?php echo $prefix;?>/home/service_cost_analyzer">Service Cost Analyzer</a></li>
						<li><a href="<?php echo $prefix.'/home/locate_dealer';?>">Locate a Dealer</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle pd-tp-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#test-drive-modal" id="test-drive">Request for Test Drive</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal" id="adv-book">Advance Booking</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#vehicle-loan-modal" id="vehicle-loan">Apply for Vehicle Loan</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#corporate-deal-modal" id="corporate-deal">Corporate Deals</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#apply-insurance-modal" id="apply-for-insurance">Apply for Insurance</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#road-assistance-modal" id="on-road-assistance">By on Road Assistance</a></li>
					</ul>
				</li>
			</ul> 
		</div>
	</div>
</nav>
	<!-- Modal starts here  advance booking-->
	<div class="modal fade blue-modals" id="adv-book-modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Advance Booking</h4>
				</div>
				<form class="form-horizontal" name="Advance_Booking" role="form"  method="POST" id="Advance-Booking" submit="return false">
				<div class="modal-body">
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa fa-user"></i></span>
							<input type="text" class="form-control" va_req="true" placeholder="Username" name="abFullName" aria-describedby="basic-addon1">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
							<input type="text" class="form-control"  va_req="true" id="abphone" name="abphone" placeholder="eg. 9874563110" />					
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
							<input type="text" class="form-control" va_email="true" va_req="true"  id="abemailID" name="abemailID" placeholder="tony@gmail.com" />				
							</div>
						</div>
					</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="abCity" id="abCity">
								<option value="" >-- Select City --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="abMaker" id="abMaker">
								<option value="">-- Select Maker --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="abModel" id="abModel">
								<option value="">-- Select Model --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" style="width:100%;" va_req="true" name="abVariant" id="abVariant">
								<option value="">-- Select Variant --</option>								
							</select>
						</div>
					   <div class="col-md-12">
						<input class="col-md-1 col-sm-1 col-xs-2" va_req="true"  type="checkbox" value="Agreed" style="float:left;" name="abTermsConditions" id="abTermsConditions" >
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
						</div>
						</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="#" class="search-btn" id="advance-booking" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal ends here -->
	<!-- Get Proforma Invoice -->
	<div class="modal fade blue-modals" id="Get-Proforma-Invoice" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Get Proforma Invoice </h4>
				</div>
				<form action="<?php echo $prefix;?>/home/get_Proforma_Invoice_pdf" method="post">
				<div class="modal-body">
					
					<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
					<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
						<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa fa-user"></i></span>
						<input type="text"  name="fullname" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
					<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
						<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 9874563110" />					
						</div>
					</div>
					<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
					<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
						<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
						<input type="text" class="form-control" id="emailID" name="emailID" placeholder="tony@gmail.com" />				
						</div>
					</div>
					<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Address</label>
					<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
						<textarea class="form-control" rows="3" name="Address" placeholder="Address"></textarea>
					</div>
					<div class="col-md-6">
						<select class="form-control mb-10" id="city" style="width:100%;">
							<option value="">-- Select State --</option>
							<option value="1" >Bangalore</option>
							<option value="1" >Mysore</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="form-control mb-10" id="maker" style="width:100%;">
							<option value="">-- Select City --</option>
							<option value="1" >Bangalore</option>
							<option value="1" >Mysore</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="form-control mb-10" id="model" style="width:100%;">
							<option value="">-- Select Category --</option>
							<option value="1" >Maruti Suzuki</option>
							<option value="1" >Hyundai</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="form-control mb-10" id="Make" style="width:100%;">
							<option value="">-- Select Make --</option>
							<option value="1" >Swift</option>
							<option value="1" >I20</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="form-control mb-10" id="Model" style="width:100%;">
							<option value="">-- Select Model --</option>
							<option value="1" >Petrol</option>
							<option value="1" >Diesel</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="form-control mb-10" id="variant" style="width:100%;">
							<option value="">-- Select Variant --</option>
							<option value="1" >Petrol</option>
							<option value="1" >Diesel</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="form-control mb-10" id="model" style="width:100%;">
							<option value="">-- Select Dealer Name -- </option>
							<option value="1" >Maruti Suzuki</option>
							<option value="1" >Hyundai</option>
						</select>
					</div>
					
				   <div class="col-md-12">
						<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" value="" style="float:left;">
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-6">
							<a href="<?php echo $prefix;?>/home/get_Proforma_Invoice_pdf_download" id="get_Proforma_Invoice_pdf" class="search-btn col-md-6" style="background-color:#F9D133;" >Download</a>
							</div>
							<div class="col-md-6">
							<a href="<?php echo $prefix;?>/home/get_Proforma_Invoice_pdf_download" id="get_Proforma_Invoice_pdf" class="search-btn col-md-6" style="background-color:#F9D133;" >Print</a>
							</div>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
  
	<!--End Get Proforma Invoice -->

	<!-- Request for Test Drive Modal starts here -->
	<div class="modal fade blue-modals" id="test-drive-modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Request for Test Drive</h4>
				</div>
				<div class="modal-body">	
					<form class="form-horizontal" name="Request_for_TestDrive" role="form"  method="POST" id="Request_for_TestDrive" submit="return false">				
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">							
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa fa-user"></i></span>
							<input type="text" name="RTD_Full_Name" id="RTD_Full_Name" va_req="true" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">							
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
							<input type="text" class="form-control" va_req="true" name="RTD_Phone" id="RTD_Phone" placeholder="eg. 9874563110" />					
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
							<input type="text" class="form-control"  name="RTD_Email_id" id="RTD_Email_id" va_req="true" va_email="true"  placeholder="tony@gmail.com" />				
							</div>
							
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Preferred Time </label>						
						<div class="col-md-3 pr-0">
							<div class="input-group date datepicker no-padding">
								<input type="text" class="form-control" va_req="true" name="RTD_Pre_date" id="RTD_Pre_date" value="">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="col-md-2 pl-0">
							<div class="input-group bootstrap-timepicker timepicker">
								<input   va_req="true"  name="RTD_Pre_Time" id="RTD_Pre_Time" type="text" class="form-control input-small inpt-timepicker" value="">
							</div>
						</div>
					</div>	
					<div class="col-md-4">
						<select class="form-control mb-10" id="RTD_City" style="width:100%;" va_req="true" name="RTD_City" >
							<option value="">-- Select City --</option>
							
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control mb-10" style="width:100%;" va_req="true" name="RTD_Category" id="RTD_Category">
							<option value="">-- Select Category --</option>
							
						</select>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<select class="form-control mb-10" style="width:100%;" va_req="true" name="RTD_Maker" id="RTD_Maker">
							<option value="">-- Select Maker --</option>
							
						</select>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<select class="form-control mb-10" style="width:100%;" va_req="true" name="RTD_Model" id="RTD_Model">
							<option value="">-- Select Model --</option>
							
						</select>
					</div>
					<div class="col-md-4">
						<select class="form-control mb-10" style="width:100%;" va_req="true" name="RTD_Variant" id="RTD_Variant">
							<option value="">-- Select Variant --</option>
							
						</select>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<select class="form-control mb-10" style="width:100%;" va_req="true" name="RTD_Dealer_Name" id="RTD_Dealer_Name">
							<option value="">-- Select Dealer Name --</option>
							<option value="1">Hero</option>
							<option value="2">Suzuki</option>
							
						</select>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<select class="form-control mb-10" style="width:100%;" va_req="true" name="RTD_Dealer_Location" id="RTD_Dealer_Location">
							<option value="">-- Select Dealer Location --</option>	
							<option value="1">Bangalore</option>
							<option value="2">HsrLayout</option>							
						</select>
					</div>
					<div class="col-md-12">
						<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox"  value="agreed" style="float:left;" va_req="true" name="RTD_agree" id="RTD_agree">
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="#" class="search-btn" id="Request_TestDrive" name="Request_TestDrive" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Request for Test Drive Modal ends here -->
  
	<!-- Request for Vehicle Loan Modal starts here -->
	<div class="modal fade blue-modals" id="vehicle-loan-modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Vehicle Loan</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" name="apply_for_vehicle_loan" role="form"  method="POST" id="apply_for_vehicle_loan" submit="return false">
						<div class="form-group">
							<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
							<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
								<div class="input-group">
									<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-user"></i></div>
									<input type="text" class="form-control" id="vehlone_username" va_req="true" name="vehlone_username" placeholder="name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
							<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
								<div class="input-group">
									<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-phone"></i></div>
									<input type="text" class="form-control" id="vehlone_phone" va_req="true" name="vehlone_phone" placeholder="9164545924">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
							<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
								<div class="input-group">
									<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-envelope"></i></div>
									<input type="text" class="form-control" id="vehlone_email" va_req="true" va_email="true" name="vehlone_email" placeholder="smishra10002gmail">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="address" class="col-md-3 col-sm-3 col-xs-12 control-label">address</label>
							<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
								<input type="text" class="form-control" id="vehlone_address" va_req="true" name="vehlone_address" placeholder="residential address" />
							</div>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" id="vehlone_booking_amount" style="width:100%;" name="vehlone_booking_amount"  va_req="true">
								<option value="">-- Have you Paid Booking Amount  --</option>
								<option value="Paid" >yes</option>
								<option value="Not Paid" >no</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" va_req="true" id="vehlone_preference_bank" name="vehlone_preference_bank" style="width:100%;">
								<option value="">-- Any Preference to Specific Bank ?  --</option>
								<option value="HDFC" >HDFC</option>
								<option value="KOTAK" >KOTAK</option>
								<option value="ICICI" >ICICI</option>
								<option value="YES" >YES</option>
							</select>
						</div>		
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control" id="vehlone_pan" va_req="true" name="vehlone_pan" placeholder="PAN card No" />
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="vehlone_city" va_req="true" name="vehlone_city"  style="width:100%;">
								<option value="">-- Select City --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="vehlone_category" va_req="true" name="vehlone_category" style="width:100%;">
								<option value="">-- Select Category --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="vehlone_maker" va_req="true" name="vehlone_maker" style="width:100%;">
								<option value="">-- Select Maker --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control entity-type select2 mb-10" id="vehlone_cust_type" va_req="true" name="vehlone_cust_type" style="width:100%;">
								<option value="">-- customer type --</option>
								<option value="Salaried" >Salaried</option>
								<option value="Self Employed" >Self Employed</option>
								<option value="Partnership-Pvt Ltd –Public Ltd Co" >Partnership-Pvt Ltd –Public Ltd Co</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control entity-type select2 mb-10" id="vehlone_loan_amount" va_req="true" name="vehlone_loan_amount" style="width:100%;">
								<option value="">-- loan amount --</option>
								<option value="Less than 1 Lakh" >Less than 1 Lakh</option>
								<option value="1-2 Lakhs" >1-2 Lakhs</option>
								<option value="3 to 5 Lakhs" >3 to 5 Lakhs</option>
								<option value="5 to 7 Lakhs" >5 to 7 Lakhs</option>
								<option value="10 lakhs to 15 Lakhs" >10 lakhs to 15 Lakhs</option>
								<option value="15 to 20 Lakhs" >15 to 20 Lakhs</option>
								<option value="20 to 50 Lakhs" >20 to 50 Lakhs</option>
								<option value="50 Lakhs and Above" >50 Lakhs and Above</option>  
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control entity-type select2 mb-10" id="vehlone_loan_duration" va_req="true" name="vehlone_loan_duration" style="width:100%;">
								<option value="">-- Loan Duration --</option>
								<option value="1" >1 Year</option>
								<option value="2" >2 Year</option>
								<option value="3" >3 Years</option>
								<option value="4" >4 Years</option>
								<option value="5" >5 Years</option>
								<option value="6" >6 Years and above</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control entity-type select2 mb-10" id="vehlone_purchase_time" va_req="true" name="vehlone_purchase_time" style="width:100%;">
								<option value="">-- Purchase Time Frame  --</option>
								<option value="Immediate" >Immediate</option>
								<option value="1-2 weeks" >1-2 weeks</option>
								<option value="3-4 weeks" > 3-4 weeks</option>
								<option value="4 to 8 weeks" >4 to 8 weeks</option>
								<option value="10 weeks and Above" > 10 weeks and Above</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="vehlone_model" va_req="true" name="vehlone_model"  style="width:100%;">
								<option value="">-- Select Model --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="vehlone_variant" va_req="true" name="vehlone_variant" style="width:100%;">
								<option value="">-- Select Variant --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="vehlone_dealerName" va_req="true" name="vehlone_dealerName" style="width:100%;">
								<option value="">-- Select Dealer Name --</option>
								<option value="King Cars">King Cars</option>
								<option value="Super Cars">Super Cars</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="vehlone_dealerLocation" va_req="true" id="vehlone_dealerLocation" style="width:100%;">
								<option value="">-- Select Dealer Location --</option>
								<option value="HSR Layout" >HSR Layout</option>
								<option value="Majestic" >Majestic</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control" id="loan" name="loan" placeholder="Loan Amount" />
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control" id="bank" name="bank" placeholder="Bank Name" />
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control" id="vehlone_annual" name="vehlone_annual" placeholder="Annual Income"  va_req="true"/>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control" id="vehlone_bankLocation" name="vehlone_bankLocation" placeholder="Bank Location"  va_req="true"/>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control" id="vehlone_timeticall" name="vehlone_timeticall" placeholder="what is the best time to call you?"  va_req="true"/>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control" id="vehlone_salaryAccountBank" name="vehlone_salaryAccountBank" placeholder="which bank you have salary account?" va_req="true" />
						</div>
						<div class="col-md-12">
							<label for="comment">Any specific comment</label>
							<textarea class="form-control" rows="2" id="vehlone_comment"  va_req="true"></textarea>
						 </div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="checkbox" class="col-md-1 col-sm-1 col-xs-2" name="vehlone_termsandconditions" id="vehlone_termsandconditions" value="agreed" style="float:left;"  va_req="true">
								<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
									I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="javascript:void(0)" id="btn_apply_vehicle_loan" class="search-btn" style="background-color:#F9D133;" >Save</a>
								<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Request for Vehicle Loan Modal ends here -->
  
	<!-- Corporate Deals Modal starts here -->
	<div class="modal fade blue-modals" id="corporate-deal-modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form class="form-horizontal" name="corporate_deals_form" role="form"  method="POST" id="corporate_deals_form" submit="return false">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="text-center modal-title">Corporate Deals</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
							<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
								<div class="input-group">
									<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-user"></i></div>
									<input type="text" class="form-control" va_req="true" id="corp_fullname" name="corp_fullname" placeholder="full name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
							<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
								<div class="input-group">
									<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-phone"></i></div>
									<input type="text" class="form-control"  va_req="true" id="corp_phone" name="corp_phone" placeholder="1234567890">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
							<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
								<div class="input-group">
									<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-envelope"></i></div>
									<input type="text" class="form-control"  va_req="true" va_email="true" id="corp_email" name="corp_email" placeholder="abcd@gmail.com">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">address</label>
							<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
								<input type="text" class="form-control"  va_req="true" id="corp_address" name="corp_address" placeholder="office or residential address" />
							</div>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" id="corp_city"  va_req="true" style="width:100%;">
								<option value="">-- Select City --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" id="corp_maker"  va_req="true" style="width:100%;">
								<option value="">-- Select Maker --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" id="corp_model"  va_req="true" style="width:100%;">
								<option value="">-- Select Model --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" id="corp_variant"  va_req="true" style="width:100%;">
								<option value="">-- Select Variant --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="corp_category"  va_req="true" style="width:100%;">
								<option value="">-- Select Category --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control" id="corp_quality_of_vehicle"  va_req="true" name="corp_quality_of_vehicle" placeholder="quantity of vechiles" />
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="corp_customerType"  va_req="true" style="width:100%;">
								<option value="">--Customer Type --</option>
								<option value="Proprietary" >Proprietary</option>
								<option value="LLP" > LLP</option>
								<option value="Joint Venture" > Joint Venture</option>
								<option value="Partnership-Pvt Ltd –Public Ltd Co"> Partnership-Pvt Ltd –Public Ltd Co</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="corp_needloan"  va_req="true" style="width:100%;">
								<option value="">-- Do you also need Loan --</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="corp_loan_amount"  va_req="true" style="width:100%;">
								<option value="">-- What is the Loan Amount Looking for --</option>
								<option value="5 to 10 Lakhs" >5 to 10 Lakhs</option>
								<option value="10 lakhs to 15 Lakhs" > 10 lakhs to 15 Lakhs</option>
								<option value="15 to 20 Lakhs" > 15 to 20 Lakhs</option>
								<option value="20 to 50 Lakhs" > 20 to 50 Lakhs</option>
								<option value="50 Lakhs and Above" > 50 Lakhs and Above</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control entity-type  mb-10"  va_req="true" id="corp_loan_duration" style="width:100%;">
								<option value="">-- Loan Duration --</option>
								<option value="1 Year" >1 Year</option>
								<option value="2 Year" >2 Year</option>
								<option value="3 Years" >3 Years</option>
								<option value="4 Years" >4 Years</option>
								<option value="5 Years" >5 Years</option>
								<option value="6 Years and above" >6 Years and above</option>
							</select>
						</div>
						 <div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10"  va_req="true" id="corp_pref_bank" style="width:100%;">
								<option value="">-- Any Preference to Specific Bank ?  --</option>
								<option value="HDFC" >HDFC</option>
								<option value="KOTAK" >KOTAK</option>
								<option value="ICICI" >ICICI</option>
								<option value="YES" >YES</option>
							</select>
					   </div>	
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control entity-type  mb-10"  va_req="true" id="corp_purchase_time_frame" style="width:100%;">
								<option value="">-- Purchase Time Frame  --</option>
								<option value="Immediate" >Immediate</option>
								<option value="1-2 weeks" >1-2 weeks</option>
								<option value="3-4 weeks" > 3-4 weeks</option>
								<option value="4 to 8 weeks" >4 to 8 weeks</option>
								<option value="10 weeks and Above" > 10 weeks and Above</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control"  va_req="true" id="corp_best_time_to_call" name="corp_best_time_to_call" placeholder="what is the best time to call you?" />
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<input type="text" class="form-control"  va_req="true" id="corp_salary_account" name="corp_salary_account" placeholder="which bank you have salary account?" />
						</div>
						 <div class="col-md-12">
							<label for="comment">Any specific comment</label>
							<textarea class="form-control" rows="2"  va_req="true" id="corp_comment"></textarea>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" name="corp_termsadnconditions" va_req="true" id="corp_termsadnconditions" value="agreed" style="float:left;">
								<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
									I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
								</div>
							</div>
						</div>
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)" class="search-btn" id="corp_save_data" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Corporate Deals Modal ends here -->
  
	<!-- Apply for Insurance Modal starts here -->
	<div class="modal fade blue-modals" id="apply-insurance-modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Apply for Insurance</h4>
				</div>
				<form class="form-horizontal" name="Apply_for_insurance" role="form"  method="POST" id="Apply-for-insurance" submit="return false">
				<div class="modal-body">
					<div class="modal-body">
                     <div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
								<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-user"></i></div>
								<input type="text" class="form-control" id="insurance_fullname"  va_req="true" name="insurance_fullname" placeholder="name">
							</div>
						</div>
					</div>					
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
								<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-phone"></i></div>
								<input type="text" class="form-control" id="insurance_phone" name="insurance_phone"  va_req="true" placeholder="9164545924">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
								<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-envelope"></i></div>
								<input type="text" class="form-control" id="insurance_email" name="insurance_email"  va_req="true"placeholder="smishra10002gmail">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="model" class="col-md-3 col-sm-3 col-xs-12 control-label">Model</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control mb-10" id="insurance_model" va_req="true" style="width:100%;">
								<option value="">-- Select Model --</option>
								<option value="1" >Swift</option>
								<option value="1" >I20</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="variant" class="col-md-3 col-sm-3 col-xs-12 control-label">Variant</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control mb-10" id="insurance_variant" va_req="true" style="width:100%;">
								<option value="">-- Select Variant --</option>
								<option value="1" >Petrol</option>
								<option value="1" >Diesel</option>
							</select>
						</div>
					</div>					
					<div class="form-group">
						<label for="city" class="col-md-3 col-sm-3 col-xs-12 control-label">City</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control mb-10" id="insurance_city"  va_req="true" style="width:100%;">
								<option value="">-- Select City --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="Expiry_Date" class="col-md-3 field_titles ">
							Preferred Time <span class="form-man"> * </span>
						</label>
						<div class="col-md-3 pr-0">
							<div class="input-group date datepicker no-padding">
								<input type="text" class="form-control" va_req="true" name="insurance_date" id="insurance_date" value="">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="col-md-2 pl-0">
							<div class="input-group bootstrap-timepicker timepicker">
								<input  type="text"  name="reg_time" va_req="true"  name="insurance_time" id="insurance_time" type="text" class="form-control input-small inpt-timepicker" value="">
							</div>
						</div>
					</div>	
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_maker" va_req="true" style="width:100%;">
								<option value="">-- Select Maker --</option>
								<option value="1" >Maruti Suzuki</option>
								<option value="1" >Hyundai</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_use" va_req="true" style="width:100%;">
								<option value="">-- personal use or Commercial use --</option>
								<option value="White Board" >White Board</option>
								<option value="Yellow Board" >Yellow Board</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_customer_type" va_req="true" style="width:100%;">
								<option value="">-- Customer Type --</option>
								<option value="Proprietary" >Proprietary</option>
								<option value="LLP" >LLP</option>
								<option value="Joint Venture" >Joint Venture</option>
								<option value="Partnership-Pvt Ltd" >Partnership-Pvt Ltd</option>
								<option value="Public Ltd Co" >Public Ltd Co</option>
							</select>
						</div>
					
					
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_need_loan" va_req="true" style="width:100%;">
								<option value="">-- Do you also need Loan --</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_loan_amount" va_req="true" style="width:100%;">
								<option value="">-- What is the Loan Amount Looking --</option>
								<option value="5 to 10 Laks" >5 to 10 Laks</option>
								<option value="10 laks to 15 Laks" >10 laks to 15 Laks</option>
								<option value="15 to 20 Laks" >15 to 20 Laks</option>
								<option value="20 to 50 Laks" >20 to 50 Laks</option>
								<option value="50 Laks and Above" >50 Laks and Above</option>
							</select>
						</div>
					
					
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_duration" va_req="true" style="width:100%;">
								<option value="">-- Loan Duration --</option>
								<option value="1 Year" >1 Year</option>
								<option value="2 Year" >2 Year</option>
								<option value="3 Year" >3 Year</option>
								<option value="4 Year" >4 Year</option>
								<option value="5 Year" >5 Year</option>
								<option value="6 Year and Above" >6 Year and Above</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_time_frame" va_req="true" style="width:100%;">
								<option value="">-- Purchase Time Frame --</option>
								<option value="Immediate" >Immediate</option>
								<option value="1-2 weeks" >1-2 weeks</option>
								<option value="3-4 weeks" >3-4 weeks</option>
								<option value="4 to 8 weeks" >4 to 8 weeks</option>
								<option value="10 weeks and Above" >10 weeks and Above</option>
							</select>
						</div>
					
					
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_preferd_bank" va_req="true" style="width:100%;">
								<option value="">-- Preference to Specific Bank --</option>
								<option value="HDFC" >HDFC</option>
								<option value="KOTAK" >KOTAK</option>
								<option value="ICICI" >ICICI</option>
								<option value="YES" >YES</option>
								<option value="AXIS" >AXIS </option>
								<option value="Other" >Other</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="insurance_bank_account"  va_req="true" style="width:100%;">
								<option value="">-- Which bank you have Current Account --</option>
								<option value="HDFC" >HDFC</option>
								<option value="KOTAK" >KOTAK</option>
								<option value="ICICI" >ICICI</option>
								<option value="YES" >YES</option>
								<option value="AXIS" >AXIS </option>
								<option value="Other" >Other</option>
								
							</select>
						</div>
					
					<div class="col-md-12">
						<label for="comment">Any specific comment</label>
                        <textarea class="form-control" rows="2" id="insurance_comment" va_req="true"></textarea>
					</div>				
					<div class="form-group">
						<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" value="agree" id="insurance_agree"  style="float:left;">
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="‘I agree to Terms & Conditions’ before submitting the record. ( Here is the TEXT for Terms and Conditions : I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)"  id="insurance-save" class="search-btn" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Apply for Insurance Modal ends here -->
  
	<!-- By on Road Assistance Modal starts here -->
	<div class="modal fade blue-modals" id="road-assistance-modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">By on Road Assistance</h4>
				</div>
				<form class="form-horizontal" name="by_on_road_asistance" role="form"  method="POST" id="By-on-road-assistance" submit="return false">
				<div class="modal-body">
				
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
								<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-user"></i></div>
								<input type="text" class="form-control" id="boraFullName"  va_req="true" name="boraFullName" placeholder="name">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
								<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-phone"></i></div>
								<input type="text" class="form-control" id="boraPhone"  va_req="true" name="boraPhone" placeholder="9164545924">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
								<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-envelope"></i></div>
								<input type="text" class="form-control" id="boraEmail" va_req="true" name="boraEmail" placeholder="smishra10002gmail">
							</div>
						</div>
					</div>
					
						
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="boraCity"   va_req="true" name="boraCity" style="width:100%;">
								<option value="">-- Select City --</option>
								
							</select>
						</div>
				
					
						
						<div class="col-md-4">
							<select class="form-control mb-10" id="boraMaker"   va_req="true" name="boraMaker" style="width:100%;">
								<option value="">-- Select Maker --</option>
								
							</select>
						</div>
					
					
						
						<div class="col-md-4">
							<select class="form-control mb-10" id="boraModel"   va_req="true" name="boraModel" style="width:100%;">
								<option value="">-- Select Model --</option>
								
							</select>
						</div>
					
					
						
						<div class="col-md-4">
							<select class="form-control mb-10" id="boraVarient"  va_req="true" name="boraVarient" style="width:100%;">
								<option value="">-- Select Variant --</option>
								
							</select>
						</div>
				
					
						
						<div class="col-md-4">
							<select class="form-control mb-10" id="boraCategory"  va_req="true" name="boraCategory" style="width:100%;">
								<option value="">-- Select Category --</option>
								
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" id="boraUse"   va_req="true" name="boraUse"style="width:100%;">
								<option value="">-- personal use or commercial use  --</option>
								<option value="White Board" >White Board</option>
								<option value="Yellow Board" > Yellow Board</option>
							</select>
						</div>
					
					
						<div class="col-md-4">
							<select class="form-control mb-10" id="boraPlan" va_req="true" name="boraPlan"style="width:100%;">
								<option value="">-- Are you looking--</option>
								<option value="Individual plan" > Individual plan</option>
								<option value="Corporate Plan" > Corporate Plan </option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" id="boraPurchase"   va_req="true" name="boraPurchase"style="width:100%;">
								<option value="">--Bulk Purchase for Corporates  --</option>
								<option value="yes" >yes</option>
								<option value="no" >no</option>
							</select>
						</div>
				
				
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="boraRoadcompanies"  va_req="true" name="boraRoadcompanies"style="width:100%;">
								<option value="">-list of on road companies--</option>
								<option value="abc" >abc </option>
								<option value="abcd" >abcd  </option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control mb-10" id="boraPackage"  va_req="true" name="boraPackage"style="width:100%;">
								<option value="">Types of On Road Assistance Packages</option>
								<option value="yes" >yes</option>
								<option value="no" >no</option>
							</select>
						</div>
					
				
						<div class="col-md-4 ">
							<input type="text" class="form-control mb-10" id="boraPackbenifits"  va_req="true" name="boraPackbenifits" placeholder="packge benifits" />
						</div>
						<div class="col-md-4 ">
							<input type="text" class="form-control mb-10" id="boraPackcost"  va_req="true"name="boraPackcost" placeholder="cost of the packege" />
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control entity-type  mb-10"   va_req="true" name="boraTimeframe"id="boraTimeframe" style="width:100%;">
								<option value="">-- Purchase Time Frame  --</option>
								<option value="Immediate" >Immediate</option>
								<option value="1-2 weeks" >1-2 weeks</option>
								<option value="3-4 weeks" > 3-4 weeks</option>
								<option value="4 to 8 weeks" >4 to 8 weeks</option>
								<option value="10 weeks and Above" > 10 weeks and Above</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<select class="form-control entity-type" id="boraPaymentdetails" va_req="true" name="boraPaymentdetails"style="width:100%;">
								<option value="">--payment details --</option>
								<option value="NEFT" >NEFT</option>
								<option value="IMPS" >IMPS</option>
								<option value="CASH" >CASH</option>
								<option value="CHEQUE" >CHEQUE</option>
								<option value="DD Transaction details" >DD Transaction details</option>
							</select>
						</div>
					
					
						<div class="col-md-4 col-sm-4 col-xs-4">
							<input type="text" class="form-control" id="boraTimecall" name="boraTimecall" va_req="true" placeholder="what is the best time to call you?" />
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
							<label for="comment">Any specific comment</label>
                        <textarea class="form-control" rows="2" id="boraComment" va_req="true" name="boraComment"></textarea>
						</div>
					
					<div class="form-group">
						<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" value="agreed"  va_req="true" id="boraAgree" name="boraAgree"style="float:left;">
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="‘I agree to Terms & Conditions’ before submitting the record. ( Here is the TEXT for Terms and Conditions : I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)" class="search-btn" id="by-on-road-assistance" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
	<!-- By on Road Assistance Modal ends here -->
	
	<!-- get-instant-quote Modal starts here -->
	<div class="modal fade  left blue-modals" id="get-instant-quote" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Get Instant Quote</h4>
				</div>
				<div class="modal-body">
						<form class="form-horizontal" name="get_instant_quote_form" role="form"  method="POST" id="get_instant_quote_form" submit="return false">
						   <div class="col-md-6">
								<select class="form-control mb-10" id="instquote_country" name="instquote_country" style="width:100%;" va_req="true">
									<option value="">-- Select Country --</option>
								</select>
							</div>
						   <div class="col-md-6">
								<select class="form-control mb-10" id="instquote_state" name="instquote_state" style="width:100%;" va_req="true">
									<option value="">-- Select State --</option>
								</select>
							</div>
							<div class="col-md-6">
								<select class="form-control mb-10" id="instquote_city" name="instquote_city" style="width:100%;" va_req="true">
									<option value="">-- Select City --</option>
								</select>
							</div>
							<div class="col-md-6">
								<select class="form-control mb-10" id="instquote_category" name="instquote_category" style="width:100%;" va_req="true">
									<option value="">-- Select Category --</option>
								</select>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<select class="form-control mb-10" id="instquote_maker" name="instquote_maker" style="width:100%;" va_req="true">
									<option value="">--  Select Make --</option>
								</select>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<select class="form-control mb-10" id="instquote_model" name="instquote_model" style="width:100%;" va_req="true">
									<option value="">-- Select Model --</option>
								</select>
							</div>
							<div class="col-md-6">
								<select class="form-control mb-10" id="instquote_variant" name="instquote_variant" style="width:100%;" va_req="true">
									<option value="">-- Select Variant --</option>
								</select>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<select class="form-control mb-10" id="instquote_dealerName" name="instquote_dealerName" style="width:100%;" va_req="true">
									<option value="">-- Select Dealer Name --</option>
									<option value="1" >Maruti Suzuki</option>
									<option value="1" >Hyundai</option>
								</select>
							</div>
							<div class="col-md-12">
							<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" id="instquote_termandconditions" name="instquote_termandconditions" value="agreed" style="float:left;" va_req="true">
							<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
								I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
							</div>
							</div>
						<div class="form-group">
							<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="javascript:void(0)"  class="search-btn" id="get_instant_quote_form_save" style="background-color:#F9D133;" >Get Instant Quote</a>
								<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
								
							</div>
						</div>
					</form>
						<div  class="col-md-12 "id="get-instant-quote-div"  style="display:none;  background-color:#ffffff;margin-top:20px;" > 
						   <div class="col-md-6" >
						    <h1><font color="red"><i class="fa fa-inr"></i>&nbsp; 3,18,939</font><h5><h2><font color="black">On-Road-Price</font></h5>
						   </div>
						   <div class="col-md-6"style="border-left: 1px solid #ccc;">
						   <table>
							<thead>
							<tr>
							<th class="col-md-9"></th>
							<th class="col-md-3"></th>
							<tr>
							</thead>
							<tbody style="color: black; font-size:20px;"> 
							<tr>
							
							<td class="">Ex-showroom:</td>
							<td class="" ><i class="fa fa-inr"></i> 2,73,594</td>
							</tr>
							<tr>
							<td class="">Insurance:</td>
							<td class=""><i class="fa fa-inr"></i>2,73,594</td>
							</tr>
							<tr>
							<td class="">RTO:</td>
							<td class=""><i class="fa fa-inr"></i>2,73,594</td>
							</tr>
							<tr>
							<td class="">Road Tax:</td>
							<td class=""><i class="fa fa-inr"></i>2,73,594</td>
							</tr>
							<tr>
							<td class="">Other Handling Charges:</td>
							<td class=""><i class="fa fa-inr"></i>2,73,594</td>
							</tr>
							</tbody>
							</table>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- get-instant-quote model ends here -->	
	
	
	
	
 