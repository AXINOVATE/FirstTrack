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
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/bootstrap-slider.min.css" type="text/css" rel="stylesheet">
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
					<h3 class="mt-0 mb-20">Latest</h3>
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
							<input id="ex1" type="text" class="span2" data-slider-min="10" data-slider-max="500" data-slider-step="5" data-slider-value="[10,500]"/>
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
							<input id="ex2" type="text" class="span2" data-slider-min="10" data-slider-max="500" data-slider-step="5" data-slider-value="[10,500]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SEATING CAPACITY <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">2</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">3</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">4</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">5</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">5+</label>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							ENGINE CAPACITY <i class="fa fa-minus"></i>
						</div>
						<div class="slider-example">
							<input id="ex3" type="text" class="span2" data-slider-min="800" data-slider-max="5000" data-slider-step="5" data-slider-value="[800,5000]"/>
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
							<input id="ex5" type="text" class="span2" data-slider-min="0" data-slider-max="150" data-slider-step="5" data-slider-value="[0,150]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							DEALER NAME <i class="fa fa-minus"></i>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Sireesh Automobiles</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Surya Nissan</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Pratham Motors</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="">Trinity Cars</label>
						</div>
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
					<div class="filter-manufacture">
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
							<input id="ex6" type="text" class="span2" data-slider-min="200" data-slider-max="2000" data-slider-step="5" data-slider-value="[200,2000]"/>
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
						foreach($trendDetails as $TD){
							if(in_array($TD['variantID'],$variantID)){
							}else{
							$variantID[]=$TD['variantID'];
								
							?>
							<div class="product-car">
								<div class="row">
									<div class="col-md-3 col-sm-3">
										<a href="<?php echo $prefix;?>/home/details"><img src="<?php echo $prefix;?>/assets/images/baner-car.png"></a>
									</div>
									<div class="col-md-6 col-sm-6">
										<a href="<?php echo $prefix;?>/home/details"><h4><?php echo $TD['productName']; ?></h4></a>
										<ul class="product-variant">
											<li><i class="fa fa-car"></i> <?php echo $TD['body_type']; ?></li>
											<li><i class="fa fa-cog"></i> <?php echo $TD['transmission']; ?></li>
											<li><i class="fa fa-clock-o"></i>  <?php echo $TD['mileage']; ?> kmpl</li>
											<li><i class="fa fa-filter"></i><?php echo $TD['fueltype']; ?></li>
										</ul>
									</div>
									<div class="col-md-3 col-sm-3 text-center">
										<div class="product-price"><i class="fa fa-inr"></i> 5.5 - 8.74 L </div>
										<span class="product-on-road">(On-road Proce <b>New Delhi</b>)</span>
									</div>
									<div class="col-md-12 col-sm-12 text-center">
										<div class="dropdown">
											<div data-toggle="dropdown">6 variants available<span class="caret"></span></div>
											<ul class="dropdown-menu">
												<li><a href="#">Petrol</a></li>
												<li><a href="#">Diesel</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
					<?php 
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
	})
	$(".transmission").click(function(){
		getData();
	})
	function getData(){
		var power_streering = $('input:checkbox:checked.power_streering').map(function(){return this.value; }).get().join(",");
		var transmission = $('input:checkbox:checked.transmission').map(function(){return this.value; }).get().join(",");
		var categoryID=$("#search_category").val();
		var manufactureID=$("#search_manufacture").val();
		var fuelType=$("#search_fuelType").val();
		$.ajax({
			url:'<?php echo $prefix; ?>/home/getTrendData/ALL',
			dataType:'JSON',
			type:'POST',
			data:{'categoryID':categoryID,'manufactureID':manufactureID,'fuelType':fuelType,'power_streering':power_streering,'transmission':transmission}
		}).done(function(data){
			var html='';
			var vID=[50];
			var len=data.length;
			for(var i=0;i<len;i++){
				 if($.inArray(data[i]['variantID'],vID)<0){
					  vID[vID.length]=data[i]['variantID'];
						html += '<div class="product-car">'+
									'<div class="row">'+
										'<div class="col-md-3 col-sm-3">'+
											'<a href="<?php echo $prefix;?>/home/details"><img src="<?php echo $prefix;?>/assets/images/baner-car.png"></a>'+
										'</div>'+
										'<div class="col-md-6 col-sm-6">'+
											'<a href="<?php echo $prefix;?>/home/details"><h4>'+data[i]['productName']+'</h4></a>'+
											'<ul class="product-variant">'+
												'<li><i class="fa fa-car"></i>'+data[i]['body_type']+'</li>'+
												'<li><i class="fa fa-cog"></i>'+data[i]['transmission']+'</li>'+
												'<li><i class="fa fa-clock-o"></i>'+data[i]['mileage']+' kmpl</li>'+
												'<li><i class="fa fa-filter"></i>'+data[i]['fueltype']+'</li>'+
											'</ul>'+
										'</div>'+
										'<div class="col-md-3 col-sm-3 text-center">'+
											'<div class="product-price"><i class="fa fa-inr"></i> 5.5 - 8.74 L </div>'+
											'<span class="product-on-road">(On-road Proce <b>New Delhi</b>)</span>'+
										'</div>'+
										'<div class="col-md-12 col-sm-12 text-center">'+
											'<div class="dropdown">'+
												'<div data-toggle="dropdown">6 variants available<span class="caret"></span></div>'+
												'<ul class="dropdown-menu">'+
													'<li><a href="#">Petrol</a></li>'+
													'<li><a href="#">Diesel</a></li>'+
												'</ul>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
				 }else{
					
				 }
			}
			$("#table_data").html(html);
		});
	}
			
</script>
</body>
</html>