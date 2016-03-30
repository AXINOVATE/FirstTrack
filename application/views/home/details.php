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
	<link href="<?php echo $assetsPath;?>/css/bootstrap-switch.min.css" type="text/css" rel="stylesheet">	
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
				<div class="col-md-5 col-sm-12">
					<div class="item-img">
						<img id="item-img" src="<?php if(count($colors) > 0)if(file_exists($prefix.'/'.$colors[0]->colorImage))echo $prefix.'/'.$colors[0]->colorImage;else echo $prefix.'/assets/images/no-image.png';?>">
						<div class="item-colors text-right">
							<span>Colors &nbsp;</span>
							<input type="hidden" id="d_color" value="<?php echo $colorID; ?>">
							<ul class="pull-right">
								<?php foreach($colors as $c){ ?>
								<li <?php if($colorID == $c->colorID)echo 'class="active"';?>><div style="background-color:<?php echo $c->colorCode; ?>;" data-img="<?php if(file_exists($prefix.'/'.$c->colorImage))echo $c->colorImage;else echo '/assets/images/no-image.png';?>" data-id="<?php echo $c->colorID; ?>"></div></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="row item-name">
						<div class="col-md-6 col-sm-7">
							<h3 class="mt-0"><?php if(isset($basic->productName))echo $basic->productName; ?> </h3>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<div class="col-md-3 col-sm-2 col-xs-6 item-share">
							<div class="dropdown">
							  <div data-toggle="dropdown"><i class="fa fa-share-alt"></i></div>
							  <ul class="dropdown-menu">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Google+</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Linkedin</a></li>
							  </ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 item-rating">
							<div class="chart" data-percent="86">
								<span class="percent">8.6</span>
							</div>
							<div>Nayagaadi Rating</div>
						</div>
					</div>
					<hr class="item-hr">
					<div class="item-location mb-10">
						<div class="col-md-4 col-sm-5 col-xs-12 no-padding">
							<span class="pull-left">Variant &nbsp; </span>
							<select class="select2" style="width:145px;" id="d_variant">
								<option value=""></option>
								<?php foreach($variants as $v){ ?>
								<?php if($v->variantID == $variantID){ ?>
								<option value="<?php echo $v->variantID;?>" selected><?php echo $v->variantName;?></option>
								<?php }else{?>
								<option value="<?php echo $v->variantID;?>"><?php echo $v->variantName;?></option>
								<?php } } ?>
							</select> 
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 no-padding hide">
							<span class="pull-left">Usage Type &nbsp; </span>
							<select class="select2" style="width:145px;">
								<option value=""></option>
							</select>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 no-padding">
							<span class="pull-left">Location &nbsp; </span>
							<select class="select2" style="width:145px;" id="d_location">
								<option value=""></option>
								<?php foreach($locations as $l){ ?>
								<?php if($l['locationID'] == $locationID){ ?>
								<option value="<?php echo $l['locationID'];?>" selected><?php echo $l['location'];?></option>
								<?php }else{?>
								<option value="<?php echo $l['locationID'];?>"><?php echo $l['location'];?></option>
								<?php } } ?>
							</select>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 no-padding">
							<span class="pull-left">Dealer &nbsp; </span>
							<select class="select2" style="width:145px;" id="d_dealer">
								<option value=""></option>
								<?php foreach($dealers as $d){ ?>
								<option value="<?php echo $d->userID;?>" <?php if($d->userID == $dealerID)echo 'selected';?>><?php echo $d->firstName.' '.$d->lastName;?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 br-right">
							<div class="item-price"><span ><i class="fa fa-inr"></i> <?php if(isset($prices->onRoadPrice))echo $prices->onRoadPrice;?> </span> On-Road Price </div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="item-subprice"><span>Ex-Showroom </span>: <i class="fa fa-inr"></i> <?php if(isset($prices->exShowroomPrice))echo $prices->exShowroomPrice;?></div>
							<div class="item-subprice"><span>Insurance </span>: <i class="fa fa-inr"></i> <?php if(isset($prices->insurance))echo $prices->insurance;?> </div>
							<div class="item-subprice"><span>RTO </span>: <i class="fa fa-inr"></i> <?php if(isset($prices->RTO))echo $prices->RTO;?> </div>
							<div class="item-subprice"><span>Road Tax </span>: <i class="fa fa-inr"></i> <?php if(isset($prices->roadTax))echo $prices->roadTax;?> </div>
							<div class="item-subprice"><span>Other Handling Charges </span>: <i class="fa fa-inr"></i> <?php if(isset($prices->handlingOtherCharges))echo $prices->handlingOtherCharges;?> </div>
						</div>
					</div>
					<div class="row mt-10">
						<div class="col-md-12 item-action">
							<button class="btn" id="buy_now_btn">Buy Now</button>
							<button class="btn">Advance Booking</button>
							<button class="btn">Buy Later</button>
							<button class="btn">Book Test Drive</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-md-12">
					<div class="item-benfit"> <div class="pull-left">Benfits buying from nayagaadi </div> <img src="<?php echo $prefix; ?>/assets/images/special-offer-image.png" width="60px"></div>
					<div class="item-benfits">Benfits 1 <hr class="mb-5 mt-5"> <span><?php if(isset($offers->offer1))echo $offers->offer1;?> </span></div>
					<div class="item-benfits">Benfits 2 <hr class="mb-5 mt-5"> <span><?php if(isset($offers->offer2))echo $offers->offer2;?> </span></div>
					<div class="item-benfits">Benfits 3 <hr class="mb-5 mt-5"> <span><?php if(isset($offers->offer3))echo $offers->offer3;?> </span></div>
					<div class="item-benfits">Benfits 4 <hr class="mb-5 mt-5"> <span><?php if(isset($offers->offer4))echo $offers->offer4;?> </span></div>
					<div class="item-benfits">Benfits 5 <hr class="mb-5 mt-5"> <span><?php if(isset($offers->offer5))echo $offers->offer5;?> </span></div>
				</div>
			</div>
			<div class="row mt-10 hide">
				<div class="col-md-3">
					<img src="<?php echo $prefix; ?>/assets/images/special-offer-image.png" width="60px">
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-md-12">
					<div class="item-feature"> <b>Engine</b> <hr class="mb-5 mt-5"> <?php if(isset($data->engineType))echo $data->engineType;?> </div>
					<div class="item-feature"> <b>Displacement</b> <hr class="mb-5 mt-5"> <?php if(isset($data->displacement))echo $data->displacement.' CC';?> </div>
					<div class="item-feature"> <b>Max Power</b> <hr class="mb-5 mt-5"> <?php if(isset($data->powerBHP))echo $data->powerBHP.' bhp @ '.$data->powerRPM.' rpm';?> </div>
					<div class="item-feature"> <b>Mileage</b> <hr class="mb-5 mt-5">  <?php if(isset($data->mileage))echo $data->mileage.' kmpl';?> </div>
					<div class="item-feature"> <b>Fuel</b> <hr class="mb-5 mt-5"> <?php if(isset($data->fueltype))echo $data->fueltype;?> </div>
					<div class="item-feature"> <b>Transmission</b> <hr class="mb-5 mt-5"> <?php if(isset($data->transmission))echo $data->transmission;?> </div>
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-md-12 item-features">
					<ul id = "myTab" class = "nav nav-tabs">
					   <li class = "active"> <a href = "#overview" data-toggle = "tab"> Overview </a></li>
					   <li> <a href = "#specifications" data-toggle = "tab"> Specifications </a></li>
					   <li> <a href = "#features" data-toggle = "tab"> Features </a></li>
					   <li> <a href = "#photos" data-toggle = "tab"> Photos </a></li>
					   <li> <a href = "#videos" data-toggle = "tab"> Videos </a></li>
					</ul>

					<div id = "myTabContent" class = "tab-content">

						<div class = "tab-pane fade in active" id = "overview">
							<p><?php if(isset($data->overview))echo $data->overview;?></p>
						</div>

						<div class = "tab-pane fade" id = "specifications">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="specs-title">Engine Specifications</div>
									<ul>
										<li><div>Engine Type</div><b><?php if(isset($data->engineType)) echo $data->engineType;?></b></li>
										<li><div>Displacement (CC)</div><b><?php if(isset($data->displacement)) echo $data->displacement;?></b></li>
										<li><div>No. of Cylinders</div><b><?php if(isset($data->noOfCylinders)) echo $data->noOfCylinders;?></b></li>
										<li><div>Power (BHP)</div><b><?php if(isset($data->powerBHP)) echo $data->powerBHP;?></b></li>
										<li><div>Power (RPM)</div><b><?php if(isset($data->powerRPM)) echo $data->powerRPM;?></b></li>
										<li><div>Torque (Nm)</div><b><?php if(isset($data->torqueNm)) echo $data->torqueNm;?></b></li>
										<li><div>Torque (RPM)</div><b><?php if(isset($data->torqueRPM)) echo $data->torqueRPM;?></b></li>
									</ul>
									<div class="specs-title">Dimensions</div>
									<ul>
										<li><div>Length (mm)</div><b><?php if(isset($data->productLength)) echo $data->productLength;?></b></li>
										<li><div>Width (mm)</div><b><?php if(isset($data->productWidth)) echo $data->productWidth;?></b></li>
										<li><div>Height (mm)</div><b><?php if(isset($data->productHeight)) echo $data->productHeight;?></b></li>
										<li><div>Ground Clearance</div><b><?php if(isset($data->groundClearance)) echo $data->groundClearance;?></b></li>
										<li><div>Wheelbase</div><b><?php if(isset($data->wheelBase)) echo $data->wheelBase;?></b></li>
										<li><div>Seat Capacity</div><b><?php if(isset($data->seatingCapacity)) echo $data->seatingCapacity;?></b></li>
										<li><div>Minimum Turning Radius (metre)</div><b><?php if(isset($data->minimumTurningRadius)) echo $data->minimumTurningRadius;?></b></li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="specs-title">Braking System</div>
									<ul>
										<li><div>Tyre Type</div><b><?php if(isset($data->tyreType)) echo $data->tyreType;?></b></li>
										<li><div>Front Brake Type</div><b><?php if(isset($data->frontBrakeType)) echo $data->frontBrakeType;?></b></li>
										<li><div>Rear Brake Type</div><b><?php if(isset($data->rearBrakeType)) echo $data->rearBrakeType;?></b></li>
										<li><div>Front Tyre Size</div><b><?php if(isset($data->frontTyreSize)) echo $data->frontTyreSize;?></b></li>
										<li><div>Rear Tyre Size</div><b><?php if(isset($data->reartyreSize)) echo $data->reartyreSize;?></b></li>
									</ul>
									
									<div class="specs-title">Other Specifications</div>
									<ul>
										<li><div>Fuel Type</div><b><?php if(isset($data->fueltype)) echo $data->fueltype;?></b></li>
										<li><div>Mileage (kmpl)</div><b><?php if(isset($data->mileage)) echo $data->mileage;?></b></li>
										<li><div>No. of Gears</div><b><?php if(isset($data->noOfGears)) echo $data->noOfGears;?></b></li>
										<li><div>Fuel Tank Capacity (litres)</div><b><?php if(isset($data->fuelTankCapacity)) echo $data->fuelTankCapacity;?></b></li>
										<li><div>Front Suspension</div><b><?php if(isset($data->frontSuspension)) echo $data->frontSuspension;?></b></li>
										<li><div>Rear Suspension</div><b><?php if(isset($data->rearSuspension)) echo $data->rearSuspension;?></b></li>
										<li><div>Battery</div><b><?php if(isset($data->Battery)) echo $data->Battery."&nbsp;";?></b></li>
										<li><div>Headlamp</div><b><?php if(isset($data->Headlamp)) echo $data->Headlamp."&nbsp;";?></b></li>
										<li><div>Seat Height (mm)</div><b><?php if(isset($data->seatHeight)) echo $data->seatHeight."&nbsp;";?></b></li>
										<li><div>Speedometer</div><b><?php if(isset($data->speedometer)) echo $data->speedometer;?></b></li>
										<li><div>Tachometer</div><b><?php if(isset($data->tachometer)) echo $data->tachometer;?></b></li>
										<li><div>Light Type</div><b><?php if(isset($data->lightType)) echo $data->lightType;?></b></li>
									</ul>
								</div>
							</div>		
						</div>
						<div class = "tab-pane fade" id = "features">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="specs-title">Safety & security features</div>
									<ul>
										<li><div>Airbags</div><b><?php if(isset($features->airbags)) if($features->airbags=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Passenger Airbags</div><b><?php if(isset($features->passengerAirbags)) if($features->passengerAirbags=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Side Airbags</div><b><?php if(isset($features->sideAirbags)) if($features->sideAirbags=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>ABS</div><b><?php if(isset($features->ABS)) if($features->ABS=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Central Locking</div><b><?php if(isset($features->centralLocking)) if($features->centralLocking=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Child Safety Lock</div><b><?php if(isset($features->childSafetyLock)) if($features->childSafetyLock=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Rear Parking Censor</div><b><?php if(isset($features->rearParkingCensor)) if($features->rearParkingCensor=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Power Steering</div><b><?php if(isset($features->powerSteering)) if($features->powerSteering=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Adjustable Power Steering</div><b><?php if(isset($features->adjustablePowerSteering)) if($features->adjustablePowerSteering=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Fog Lamps</div><b><?php if(isset($features->fogLamps)) if($features->fogLamps=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Low Fuel Indicator</div><b><?php if(isset($features->lowFuelIndicator)) if($features->lowFuelIndicator=='Yes') echo 'Yes';else echo 'No';?></b></li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="specs-title">Comfort and Convenience</div>
									<ul>
										<li><div>AC</div><b><?php if(isset($features->AC)) if($features->AC=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Heater</div><b><?php if(isset($features->heater)) if($features->heater=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Headlamp Beam Adjustor</div><b><?php if(isset($features->headlampBeamAdjustor)) if($features->headlampBeamAdjustor=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Cruise Control</div><b><?php if(isset($features->cruiseControl)) if($features->cruiseControl=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Steering Mounted Audio</div><b><?php if(isset($features->steeringMountedAudio)) if($features->steeringMountedAudio=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Front Armrest</div><b><?php if(isset($features->frontArmRest)) if($features->frontArmRest=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Rear Armrest</div><b><?php if(isset($features->rearArmRest)) if($features->rearArmRest=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Music System</div><b><?php if(isset($features->musicSystem)) if($features->musicSystem=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Speakers</div><b><?php if(isset($features->speakers)) if($features->speakers=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Trip Meter</div><b><?php if(isset($features->tripMeter)) if($features->tripMeter=='Yes') echo 'Yes';else echo 'No';?></b></li>
										<li><div>Pillion Seat</div><b><?php if(isset($features->pillionSeat)) if($features->pillionSeat=='Yes') echo 'Yes';else echo 'No';?></b></li>
										
									</ul>
								
									
								</div>
								
							</div>							
						</div>
						<div class = "tab-pane fade" id="photos">
							<ul class="row">
								<?php foreach($photos as $p){ ?>
								<li class="col-lg-4 col-md-4 col-sm-3 col-xs-4">
									<img class="img-responsive" src="<?php echo $prefix.'/'.$p->filePath;?>">
								</li>
								<?php } ?>
							</ul> 
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
								<div class="modal-content">         
								  <div class="modal-body">                
								  </div>
								</div><!-- /.modal-content -->
							  </div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</div>
						<div class = "tab-pane fade" id = "videos">
							<p>No videos available</p>
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
<script src="<?php echo $assetsPath; ?>/js/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/photo-gallery.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTab').tabCollapse();
		$('.chart').easyPieChart({
			size:'40',
			scaleColor:false,
			easing: 'easeOutBounce'
		});
		$("select").select2({placeholder:"Select.."});
	});
	$(".item-colors li").on('click',function(){
		var img = $(this).find('div').data('img');
		var id = $(this).find('div').data('id');
		$("#item-img").attr("src","<?php echo $prefix;?>/"+img);
		$(".item-colors li").removeClass('active');
		$(this).addClass('active');
		$("#d_color").val(id);
		$("#d_color").trigger('change');
	});
	$("#d_variant,#d_dealer,#d_color").on("change",function(){
		var variantID = $("#d_variant").val();
		var dealerID = $("#d_dealer").val();
		var colorID = $("#d_color").val();
		if(variantID != "" && dealerID != "" && colorID != ""){
			window.location="<?php echo $prefix;?>/home/details/<?php echo $slug; ?>?variant="+variantID+"&dealer="+dealerID+"&color="+colorID;
		}
	});
	$("#buy_now_btn").on('click',function(){
		var variantID = $("#d_variant").val();
		var dealerID = $("#d_dealer").val();
		var colorID = $("#d_color").val();
		var productID = '<?php echo $slug; ?>';
		if(variantID != "" && dealerID != "" && colorID != ""){
			$.ajax({
				url:'<?php echo $prefix;?>/home/creating_checkout',
				type:'POST',
				data:{'productID':productID,'variantID':variantID,'dealerID':dealerID,'colorID':colorID},
				dataType:'JSON'
			}).success(function(data){
				window.location="<?php echo $prefix;?>/home/checkout";
			});
		}
	});
</script>
</body>
</html>