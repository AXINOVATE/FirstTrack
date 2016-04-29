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
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.c-compare{width: 80px;float: left;height: 70px;display: inline-block;text-align: center;border: 1px solid #ccc;background-color: #eeeeee;padding: 5px; cursor:pointer;}
		.bg-blue{background-color: #027CD5;color: #FFF;border: 1px solid #027cd5;}
		.c-compare i{font-size:40px;}
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
					<h4 class="pull-left mr-10">Compare</h4> 
					<div class="c-compare bg-blue" data-catID="<?php echo $catID[0]['categoryID']?>"><i class="fa fa-car"></i><div>Car</div></div>
					<div class="c-compare" data-catID="<?php echo $catID[1]['categoryID']?>"><i class="fa fa-motorcycle"></i><div>Bike</div></div>
				</div>
			</div>
			<div class="row mt-20">
				<form class="form-horizontal" action="<?php echo $prefix;?>/detailed_comparison" name="compareForm" role="form" method="POST" id="compareForm" onSubmit="return false">
				<div>
					<input type="hidden" value="<?php echo $catID[0]['categoryID']?>" id="categoryID" name="categoryID" />
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
					<div class="compare-box">
						<img src="<?php echo $assetsPath;?>/images/default-no-car.png" alt="" class="news-thumbnail-img" id="selVariant1_img"/>
						<div class="compare-title" id="selVariant1_name">
							No vehicle selected yet
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selMaker" id="selMaker1" name="selMaker1" data-model="selModel1" va_req="true">
								
							</select>
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selModel" id="selModel1" name="selModel1" data-variant="selVariant1" va_req="true">
								
							</select>
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selVariant" id="selVariant1" name="selVariant1" va_req="true">
								
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
					<div class="compare-box">
						<img src="<?php echo $assetsPath;?>/images/default-no-car.png" alt="" class="news-thumbnail-img" id="selVariant2_img"/>
						<div class="compare-title" id="selVariant2_name">
							No vehicle selected yet
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selMaker" id="selMaker2" name="selMaker2" data-model="selModel2" va_req="true">
								
							</select>
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selModel" id="selModel2" name="selModel2" data-variant="selVariant2" va_req="true">
								
							</select>
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selVariant" id="selVariant2" name="selVariant2" va_req="true">
								
							</select>
						</div>
					</div>
					<div class="mt-30">
						<button type="submit" class="search-btn" id="compare">Compare</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
					<div class="compare-box">
						<img src="<?php echo $assetsPath;?>/images/default-no-car.png" alt="" class="news-thumbnail-img" id="selVariant3_img"/>
						<div class="compare-title" id="selVariant3_name">
							No vehicle selected yet
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selMaker" id="selMaker3" name="selMaker3" data-model="selModel3">
								
							</select>
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selModel" id="selModel3" name="selModel3" data-variant="selVariant3">
								
							</select>
						</div>
						<div class="mb-10">
							<select class="form-control select2 mb-10 selVariant" id="selVariant3" name="selVariant3">
								
							</select>
						</div>
					</div>
				</div>
				</form>
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
<script src="<?php echo $assetsPath; ?>/js/select2.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.typeahead.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script>
	$('document').ready(function(){
		getMakers('<?php echo $catID[0]['categoryID'];?>');
		$('.selMaker').select2({
			placeholder: "Select Maker",
			allowClear: true
		});
		$('.selModel').select2({
			placeholder: "Select Model",
			allowClear: true
		});
		$('.selVariant').select2({
			placeholder: "Select Variant",
			allowClear: true
		});
		$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
		$('.inpt-timepicker').timepicker();	
	});
	
	$('.c-compare').on('click', function(){
		$('.c-compare').removeClass('bg-blue');
		var catID = $(this).attr('data-catID');
		var car='<?php echo $catID[0]['categoryID'];?>';
		var bike='<?php echo $catID[1]['categoryID'];?>';
		$('#categoryID').val(catID);
		$(this).addClass('bg-blue');
		$('.select2').val('');
		$('.select2').select2('');
		$('.selMaker').select2({
			placeholder: "Select Maker",
			allowClear: true
		});
		$('.selModel').select2({
			placeholder: "Select Model",
			allowClear: true
		});
		$('.selVariant').select2({
			placeholder: "Select Variant",
			allowClear: true
		});
		getMakers(catID);
		$('.selMaker').trigger("change");
		$('.selModel').trigger("change");
		//$('.selVariant').trigger("change");
		if(catID==car){
			$('.news-thumbnail-img').attr('src','<?php echo $assetsPath;?>/images/default-no-car.png');
		}else if(catID==bike){
			$('.news-thumbnail-img').attr('src','<?php echo $assetsPath;?>/images/default-no-bike.png');
		}else{
			$('.news-thumbnail-img').attr('src','<?php echo $assetsPath;?>/images/default-no-car.png');
		}
		$('.compare-title').html('No vehicle selected yet');
	});
	function getMakers(catID){
		$.ajax({
			url:'<?php echo $prefix;?>/home/getCompareInfo/makers/'+catID,
			type:'POST',
			processData: true,
			dataType:'JSON'
		}).done(function(data){
			var html="";
			html += '<option value=""></option>';
			for(var i=0;i<data.length;i++){
				html += '<option value="'+data[i]['manufactureID']+'">'+data[i]['manufactureName']+'</option>';
			}
			$('#selMaker1').html(html);
			$('#selMaker2').html(html);
			$('#selMaker3').html(html);
		});	
	}
	$('.selMaker').on('change',function(){
		var catID = $('#categoryID').val();
		var makerID = $(this).val();
		var model = $(this).attr('data-model');
		$.ajax({
			url:'<?php echo $prefix;?>/home/getCompareInfo/models/'+catID+'/'+makerID,
			type:'POST',
			processData: true,
			dataType:'JSON'
		}).done(function(data){
			var html="";
			html += '<option value=""></option>';
			for(var i=0;i<data.length;i++){
				html += '<option value="'+data[i]['productID']+'">'+data[i]['productName']+'</option>';
			}
			$('#'+model).html(html);
		});
	});
	$('.selModel').on('change',function(){
		var catID = $('#categoryID').val();
		var modelID = $(this).val();
		var variant = $(this).attr('data-variant');
		$.ajax({
			url:'<?php echo $prefix;?>/home/getCompareInfo/variants/'+catID+'/'+modelID,
			type:'POST',
			processData: true,
			dataType:'JSON'
		}).done(function(data){
			var html="";
			html += '<option value=""></option>';
			for(var i=0;i<data.length;i++){
				html += '<option value="'+data[i]['variantID']+'">'+data[i]['variantName']+'</option>';
			}
			$('#'+variant).html(html);
		});
	});
	$('.selVariant').on('change',function(){
		var catID = $('#categoryID').val();
		var variantID = $(this).val();
		var vID = $(this).attr('id');
		$.ajax({
			url:'<?php echo $prefix;?>/home/getCompareInfo/variantsImg/'+catID+'/'+variantID,
			type:'POST',
			processData: true,
			dataType:'JSON'
		}).done(function(data){
			var imgPath = "";
			if(data[0]['Image']=='' || data[0]['Image']==' ' || data[0]['Image']=='assets/upload/products/'){
				imgPath = '<?php echo base_url();?>assets/images/no-image.png';
			}
			else{
				imgPath = '<?php echo base_url();?>'+data[0]['Image'];
			}
			$('#'+vID+'_img').attr('src',imgPath);
			$('#'+vID+'_name').html(data[0]['vehicleName']);
		});	
	});
	$('#compare').on('click',function(){
		xu_validation.form_submit('#compareForm','compareProducts');
	});
	function compareProducts(){
		$('#compareForm').attr('onSubmit', 'return true');
	}
</script>
</body>
</html>