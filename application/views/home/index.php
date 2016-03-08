<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.modal-header{background-color: #0a3151; color: white !important;}
		.modal-header .close{color: white !important;}
		.modal-body{background-color: #027cd5; color: white !important; overflow:auto;}
		.modal-footer{background-color: #027cd5; color: white !important;}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 border-lt-grey">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightblue" id="cars">
							<div>
								<center>
									<img src="<?php echo $assetsPath;?>/images/car.png" class="cat-img" alt="car" />
									<div style="font-size:14px; margin-bottom:10px;">Car</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightgrey" id="bikes">
							
							<div>
								<center>
									<img src="<?php echo $assetsPath;?>/images/bike.png" class="cat-img" alt="car">
									<div style="font-size:14px; margin-bottom:10px;">Bike</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightgrey" id="more">
							
							<div>
								<center>
									<img src="<?php echo $assetsPath;?>/images/more1.png" class="cat-img" alt="car" />
									<div style="font-size:14px; margin-bottom:10px;">More</div>
								</center>
							</div>
						</div>
					</div>
					<div class="row types" id="cars-div">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<h5>Body Type</h5>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<center>
									<img src="<?php echo $assetsPath;?>/images/hatchback.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Hatchback</div>
								</center>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<center>
									<img src="<?php echo $assetsPath;?>/images/sedan.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Sedan</div>
								</center>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<center>	
									<img src="<?php echo $assetsPath;?>/images/suv.png" style="width:70%;" alt="car" />
									<div class="car-type-name">SUV</div>
								</center>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<center>	
									<img src="<?php echo $assetsPath;?>/images/muv.png" style="width:70%;" alt="car" />
									<div class="car-type-name">MUV</div>
								</center>
							</div>
						</div>
					</div>
					<div class="row types hide" id="bikes-div">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<h5>Body Type</h5>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<center>
									<img src="<?php echo $assetsPath;?>/images/hatchback.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Hatchback</div>
								</center>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<center>
									<img src="<?php echo $assetsPath;?>/images/sedan.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Sedan</div>
								</center>
							</div>
						</div>
						
					</div>
					
					<div class="row mt-10 hide types" id="more-div">
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-lightgrey pd-5">
								<center>
									<img src="<?php echo $assetsPath;?>/images/scooters.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Scooters</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-yellow pd-5">
								<center>
									<img src="<?php echo $assetsPath;?>/images/tractors.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Tractors</div>	
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-lightgrey pd-5">
								<center>	
									<img src="<?php echo $assetsPath;?>/images/auto.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Auto</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-lightgrey pd-5">
								<center>
									<img src="<?php echo $assetsPath;?>/images/lorries.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Lorries</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-lightgrey pd-5">
								<center>
									<img src="<?php echo $assetsPath;?>/images/buses.png" style="width:70%;" alt="car" />	
									<div class="car-type-name">Buses</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-lightgrey pd-5">
								<center>	
									<img src="<?php echo $assetsPath;?>/images/ampere.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Ampere</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-lightgrey pd-5">
								<center>
									<img src="<?php echo $assetsPath;?>/images/birdgroup.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Bird Group</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-lightgrey pd-5">
								<center>
									<img src="<?php echo $assetsPath;?>/images/fivewheels.png" style="width:70%;" alt="car" />	
									<div class="car-type-name">Five Wheels</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10 bg-lightgrey pd-5">
								<center>	
									<img src="<?php echo $assetsPath;?>/images/segways.png" style="width:70%;" alt="car" />
									<div class="car-type-name">Segway</div>
								</center>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">
							<div class="mr-m5 ml-m5">
								<a href="<?php echo $prefix;?>/home/search" class="search-btn" >Search</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 hybrid">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="tab1">
							<a href="<?php echo $prefix;?>/home/news_detail">
							<center>
								<img src="<?php echo $assetsPath;?>/images/baner-car.png" class="mt-10 banner-img" alt="car" />
							</center>
							</a>
						</div>
						<div class="tab-pane fade" id="tab2">
							<center>
								<img src="<?php echo $assetsPath;?>/images/baner-car.png" class="mt-10 banner-img" alt="car" />
							</center>
						</div>
						<div class="tab-pane fade" id="tab3">
							<center>
								<img src="<?php echo $assetsPath;?>/images/baner-car.png" class="mt-10 banner-img" alt="car" />
							</center>
						</div>
						<div class="tab-pane fade" id="tab4">
							<center>
								<img src="<?php echo $assetsPath;?>/images/baner-car.png" class="mt-10 banner-img" alt="car" />
							</center>
						</div>
					</div>
					<ul id="myTab" class="nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Latest Skoda Superb 2016</a></li>
						<li><a href="#tab2" data-toggle="tab">Toyota Camri Hybrid</a></li>
						<li><a href="#tab3" data-toggle="tab">Fiat Abarth Punto</a></li>
						<li><a href="#tab4" data-toggle="tab">Toyota Etios Cross</a></li>
					</ul>
					
				</div>
			</div>
			
			<div class="row mt-20">
				<a href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal1">
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/adv-booking.png" class="mt-10" width="50%" alt="car" />
						<div class="car-type-name">Advance<br/>Booking</div>
					</center>
				</div>
				</a>
				<a href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal2">
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/test-drive.png" class="mt-10" width="50%" alt="car" />
						<div class="car-type-name">Request for<br/>Test Drive</div>
					</center>
				</div>
				</a>
				<a href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal3">
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/vehicle-loan.png" class="mt-10" width="50%" alt="car" />
						<div class="car-type-name">Apply for<br/>Vehicle Loan</div>
					</center>
				</div>
				</a>
				<a href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-moda4">
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/apply-insurance.png" class="mt-10" width="50%" alt="car" />
						<div class="car-type-name">Apply for<br/>Insurance</div>
					</center>
				</div>
				</a>
				<a href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal5">
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/cost-analyzer.png" class="mt-10" width="50%" alt="car" />
						<div class="car-type-name">Service Cost<br/>Analyzer</div>
					</center>
				</div>
				</a>
				<a href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal6">
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/locate-dealer.png" class="mt-10" width="50%" alt="car" />
						<div class="car-type-name">Locate a <br/>Dealer</div>
					</center>
				</div>
				</a>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	

	<!--div style="display:block; width: 100%; height:35px; position: fixed; background-color: #027cd5; bottom:0; padding-left: 15%; padding-right:15%;">
		<div style="width:200px; float:left;">
		fdsf
		</div>
		<div style="width:200px; float:left;">
		fdfdfgdf
		</div>
	</div-->
	
	
	<!-- Modal starts here -->
	<div class="modal fade" id="adv-book-modal1" role="dialog">
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
  <!-- Modal ends here --><!-- Modal starts here -->
	<div class="modal fade" id="adv-book-modal2" role="dialog">
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
  <!-- Modal ends here --><!-- Modal starts here -->
	<div class="modal fade" id="adv-book-modal3" role="dialog">
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
  <!-- Modal ends here --><!-- Modal starts here -->
	<div class="modal fade" id="adv-book-modal4" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Apply for insurance</h4>
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
  <!-- Modal ends here --><!-- Modal starts here -->
	<div class="modal fade" id="adv-book-modal5" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Service Cost Analyzer</h4>
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
  <!-- Modal ends here --><!-- Modal starts here -->
	<div class="modal fade" id="adv-book-modal6" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="text-center modal-title">Locate Dealer</h4>
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
  
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script>
	$('.cat-box').on('mouseover', function(){
		var id = $(this).attr('id');
		$('.types').addClass('hide');
		$('#'+id+'-div').removeClass('hide');
		$('.cat-box').removeClass('bg-lightblue');
		$(this).addClass('bg-lightblue');
		$('.cat-box').addClass('bg-lightgrey');
	});
</script>
</body>
</html>