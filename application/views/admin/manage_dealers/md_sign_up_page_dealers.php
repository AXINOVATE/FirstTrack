<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome First Track</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<style type="text/css">
		.picture-color-edit >tr>td>img{text-align:center !important;}
		hr.style-eight {
					 height: 10px;
					  border: 1;
				  background: #F9D133;
		}
		.panel-heading a:after {
			font-family:'Glyphicons Halflings';
			content:"\e114";
			float: right;
			color: #fff;
		}
		.panel-heading a.collapsed:after {
			content:"\e080";
		}
		.panel-default>.panel-heading {
			color: #FFF !important;
			background-color: #0050CC !important;
			border-color: #ddd !important;
		} 

	</style>
</head>
<body style="background-color:#EFEFEF;">
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<div class="">
						<h4><center><b>Welcome to be a member of NayaGaadi Online Dealer Network</b> </center></h4>
					</div>
					<hr class="style-eight"/>
					<div class="">
						<h4>Grow your business with NayaGaadi Dealer platform.</h4>
					</div>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default" id="panel1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseOne" 
									   href="#collapseOne">
									  Join NayaGaadi Dealer platform
									</a>
								</h4>

							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<div class="ml-10">
										<p class="mb-20"><i class="fa fa-check"></i>&nbsp  Build your Own Brand online.</p>
										<p class="mb-20"><i class="fa fa-check"></i>&nbsp  Increase Trust and Visibility in the marketplace.</p>
										<p class="mb-20"><i class="fa fa-check"></i>&nbsp  Get your Inventory visible to all the customers.</p>
										<p class="mb-20"><i class="fa fa-check"></i>&nbsp  Manage you inventory quickly and on the GO !!</p>
										<p class="mb-20"><i class="fa fa-check"></i>&nbsp  Get 24x7 customer care and dealer support.</p>
										<p class="mb-20"><i class="fa fa-check"></i>&nbsp  India's first Online Marketplace for all brand new vehicles. Get benefitted.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default" id="panel2">
							<div class="panel-heading">
								 <h4 class="panel-title">
							<a data-toggle="collapse" data-target="#collapseTwo" 
							   href="#collapseTwo" class="collapsed">
							  Benefits of NayaGaadi Technology Driven Online Marketplace platform
							</a>
						  </h4>

							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="ml-10">
										<h4>Quick, Simple and Easy Access to Buyers:</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp  Quick, Simple and Easy Access to Buyers:
											No need to search anymore, we provide quality and paid customers looking to buy new vehicles.</p>
										<h4>No Discounts on the New Vehicles</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp Just like any E commerce platform, we don't discount your products. Customer buys Dealers On Road Price. You can pass on any of the benefits company provides to customers time to time.</p>
										<h4>Price to Market</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp  We help you to bring Price to Market to be more transparent, efficient and trusted player.</p>
										<h4>Discovery Platform</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp  We are a Discovery, Demand and Delivery platform for all new vehicles.</p>
										<h4>Free Listings</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp List your stock and update your inventory to our empanelled dealers across India and Sell your Products quickly. All and unlimited listings are FREE.</p>
										<h4>Large Number of Buyers</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp You don't need to spend additional marketing cost. We assure a ZERO marketing cost with us and more savings. </p>
										<h4>Zero Loss of Customers</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp Our Platform track enquiries with follow up dates and assistance in fulfilling the transaction.</p>
										<h4>Sell Bikes, Scooters, Cars etc before you cut your loss</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp Sell your Inventory before 90 days to avoid your inventory loss and future profit margins. </p>
										<h4>Informative Reports</h4>
											<p class="mb-20"><i class="fa fa-check"></i>&nbsp Get reports on customers who purchased vehicles from you. We would add more basic features soon. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default" id="panel3">
							<div class="panel-heading">
								 <h4 class="panel-title">
							<a data-toggle="collapse" data-target="#collapseThree"
							   href="#collapseThree" class="collapsed">
							  What Else you looking for...?
							</a>
						  </h4>

							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
								
									<p class="mb-20"><i class="fa fa-check"></i>&nbsp Become a member of NayaGaadi Online Dealer Network now ! </p>
									
									<h4>Contact us:</h4>
									<div class="well">
										
										Balaji K, Founder and CEO<br>
										+91-9900-151719<br>
										DealerCare@Nayagaadi.com<br>

										
									</div>

								</div>
							</div>
						</div>
					</div>
					
					
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
				<form id="dealer_form" method="POST" action="#" onSubmit="return false;">
					<h4><center><strong>Signup Page for Dealers</strong> </center></h4>
					<hr class="style-eight"/>
					<input type="hidden" name="login" value="true">
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="name" placeholder="Dealers Name"/>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="address1" placeholder="House number, Street number"/>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="address2" placeholder="Area">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="countryID" id="country" onChange="getStates(this,'state','');">
							<option value=""></option>
							<?php foreach($countries as $c){ ?>
							<option value="<?php echo $c['countryID'];?>"><?php echo $c['countryName'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="stateID" id="state" onChange="getCities(this,'cities','');">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="cityID" id="cities" onChange="getLocations(this,'locations','');">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="locationID" id="locations">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="phone" placeholder="Contact Number" id="userPhone">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="email" placeholder="Email" id="userEmail">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="contactPerson" placeholder="Contact Person">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="password" class="form-control" name="password" placeholder="Password" id="password">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="category" id="categories">
							<option value=""></option>
							<?php foreach($categories as $ca){ ?>
							<option value="<?php echo $ca['categoryID'];?>"><?php echo $ca['categoryName'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="maker" id="manufacture">
							<option value=""></option>
							<?php foreach($manufactures as $m){ ?>
							<option value="<?php echo $m['manufactureID'];?>"><?php echo $m['manufactureName'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mt-10">
						<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" name="authDealer" value="1"/>
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							Authorized Dealer for Brand
						</div>
					</div>
					<button class="btn btn-default btn-primary pull-right" id="register_btn">Signup <i class="fa fa-arrow-right pl-5" ></i></button>
				</form>
				</div>
			</div>
		</section>
		<div class="modal fade blue-modals" id="dealer-thank-modal" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" style="opacity:1 !important;">&times;</button>
						<h4 class="text-center modal-title">Advance Booking</h4>
					</div>
					
					<div class="modal-body">
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js"></script>
	<script>
	function checkemail(email){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
			return 1;
		}
		return 0;
	}
	function checkPhone(phone){
		var filter = /^([0-9]{12})$/;
		if (/^([0-9]{12})$/.test(phone)){
			return 1;
		}
		return 0;
	}
		$(document).ready(function() {
			$('#categories').select2({placeholder: "Select category"});
			$('#manufacture').select2({placeholder: "Select manufacturer"});
			$('#country').select2({placeholder: "Select country"});
			$('#state').select2({placeholder: "Select state"});
			$('#cities').select2({placeholder: "Select city"});
			getStates('<?php if(isset($details->countryID))?>','state','');
		});	
	$("#register_btn").on('click',function(){
		//Validations
		$(".text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		$("#dealer_form .form-control").each(function(){if($(this).val() == ""){$(this).parent().append(text_error);error++;}});
		if(!checkemail($("#userEmail").val()) && $("#userEmail").val() != ""){$("#userEmail").parent().append('<span class="text-danger"> Invalid email </span>');error++;}
		if(!checkPhone($("#userPhone").val()) && $("#userPhone").val() != ""){$("#userPhone").parent().append('<span class="text-danger"> Invalid phone </span>');error++;}
		if($("#password").val().length < 7 && $("#password").val() != ""){$("#password").parent().append('<span class="text-danger"> This field should contain 6 characters minimum </span>');error++;}
		
		if(error == 0){
			$("#register_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#register_btn").attr('disabled','disabled');
			$.ajax({
				url:'<?php echo $prefix;?>/home/dealer_registration',
				type:'POST',
				data:$('#dealer_form').serialize(),
				dataType:'JSON'
			}).success(function(data){
				if(data.message == 'DUPLICATE'){
					$("#userEmail").parent().append('<span class="text-danger"> This email is already exists in system. Please try forgot password to retrive the password </span>');
					$("#register_btn").html('Signup');
					$("#register_btn").attr('disabled',false);
				}else{					
					window.location.reload();
				}
				
			});
		}
	});
	
	</script>
</body>
</html>
