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
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.lbl{line-height: 40px;
    text-align: right;}
	.item-features>ul>li{width:190px;}
	.trns{background-color:#EEE;padding:10px;min-height:170px;width:100%;}
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
						   <li class = "active"> <a href = "#home" data-toggle = "tab"> Checkout </a></li>
						   <li> <a href = "#billing" data-toggle = "tab"> Billing Details </a></li>
						   <li> <a href = "#delivery" data-toggle = "tab"> Delivery Address </a></li>
						   <li> <a href = "#payment" data-toggle = "tab"> Payment Method </a></li>
						   <li> <a href = "#shipping" data-toggle = "tab"> Shipping Details </a></li>
						   <li> <a href = "#conformation" data-toggle = "tab"> Order Conformation </a></li>
						</ul>
					
						<div id = "myTabContent" class = "tab-content">
							<div class = "tab-pane fade in active" id = "home">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-4">
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
												<input type="text" class="form-control" id="email" name="email" placeholder="Email">
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
												<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
											</div>
										</div>
										<button class="btn" id="register_btn">Signup</button>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-4">
										<h5 class="text-center" style="font-weight: 600;font-size:20px;">Existing User</h5>
										<hr class="mt-10 mb-10">
										<div class="form-group">
											<div class="input-group mt-10">
												<div class="input-group-addon"><i class="fa fa-user"></i></div>
												<input type="text" class="form-control" id="username" name="username" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mt-10">
												<div class="input-group-addon"><i class="fa fa-key"></i></div>
												<input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
											</div>
										</div>
										<button class="btn" id="login_btn">Login</button>
										<div class="form-group">
											Forgot Password ? <a href="javascript:void(0);"> Click here </a> to reset password
										</div>
									</div>
								</div>
						   </div>
					   
						   <div class = "tab-pane fade" id = "billing">
								<div class="row">
									<div class="col-md-2 lbl mt-10">Address Line 1</div>
									<div class="col-md-10 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">Address Line 1</div>
									<div class="col-md-10 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">City</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">State</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">Country</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">Postal Code</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-4 pull-right mt-30">
										<a href = "#" class="btn">Save & Continue</a>
									</div>
								</div>
						   </div>
						   <div class = "tab-pane fade" id = "delivery">
								<div class="row">
									<div class="col-md-2 lbl mt-10">Address Line 1</div>
									<div class="col-md-10 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">Address Line 1</div>
									<div class="col-md-10 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">City</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">State</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">Country</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-2 lbl mt-10">Postal Code</div>
									<div class="col-md-4 mt-10">
										<input type="text" class="form-control" id="username" name="username" placeholder="">
									</div>
									<div class="col-md-4 pull-right mt-30">
										<button class="btn">Save & Continue</button>
									</div>
								</div>
						   </div>
						   
						   <div class = "tab-pane fade" id = "payment">
								<h5>Please select the preferred payment method to use on the order</h5>
								<div class="row mt-10">
									<div class="col-md-4">
										<input type="radio"> DD
									</div>
									<div class="col-md-4">
										<input type="radio"> Cash / Cheque on Request
									</div>
									<div class="col-md-4">
										<input type="radio"> Internet Bank Transaction<br>(NEFT/ RTGS / IMPS)
									</div>
								</div>
								<div class="row mt-10">
									<div class="col-md-6">
										<h5>Please add your transaction details<br>&nbsp;</h5>
										<textarea class="trns">
										</textarea>
									</div>
									<div class="col-md-6">
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
									<div class="col-md-4 pull-right mt-30">
										<button class="btn">Save & Continue</button>
									</div>
								</div>
						   </div>
							<div class = "tab-pane fade" id = "shipping">
								<h5>Please select the shipping choices</h5>
								<div class="row mt-10">
									<div class="col-md-1"></div>
									<div class="col-md-4">
										<input type="radio"> Free within city
									</div>
									<div class="col-md-4">
										<input type="radio"> Outside the city - Charges on Actual basis
									</div>
								</div>
								<h5 class="mt-20">Please select the Vehicle Delivery choices</h5>
								<div class="row mt-10">
									<div class="col-md-1"></div>
									<div class="col-md-4">
										<input type="radio"> Delivery at Door step
									</div>
									<div class="col-md-4">
										<input type="radio"> Showroom Pick up
									</div>
									<div class="col-md-12 mt-20">
										<input type="checkbox" class="pl-20"> I have read and agreed to the NayaGaadi and Manufacturer terms and conditions
									</div>
									<div class="col-md-4 pull-right mt-30">
										<button class="btn">Save & Continue</button>
									</div>
								</div>
							</div>
							<div class = "tab-pane fade" id = "conformation">
								<h5>Please select the shipping choices</h5>
								<ul class="conf-box-h">
									<li>Product Name</li>
									<li>Quantity</li>
									<li>Model</li>
									<li>Unit Price</li>
									<li>Total</li>
								</ul>
								<ul class="conf-box">
									<li>
										<b>BULLET 350</b>
										<ul>
											<li>Product Name</li>
											<li>Model</li>
											<li>Quantity</li>
											<li>Unit Price</li>
											<li>Total</li>
										</ul>
									</li>
									<li>BULLET 350</li>
									<li>1</li>
									<li>Rs 125,343.00</li>
									<li>Rs 125,343.00</li>
								</ul>
								<div class="cart-total">Sub Total : <span> Rs 125,343.00 </span></div>
								<div class="cart-total">Free Shipping : <span> Rs 00.00 </span></div>
								<div class="cart-total"><b> Total : <span> Rs 125,343.00 </span></b></div>
								<div class="col-md-4 pull-right mt-30">
									<a href="<?php echo $prefix;?>/home/conformation" class="btn">Proceed</a>
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
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTab').tabCollapse();
	});
	
</script>
</body>
</html>