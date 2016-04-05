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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
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
				$price = 0; $i=1;
				foreach($specs as $sp){
					$price = $sp['exShowroomPrice'];
				echo '
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10" style="border-right: 1px solid #dfdfdf;">
					<div class="compare-box" style="border-bottom: 1px solid #dfdfdf;">
						<div class="comp-car-title text-center" id="productName_'.$i.'">'.$sp['productName'].' '.$sp['variantName'].'</div>
						<div class="mb-20">';
						if($i==1){
							echo'
							<select class="form-control select2" id="variant1">
								<option value=""></option>';
							foreach($variants1 as $v1){
								echo '
								<option value="'.$v1['variantID'].'"';
								if($specs[0]['variantID']==$v1['variantID']){
									echo ' selected ';
								}
								echo '>'.$v1['variantName'].'</option>';
							}
							echo '
							</select>';
						}
						if($i==2){
							echo'
							<select class="form-control select2" id="variant2">
								<option value=""></option>';
							foreach($variants2 as $v2){
								echo '
								<option value="'.$v2['variantID'].'"';
								if($specs[1]['variantID']==$v2['variantID']){
									echo ' selected ';
								}
								echo '>'.$v2['variantName'].'</option>';
							}
							echo '
							</select>';
						}
						if($i==3){
							echo'
							<select class="form-control select2" id="variant3">
								<option value=""></option>';
							$sel2="";
							foreach($variants3 as $v3){
								echo '
								<option value="'.$v3['variantID'].'"';
								if($specs[2]['variantID']==$v3['variantID']){
									echo ' selected ';
								}
								echo '>'.$v3['variantName'].'</option>';
							}
							echo '
							</select>';
						}
						echo '
						</div>
						<img src="'.$prefix.'/'.$sp['coverImage'].'" alt="'.$sp['productName'].' '.$sp['variantName'].'" class="news-thumbnail-img mb-20" id="img_'.$i.'"/>
					</div>
					<div class="compare-box mt-20 text-center">
						<h4 class="text-center" id="price_'.$i.'"><i class="fa fa-inr"></i>'.$price.'</h4>
						
						<button id="test-drive1" class="comp-book-btn" type="btn" data-toggle="modal" data-target="#test-drive-modal">Book Test Drive</button>
					</div>
				</div>';
					$i++;
				}
				?>
				
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<table class="table table-bordered" id="compare_specs">
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
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['transmission'].'</td>';}?>
							</tr>
							<tr>
								<td>Engine Type</td>
								<td> <?php echo $specs[0]['engineType'];?></td>
								<td> <?php echo $specs[1]['engineType'];?></td>
								<?php if(count($specs)>2){echo '<td>'.$specs[2]['engineType'].'</td>';}?>
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
								<td>Tyre Type</td>
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
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script>
	$('document').ready(function(){
		$('.select2').select2({
			placeholder: "Select Variant",
			allowClear: true
		});
		$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
		$('.inpt-timepicker').timepicker();	
	});
	$('.select2').on('change',function(){
		var var1 = $('#variant1').val();
		var var2 = $('#variant2').val();
		var var3 = "";
		if($('#variant3').val()!=''){
			var3 = $('#variant3').val();
		}
		get_variantSpecs(var1, var2, var3);
	});
	function get_variantSpecs(var1, var2, var3){
		var vType = 'detailedComparison';
		$('#compare_specs').html('<thead><tr style="background-color: #e7e7e7;"><th class="text-center">Loading...</th></tr></thead>');
		$.ajax({
			url:'<?php echo $prefix;?>/home/getCompareInfo/'+vType+'/'+var1+'/'+var2+'/'+var3,
			type:'POST',
			processData: true,
			dataType:'JSON'
		}).done(function(data){
			var html="";
			html += '<thead>'+
						'<tr style="background-color: #e7e7e7;">'+
							'<th>Specifications</th>'+
							'<th>'+data[0]['productName']+' '+data[0]['variantName']+'</th>'+
							'<th>'+data[1]['productName']+' '+data[1]['variantName']+'</th>';
							if(data.length>2){
							html +='<th>'+data[2]['productName']+' '+data[2]['variantName']+'</th>';
							}
					html +='</tr>'+
					'</thead>';
			
			html += '<tbody>'+
						'<tr>'+
							'<td>Fuel Type</td>'+
							'<td>'+data[0]['fueltype']+'</td>'+
							'<td>'+data[1]['fueltype']+'</td>';
							if(data.length>2){
							html +='<td>'+data[2]['fueltype']+'</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Transmission</td>'+
							'<td>'+data[0]['transmission']+'</td>'+
							'<td>'+data[1]['transmission']+'</td>';
							if(data.length>2){
							html +='<td>'+data[2]['transmission']+'</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Engine Type</td>'+
							'<td>'+data[0]['engineType']+'</td>'+
							'<td>'+data[1]['engineType']+'</td>';
							if(data.length>2){
							html +='<td>'+data[2]['engineType']+'</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Displacement</td>'+
							'<td>'+data[0]['displacement']+'cc</td>'+
							'<td>'+data[1]['displacement']+'cc</td>';
							if(data.length>2){
							html +='<td>'+data[2]['displacement']+'cc</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Length</td>'+
							'<td>'+data[0]['productLength']+'mm</td>'+
							'<td>'+data[1]['productLength']+'mm</td>';
							if(data.length>2){
							html +='<td>'+data[2]['productLength']+'mm</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Width</td>'+
							'<td>'+data[0]['productWidth']+'mm</td>'+
							'<td>'+data[1]['productWidth']+'mm</td>';
							if(data.length>2){
							html +='<td>'+data[2]['productWidth']+'mm</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Height</td>'+
							'<td>'+data[0]['productHeight']+'mm</td>'+
							'<td>'+data[1]['productHeight']+'mm</td>';
							if(data.length>2){
							html +='<td>'+data[2]['productHeight']+'mm</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Power</td>'+
							'<td>'+data[0]['powerBHP']+'bhp @'+data[0]['powerRPM']+'rpm</td>'+
							'<td>'+data[1]['powerBHP']+'bhp @'+data[1]['powerRPM']+'rpm</td>';
							if(data.length>2){
							html +='<td>'+data[2]['powerBHP']+'bhp @'+data[2]['powerRPM']+'rpm</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Torque</td>'+
							'<td>'+data[0]['torqueNm']+'Nm @'+data[0]['torqueRPM']+'rpm</td>'+
							'<td>'+data[1]['torqueNm']+'Nm @'+data[1]['torqueRPM']+'rpm</td>';
							if(data.length>2){
							html +='<td>'+data[2]['torqueNm']+'Nm @'+data[2]['torqueRPM']+'rpm</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Mileage</td>'+
							'<td>'+data[0]['mileage']+'kmpl</td>'+
							'<td>'+data[1]['mileage']+'kmpl</td>';
							if(data.length>2){
							html +='<td>'+data[2]['mileage']+'kmpl</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Seating Capacity</td>'+
							'<td>'+data[0]['seatingCapacity']+'</td>'+
							'<td>'+data[1]['seatingCapacity']+'</td>';
							if(data.length>2){
							html +='<td>'+data[2]['seatingCapacity']+'</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Front Brake Type</td>'+
							'<td>'+data[0]['frontBrakeType']+'</td>'+
							'<td>'+data[1]['frontBrakeType']+'</td>';
							if(data.length>2){
							html +='<td>'+data[2]['frontBrakeType']+'</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Rear Brake Type</td>'+
							'<td>'+data[0]['rearBrakeType']+'</td>'+
							'<td>'+data[1]['rearBrakeType']+'</td>';
							if(data.length>2){
							html +='<td>'+data[2]['rearBrakeType']+'</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Fuel Tank Capacity</td>'+
							'<td>'+data[0]['fuelTankCapacity']+'litres</td>'+
							'<td>'+data[1]['fuelTankCapacity']+'litres</td>';
							if(data.length>2){
							html +='<td>'+data[2]['fuelTankCapacity']+'litres</td>';
							}
				html +='</tr>';
				html +='<tr>'+
							'<td>Tyre Type</td>'+
							'<td>'+data[0]['tyreType']+'</td>'+
							'<td>'+data[1]['tyreType']+'</td>';
							if(data.length>2){
							html +='<td>'+data[2]['tyreType']+'</td>';
							}
				html +='</tr>';
			html += '</tbody>';	
			for(var i=1; i<=data.length; i++){
				$('#productName_'+i).html(data[(i-1)]['productName']+' '+data[(i-1)]['variantName']);
				$('#img_'+i).attr('src','<?php echo $prefix;?>/'+data[(i-1)]['coverImage']);
				$('#price_'+i).html('<i class="fa fa-inr"></i> '+data[(i-1)]['exShowroomPrice']);
			}
			$('#compare_specs').html(html);
		});
	}
</script>
</body>
</html>