<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome First Track</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<style type="text/css">
		.picture-color-edit >tr>td>img{text-align:center !important;}
		#image_file_msg>img{padding: 20px !important;    width: 86% !important;    border-radius: 6px !important;height:210px !important;max-width:none !important;}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	
	<div class="body-container">
		<section class="container">
			<div class="row">
				<h4>Modify Product Price</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="row">	
							<form class="form-horizontal" name="productPriceData" role="form"  method="POST" id="productPriceData"  onsubmit="return false">
								<input type="hidden" id="priceID" value="<?php if(count($getProductsPrices) > 0 ){ echo $getProductsPrices[0]['priceID'];} ?>" />
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="pcolorName" class="col-md-4 col-sm-4 col-xs-12 control-label">Color Name</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
											<select class="form-control select2" va_req="true" id="pcolorName" name="pcolorName" style="width:100%;">
												<option value=""></option>
												<?php 
												if(count($getProductsColors)){
													foreach($getProductsColors as $pcolor){
														echo '<option value="'.$pcolor['colorID'].'"';
														if($pcolor['colorID']==$getProductsPrices[0]['colorID']){
															echo ' selected ';
														}
														echo '>'.$pcolor['colorName'].'</option>';
													}
												}	
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="exShowroomPrice" class="col-md-4 col-sm-4 col-xs-12 control-label">Ex-showroom Price</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
											<input type="text" class="form-control" placeholder="480000" id="exShowroomPrice" name="exShowroomPrice"  va_req="true" value="<?php if(isset($getProductsPrices[0]['exShowroomPrice'])) echo $getProductsPrices[0]['exShowroomPrice'];?>" />
										</div>
									</div>	
									<div class="form-group">
										<label for="insurance" class="col-md-4 col-sm-4 col-xs-12 control-label">Insurance</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
											<input type="text" class="form-control" placeholder="20000" id="insurance" name="insurance"  va_req="true" value="<?php if(isset($getProductsPrices[0]['insurance'])) echo $getProductsPrices[0]['insurance'];?>" />
										</div>
									</div>
									<div class="form-group">
										<label for="handlingCharges" class="col-md-4 col-sm-4 col-xs-12 control-label">Other Handling Charges</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
											<input type="text" class="form-control" placeholder="15000" id="handlingCharges" name="handlingCharges"  va_req="true" value="<?php if(isset($getProductsPrices[0]['handlingCharges'])) echo $getProductsPrices[0]['handlingCharges'];?>" />
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label">City</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
											<select class="form-control select2" va_req="true" id="pcity" name="pcity" style="width:100%;">
												<option value=""></option>
												<?php 
												if(count($getCities)){
													foreach($getCities as $gc){
														echo '<option value="'.$gc['cityID'].'"';
														if($gc['cityID']==$getProductsPrices[0]['cityID']){
															echo ' selected ';
														}
														echo '>'.$gc['cityName'].'</option>';
													}
												}	
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="roadTax" class="col-md-4 col-sm-4 col-xs-12 control-label">Road Tax</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
											<input type="text" class="form-control" placeholder="12000" id="roadTax" name="roadTax" va_req="true" value="<?php if(isset($getProductsPrices[0]['roadTax'])) echo $getProductsPrices[0]['roadTax'];?>" />
										</div>
									</div>
									<div class="form-group">
										<label for="RTO" class="col-md-4 col-sm-4 col-xs-12 control-label">RTO</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
											<input type="text" class="form-control" placeholder="1400" id="RTO" name="RTO" va_req="true" value="<?php if(isset($getProductsPrices[0]['RTO'])) echo $getProductsPrices[0]['RTO'];?>" />
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label"></label>
										<div class="col-md-7 col-sm-6 col-xs-12 ">
											<button class="btn btn-default btn-primary pull-right" id="priceData-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save</button>
										</div>
									</div>
								</div>
							</form>
												
						</div>
					</div>
				</div>
				
			</div>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<!-- Bootstrap -->
	<script>
	$(document).ready(function(){
		$('.select2').select2({
			placeholder: "Select",
			allowClear: true
		});
	});	 
	$("#priceData-btn").click(function(){
		xu_validation.form_submit('#productPriceData','save_priceData');
	});
	function save_priceData(){
		var vType='PricesOne';
		var priceID=$("#priceID").val();
		
		$.ajax({
			url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+priceID,
			data: $('#productPriceData').serialize(),
			type:'POST',
			processData: true,
			dataType:'JSON'
		}).done(function(data){
			if(data.status == "Success"){	
				$.gritter.add({
					title: 'Success',
					text: 'Saved Successfully',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location="<?php echo $prefix;?>/admin/edit_product/<?php echo $getProductsPrices[0]['variantID']?>";},1000);
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
