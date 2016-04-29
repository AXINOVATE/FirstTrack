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
hr.style-eight {
             height: 10px;
              border: 1;
          background: #F9D133;
}

</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			
			<form id="dealer_form" method="POST" action="#" onSubmit="return false;">
				<h3>Add Dealer's Information</h3>
				<ul id="myTab" class="nav  nav-tabs1" role="tablist">
					<li role="presentation" class="active product-panel-heading"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Information</a></li>
					<li role="presentation"><a href="#bank-info" aria-controls="profile" role="tab" data-toggle="tab">Bank Details</a></li>
				</ul>
				<div class="row">
					<input type="hidden" name="login" value="false">
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="name" placeholder="Dealers Name"/>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="address1" placeholder="House number, Street number"/>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<input type="text" class="form-control" name="address2" placeholder="Area">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="countryID" id="country" onChange="getStates(this,'state','');">
							<option value=""></option>
							<?php foreach($countries as $c){ ?>
							<option value="<?php echo $c['countryID'];?>"><?php echo $c['countryName'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="stateID" id="state" onChange="getCities(this,'cities','');">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="cityID" id="cities" onChange="getLocations(this,'locations','');">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="locationID" id="locations">
							<option value=""></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<input type="text" class="form-control" name="phone" placeholder="Contact Number" id="userPhone">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<input type="text" class="form-control" name="email" placeholder="Email" id="userEmail">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<input type="text" class="form-control" name="contactPerson" placeholder="Contact Person">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<input type="password" class="form-control" name="password" placeholder="Password" id="password">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<select class="form-control select2" style="width:100%;" name="category" id="categories">
							<option value=""></option>
							<?php foreach($categories as $ca){ ?>
							<option value="<?php echo $ca['categoryID'];?>"><?php echo $ca['categoryName'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
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
				</div>
				<button class="btn btn-default btn-primary pull-right" id="register_btn">Signup <i class="fa fa-arrow-right pl-5" ></i></button>
			</form>
			
		</section>
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
					//window.location="<?php echo $prefix;?>/home/bank_details".data.userID;
				}
				
			});
		}
	});
	$('document').ready(function(){
		$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
		$('.inpt-timepicker').timepicker();	
		$('#RTD_Pre_date,#rtd-icon').datepicker({ 
			startDate: new Date()
			
		});	
		

		var date = new Date();
        var d = new Date();        
        d.setDate(date.getDate());
		$('#credit_points_date,#calander-icon1').datepicker({
			 endDate: d,  
       });
	   $('#insurance_date,#insurance_date_icon').datepicker({
			 startDate: new Date() 
       });
	});
	</script>
</body>
</html>
