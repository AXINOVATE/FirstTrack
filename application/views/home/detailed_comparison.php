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
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
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
					<h4>Compare</h4>
				</div>
			</div>
			<div class="row">
				<?php
				foreach($specs as $sp){
				echo '
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10" style="border-right: 1px solid #dfdfdf;">
					<div class="compare-box" style="border-bottom: 1px solid #dfdfdf;">
						<div class="comp-car-title text-center">'.$sp['productName'].' '.$sp['variantName'].'</div>
						<select class="form-control select2 mb-20">
							<option value="">SHVS ZDI Plus</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
						<img src="'.$prefix.'/'.$sp['coverImage'].'" alt="'.$sp['productName'].' '.$sp['variantName'].'" class="news-thumbnail-img mb-20"/>
					</div>
					<div class="compare-box mt-20 text-center">
						<h4 class="text-center"><i class="fa fa-inr"></i>11.79 lakhs</h4>
						<button class="comp-book-btn" type="btn">Book Test Drive</button>
					</div>
				</div>';
				}
				?>
				
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<table class="table table-bordered">
						<thead>
						  <tr style="background-color: #e7e7e7;">
							<th>Specifications</th>
							<th><?php echo $specs[0]['productName'].' '.$specs[0]['variantName'];?></th>
							<th><?php echo $specs[1]['productName'].' '.$specs[1]['variantName'];?></th>
							<?php if(count($specs)>2){echo '<th>'.$specs[2]['productName'].' '.$specs[2]['variantName'].'</th>';}?>
						  </tr>
						</thead>
						<tbody>
							
							<tr>
								<td>Fuel Type</td>
								<td> <?php echo $specs[0]['fueltype'];?></td>
								<td> <?php echo $specs[1]['fueltype'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['fueltype'].'</td>';}?>
							</tr>
							<tr>
								<td>Transmission</td>
								<td> <?php echo $specs[0]['transmission'];?></td>
								<td> <?php echo $specs[1]['transmission'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['fueltype'].'</td>';}?>
							</tr>
							<tr>
								<td>Engine Type</td>
								<td> <?php echo $specs[0]['engineType'];?></td>
								<td> <?php echo $specs[1]['engineType'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['engineType'].'</td>';}?>
							</tr>
							<tr>
								<td>Transmission</td>
								<td> <?php echo $specs[0]['transmission'];?></td>
								<td> <?php echo $specs[1]['transmission'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['fueltype'].'</td>';}?>
							</tr>
							<tr>
								<td>Displacement</td>
								<td> <?php echo $specs[0]['displacement'].'cc';?></td>
								<td> <?php echo $specs[1]['displacement'].'cc';?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['displacement'].'cc</td>';}?>
							</tr>
							<tr>
								<td>No. of Cylinders</td>
								<td> <?php echo $specs[0]['noOfCylinders'];?></td>
								<td> <?php echo $specs[1]['noOfCylinders'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['noOfCylinders'].'</td>';}?>
							</tr>
							<tr>
								<td>Length</td>
								<td> <?php echo $specs[0]['productLength'].'mm ';?></td>
								<td> <?php echo $specs[1]['productLength'].'mm ';?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['productLength'].'mm </td>';}?>
							</tr>
							<tr>
								<td>Width</td>
								<td> <?php echo $specs[0]['productWidth'].'mm ';?></td>
								<td> <?php echo $specs[1]['productWidth'].'mm ';?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['productWidth'].'mm </td>';}?>
							</tr>
							<tr>
								<td>Height</td>
								<td> <?php echo $specs[0]['productHeight'].'mm ';?></td>
								<td> <?php echo $specs[1]['productHeight'].'mm ';?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['productHeight'].'mm </td>';}?>
							</tr>
							<tr>
								<td>Power</td>
								<td> <?php echo $specs[0]['powerBHP'].'bhp @'.$specs[0]['powerRPM'].'rpm';?></td>
								<td> <?php echo $specs[1]['powerBHP'].'bhp @'.$specs[1]['powerRPM'].'rpm';?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['powerBHP'].'bhp @'.$specs[2]['powerRPM'].'rpm </td>';}?>
							</tr>
							<tr>
								<td>Torque</td>
								<td> <?php echo $specs[0]['torqueNm'].'Nm @'.$specs[0]['torqueRPM'].'rpm';?></td>
								<td> <?php echo $specs[1]['torqueNm'].'Nm @'.$specs[1]['torqueRPM'].'rpm';?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['torqueNm'].'Nm @'.$specs[2]['torqueRPM'].'rpm </td>';}?>
							</tr>
							<tr>
								<td>Mileage</td>
								<td> <?php echo $specs[0]['mileage'].'kmpl';?></td>
								<td> <?php echo $specs[1]['mileage'].'kmpl';?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['mileage'].'kmpl</td>';}?>
							</tr>
							<tr>
								<td>Seating Capacity</td>
								<td> <?php echo $specs[0]['seatingCapacity'];?></td>
								<td> <?php echo $specs[1]['seatingCapacity'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['seatingCapacity'].'</td>';}?>
							</tr>
							<tr>
								<td>Front Brake Type</td>
								<td> <?php echo $specs[0]['frontBrakeType'];?></td>
								<td> <?php echo $specs[1]['frontBrakeType'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['frontBrakeType'].'</td>';}?>
							</tr>
							<tr>
								<td>Rear Brake Type</td>
								<td> <?php echo $specs[0]['rearBrakeType'];?></td>
								<td> <?php echo $specs[1]['rearBrakeType'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['rearBrakeType'].'</td>';}?>
							</tr>
							<tr>
								<td>Fuel Tank Capacity</td>
								<td> <?php echo $specs[0]['fuelTankCapacity'].'litres';?></td>
								<td> <?php echo $specs[1]['fuelTankCapacity'].'litres';?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['fuelTankCapacity'].'litres</td>';}?>
							</tr>
							<tr>
								<td>No. of Cylinders</td>
								<td> <?php echo $specs[0]['tyreType'];?></td>
								<td> <?php echo $specs[1]['tyreType'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['tyreType'].'</td>';}?>
							</tr>
						</tbody>
					  </table>
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
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
</body>
</html>