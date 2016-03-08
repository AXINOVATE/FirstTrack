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
						<li><a href="#"><span>Dealer Signup</span></a></li>
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
			<?php if(!isset($currentPage))$currentPage="";?>
			<ul class="nav navbar-nav" id="second-header">
				<li <?php if($currentPage == 'LATEST')echo 'class="active"';?>><a href="<?php echo $prefix;?>/home/latest" class="pd-tp-3">Latest</a></li>
				<li <?php if($currentPage == 'POPULAR')echo 'class="active"';?>><a href="<?php echo $prefix;?>/home/popular" class="pd-tp-3">Popular</a></li>
				<li <?php if($currentPage == 'UPCOMING')echo 'class="active"';?>><a href="<?php echo $prefix;?>/home/upcoming" class="pd-tp-3">Upcoming</a></li>
				<li class="<?php if($currentPage=='COMPARE'){echo 'active';}?>"><a href="<?php echo $prefix.'/home/compare';?>" class="pd-tp-3">Compare</a></li>

				<li class="<?php if($currentPage=='NEWS'){echo 'active';}?>"><a href="<?php echo $prefix.'/home/news';?>" class="pd-tp-3">News</a></li>
				<li><a href="#review" class="pd-tp-3">Reviews</a></li>
				<li><a href="#blog" class="pd-tp-3">Blogs</a></li>
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
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#test-drive-modal">Request for Test Drive</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal">Advance Booking</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#vehicle-loan-modal">Apply for Vehicle Loan</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#corporate-deal-modal">Corporate Deals</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#apply-insurance-modal">Apply for Insurance</a></li>
						<li><a href ="javascript:void(0)" data-toggle="modal" data-target="#road-assistance-modal">By on Road Assistance</a></li>
					</ul>
				</li>
			</ul> 
		</div>
	</div>
</nav>
	

	
	<!-- Modal starts here -->
	<div class="modal fade blue-modals" id="adv-book-modal" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Advance Booking</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" />
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 9874563110" />
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="emailID" name="emailID" placeholder="tony@gmail.com" />
						</div>
					</div>
					<div class="form-group">
						<label for="city" class="col-md-3 col-sm-3 col-xs-12 control-label">City</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="city" style="width:100%;">
								<option value="">-- Select City --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="maker" class="col-md-3 col-sm-3 col-xs-12 control-label">Maker</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="maker" style="width:100%;">
								<option value="">-- Select Maker --</option>
								<option value="1" >Maruti Suzuki</option>
								<option value="1" >Hyundai</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="model" class="col-md-3 col-sm-3 col-xs-12 control-label">Model</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="model" style="width:100%;">
								<option value="">-- Select Model --</option>
								<option value="1" >Swift</option>
								<option value="1" >I20</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="variant" class="col-md-3 col-sm-3 col-xs-12 control-label">Variant</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="variant" style="width:100%;">
								<option value="">-- Select Variant --</option>
								<option value="1" >Petrol</option>
								<option value="1" >Diesel</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)" class="search-btn" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Modal ends here -->
  
	<!-- Request for Test Drive Modal starts here -->
	<div class="modal fade blue-modals" id="test-drive-modal" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Request for Test Drive</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" />
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 9874563110" />
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="emailID" name="emailID" placeholder="tony@gmail.com" />
						</div>
					</div>
					<div class="form-group">
						<label for="datetime" class="col-md-3 col-sm-3 col-xs-12 control-label">Preferred Time</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="datetime" name="datetime" placeholder="24-04-2016" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="city" style="width:100%;">
								<option value="">-- Select City --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="category" style="width:100%;">
								<option value="">-- Select Category --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="maker" style="width:100%;">
								<option value="">-- Select Maker --</option>
								<option value="1" >Maruti Suzuki</option>
								<option value="1" >Hyundai</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="model" style="width:100%;">
								<option value="">-- Select Model --</option>
								<option value="1" >Swift</option>
								<option value="1" >I20</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="variant" style="width:100%;">
								<option value="">-- Select Variant --</option>
								<option value="1" >Petrol</option>
								<option value="1" >Diesel</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-6 hidden-xs mb-10"> <div class="mb-10" style="height:34px;"></div> </div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="dealerName" style="width:100%;">
								<option value="">-- Select Dealer Name --</option>
								<option value="1" >Maruti Suzuki</option>
								<option value="1" >Hyundai</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="dealerLocation" style="width:100%;">
								<option value="">-- Select Dealer Location --</option>
								<option value="1" >HSR Layout</option>
								<option value="1" >Marathahalli</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" value="" style="float:left;">
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)" class="search-btn" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Request for Test Drive Modal ends here -->
  
	<!-- Request for Vehicle Loan Modal starts here -->
	<div class="modal fade blue-modals" id="vehicle-loan-modal" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Vehicle Loan</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" />
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 9874563110" />
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="emailID" name="emailID" placeholder="tony@gmail.com" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
							<input type="text" class="form-control" id="pan" name="pan" placeholder="PAN card No" />
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="city" style="width:100%;">
								<option value="">-- Select City --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="city" style="width:100%;">
								<option value="">-- Select Category --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="maker" style="width:100%;">
								<option value="">-- Select Maker --</option>
								<option value="1" >Maruti Suzuki</option>
								<option value="1" >Hyundai</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="model" style="width:100%;">
								<option value="">-- Select Model --</option>
								<option value="1" >Swift</option>
								<option value="1" >I20</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="variant" style="width:100%;">
								<option value="">-- Select Variant --</option>
								<option value="1" >Petrol</option>
								<option value="1" >Diesel</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="dealerName" style="width:100%;">
								<option value="">-- Select Dealer Name --</option>
								<option value="1" >Swift</option>
								<option value="1" >I20</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="dealerLocation" style="width:100%;">
								<option value="">-- Select Dealer Location --</option>
								<option value="1" >HSR Layout</option>
								<option value="1" >Majestic</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
							<input type="text" class="form-control" id="loan" name="loan" placeholder="Loan Amount" />
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
							<input type="text" class="form-control" id="bank" name="bank" placeholder="Bank Name" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
							<input type="text" class="form-control" id="annual" name="annual" placeholder="Annual Income" />
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
							<input type="text" class="form-control" id="bankLocation" name="bankLocation" placeholder="Bank Location" />
						</div>
					</div>
					<div class="form-group">
						<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" value="" style="float:left;">
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							I agree to Nayagaadi.com <a href="javascript:void(0)" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)" class="search-btn" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Request for Vehicle Loan Modal ends here -->
  
	<!-- Corporate Deals Modal starts here -->
	<div class="modal fade blue-modals" id="corporate-deal-modal" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Corporate Deals</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" />
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 9874563110" />
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="emailID" name="emailID" placeholder="tony@gmail.com" />
						</div>
					</div>
					<div class="form-group">
						<label for="city" class="col-md-3 col-sm-3 col-xs-12 control-label">City</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="city" style="width:100%;">
								<option value="">-- Select City --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="maker" class="col-md-3 col-sm-3 col-xs-12 control-label">Maker</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="maker" style="width:100%;">
								<option value="">-- Select Maker --</option>
								<option value="1" >Maruti Suzuki</option>
								<option value="1" >Hyundai</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="model" class="col-md-3 col-sm-3 col-xs-12 control-label">Model</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="model" style="width:100%;">
								<option value="">-- Select Model --</option>
								<option value="1" >Swift</option>
								<option value="1" >I20</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="variant" class="col-md-3 col-sm-3 col-xs-12 control-label">Variant</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="variant" style="width:100%;">
								<option value="">-- Select Variant --</option>
								<option value="1" >Petrol</option>
								<option value="1" >Diesel</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)" class="search-btn" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Corporate Deals Modal ends here -->
  
	<!-- Apply for Insurance Modal starts here -->
	<div class="modal fade blue-modals" id="apply-insurance-modal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Apply for Insurance</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" />
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 9874563110" />
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="emailID" name="emailID" placeholder="tony@gmail.com" />
						</div>
					</div>
					<div class="form-group">
						<label for="city" class="col-md-3 col-sm-3 col-xs-12 control-label">City</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="city" style="width:100%;">
								<option value="">-- Select City --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="maker" class="col-md-3 col-sm-3 col-xs-12 control-label">Maker</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="maker" style="width:100%;">
								<option value="">-- Select Maker --</option>
								<option value="1" >Maruti Suzuki</option>
								<option value="1" >Hyundai</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="model" class="col-md-3 col-sm-3 col-xs-12 control-label">Model</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="model" style="width:100%;">
								<option value="">-- Select Model --</option>
								<option value="1" >Swift</option>
								<option value="1" >I20</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="variant" class="col-md-3 col-sm-3 col-xs-12 control-label">Variant</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="variant" style="width:100%;">
								<option value="">-- Select Variant --</option>
								<option value="1" >Petrol</option>
								<option value="1" >Diesel</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)" class="search-btn" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Apply for Insurance Modal ends here -->
  
	<!-- By on Road Assistance Modal starts here -->
	<div class="modal fade blue-modals" id="road-assistance-modal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">By on Road Assistance</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" />
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 9874563110" />
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<input type="text" class="form-control" id="emailID" name="emailID" placeholder="tony@gmail.com" />
						</div>
					</div>
					<div class="form-group">
						<label for="city" class="col-md-3 col-sm-3 col-xs-12 control-label">City</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="city" style="width:100%;">
								<option value="">-- Select City --</option>
								<option value="1" >Bangalore</option>
								<option value="1" >Mysore</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="maker" class="col-md-3 col-sm-3 col-xs-12 control-label">Maker</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="maker" style="width:100%;">
								<option value="">-- Select Maker --</option>
								<option value="1" >Maruti Suzuki</option>
								<option value="1" >Hyundai</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="model" class="col-md-3 col-sm-3 col-xs-12 control-label">Model</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="model" style="width:100%;">
								<option value="">-- Select Model --</option>
								<option value="1" >Swift</option>
								<option value="1" >I20</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="variant" class="col-md-3 col-sm-3 col-xs-12 control-label">Variant</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="form-control entity-type select2 mb-10" id="variant" style="width:100%;">
								<option value="">-- Select Variant --</option>
								<option value="1" >Petrol</option>
								<option value="1" >Diesel</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="javascript:void(0)" class="search-btn" style="background-color:#F9D133;" >Save</a>
							<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- By on Road Assistance Modal ends here -->
 