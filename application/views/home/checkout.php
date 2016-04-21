<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com is India's first Online market place for all the Brand New Vehicles.|Book Online, Buy Online , Test Ride all New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV in India,  New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV at your Door Step.</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.lbl{ text-align: right;}
	.item-features>ul>li{width:190px;}
	.trns{background-color:#DDD;padding:10px;min-height:170px;width:100%;}
	#conformation{display:inline-block;}
	.conf-box-h{list-style-type:none;border:1px solid #EEE;margin-bottom:0px;background-color:#F7F7F7;}
	.conf-box{list-style-type:none;border:1px solid #EEE;border-top:0px;margin-bottom:0px;}
	.conf-box-h li:first-child,.conf-box>li:first-child{border-left:0px;width:34%;text-align:left;}
	.conf-box-h>li,.conf-box>li{display:table-cell;padding: 5px;border-left:1px solid #EEE;width: 186px;vertical-align:middle;text-align:center;}
	.conf-box>li>ul{margin-left: 30px;font-size: 14px;list-style-type: square;}
	.cart-total{border: 1px solid #EEE;border-top: 0px;padding: 5px;text-align: right;}
	.cart-total span{display: block;float: right;width: 177px;}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<div class="row checkout">
				<div class="col-md-12">
					<h3 class="mt-0 mb-20">Checkout</h3>
					<hr>
				</div>
				
				<div class="col-md-12">
					<div class="item-features">
						<ul id = "myTab" class = "nav nav-tabs">
						   <li <?php if(!$this->session->userdata('login'))echo 'class = "active"'; ?>> <a href = "#home" data-toggle = "tab"> Checkout </a></li>
						   <li <?php if($this->session->userdata('login'))echo 'class = "active"'; ?>> <a href = "#billing" data-toggle = "tab" id="billing_h"> Billing Details </a></li>
						   <li> <a href = "#delivery" data-toggle = "tab" id="delivery_h"> Delivery Address </a></li>
						   <li> <a href = "#payment" data-toggle = "tab" id="payment_h"> Payment Method </a></li>
						   <li> <a href = "#shipping" data-toggle = "tab" id="shipping_h"> Shipping Details </a></li>
						   <li> <a href = "#conformation" data-toggle = "tab" id="conformation_h"> Order Confirmation </a></li>
						</ul>
					
						<div id = "myTabContent" class = "tab-content" style="background-color:#FFF;">
							<?php if(!$this->session->userdata('login')){ ?>
							<div class = "tab-pane fade in active" id = "home">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-4"  id="signup_tab">
										<h5 class="text-center" style="font-weight: 600;font-size:20px;">New User</h5>
										<hr class="mt-10 mb-10">
										<div class="form-group">
											<div class="input-group mt-10">
												<div class="input-group-addon"><i class="fa fa-user"></i></div>
												<input type="text" class="form-control" id="name" name="name" placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mt-10">
												<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
												<input type="text" class="form-control" id="userEmail" name="email" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mt-10">
												<div class="input-group-addon"><i class="fa fa-key"></i></div>
												<input type="password" class="form-control" name="password" id="password" placeholder="Password">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mt-10">
												<div class="input-group-addon"><i class="fa fa-key"></i></div>
												<input type="password" class="form-control" name="repassword" id="repassword" placeholder="Re enter password">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mt-10">
												<div class="input-group-addon"><i class="fa fa-phone"></i></div>
												<input type="text" class="form-control" name="phone" id="userPhone" placeholder="Phone">
											</div>
										</div>
										<button class="btn" id="register_btn">Signup</button>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-4" id="">
										<h5 class="text-center" style="font-weight: 600;font-size:20px;">Existing User</h5>
										<hr class="mt-10 mb-10">
										<form class="form-horizontal" method="post" action="#" onsubmit="return false;" role="login" id="login_form">
											<div>
												<div class="input-group mt-10">
													<div class="input-group-addon"><i class="fa fa-user"></i></div>
													<input type="text" class="form-control" id="user_name" name="username" placeholder="Email">
												</div>
											</div>
											<div>
												<div class="input-group mt-10">
													<div class="input-group-addon"><i class="fa fa-key"></i></div>
													<input type="password" class="form-control" name="password" id="userpassword" placeholder="Password">
												</div>
											</div>
											<button class="btn" id="login_btn">Login</button>
											<div>
												Forgot Password ? <a href="javascript:void(0);"> Click here </a> to reset password
											</div>
										</form>
									</div>
								</div>
						   </div>
					   <?php } ?>
						   <div class = "tab-pane fade <?php if($this->session->userdata('login'))echo " in active"; ?>" id = "billing">
								<div class="row">
									<div class="col-md-2 lbl mt-10">Address Line 1</div>
									<div class="col-md-10 mt-10">
										<input type="text" class="form-control" placeholder="" id="s_address1">
									</div>
									<div class="col-md-2 lbl mt-10">Address Line 1</div>
									<div class="col-md-10 mt-10">
										<input type="text" class="form-control" placeholder="" id="s_address2">
									</div>
									<div class="col-md-2 lbl mt-10">Country</div>
									<div class="col-md-4 mt-10">
										<select class="form-control select2" id="s_country" style="width:95%;">
											<?php 
												foreach($countries as $country){
													echo "<option value='".$country['countryID']."'>".$country['countryName']."</option>";
												}
											?>
										</select>
										<!--<input type="text" class="form-control" placeholder="" id="s_country">-->
									</div>
									<div class="col-md-2 lbl mt-10">State</div>
									<div class="col-md-4 mt-10">
										<select class="form-control select2" id="s_state" style="width:95%;">
										</select>
										<!-- <input type="text" class="form-control" placeholder="" id="s_state">-->
									</div>
									<div class="col-md-2 lbl mt-10">City</div>
									<div class="col-md-4 mt-10">
										<select class="form-control select2" id="s_city" style="width:95%;">
										</select>
										<!--<input type="text" class="form-control" placeholder="" id="s_city">-->
									</div>
									<div class="col-md-2 lbl mt-10">Postal Code</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" placeholder="" id="s_zip_code">
									</div>
									<div class="col-md-2 mt-10"></div>
									<div class="col-md-4 mt-10">
										<input type="checkbox" id="same_address"> Same for delivery address
									</div>
								</div>
								<div class="row mt-10">
									<div class="col-md-4 pull-right mt-30">
										<button class="btn proceed" data-next="#delivery" data-current="#billing">Save & Continue</button>
									</div>
								</div>
						   </div>
						   <div class = "tab-pane fade" id = "delivery">
								<div class="row">
									<div class="col-md-2 lbl mt-10">Address Line 1</div>
									<div class="col-md-10 mt-10">
										<input type="text" class="form-control" placeholder="" id="d_address1">
									</div>
									<div class="col-md-2 lbl mt-10">Address Line 1</div>
									<div class="col-md-10 mt-10">
										<input type="text" class="form-control" placeholder="" id="d_address2">
									</div>
									<div class="col-md-2 lbl mt-10">Country</div>
									<div class="col-md-4 mt-10">
										<select class="form-control select2" id="d_country" style="width:95%;">
											<?php 
												foreach($countries as $country){
													echo "<option value='".$country['countryID']."'>".$country['countryName']."</option>";
												}
											?>
										</select>
										<!--<input type="text" class="form-control" placeholder="" id="d_country">-->
									</div>
									<div class="col-md-2 lbl mt-10">State</div>
									<div class="col-md-4 mt-10">
										<select class="form-control select2" id="d_state" style="width:95%;">
										</select>
										<!-- <input type="text" class="form-control" placeholder="" id="d_state">-->
									</div>
									<div class="col-md-2 lbl mt-10">City</div>
									<div class="col-md-4 mt-10">
										<select class="form-control select2" id="d_city" style="width:95%;">
										</select>
										<!--<input type="text" class="form-control" placeholder="" id="d_city">-->
									</div>
									<div class="col-md-2 lbl mt-10">Postal Code</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" placeholder="" id="d_zip_code">
									</div>
								</div>
								<div class="row mt-10">
									<div class="col-md-4 pull-right mt-30">
										<button class="btn proceed" data-next="#payment" data-current="#delivery">Save & Continue</button>
									</div>
								</div>
						   </div>
						   
						   <div class = "tab-pane fade" id = "payment">
								<h5>Please select the preferred payment method to use on the order</h5>
								<div class="row mt-10">
									<div class="col-md-4">
										<input type="radio" name="payment" value="DD" checked> DD
									</div>
									<div class="col-md-4">
										<input type="radio" name="payment" value="CASH_OR_CHECK"> Cash / Cheque on Request
									</div>
									<div class="col-md-4">
										<input type="radio" name="payment" value="NET_BANKING"> Internet Bank Transaction<br>(NEFT/ RTGS / IMPS)
									</div>
								</div>
								<div class="row mt-10">
									<div class="col-md-6">
										<h5>Please add your transaction details<br>&nbsp;</h5>
										<textarea style="width:100%;height:170px;" id="transactionDetails"></textarea>
									</div>
									<div class="col-md-6 payment_method" id="dd_cash">
										<h5>Please use the below account details for transactions. 
										<br><b>Instructions :</b> Pls add this account in your netbanking as Payee.</h5>
										<div class="trns">
											DD or Cheque should be name on NayaGaadi Online Market place Pvt. Ltd.<br>
										</div>
									</div>
									<div class="col-md-6 payment_method hide" id="net_banking">
										<h5>Please use the below account details for transactions. 
										<br><b>Instructions :</b> Pls add this account in your netbanking as Payee.</h5>
										<div class="trns">
											Account Name : NayaGaadi Online Market place Pvt. Ltd.<br>
											Account Number : XXXXXXXXXXXXX<br>
											Account Type 	: Current Account<br>
											Bank Name 	: ICICI Bank<br>
											Branch 	: Koramangala, Banglore<br>
											IFSC Code	: ICIC000047<br>
										</div>
									</div>
									
								</div>
								<div class="row mt-10">
									<div class="col-md-4 pull-right">
										<button class="btn proceed" data-next="#shipping" data-current="#payment">Save & Continue</button>
									</div>
								</div>
						   </div>
							<div class = "tab-pane fade" id = "shipping">
								<h5>Please select the shipping choices</h5>
								<div class="row mt-10">
									<div class="col-md-1"></div>
									<div class="col-md-4">
										<input type="radio" name="shipping_choices" value="FREE_WITH_IN_CITY" checked> Free within city
									</div>
									<div class="col-md-4">
										<input type="radio" name="shipping_choices" value="OUT_SIDE_CITY"> Outside the city - Charges on Actual basis
									</div>
								</div>
								<h5 class="mt-20">Please select the Vehicle Delivery choices</h5>
								<div class="row mt-10">
									<div class="col-md-1"></div>
									<div class="col-md-4">
										<input type="radio" name="delivery_choices"  value="DELEVERY_DOOR_STEP" checked> Delivery at Door step
									</div>
									<div class="col-md-4">
										<input type="radio" name="delivery_choices" value="SHOW_ROOM_PICKUP"> Showroom Pick up
									</div>
									<div class="col-md-12 mt-20">
										<input type="checkbox" class="pl-20"> I have read and agreed to the NayaGaadi and Manufacturer <a href="http://www.nayagaadi.com/Terms%20and%20conditions" target="_blank">terms and conditions</a>
									</div>
								</div>
								<div class="row mt-10">
									<div class="col-md-4 pull-right mt-30">
										<button class="btn proceed" data-next="#conformation" data-current="#shipping">Save & Continue</button>
									</div>
								</div>
							</div>
							<div class = "tab-pane fade" id = "conformation">
								<ul class="conf-box-h">
									<li>Product Name</li>
									<li>Quantity</li>
									<li>Model</li>
									<li>Unit Price</li>
									<li>Total</li>
								</ul>
								<ul class="conf-box">
									<li>
										<b><?php if(isset($basic->productName))echo $basic->productName;?></b>
										<ul>
											<li>Model : <?php if(isset($data->variantName))echo $data->variantName;?></li>
											<li>Engine : <?php if(isset($data->engineType))echo $data->engineType;?></li>
											<li>Displacement : <?php if(isset($data->displacement))echo $data->displacement.' CC';?></li>
											<li>Max Power : <?php if(isset($data->powerBHP))echo $data->powerBHP.' bhp @ '.$data->powerRPM.' rpm';?></li>
											<li>Mileage : <?php if(isset($data->mileage))echo $data->mileage.' kmpl';?></li>
											<li>Fuel : <?php if(isset($data->fueltype))echo $data->fueltype;?></li>
											<li>Transmission : <?php if(isset($data->transmission))echo $data->transmission;?></li>
											<li>Color Name : <?php if(isset($data->colorName))echo $data->colorName;?></li>
										</ul>
									</li>
									<li><input type="text" value="1" id="quantity" style="width: 35px;text-align: center;"></li>
									<li><?php if(isset($data->variantName))echo $data->variantName;?></li>
									<li id="unitPrice">Rs <?php if(isset($cart['unitPrice']))echo $cart['unitPrice'];?></li>
									<li id="total">Rs <?php if(isset($cart['unitPrice']))echo $cart['unitPrice']*$cart['qty'];?></li>
								</ul>
								<div class="cart-total">Sub Total : <span id="subTotal"> Rs <?php if(isset($cart['unitPrice']))echo $cart['unitPrice']*$cart['qty'];?> </span></div>
								<div class="cart-total">Free Shipping : <span> Rs <?php if(isset($cart['shippingPrice']))echo $cart['shippingPrice'];?> </span></div>
								<div class="cart-total"><b> Total : <span id="totalPrice"> Rs <?php if(isset($cart['totalPrice']))echo $cart['totalPrice'];?> </span></b></div>
							</div>
							<div class="row mt-10">
								<div class="col-md-4 pull-right mt-30">
									<button class="btn" id="conform">Confirm</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	<!-- Footer start -->
	<?php echo $footer; ?>
	<!-- Footer end -->
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.typeahead.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTab').tabCollapse();
		$('.select2').select2({
			placeholder: "Select",
			allowClear: true
		});
	});
	function checkemail(email){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
			return 1;
		}
		return 0;
	}
    $(document).ready(function(){
		$("#login_form").on('submit',function(){
			$("#login_btn").trigger('click');
		});
	});
	$("#quantity").on('change',function(){
		var qty = $(this).val();
		$.ajax({
			url:'<?php echo $prefix;?>/home/update_cart',
			type:'POST',
			data:{'qty':qty},
			dataType:'JSON'
		}).success(function(data){
			$("#total").html('Rs '+parseFloat(data.qty*data.unitPrice));
			$("#subTotal").html('Rs '+parseFloat(data.qty*data.unitPrice));
			$("#totalPrice").html('Rs '+parseFloat((data.qty*data.unitPrice)+data.shippingPrice));
		});
	});
	$("#conform").on('click',function(){
		$(".text-danger").remove();
		var error = 0;
		$("#billing .form-control").each(function(){
			if($(this).val() == ""){
				error++;
				$(this).parent().append('<span class="text-danger">This field is required</span>');
			}
		});
		if(error != 0){
			$("#billing_h").trigger("click");
		}else{
			$("#delivery .form-control").each(function(){
				if($(this).val() == ""){
					error++;
					$(this).parent().append('<span class="text-danger">This field is required</span>');
				}
			});
			if(error != 0){
				$("#delivery_h").trigger("click");
			}else{
				if(!$("#shipping input[type=checkbox]").is(":checked")){
					$("#shipping input[type=checkbox]").parent().append('<br> <span class="text-danger">This field is required</span>');
					error++;
					$("#shipping_h").trigger("click");
				}
			}
		}
		if(error == 0){
			var payment_method = '';
			$("input[name=payment]").each(function(){
				if($(this).is(":checked"))
					payment_method = $(this).val();
			});
			var shipping_choices = '';
			$("input[name=shipping_choices]").each(function(){
				if($(this).is(":checked"))
					shipping_choices = $(this).val();
			});
			var delivery_choices = '';
			$("input[name=delivery_choices]").each(function(){
				if($(this).is(":checked"))
					delivery_choices = $(this).val();
			});
			var transactionDetails = $('#transactionDetails').val();
			$.ajax({
				url:'<?php echo $prefix;?>/home/booking',
				type:'POST',
				data:{'s_address1':$('#s_address1').val(),'s_address2':$('#s_address2').val(),'s_city':$('#s_city').val(),'s_state':$('#s_state').val(),'s_country':$('#s_country').val(),'s_zip_code':$('#s_zip_code').val(),'d_address1':$('#d_address1').val(),'d_address2':$('#d_address2').val(),'d_city':$('#d_city').val(),'d_state':$('#d_state').val(),'d_country':$('#d_country').val(),'d_zip_code':$('#d_zip_code').val(),'payment_method':payment_method,'shipping_choices':shipping_choices,'delivery_choices':delivery_choices,'transactionDetails':$('#transactionDetails').val()},
				dataType:'JSON'
			}).success(function(data){
				if(data.status)
					window.location='<?php echo $prefix;?>/home/conformation/'+data.requestNo;
			});
		}
	});
	$(".proceed").on('click',function(e){
		$(".text-danger").remove();
		var next = $(this).data("next");
		var current = $(this).data("current");
		
		var error = 0;
		$(current+" .form-control").each(function(){
			if($(this).val() == ""){
				error++;
				$(this).parent().append('<span class="text-danger">This field is required</span>');
			}
		});
		if(current == "#shipping" && !$("#shipping input[type=checkbox]").is(":checked")){
			$("#shipping input[type=checkbox]").parent().append('<br> <span class="text-danger">This field is required</span>');
		error++;
		}
		if(error == 0)
			$(next+"_h").trigger("click");
		
	});
	$("#same_address").on("change",function(){
		if($("#same_address").is(":checked")){
			$("#d_address1").val($("#s_address1").val());
			$("#d_address2").val($("#s_address2").val());
			//$("#d_city").val($("#s_city").val());
			//$("#d_state").val($("#s_state").val());
			//$("#d_country").val($("#s_country").val());
			setTimeout(function() {
			 $("#d_country").val($("#s_country").val());
			 $("#d_country").trigger('change');
			 }, 1000);
			setTimeout(function() {
			 $("#d_state").val($("#s_state").val());
			 $("#d_state").trigger('change');
			 }, 2500);
			setTimeout(function() {
			 $("#d_city").val($("#s_city").val());
			 $("#d_city").trigger('change');
			 }, 3500);
			$("#d_zip_code").val($("#s_zip_code").val());
		}else{
			$("#d_address1").val('');
			$("#d_address2").val('');
			$("#d_city").val('');
			$("#d_state").val('');
			$("#d_country").val('');
			$("#d_zip_code").val('');
		}
	});
	$("#login_btn").on('click',function(){
		$("#login_form .text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		if($('#user_name').val() == ""){$('#user_name').parent().parent().append(text_error);error++;}
		if($('#userpassword').val() == ""){$('#userpassword').parent().parent().append(text_error);error++;}
		if(error == 0){
			$("#login_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#login_btn").attr('disabled','disabled');
			$.ajax({
				url:'<?php echo $prefix;?>/home/login_check',
				type:'POST',
				data:{'username':$('#user_name').val(),'password':$('#userpassword').val()},
				dataType:'JSON'
			}).success(function(data){
				$(".login .text-danger").remove();
				if(data.status){
					window.location.reload();
				}				
				else{
					$("#login_tab").prepend('<div class="text-danger mt-10">Invalid username or password </div>');
					$("#login_btn").html('Login');
					$("#login_btn").attr('disabled',false);
				}
			});
		}
	});
	$("#register_btn").on('click',function(){		
		//Validations
		$("#signup_tab .text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		$("#signup_tab .form-control").each(function(){if($(this).val() == ""){$(this).parent().parent().append(text_error);error++;}});
		if(!checkemail($("#userEmail").val()) && $("#userEmail").val() != ""){$("#userEmail").parent().parent().append('<span class="text-danger"> Invalid email </span>');error++;}
		if($("#repassword").val() != $("#password").val() && $("#password").val() != ""){	$("#repassword").parent().parent().append('<span class="text-danger"> Password not matched </span>');error++;}
		if($("#password").val().length < 7 && $("#password").val() != ""){$("#password").parent().parent().append('<span class="text-danger"> This field should contain 6 characters minimum </span>');error++;}
		
		if(error == 0){
			$("#register_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#register_btn").attr('disabled','disabled');
			$.ajax({
				url:'<?php echo $prefix;?>/home/register',
				type:'POST',
				data:{'name':$('#name').val(),'email':$('#userEmail').val(),'password':$('#password').val(),'repassword':$('#repassword').val(),'phone':$('#userPhone').val()},
				dataType:'JSON'
			}).success(function(data){
				if(data.message == 'DUPLICATE'){
					$("#userEmail").parent().parent().append('<span class="text-danger"> This email is already exists in system. Please try forgot password to retrive the password </span>');
					$("#register_btn").html('Signup');
					$("#register_btn").attr('disabled',false);
				}else{
					window.location.reload();
				}
				
			});
		}
	});
$("input[name=payment]").on('click',function(){
	$(".payment_method").addClass('hide');
	if($(this).val() == "NET_BANKING"){
		$("#net_banking").removeClass("hide");
	}else{
		$("#dd_cash").removeClass("hide");
	}
});
$("#s_country").on("change",function(){
	var id=$(this).val();
	get_states('s_state',id);
});
$("#s_state").on("change",function(){
	var id=$(this).val();
	get_cities('s_city',id);
});
$("#d_country").on("change",function(){
	var id=$(this).val();
	get_states('d_state',id);
});
$("#d_state").on("change",function(){
	var id=$(this).val();
	get_cities('d_city',id);
});
function get_states(callback,id){
	callback='#'+callback;
	$.ajax({
		url:prefix+'/home/location_detail/PSTATE/'+id,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = '<option value=""></option>';
		for(i=0;i<len;i++){
				html += "<option value='"+data[i].stateID+"' >"+data[i].stateName+"</option>";
		}
		$(callback).html(html);
	});
	
}
function get_cities(callback,id){
	callback = '#'+callback;
	$.ajax({
		url:prefix+'/home/location_detail/PCITY/'+id,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = '<option value=""></option>';
		for(i=0;i<len;i++){
				html += "<option value='"+data[i].cityID+"' >"+data[i].cityName+"</option>";
		}
		$(callback).html(html);
	});
}
</script>
</body>
</html>