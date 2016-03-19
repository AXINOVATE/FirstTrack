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
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
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
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="page-title">Dashboard</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
					<center>	
						<a href="#">
						<div class="big-box">
							<center>
								<div class="big-box-header">
									Road Test Request
								</div>
							</center>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>100</h5>
									<p>Total Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>40</h5>
									<p>New Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>35</h5>
									<p>In-progress</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>25</h5>
									<p>Closed</p>
								</div>
							</div>
						</div>
						</a>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<?php foreach($advanceBookingCount as $ABC){
							$totalAdvanceBookingRequest = $ABC['totalCount'];
							$totalAdvanceBookingOpenedRequest = $ABC['openedCount'];
							$totalAdvanceBookingProgressRequest = $ABC['progressCount'];
							$totalAdvanceBookingClosedRequest = $ABC['closedCount'];
					} ?>
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/AdvanceBooking">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										Advance Booking
									</div>
								</center>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalAdvanceBookingRequest;?></h5>
										<p>Total Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalAdvanceBookingOpenedRequest;?></h5>
										<p>New Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalAdvanceBookingProgressRequest;?></h5>
										<p>In-progress</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalAdvanceBookingClosedRequest;?></h5>
										<p>Closed</p>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
					<center>	
						<div class="big-box">
							<center>
								<div class="big-box-header">
									Query
								</div>
							</center>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>140</h5>
									<p>Total Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>20</h5>
									<p>New Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>60</h5>
									<p>In-progress</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>60</h5>
									<p>Closed</p>
								</div>
							</div>
						</div>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<?php foreach($vehicleLoanCount as $VLC){
							$totalVehicleLoanRequest = $VLC['totalCount'];
							$totalVehicleLoanOpenedRequest = $VLC['openedCount'];
							$totalVehicleLoanProgressRequest = $VLC['progressCount'];
							$totalVehicleLoanClosedRequest = $VLC['closedCount'];
					} ?>
					<center>
						<a href="<?php echo $prefix; ?>/admin/request_list/VehicleLoan">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										Apply for Vehicle Loan
									</div>
								</center>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalVehicleLoanRequest; ?></h5>
										<p>Total Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalVehicleLoanOpenedRequest; ?></h5>
										<p>New Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalVehicleLoanProgressRequest; ?></h5>
										<p>In-progress</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalVehicleLoanClosedRequest; ?></h5>
										<p>Closed</p>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
					<?php foreach($corporateDealsCount as $CDC){
							$totalCorporateRequest = $CDC['totalCount'];
							$totalCorporateOpenedRequest = $CDC['openedCount'];
							$totalCorporateProgressRequest = $CDC['progressCount'];
							$totalCorporateClosedRequest = $CDC['closedCount'];
					} ?>
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/Corporate">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										Corporate Deals
									</div>
								</center>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalCorporateRequest; ?></h5>
										<p>Total Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalCorporateOpenedRequest; ?></h5>
										<p>New Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalCorporateProgressRequest; ?></h5>
										<p>In-progress</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalCorporateClosedRequest; ?></h5>
										<p>Closed</p>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
					<center>	
						<div class="big-box">
							<center>
								<div class="big-box-header">
									Apply for Insurance
								</div>
							</center>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>500</h5>
									<p>Total Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>300</h5>
									<p>New Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>27</h5>
									<p>In-progress</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>173</h5>
									<p>Closed</p>
								</div>
							</div>
						</div>
					</center>
				</div>
			
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<?php foreach($roadAssistanceCount as $RAC){
							$totalRoadAssistanceRequest = $RAC['totalCount'];
							$totalRoadAssistanceOpenedRequest = $RAC['openedCount'];
							$totalRoadAssistanceProgressRequest = $RAC['progressCount'];
							$totalRoadAssistanceClosedRequest = $RAC['closedCount'];
					} ?>
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/RASSISTANCE">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										By On Road Assistance
									</div>
								</center>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalRoadAssistanceRequest;?></h5>
										<p>Total Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalRoadAssistanceOpenedRequest;?></h5>
										<p>New Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalRoadAssistanceProgressRequest;?></h5>
										<p>In-progress</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalRoadAssistanceClosedRequest;?></h5>
										<p>Closed</p>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
					<center>	
						<div class="big-box">
							<center>
								<div class="big-box-header">
									Downloaded Brochures
								</div>
							</center>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>200</h5>
									<p>Total Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>70</h5>
									<p>New Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>80</h5>
									<p>In-progress</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5>50</h5>
									<p>Closed</p>
								</div>
							</div>
						</div>
					</center>
				</div>
			</div>
			
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>