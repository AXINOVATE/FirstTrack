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
				<?php foreach($roadTestCount as $RTC){
							$totalRoadTestRequest = $RTC['totalCount'];
							if($RTC['openedCount']==null) $RTC['openedCount']="0";
							$totalRoadTestOpenedRequest = $RTC['openedCount'];
							if($RTC['progressCount']==null) $RTC['progressCount']="0";
							$totalRoadTestProgressRequest = $RTC['progressCount'];
							if($RTC['closedCount']==null) $RTC['closedCount']="0";
							$totalRoadTestClosedRequest = $RTC['closedCount'];
					} ?>
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/RoadTest">
						<div class="big-box">
							<center>
								<div class="big-box-header">
									Road Test Request
								</div>
							</center>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5><?php echo $totalRoadTestRequest; ?></h5>
									<p>Total Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5><?php echo $totalRoadTestOpenedRequest; ?></h5>
									<p>New Request</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5><?php echo $totalRoadTestProgressRequest; ?></h5>
									<p>In-progress</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
								<div class="request-count-box">
									<h5><?php echo $totalRoadTestClosedRequest; ?></h5>
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
							if($ABC['openedCount']==null) $ABC['openedCount']="0";
							if($ABC['progressCount']==null) $ABC['progressCount']="0";
							if($ABC['closedCount']==null) $ABC['closedCount']="0";
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
				<?php foreach($DropAQueryCount as $DAQ){
							$totalDropAQueryRequest = $DAQ['totalCount'];
							if($DAQ['openedCount']==null) $DAQ['openedCount']="0";
							if($DAQ['progressCount']==null) $DAQ['progressCount']="0";
							if($DAQ['closedCount']==null) $DAQ['closedCount']="0";
							$totalDropAQueryOpenedRequest = $DAQ['openedCount'];
							$totalDropAQueryProgressRequest = $DAQ['progressCount'];
							$totalDropAQueryClosedRequest = $DAQ['closedCount'];
					} ?>
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/DropAQuery">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										Query
									</div>
								</center>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalDropAQueryRequest; ?></h5>
										<p>Total Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalDropAQueryOpenedRequest; ?></h5>
										<p>New Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalDropAQueryProgressRequest; ?></h5>
										<p>In-progress</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalDropAQueryClosedRequest; ?></h5>
										<p>Closed</p>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<?php foreach($vehicleLoanCount as $VLC){
							$totalVehicleLoanRequest = $VLC['totalCount'];
							if($VLC['openedCount']==null) $VLC['openedCount']="0";
							if($VLC['progressCount']==null) $VLC['progressCount']="0";
							if($VLC['closedCount']==null) $VLC['closedCount']="0";
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
							if($CDC['openedCount'] == null) $CDC['openedCount'] = "0";
							if($CDC['progressCount'] == null) $CDC['progressCount'] = "0";
							if($CDC['closedCount'] == null) $CDC['closedCount'] = "0";
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
				<?php foreach($applyForInsuranceCount as $AFI){
							$totalForInsuranceRequest = $AFI['totalCount'];
							if($AFI['openedCount']==null) $AFI['openedCount']="0";
							if($AFI['progressCount']==null) $AFI['progressCount']="0";
							if($AFI['closedCount']==null) $AFI['closedCount']="0";
							$totalForInsuranceOpenedRequest = $AFI['openedCount'];
							$totalForInsuranceProgressRequest = $AFI['progressCount'];
							$totalForInsuranceClosedRequest = $AFI['closedCount'];
					} ?>
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/APInsurance">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										Apply for Insurance
									</div>
								</center>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalForInsuranceRequest; ?></h5>
										<p>Total Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalForInsuranceOpenedRequest; ?></h5>
										<p>New Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalForInsuranceProgressRequest; ?></h5>
										<p>In-progress</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalForInsuranceClosedRequest; ?></h5>
										<p>Closed</p>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
			
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<?php foreach($roadAssistanceCount as $RAC){
							$totalRoadAssistanceRequest = $RAC['totalCount'];
							if($RAC['openedCount']==null) $RAC['openedCount']="0";
							if($RAC['progressCount']==null) $RAC['progressCount']="0";
							if($RAC['closedCount']==null) $RAC['closedCount']="0";
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
				<?php foreach($bookingCount as $BC){
							$totalbookingCountRequest = $BC['totalCount'];
							if($BC['openedCount']==null) $BC['openedCount']="0";
							if($BC['progressCount']==null) $BC['progressCount']="0";
							if($BC['closedCount']==null) $BC['closedCount']="0";
							$totalbookingCountOpenedRequest = $BC['openedCount'];
							$totalbookingCountProgressRequest = $BC['progressCount'];
							$totalbookingCountClosedRequest = $BC['closedCount'];
					} ?>
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/booking">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										Booking Requests
									</div>
								</center>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalbookingCountRequest;?></h5>
										<p>Total Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalbookingCountOpenedRequest;?></h5>
										<p>New Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalbookingCountProgressRequest;?></h5>
										<p>In-progress</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalbookingCountClosedRequest;?></h5>
										<p>Closed</p>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<?php foreach($creditPointCount as $CP){
							$totalcreditPointCountRequest = $CP['totalCount'];
							if($CP['openedCount']==null) $CP['openedCount']="0";
							if($CP['progressCount']==null) $CP['progressCount']="0";
							if($CP['closedCount']==null) $CP['closedCount']="0";
							$totalcreditPointCountOpenedRequest = $CP['openedCount'];
							$totalcreditPointCountProgressRequest = $CP['progressCount'];
							$totalcreditPointCountClosedRequest = $CP['closedCount'];
					} ?>
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/creditPoints">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										Know your credits
									</div>
								</center>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalcreditPointCountRequest; ?></h5>
										<p>Total Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalcreditPointCountOpenedRequest;?></h5>
										<p>New Request</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalcreditPointCountProgressRequest; ?></h5>
										<p>In-progress</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
									<div class="request-count-box">
										<h5><?php echo $totalcreditPointCountClosedRequest; ?></h5>
										<p>Closed</p>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
					<center>	
						<a href="<?php echo $prefix; ?>/admin/request_list/brochure">
							<div class="big-box">
								<center>
									<div class="big-box-header">
										Download Brochure
									</div>
								</center>
								<?php 
									 foreach($brochureCount as $BC){
										 ?>
										<div class="col-md-6 col-sm-6 col-xs-6 mt-10 mb-10">
											<div class="request-count-box">
												<h5><?php echo $BC['total']; ?></h5>
												<p><?php echo $BC['categoryName']; ?></p>
											</div>
										</div> 
								<?php  }
								?>
							</div>
						</a>
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