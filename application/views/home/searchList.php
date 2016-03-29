<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
function convertNum($n) {
		// first strip any formatting;
		$n = (0+str_replace(",","",$n));
		
		// is this a number?
		if(!is_numeric($n)) return false;
		
		// now filter it;
		if($n>10000000) return round(($n/10000000),2).' Cr';
		else if($n>100000) return round(($n/100000),2).' L';
		else if($n>1000) return round(($n/1000),2).' Thousands';
		
		return number_format($n);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/bootstrap-slider.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
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
				<div class="col-md-12">
					<h3 class="mt-0 mb-20"><?php echo $pageName; ?></h3>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT CATEGORY <i class="fa fa-minus"></i>
						</div>
						<center>
							<select class="form-control select2" id="search_category" style="width:95%;">
								<option value='ALL' selected>ALL</option>
								<?php 
									foreach($categoryDetails as $CD){
										echo "<option value='".$CD['categoryID']."'>".$CD['categoryName']."</option>";
									}
								?>
							</select>
						</center>
					</div>
					<div class="filter-price">
						<div class="filter-heading">
							PRICE RANGE <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex1" type="text" class="span2" data-slider-min="<?php echo $categories[0]['Minsum']; ?>" data-slider-max="<?php echo $categories[0]['Maxsum']; ?>" data-slider-step="5" data-slider-value="[<?php echo $categories[0]['Minsum'].','.$categories[0]['Maxsum']; ?>]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT MANUFACTURERS <i class="fa fa-minus"></i>
						</div>
						<center>
							<select class="form-control select2" id="search_manufacture" style="width:95%;">
								<option value='ALL' selected>ALL</option>
								<?php 
									foreach($manufactureDetails as $MD){
										echo "<option value='".$MD['manufactureID']."'>".$MD['manufactureName']."</option>";
									}
								?>
							</select>
						</center>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT FUEL TYPE <i class="fa fa-minus"></i>
						</div>
						<center>
							<select class="form-control select2" id="search_fuelType" style="width:95%;">
								<option value="ALL">ALL</option>
								<option value="Petrol">Petrol</option>
								<option value="Diesel" >Diesel</option>
								<option value="LPG" >LPG</option>
								<option value="CNG" >CNG</option>
								<option value="Electric Power" >Electric Power</option>
							</select>
						</center>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT TRANSMISSION <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="transmission[]" class="transmission" value="Manual">Manual</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="transmission[]" class="transmission" value="Automatic">Automatic</label>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							MILEAGE <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex2" type="text" class="span2" data-slider-min="<?php echo $categories[0]['minMileage']; ?>" data-slider-max="<?php echo $categories[0]['maxMileage']; ?>" data-slider-step="1" data-slider-value="[<?php echo $categories[0]['minMileage'].','.$categories[0]['maxMileage']; ?>]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SEATING CAPACITY <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="1">1</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="2">2</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="3">3</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="4">4</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="5">5</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="6">6 or more</label>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							ENGINE CAPACITY <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex3" type="text" class="span2" data-slider-min="<?php echo $categories[0]['minDisplacement']; ?>" data-slider-max="<?php echo $categories[0]['maxDisplacement']; ?>" data-slider-step="10" data-slider-value="[<?php echo $categories[0]['minDisplacement']; ?>,<?php echo $categories[0]['maxDisplacement']; ?>]"/>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							MANUFACTURING YEAR <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex4" type="text" class="span2" data-slider-min="1999" data-slider-max="2016" data-slider-step="1" data-slider-value="[1999,2016]"/>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							WAITING PERIOD <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex5" type="text" class="span2" data-slider-min="<?php echo $categories[0]['minWaitingPeriod']; ?>" data-slider-max="<?php echo $categories[0]['maxWaitingPeriod']; ?>" data-slider-step="1" data-slider-value="[<?php echo $categories[0]['minWaitingPeriod']; ?>,<?php echo $categories[0]['maxWaitingPeriod']; ?>]"/>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading mb-10">
							DEALER NAME <i class="fa fa-minus"></i>
						</div>
						<?php 
							foreach($dealerDetails as $DD){
								?>
								<div class="checkbox">
								  <label><input type="checkbox" name="dealerID" class="dealerID" value="<?php echo $DD->userID; ?>"><?php echo $DD->firstName.' '.$DD->lastName; ?></label>
								</div>
							<?php
							}
						?>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							EMISSION STANDARD <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">BS III</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">BS IV</label>
						</div>
					</div>
					<div class="filter-powersteering">
						<div class="filter-heading mb-10">
							POWER STEERING <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" class="power_streering" name="power_streering[]" value="Yes">Yes</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" class="power_streering" name="power_streering[]" value="No">No</label>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							POWER<i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex6" type="text" class="span2" data-slider-min="<?php echo $categories[0]['minPower']; ?>" data-slider-max="<?php echo $categories[0]['maxPower']; ?>" data-slider-step="5" data-slider-value="[<?php echo $categories[0]['minPower']; ?>,<?php echo $categories[0]['maxPower']; ?>]"/>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-9 pl-0">
					<div class="sort-by">
						<span>Showing 1-12 of 202 </span>
						<ul class="pull-right">
							<li>Sort By</li>
							<li>Price</li>
							<li>Popularity</li>
							<li>Latest</li>
						</ul>
					</div>
					
					<div id="table_data">
					<?php
						$variantID=array();
						$productID=array();
						$sum=array();
						
						foreach($trendDetails as $TD){
							if(in_array($TD['productID'],$productID)){
							}else{
								$productID[]=$TD['productID'];
								if(in_array($TD['variantID'],$variantID)){
								}else{
									$variantID[]=$TD['variantID'];
								?>
								<div class="product-car">
									<div class="row">
										<div class="col-md-3 col-sm-3">
											<a href="<?php echo $prefix;?>/home/details"><img src="<?php echo $prefix.'/'.$TD['coverImage'];?>" alt="<?php echo $TD['productName']; ?>"></a>
										</div>
										<div class="col-md-6 col-sm-6">
											<a href="<?php echo $prefix;?>/home/details"><h4><?php echo $TD['productName']; ?></h4></a>
											<ul class="product-variant">
												<li><i class="fa fa-car"></i> <?php echo $TD['body_type']; ?></li>
												<li><i class="fa fa-cog"></i> <?php echo $TD['transmission']; ?></li>
												<li><i class="fa fa-clock-o"></i>  <?php echo $TD['mileage']; ?> kmpl</li>
												<li><i class="fa fa-filter"></i><?php echo $TD['fuelType']; ?></li>
											</ul>
										</div>
										<div class="col-md-3 col-sm-3 text-center">
											<?php 
											$sum=array();
											$variantID1=array();
											$variantName=array();
											foreach($trendDetails as $TD1){
												if($TD1['variantID']==$TD['variantID']){
													if(in_array($TD1['variantID'],$variantID1)){
														$sum[]=$TD1['exShowroomPrice'];
													}else{
														$sum=array();
														$variantID1[]=$TD1['variantID'];
														$sum[]=$TD1['exShowroomPrice'];
														$variantName[]=$TD1['variantName'];
													}
												}
											}
											?>
											<div class="product-price"><i class="fa fa-inr"></i> <?php echo convertNum(min($sum)).' - '.convertNum(max($sum)); ?> </div>
											<span class="product-on-road">(On-road Proce <b>
											<?php 
											$cityName = !empty($this->session->userdata('cityID')) ?  $this->session->userdata('cityID') : "Bangalore";
											echo $cityName; 
											?></b>)</span>
										</div>
										<div class="col-md-12 col-sm-12 text-center">
											<div class="dropdown">
												<div data-toggle="dropdown"><?php echo count($variantID1); ?> variants available<span class="caret"></span></div>
												<ul class="dropdown-menu">
													<?php 
														foreach($variantName as $vN){
															echo "<li><a href='".$prefix.'/home/details/'.$TD['productID']."'>".$vN."</a></li>";
														}
													?>
													
												</ul>
											</div>
										</div>
									</div>
								</div>
						<?php 
								}
							}
						}
					?>
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

<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>

<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-slider.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2({
			placeholder: "Select",
			allowClear: true
		});
		$("#ex1").slider({tooltip: 'always'});
		$("#ex2").slider({tooltip: 'always'});
		$("#ex3").slider({tooltip: 'always'});
		$("#ex4").slider({tooltip: 'always'});
		$("#ex5").slider({tooltip: 'always'});
		$("#ex6").slider({tooltip: 'always'});
	});		
	$("#ex1").change(function(){
		getData();
	});
	$("#ex2").change(function(){
		getData();
	});
	$("#ex3").change(function(){
		getData();
	});
	$("#ex5").change(function(){
		getData();
	});
	$("#ex6").change(function(){
		getData();
	});
	$("#search_category").on('change',function(){
		getData();
	});
	$("#search_manufacture").on('change',function(){
		getData();
	});
	$("#search_fuelType").on('change',function(){
		getData();
	});
	$(".power_streering").click(function(){
		getData();
	});
	$(".transmission").click(function(){
		getData();
	});
	$(".seatCapacity").click(function(){
		getData();
	});
	$(".dealerID").click(function(){
		getData();
	});
	function convertNum(n) {
		// first strip any formatting;
		//n = (0+str_replace(",","",n));
		
		// is this a number?
		if(isNaN(n)) return false;
		
		// now filter it;
		if(n>10000000) return (n/10000000).toFixed(2)+' Cr';
		else if(n>100000) return (n/100000).toFixed(2)+' L';
		else if(n>1000) return (n/1000).toFixed(2)+' Thousands';
		
		return n;
	}
	function getData(){
		var power_streering = $('input:checkbox:checked.power_streering').map(function(){return this.value; }).get().join(",");
		var transmission = $('input:checkbox:checked.transmission').map(function(){return this.value; }).get().join(",");
		var seatCapacity = $('input:checkbox:checked.seatCapacity').map(function(){return this.value; }).get().join(",");
		var dealerID = $('input:checkbox:checked.dealerID').map(function(){return this.value; }).get().join(",");
		var categoryID=$("#search_category").val();
		var manufactureID=$("#search_manufacture").val();
		var fuelType=$("#search_fuelType").val();
		var price=$("#ex1").val();
		var mileage=$("#ex2").val();
		var displacement=$("#ex3").val();
		var waitingPeriod=$("#ex5").val();
		var power=$("#ex6").val();
		var trendsTypeID='<?php echo $trendsTypeID; ?>';
		$.ajax({
			url:'<?php echo $prefix; ?>/home/getTrendData/ALL',
			dataType:'JSON',
			type:'POST',
			data:{'categoryID':categoryID,'manufactureID':manufactureID,'fuelType':fuelType,'power_streering':power_streering,'transmission':transmission,'trendsTypeID':trendsTypeID,'price':price,'mileage':mileage,'displacement':displacement,'waitingPeriod':waitingPeriod,'power':power,'seatCapacity':seatCapacity,'dealerID':dealerID}
		}).done(function(data){
			var html='';
			var vID=[100];
			var pID=[100];
			var vID1=[100];
			var data1=data;
			var len=data.length;
			for(var i=0;i<len;i++){
				if($.inArray(data[i]['productID'],pID)<0){
					pID[pID.length]=data[i]['productID'];
				 if($.inArray(data[i]['variantID'],vID)<0){
					  vID[vID.length]=data[i]['variantID'];
					   var sum=[];
					   var variantName=[];
						for(var j=0;j<data1.length;j++){
							if(data1[j]['variantID']==data[i]['variantID']){
								if($.inArray(data1[j]['variantID'],vID1)<0){
									vID[vID.length]=data1[j]['variantID'];
									sum[sum.length]=data1[j]['exShowroomPrice'];
									variantName[variantName.length]=data1[j]['variantName'];
								}else{
									sum[sum.length]=data1[j]['exShowroomPrice'];
								}
							}
						}
						var min=convertNum(Math.min.apply(Math, sum));
						var max=convertNum(Math.max.apply(Math, sum));
						//Math.min.apply(Math, sum)+' - '+Math.max.apply(Math, sum)+
						
						html += '<div class="product-car">'+
									'<div class="row">'+
										'<div class="col-md-3 col-sm-3">'+
											'<a href="<?php echo $prefix;?>/home/details"><img src="<?php echo $prefix;?>/'+data[i]['coverImage']+'" alt="'+data[i]['productName']+'"></a>'+
										'</div>'+
										'<div class="col-md-6 col-sm-6">'+
											'<a href="<?php echo $prefix;?>/home/details"><h4>'+data[i]['productName']+'</h4></a>'+
											'<ul class="product-variant">'+
												'<li><i class="fa fa-car"></i>'+data[i]['body_type']+'</li>'+
												'<li><i class="fa fa-cog"></i>'+data[i]['transmission']+'</li>'+
												'<li><i class="fa fa-clock-o"></i>'+data[i]['mileage']+' kmpl</li>'+
												'<li><i class="fa fa-filter"></i>'+data[i]['fuelType']+'</li>'+
											'</ul>'+
										'</div>'+
										'<div class="col-md-3 col-sm-3 text-center">'+
											'<div class="product-price"><i class="fa fa-inr"></i>'+min+' - '+max+'</div>'+
											'<span class="product-on-road">(On-road Proce <b><?php $cityName = !empty($this->session->userdata('cityID')) ?  $this->session->userdata('cityID') : "Bangalore";
			echo $cityName; ?></b>)</span>'+
										'</div>'+
										'<div class="col-md-12 col-sm-12 text-center">'+
											'<div class="dropdown">'+
												'<div data-toggle="dropdown">'+vID1.length+' variants available<span class="caret"></span></div>'+
												'<ul class="dropdown-menu">';
												for(var k=0;k<vID1.length;k++){
													html+='<li><a href="<?php echo $prefix.'/home/details/';?>'+data[i]['productID']+'">'+variantName[k]+'</a></li>';
												}
												html+='</ul>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
				 }else{
					
				 }
				}else{
					
				}
			}
			$("#table_data").html(html);
		});
	}
			
</script>
</body>
</html>