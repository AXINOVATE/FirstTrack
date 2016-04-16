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
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.picture-color-edit >tr>td>img{text-align:center !important;}
		hr.style-eight { height: 10px; border: 1; background: #F9D133; } 
		#profile_form .form-control{height:28px;}
</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			
			<form id="profile_form" method="POST" action="#" onSubmit="return false;">
				<h3>Dealer Information</h3>
				<ul id="myTab" class="nav nav-tabs1" role="tablist">
					<li role="presentation" class="active product-panel-heading"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Information</a></li>
					<li role="presentation"><a href="<?php echo $prefix;?>/home/bank_details/<?php echo $userID;?>">Bank Details</a></li>
				</ul>
				<div class="row">
					<input type="hidden" id="userID" name="userID" value="<?php echo $userID;?>">
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>First Name</label>
						<input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php if(isset($details->firstName))echo $details->firstName;?>" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Last Name</label>
						<input type="text" class="form-control" name="lastName" placeholder="Last Name" value="<?php if(isset($details->lastName))echo $details->lastName;?>" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Address line 1</label>
						<input type="text" class="form-control" name="address1" placeholder="House number, Street number" value="<?php if(isset($details->addressLine1))echo $details->addressLine1;?>" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Address line 2</label>
						<input type="text" class="form-control" name="address2" placeholder="Area" value="<?php if(isset($details->addressLine2))echo $details->addressLine2;?>" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Country</label>
						<select class="form-control select2" style="width:100%;" name="countryID" id="country">
							<option value=""></option>
							<?php foreach($countries as $c){  ?>
							<option value="<?php echo $c['countryID'];?>" <?php if(isset($details->countryID))if($details->countryID == $c['countryID'])echo 'selected';?>><?php echo $c['countryName'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>State</label>
						<select class="form-control select2" style="width:100%;" name="stateID" id="state">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>City</label>
						<select class="form-control select2" style="width:100%;" name="cityID" id="cities">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Location</label>
						<select class="form-control select2" style="width:100%;" name="locationID" id="locations">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Zip Code</label>
						<input type="text" class="form-control" name="zipCode" placeholder="Zip Code" id="zipCode" value="<?php if(isset($details->zipCode))echo $details->zipCode;?>" />
					</div>
					
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Primary Email</label>
						<input type="text" class="form-control" name="email" placeholder="Email" value="<?php if(isset($details->email))echo $details->email;?>" disabled />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Secondary Email</label>
						<input type="text" class="form-control" name="sEmail" placeholder="Secondary Email" id="sEmail" value="<?php if(isset($details->secondaryEmail))echo $details->secondaryEmail;?>" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Primary Phone</label>
						<input type="text" class="form-control" name="phone" placeholder="Primary Phone" id="userPhone" value="<?php if(isset($details->phone))echo $details->phone;?>" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Secondary Phone</label>
						<input type="text" class="form-control" name="sPhone" placeholder="Secondary Phone" id="sPhone" value="<?php if(isset($details->secondaryPhone))echo $details->secondaryPhone;?>" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Product Category</label>
						<select class="form-control select2" style="width:100%;" name="productCategory" id="categories">
							<option value=""></option>
							<?php foreach($categories as $ca){ ?>
							<option value="<?php echo $ca['categoryID'];?>" <?php if(isset($details->productCategory))if($details->productCategory == $ca['categoryID'])echo 'selected';?>><?php echo $ca['categoryName'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Manufacture</label>
						<select class="form-control select2" style="width:100%;" name="manufacture" id="manufacture">
							<option value=""></option>
							<?php foreach($manufactures as $m){ ?>
							<option value="<?php echo $m['manufactureID'];?>" <?php if(isset($details->manufacture))if($details->manufacture == $m['manufactureID'])echo 'selected';?>><?php echo $m['manufactureName'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mt-10">
						<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" name="authDealer" value="1" <?php if(isset($details->authDealer))if($details->authDealer == 1)echo "checked";?>/>
						<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
							Authorized Dealer for Brand
						</div>
					</div>
					<input type="hidden" name="status" value="P">
					<button class="btn btn-default btn-primary pull-right mr-15" id="update_btn">Update</button>
				</div>
			</form>
			
		</section>
	</div>
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.typeahead.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js"></script>
	<script>
	function checkemail(email){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
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
		$('#locations').select2({placeholder: "Select Location"});
		$("#country").trigger('change');
	});
	$("#country").on("change",function(){
		getStates(this,'state','<?php if(isset($details->stateID))echo $details->stateID; ?>');
	});
	$("#state").on("change",function(){
		getCities(this,'cities','<?php if(isset($details->cityID))echo $details->cityID; ?>');
	});
	$("#cities").on("change",function(){
		getLocations(this,'locations','<?php if(isset($details->locationID))echo $details->locationID; ?>');
	});
	$("#update_btn").on('click',function(){
		//Validations
		$(".text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		$("#profile_form .form-control").each(function(){if($(this).val() == ""){$(this).parent().append(text_error);error++;}});
		if(!checkemail($("#sEmail").val()) && $("#sEmail").val() != ""){$("#sEmail").parent().append('<span class="text-danger"> Invalid email </span>');error++;}
		if(error == 0){
			$("#update_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#update_btn").attr('disabled','disabled');
			$.ajax({
				url:'<?php echo $prefix;?>/home/profile_update',
				type:'POST',
				data:$('#profile_form').serialize(),
				dataType:'JSON'
			}).success(function(data){
				window.location.reload();
			});
		}
	});
	</script>
</body>
</html>
