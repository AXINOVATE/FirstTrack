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
	<link href="<?php echo $assetsPath;?>/css/home_page_style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">

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
				<div class="col-md-3 col-sm-4 col-xs-12 border-lt-grey">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightblue">
							<div>
								<center>
									<img src="<?php echo $assetsPath;?>/images/sedan.png" class="cat-img" alt="car" />
									<div style="font-size:14px; color:#fff; margin-bottom:10px;">Car</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightgrey">
							
							<div>
								<center>
									<img src="<?php echo $assetsPath;?>/images/bike.png" class="cat-img" alt="car">
									<div style="font-size:14px; color:#696969; margin-bottom:10px;">Bike</div>
								</center>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightgrey">
							
							<div>
								<center>
									<img src="<?php echo $assetsPath;?>/images/more1.png" class="cat-img" alt="car" />
									<div style="font-size:14px; color:#696969; margin-bottom:10px;">More</div>
								</center>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<h5>Body Type</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<img src="<?php echo $assetsPath;?>/images/hatchback.png" class="cat-img" alt="car" />
								<div class="car-type-name">Hatchback</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<img src="<?php echo $assetsPath;?>/images/sedan.png" class="cat-img" alt="car" />
								<div class="car-type-name">Sedan</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<img src="<?php echo $assetsPath;?>/images/suv.png" class="cat-img" alt="car" />
								<div class="car-type-name">SUV</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
							<div class="border-lt-grey ml-m10 mr-m10">
								<img src="<?php echo $assetsPath;?>/images/muv.png" class="cat-img" alt="car" />
								<div class="car-type-name">MUV</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">
							<div class="mr-m5 ml-m5">
								<a href="javascript:void(0)" class="search-btn" >Search</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
				
				</div>
			</div>
			
			<div class="row mt-20">
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/adv-booking.png" class="mt-10" width="50%" alt="car" />
					</center>
					<div class="car-type-name">Advance<br/>Booking</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/test-drive.png" class="mt-10" width="50%" alt="car" />
					</center>
					<div class="car-type-name">Request for<br/>Test Drive</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/vehicle-loan.png" class="mt-10" width="50%" alt="car" />
					</center>
					<div class="car-type-name">Apply for<br/>Vehicle Loan</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/apply-insurance.png" class="mt-10" width="50%" alt="car" />
					</center>
					<div class="car-type-name">Apply for<br/>Insurance</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/cost-analyzer.png" class="mt-10" width="50%" alt="car" />
					</center>
					<div class="car-type-name">Service Cost<br/>Analyzer</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
					<center>
						<img src="<?php echo $assetsPath;?>/images/locate-dealer.png" class="mt-10" width="50%" alt="car" />
					</center>
					<div class="car-type-name">Locate a <br/>Dealer</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>