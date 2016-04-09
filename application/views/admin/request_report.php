<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
//var_dump($details); exit();
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
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
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
					<div class="page-title"><?php echo $Name;?> Request - <?php echo $details[0]['requestNo'];?></div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<?php 
				foreach($counts as $count){
					$totalCount = $count['totalCount'];
					$openedCount = $count['openedCount'];
					$progressCount = $count['progressCount'];
					$closedCount = $count['closedCount'];
				}
			?>
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box bg-yellow">
						<h5><?php echo $totalCount; ?></h5>
						<p>Total Request</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5><?php echo $openedCount; ?></h5>
						<p>New Request</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5><?php echo $progressCount; ?></h5>
						<p>In-progress</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5><?php echo $closedCount; ?></h5>
						<p>Closed</p>
					</div>
				</div>
			</div>
			<form class="form-horizontal" name="request_report_form" role="form"  method="POST" id="request_report_form" submit="return false">
				<input type="hidden" id="re_UID" name="re_UID" value="<?php echo $details[0]['UID']; ?>">
				<input type="hidden" id="requestNo" name="requestNo" value="<?php echo $details[0]['requestNo'];?>">
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Requester Name:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['fullName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Contact No.:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['phone'];?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Email-id:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['email'];?>
					</div>
					<?php if($page!='DropAQuery' && $page!='booking'){?>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						City:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['cityName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Maker:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['manufactureName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Model:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['modelName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Variant:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['variantName'];?>
					</div>
					<?php }	?>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Received Date:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['createdDateTime'];?>
					</div>
					<?php if($page=='VehicleLoan'){?>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Address:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['address'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Dealer Name:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['firstName'].' '.$details[0]['lastName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Dealer Location:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['location'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Booking Amount:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['bookingAmount'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Preference Bank:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['preferenceBank'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						PAN:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['PAN'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Customer Type:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['customerType'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Loan Amount:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['loanAmount'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Loan Duration:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['loanDuration'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Purchase Time:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['purchaseTime'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Annual Income:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['annualIncome'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Bank Location:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['bankLocation'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Time To Call:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['timeToCall'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Salary Account Bank:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['salaryAccountBank'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Comment:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['comment'];?>
					</div>
					<?php } ?>
					<?php if($page=='Corporate'){?>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Address:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['address'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Vehicle Quantity:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['quantityOfVehicle'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Customer Type:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['customerType'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Need Loan:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['needLoan'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Loan Amount:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['loanAmount'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Loan Duration:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['loanDuration'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Preference Bank:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['preferenceBank'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Purchase Time:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['purchaseTime'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Time To Call:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['timeToCall'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Salary Account Bank:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['salaryAccountBank'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						comment:
					</div>
					<div class="col-md-10 col-sm-10 col-xs-12 mt-10 mb-10">
						<?php echo $details[0]['comment'];?>
					</div>
					<?php } ?>
					<?php if($page=='APInsurance'){?>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Preferred Date:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['prefereed_date'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Preferred Time:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['prefereed_time'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Use Mode:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['usemode'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Customer Type:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['customerType'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Need Loan:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['needLoan'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Loan Amount:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['loanAmount'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Loan Duration:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['loanDuration'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Purchase Time:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['purchaseTime'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Preference Bank:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['preferenceBank'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Salary Account Bank:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['salaryAccountBank'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Comment:
					</div>
					<div class="col-md-10 col-sm-10 col-xs-12 mt-10 mb-10">
						<?php echo $details[0]['comment'];?>
					</div>
					<?php } ?>
					<?php if($page=='RoadTest'){?>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Dealer Name:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['firstName'].' '.$details[0]['lastName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Dealer Location:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['location'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Preferred Date:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['rtdPreferredDate'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Preferred Time:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['rtdPreferredTime'];?>
					</div>
					<?php }	?>
					<?php if($page=='RASSISTANCE'){?>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
							Use Mode:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['usemode'];?>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							Plan:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['plan'];?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							Purchase For Corporates:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['purchase_for_corporates'];?>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							List Of Roadcompanies:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['list_of_roadcompanies'];?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							Type Of Road Assistance Package:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['types_of_road_assistance_pckage'];?>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							Package Benifits:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['packagebenifits'];?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							Package Cost:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['packagecost'];?>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							Purchase Timeframe:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['purchase_timeframe'];?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							Payment Details:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['paymentdetails'];?>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
							Best Time For Call:
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
							<?php echo $details[0]['best_time_for_call'];?>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Comment:
					</div>
					<div class="col-md-10 col-sm-10 col-xs-12 mt-10 mb-10">
						<?php echo $details[0]['comment'];?>
					</div>
					<?php }	?>
					<?php if($page=='DropAQuery'){?>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Query:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['query'];?>
					</div>
					<?php }	?>
					<?php if($page=='booking'){?>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Product Name:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['productName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Variant Name:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['variantName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Color Name:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['colorName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Quantity:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['quantity'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Unit Price:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['unitPrice'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Shipping Cost:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['shippingCost'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Total Price:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['totalPrice'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Payment Method:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['paymentMethod'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Transaction Details:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['transactionDetails'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Shipping Choice:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['shippingChoice'];?>
					</div>
					<?php }	?>
				</div>
				<!--<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
						Description
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
						<textarea type="text" class="form-control" name="re_desc" id="re_desc" va_req="true"></textarea>
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
						Respond
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
						<textarea type="text" class="form-control" name="re_respond" id="re_respond" va_req="true" <?php if($details[0]['status']=='Closed'){echo "readonly";}?>></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
						&nbsp;
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 mb-10 mt-10">
						<select class="form-control entity-type select2" <?php if($details[0]['status']=='Closed'){echo "disabled";}?> name="re_status" id="re_status"  va_req="true" style="width:100%;">
							<option value="" <?php if($details[0]['status']==''){echo 'selected';}?>>--Select Status--</option>
							<option value="In-progress" <?php if($details[0]['status']=='In-progress'){echo 'selected';}?> >In-Progress</option>
							<option value="Closed" <?php if($details[0]['status']=='Closed'){echo 'selected';}?> >Closed</option>
						</select>
					</div>
					<div class="col-md-1 col-sm-1 hidden-xs mb-10 mt-10">
						&nbsp;
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
						<a href="javascript:void(0)" id="btn_request_report" class="search-btn" >Save</a>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<div class="page-title">My Requests</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th class="hidden-xs">Request No</th>
								<th>Request Date</th>
								<th>Request Type</th>													
								<th>Status</th>													
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="hidden-xs"><?php echo $details[0]['requestNo'];?></td>
								<td><?php echo $details[0]['createdDateTime'];?></td>
								<td><?php echo $Name;?></td>
								<td><?php echo $details[0]['status'];?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					Respond
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
					<textarea type="text" class="form-control"></textarea>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					<a href="javascript:void(0)" class="search-btn" >Save</a>
				</div>
			</div> -->
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<div class="page-title">History of <?php echo $Name;?> Request - <?php echo $details[0]['requestNo'];?></div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th>Responded By</th>
								<th>Respond Date</th>
								<th>Status</th>													
								<th class="hidden-xs">Respond Message</th>													
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($respondDetails as $RD){
								?>
							<tr>
								<td><?php echo $RD['firstName'].' '.$RD['lastName']; ?></td>
								<td><?php echo $RD['respondDate']; ?></td>
								<td><?php echo $RD['respondStatus']; ?></td>
								<td class="hidden-xs"><?php echo $RD['respodMessage']; ?></td>
							</tr>
						<?php 
							}
						?>
						</tbody>
					</table>
				</div>
			</div> 
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script>
	/*$('.request-count-box').on('click', function(){
		$('.request-count-box').removeClass('bg-yellow');
		$(this).addClass('bg-yellow');
	});*/
	$('#btn_request_report').on('click' ,function(){
		xu_validation.form_submit('#request_report_form','save_request_report');		
	});
	function save_request_report(){
		var page='<?php echo $page;?>';
		var myUrl='<?php echo $prefix;?>/admin/updateRequestReport';
		var requestNo = $("#requestNo").val();
		var respond = $("#re_respond").val();
		var status = $("#re_status").val();
		var UID = $("#re_UID").val();
		$.ajax({
			url:myUrl,
			dataType:'JSON',
			type:'POST',
			data:{'vType':'UPDATE','requestNo':requestNo,'respond':respond,'status':status,'UID':UID,'page':page}
		}).done(function(data){
			if(data.status == "Success"){	
				$.gritter.add({
					title: 'Success',
					text: 'Saved Successfully',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location="<?php echo $prefix;?>/admin/request_list/"+page;},1000);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location.reload();},1000);
			}
		}); 
	}
</script>
</body>
</html>