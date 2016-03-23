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
	<link href="<?php echo $assetsPath;?>/css/bootstrap-switch.min.css" type="text/css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<style type="text/css">
		#myTab-accordion>.panel-default>.panel-heading{background-color: #027CD5; color: white !important; }
		#myTab-accordion>.panel-default>.panel-heading>.panel-title>a{text-decoration:none !important;}
		.abc{padding:5px;}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<section class="row">
				<div class="col-sm-12">
				<h4>Edit Products – <?php if(count($getProductsBasic)) echo $getProductsBasic[0]['productName'].' '.$getProductsBasic[0]['variantName'];?></h4>
				<hr>
					<div class="panel no-border-radius-all panel-default edit-product-panel product-panel-default">
						<!--div class="panel-heading bg-lightblue"><h3>Edit Products – Rapid</h3></div-->
							<div class="panel-body" style="padding:0px;">
								<div role="tabpanel">
								  <!-- Nav tabs -->
								  <ul id="myTab" class="nav  nav-tabs1" role="tablist">
									<li role="presentation" class="active product-panel-heading"><a href="#Basic-Details" aria-controls="home" role="tab" data-toggle="tab">Basic Details</a></li>
									<li role="presentation"><a href="#Picture-color" aria-controls="profile" role="tab" data-toggle="tab">Picture & Colors</a></li>
									<li role="presentation"><a href="#Pricing" aria-controls="Pricing" role="tab" data-toggle="tab">Pricing</a></li>
									<li role="presentation"><a href="#Specification" aria-controls="Specification" role="tab" data-toggle="tab">Specification</a></li>
									<li role="presentation"><a href="#Features" aria-controls="Features" role="tab" data-toggle="tab">Features</a></li>
									<li role="presentation"><a href="#Photos" aria-controls="Photos" role="tab" data-toggle="tab">Photos</a></li>
									<li role="presentation"><a href="#Videos" aria-controls="Videos" role="tab" data-toggle="tab">Videos</a></li>
								  </ul>
									<div>
									<input type="hidden" id="variantID" value="<?php if(count($getProductsBasic) > 0 ){ echo $getProductsBasic[0]['variantID'];} ?>">
									<input type="hidden" id="fileTypeName" value="">
									</div>
								  <!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Basic-Details">
											<form class="form-horizontal" name="productBasicData" role="form"  method="POST" id="productBasicData"  onsubmit="return false">
												
												<div class="row">
													<div class="col-md-6 ">
														<div class="form-group">
															<label for="manufacturerName" class="col-md-4 col-sm-4 col-xs-12 control-label">Manufacture Name</label>
															<div class="col-md-7 col-sm-6 col-xs-12">
																<select class="form-control select2 mb-10" va_req="true" id="manufacturerName" name="manufacturerName" <?php if(count($getProductsBasic)) echo 'disabled';?>>
																	<option value=""></option>
																	<?php 
																	if(isset($getMakers)){
																		foreach($getMakers as $gm){
																			echo '<option value="'.$gm['manufactureID'].'"';
																			if(isset($getProductsBasic[0]['manufacturerID'])){	
																				if($gm['manufactureID']==$getProductsBasic[0]['manufacturerID']){
																					echo 'selected';
																				}
																			}
																			echo '>'.$gm['manufactureName'].'</option>';
																		}
																	}	
																	?>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="productType" class="col-md-4 col-sm-4 col-xs-12 control-label">Product Type</label>
															<div class="col-md-7 col-sm-6 col-xs-12">
																<select class="form-control select2 mb-10" va_req="true" id="productType" name="productType" <?php if(count($getProductsBasic)) echo 'disabled';?> >
																	<option value=""></option>
																	<?php 
																	if(isset($getCategory)){
																		foreach($getCategory as $gc){
																			echo '<option value="'.$gc['categoryID'].'"';
																			if(isset($getProductsBasic[0]['productType'])){	
																				if($gc['categoryID']==$getProductsBasic[0]['productType']){
																					echo 'selected';
																				}
																			}
																			echo '>'.$gc['categoryName'].'</option>';
																		}
																	}	
																	?>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="variantName" class="col-md-4 col-sm-4 col-xs-12 control-label">Variant</label>
															<div class="col-md-7 col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Variant" id="variantName" name="variantName" value="<?php if(isset($getProductsBasic[0]['variantName'])) echo $getProductsBasic[0]['variantName'];?>" />
															</div>
														</div>
														<div class="form-group" id="title_cover_image">
															<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
																Cover Image <span class="form-man"> * </span>
															</label>
															<div class="col-md-6 col-sm-5 col-xs-10">
																<input type="hidden" name="cover_image" id="image_file_path" value="<?php if(isset($getProductsBasic[0]['coverImage'])) echo $getProductsBasic[0]['coverImage']; ?>" va_req="true"/>
																
																<div id="progress" class="progress">
																	<div id="image_progress" class="progress-bar progress-bar-success"></div>
																</div>
																<span>Picture size 200 X 125 Pixels</span>
																
															</div>
															<div class="col-md-2 col-sm-2 col-xs-2">
																<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
																	<!-- The file input field used as target for the file upload widget -->
																	<input class="fileupload" id="image_upload" type="file" name="files" message="image_file_msg" pro_path="image_progress" save_path="image_file_path">
																</span>
																
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="productName" class="col-md-4 col-sm-4 col-xs-12 control-label">Product Name</label>
															<div class="col-md-7 col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Product Name" id="productName" name="productName" value="<?php if(isset($getProductsBasic[0]['productName'])) echo $getProductsBasic[0]['productName'];?>" />
															</div>
														</div>												  
														<div class="form-group">
															<label for="bodyType" class="col-md-4 col-sm-4 col-xs-12 control-label">Body Type</label>
															<div class="col-md-7 col-sm-6 col-xs-12">
																<select class="form-control select2 mb-10" va_req="true" id="bodyType" name="bodyType">
																	<option value=""></option>
																	<?php 
																	if(isset($bodyTypeDetails)){
																		foreach($bodyTypeDetails as $btd){
																			echo '<option value="'.$btd['bodyTypeID'].'"';
																			if(isset($getProductsBasic[0]['bodytype'])){	
																				if($btd['bodyTypeID']==$getProductsBasic[0]['bodytype']){
																					echo 'selected';
																				}
																			}
																			echo '>'.$btd['body_type'].'</option>';
																		}
																	}	
																	?>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="transmission" class="col-md-4 col-sm-4 col-xs-12 control-label">Transmission</label>
															<div class="col-md-7 col-sm-6 col-xs-12">
																<select class="form-control entity-type select2" id="transmission" name="transmission" style="width:100%;">
																	<option value=""></option>
																	<option value="Manual" <?php if(isset($getProductsBasic[0]['transmission'])){ if($getProductsBasic[0]['transmission']=='Manual') echo 'selected';} ?> >Manual</option>
																	<option value="Automatic" <?php if(isset($getProductsBasic[0]['transmission'])){ if($getProductsBasic[0]['transmission']=='Automatic') echo 'selected';} ?> >Automatic</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label">Picture Preview</label>
															<div class="col-md-8 col-sm-6 col-xs-12 ">
																<!--img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded" alt="Cinque Terre" width="110" height="110"-->
																<div id="image_file_msg" class="files"><?php if(isset($getProductsBasic[0]['coverImage'])){ if($getProductsBasic[0]['coverImage']!='')echo "<img src='".$prefix."/".$getProductsBasic[0]['coverImage']."' class='img-rounded img-responsive Picture-Preview' alt='Image' width='80%' height='210'>";} ?></div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-1 col-sm-1 ">&nbsp;</div>
													<div class="col-md-10 col-sm-9 col-xs-12">
														<div class="form-group">
															<label for="overview" class="col-md-12 col-sm-12 col-xs-12">Overview</label>
															<div class="col-sm-6 col-xs-12 col-md-12">
																<textarea class="form-control" rows="5" id="overview" name="overview" va_req="true"><?php if(isset($getProductsBasic[0]['overview'])) echo $getProductsBasic[0]['overview'];?></textarea>
															</div>
															
														</div>
													</div>
													<div class="col-md-12">
														<div class="col-md-4"></div>
														<div class="col-md-4"></div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
																<div class="col-sm-6 col-xs-12 ">
																	<button class="btn btn-default btn-primary pull-right" id="basicData-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
										<!-- end tab 1 -->
										<div role="tabpanel" class="tab-pane" id="Picture-color">
											<div class="row">
												<form class="form-horizontal" name="productColorData" role="form"  method="POST" id="productColorData"  onsubmit="return false">
													<div class="col-md-6 col-sm-6 col-xs-12">									 
														<div class="form-group">
															<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
																Picture <span class="form-man"> * </span>
															</label>
															<div class="col-md-6 col-sm-5 col-xs-9">
																<input type="hidden" name="cover_image1" id="image_file_path1" value="" va_req="true"/>
																<div id="progress" class="progress">
																	<div id="image_progress1" class="progress-bar progress-bar-success"></div>
																</div>
																<span>Picture size 200 X 125 Pixels</span>
																
															</div>
															<div class="col-md-2 col-sm-3 col-xs-3">
																<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
																	<!-- The file input field used as target for the file upload widget -->
																	<input class="fileupload" id="color_upload" type="file" name="files" message="image_file_msg1" pro_path="image_progress1" save_path="image_file_path1">
																</span>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label">Color Name</label>
															<div class="col-md-7 col-sm-7 col-xs-12 ">
															  <input type="text" class="form-control" placeholder="Superior White" id="colorName" name="colorName" />
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label">Color Code</label>
															<div class="col-md-7 col-sm-7 col-xs-12 ">
															  <input type="text" class="form-control" placeholder="Eg. #dfdfdf" id="colorCode" name="colorCode" />
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<h6>Picture Preview</h6>
														<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
														  <div id="image_file_msg1" class="files"></div>
														</div>
													</div>	
													<div class="col-md-12 col-sm-12 col-xs-12">
														<div class="col-md-4 col-sm-3 hidden-2"></div>
														<div class="col-md-4 col-sm-3 hidden-2"></div>
														<div class="col-md-4 col-sm-6 hidden-8">
															<div class="form-group">
																<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label"></label>
																<div class="col-md-6 col-sm-6 col-xs-12 ">
																	<button class="btn btn-default btn-primary pull-right" id="colorsData-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
																</div>
															</div>
														</div>
													</div>
												</form>													
												<div class="col-md-12">
													<table class="table table-bordered picture-color-edit">
														<thead>
															<th>Color Name</th>
															<th class="hidden-xs">Color Code</th>
															<th>Action</th>													
														</thead>
														<tbody>
															<?php
															if(count($getProductsColors)){
																foreach($getProductsColors as $gpc){
																	echo '
															<tr>
																<td>'.$gpc['colorName'].'</td>
																<td class="hidden-xs">'.$gpc['colorCode'].'</td>
																<td>
																	<a href="'.$prefix.'/admin/edit_productColors/'.$gpc['variantID'].'/'.$gpc['colorID'].'" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp 
																	<a href="javascript:void(0)" class="delete-box-color font-size-16 del-item" data-item="delColors" data-id="'.$gpc['colorID'].'"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a>
																</td>
															</tr>
																	';
																}
															}
															else{
																echo '<tr><td colspan="3">No colors added for this product yet.</td></tr>';
															}?>
															
														</tbody>
													</table>
												</div>
													
											</div>
										</div>
										<!-- end tab 2 -->
										<div role="tabpanel" class="tab-pane" id="Pricing">
											<div class="row">
												<form class="form-horizontal" name="productPriceData" role="form"  method="POST" id="productPriceData"  onsubmit="return false">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="pcolorName" class="col-md-4 col-sm-4 col-xs-12 control-label">Color Name</label>
															<div class="col-md-7 col-sm-7 col-xs-12 ">
																<select class="form-control select2" va_req="true" id="pcolorName" name="pcolorName" style="width:100%;">
																	<option value=""></option>
																	<?php 
																	if(count($getProductsColors)){
																		foreach($getProductsColors as $pcolor){
																			echo '<option value="'.$pcolor['colorID'].'">'.$pcolor['colorName'].'</option>';
																		}
																	}	
																	?>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="exShowroomPrice" class="col-md-4 col-sm-4 col-xs-12 control-label">Ex-showroom Price</label>
															<div class="col-md-7 col-sm-7 col-xs-12 ">
																<input type="text" class="form-control" placeholder="480000" id="exShowroomPrice" name="exShowroomPrice"  va_req="true" />
															</div>
														</div>	
														<div class="form-group">
															<label for="insurance" class="col-md-4 col-sm-4 col-xs-12 control-label">Insurance</label>
															<div class="col-md-7 col-sm-7 col-xs-12 ">
																<input type="text" class="form-control" placeholder="20000" id="insurance" name="insurance"  va_req="true" />
															</div>
														</div>
														<div class="form-group">
															<label for="handlingCharges" class="col-md-4 col-sm-4 col-xs-12 control-label">Other Handling Charges</label>
															<div class="col-md-7 col-sm-7 col-xs-12 ">
																<input type="text" class="form-control" placeholder="15000" id="handlingCharges" name="handlingCharges"  va_req="true" />
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
																			echo '<option value="'.$gc['cityID'].'">'.$gc['cityName'].'</option>';
																		}
																	}	
																	?>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="roadTax" class="col-md-4 col-sm-4 col-xs-12 control-label">Road Tax</label>
															<div class="col-md-7 col-sm-7 col-xs-12 ">
																<input type="text" class="form-control" placeholder="12000" id="roadTax" name="roadTax" va_req="true" />
															</div>
														</div>
														<div class="form-group">
															<label for="RTO" class="col-md-4 col-sm-4 col-xs-12 control-label">RTO</label>
															<div class="col-md-7 col-sm-7 col-xs-12 ">
																<input type="text" class="form-control" placeholder="1400" id="RTO" name="RTO" va_req="true"  />
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
												<div class="col-md-12 col-sm-12 col-xs-12">
													<table class="table table-bordered picture-color-edit">
														<thead>
															<th>Color Name</th>
															<th>City</th>
															<th class="hidden-xs">Price</th>
															<th>Action</th>													
														</thead>
														<tbody>
															<?php
															$totalPrice = 0;
															if(count($getProductsPrices)){
																foreach($getProductsPrices as $gpp){
																	$totalPrice = $gpp['exShowroomPrice']+$gpp['insurance']+$gpp['RTO']+$gpp['roadTax']+$gpp['handlingCharges'];
																	echo '
															<tr>
																<td>'.$gpp['colorName'].'</td>
																<td>'.$gpp['cityName'].'</td>
																<td class="hidden-xs">'.$totalPrice.'</td>
																<td>
																	<a href="'.$prefix.'/admin/edit_productPrices/'.$gpp['variantID'].'/'.$gpp['priceID'].'" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp 
																	<a href="javascript:void(0)" class="delete-box-color font-size-16 del-item" data-item="delPrices" data-id="'.$gpp['priceID'].'""><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a>
																</td>
															</tr>
																	';
																}
															}
															else{
																echo '<tr><td colspan="4">No prices added for this product yet.</td></tr>';
															}?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!-- end tab 3 -->
										<div role="tabpanel" class="tab-pane" id="Specification">
											<form class="" name="productSpecData" role="form"  method="POST" id="productSpecData"  onsubmit="return false">
												<div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="specs-div" >
															<div class="specs-title">Engine Specifications</div>
															<div class="specs-box">
																<div class="row">	
																	<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">	
																		<div class="form-group">
																			<label for="engineType" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Engine Type</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="engineType" name="engineType" value="<?php if(isset($getProductsSpecs[0]['engineType'])) echo $getProductsSpecs[0]['engineType'];?>" />
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="displacement" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Displacement (CC)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="1200" id="displacement" name="displacement" value="<?php if(isset($getProductsSpecs[0]['displacement'])) echo $getProductsSpecs[0]['displacement'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="noOfCylinders" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">No. of Cylinders</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="4" id="noOfCylinders" name="noOfCylinders" value="<?php if(isset($getProductsSpecs[0]['noOfCylinders'])) echo $getProductsSpecs[0]['noOfCylinders'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="powerBHP" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Power (BHP)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="85" id="powerBHP" name="powerBHP" value="<?php if(isset($getProductsSpecs[0]['powerBHP'])) echo $getProductsSpecs[0]['powerBHP'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="powerRPM" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Power (RPM)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="6000" id="powerRPM" name="powerRPM" value="<?php if(isset($getProductsSpecs[0]['powerRPM'])) echo $getProductsSpecs[0]['powerRPM'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="torqueNm" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Torque (Nm)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="114" id="torqueNm" name="torqueNm" value="<?php if(isset($getProductsSpecs[0]['torqueNm'])) echo $getProductsSpecs[0]['torqueNm'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="torqueRPM" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Torque (RPM)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="4000" id="torqueRPM" name="torqueRPM" value="<?php if(isset($getProductsSpecs[0]['torqueRPM'])) echo $getProductsSpecs[0]['torqueRPM'];?>"/>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="specs-div" >
															<div class="specs-title">Dimensions</div>
															<div class="specs-box">
																<div class="row">	
																	<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">	
																		<div class="form-group">
																			<label for="productLength" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Length (mm)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="3200" id="productLength" name="productLength" value="<?php if(isset($getProductsSpecs[0]['productLength'])) echo $getProductsSpecs[0]['productLength'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="productWidth" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Width (mm)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="1300" id="productWidth" name="productWidth" value="<?php if(isset($getProductsSpecs[0]['productWidth'])) echo $getProductsSpecs[0]['productWidth'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="productHeight" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Height (mm)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="1500" id="productHeight" name="productHeight" value="<?php if(isset($getProductsSpecs[0]['productHeight'])) echo $getProductsSpecs[0]['productHeight'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="groundClearance" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Ground Clearance</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="groundClearance" name="groundClearance" value="<?php if(isset($getProductsSpecs[0]['groundClearance'])) echo $getProductsSpecs[0]['groundClearance'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="wheelBase" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Wheelbase</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="wheelBase" name="wheelBase" value="<?php if(isset($getProductsSpecs[0]['wheelBase'])) echo $getProductsSpecs[0]['wheelBase'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="seatingCapacity" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Seat Capacity</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="seatingCapacity" name="seatingCapacity" value="<?php if(isset($getProductsSpecs[0]['seatingCapacity'])) echo $getProductsSpecs[0]['seatingCapacity'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="minimumTurningRadius" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Minimum Turning Radius (metre)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="1.7" id="minimumTurningRadius" name="minimumTurningRadius" value="<?php if(isset($getProductsSpecs[0]['minimumTurningRadius'])) echo $getProductsSpecs[0]['minimumTurningRadius'];?>"/>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="specs-div" >
															<div class="specs-title">Braking System</div>
															<div class="specs-box">
																<div class="row">	
																	<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">	
																		<div class="form-group">
																			<label for="tyreType" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Tyre Type</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="Tubeless" id="tyreType" name="tyreType" value="<?php if(isset($getProductsSpecs[0]['tyreType'])) echo $getProductsSpecs[0]['tyreType'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="frontBrakeType" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Front Brake Type</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="Drum" id="frontBrakeType" name="frontBrakeType" value="<?php if(isset($getProductsSpecs[0]['frontBrakeType'])) echo $getProductsSpecs[0]['frontBrakeType'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="rearBrakeType" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Brake Type</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="Disk" id="rearBrakeType" name="rearBrakeType" value="<?php if(isset($getProductsSpecs[0]['rearBrakeType'])) echo $getProductsSpecs[0]['rearBrakeType'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="frontTyreSize" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Front Tyre Size</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="frontTyreSize" name="frontTyreSize" value="<?php if(isset($getProductsSpecs[0]['frontTyreSize'])) echo $getProductsSpecs[0]['frontTyreSize'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="reartyreSize" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Tyre Size</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="reartyreSize" name="reartyreSize" value="<?php if(isset($getProductsSpecs[0]['reartyreSize'])) echo $getProductsSpecs[0]['reartyreSize'];?>"/>
																			</div>
																		</div>
																	</div>
																	
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="specs-div" >
															<div class="specs-title">Other Specifications</div>
															<div class="specs-box">
																<div class="row">	
																	<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">	
																		<div class="form-group">
																			<label for="fueltype" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Fuel Type</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="Petrol" id="fueltype" name="fueltype" value="<?php if(isset($getProductsSpecs[0]['fueltype'])) echo $getProductsSpecs[0]['fueltype'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="mileage" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Mileage (kmpl)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="15" id="mileage" name="mileage" value="<?php if(isset($getProductsSpecs[0]['mileage'])) echo $getProductsSpecs[0]['mileage'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="noOfGears" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">No. of Gears</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="4" id="noOfGears" name="noOfGears" value="<?php if(isset($getProductsSpecs[0]['noOfGears'])) echo $getProductsSpecs[0]['noOfGears'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="fuelTankCapacity" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Fuel Tank Capacity (litres)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="25" id="fuelTankCapacity" name="fuelTankCapacity" value="<?php if(isset($getProductsSpecs[0]['fuelTankCapacity'])) echo $getProductsSpecs[0]['fuelTankCapacity'];?>"/>
																			</div>
																		</div>
																	</div>
																	
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="frontSuspension" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Front Suspension</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="frontSuspension" name="frontSuspension" value="<?php if(isset($getProductsSpecs[0]['frontSuspension'])) echo $getProductsSpecs[0]['frontSuspension'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="rearSuspension" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Suspension</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="rearSuspension" name="rearSuspension" value="<?php if(isset($getProductsSpecs[0]['rearSuspension'])) echo $getProductsSpecs[0]['rearSuspension'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="battery" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Battery</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="battery" name="battery" value="<?php if(isset($getProductsSpecs[0]['Battery'])) echo $getProductsSpecs[0]['Battery'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="headlamp" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Headlamp</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																			  <input type="text" class="form-control" placeholder="" id="headlamp" name="headlamp" value="<?php if(isset($getProductsSpecs[0]['Headlamp'])) echo $getProductsSpecs[0]['Headlamp'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="seatHeight" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Seat Height (mm)</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																				<input type="text" class="form-control" placeholder="200" id="seatHeight" name="seatHeight" value="<?php if(isset($getProductsSpecs[0]['seatHeight'])) echo $getProductsSpecs[0]['seatHeight'];?>"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="speedometer" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Speedometer</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																				<input type="text" class="form-control" placeholder="Analogue" id="speedometer" name="speedometer" value="<?php if(isset($getProductsSpecs[0]['speedometer'])) echo $getProductsSpecs[0]['speedometer'];?>" />
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="tachometer" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Tachometer</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																				<input type="text" class="form-control" placeholder="Analogue" id="tachometer" name="tachometer" value="<?php if(isset($getProductsSpecs[0]['tachometer'])) echo $getProductsSpecs[0]['tachometer'];?>" />
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																		<div class="form-group">
																			<label for="lightType" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Light Type</label>
																			<div class="col-md-7 col-sm-7 col-xs-12 ">
																				<input type="text" class="form-control" placeholder="Halogen" id="lightType" name="lightType" value="<?php if(isset($getProductsSpecs[0]['lightType'])) echo $getProductsSpecs[0]['lightType'];?>" />
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12 col-xs-12">
														<div class="col-md-4 col-sm-4 col-xs-3"></div>
														<div class="col-md-4 col-sm-4 col-xs-3"></div>
														<div class="col-md-4 col-sm-4 col-xs-6">
															<div class="form-group">
																<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
																<div class="col-sm-6 col-xs-12 float-right ">
																	<button class="btn btn-default btn-primary pull-right" id="specData-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>	
										</div><!-- end tab 4 -->
										<div role="tabpanel" class="tab-pane" id="Features">
											
											<div class="row">
												<form class="" name="productFeatureData" role="form"  method="POST" id="productFeatureData"  onsubmit="return false">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="specs-div" >
														<div class="specs-title">Safety & security features</div>
														<div class="specs-box">
															<div class="row">	
																<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">	
																	<div class="form-group">
																		<label for="airbags" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Airbags</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="airbags" name="airbags" <?php if(isset($getProductsFeatures[0]['airbags'])) if($getProductsFeatures[0]['airbags']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No" /></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="passengerAirbags" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Passenger Airbags</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="passengerAirbags" name="passengerAirbags" <?php if(isset($getProductsFeatures[0]['passengerAirbags'])) if($getProductsFeatures[0]['passengerAirbags']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="sideAirbags" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Side Airbags</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="sideAirbags" name="sideAirbags" <?php if(isset($getProductsFeatures[0]['sideAirbags'])) if($getProductsFeatures[0]['sideAirbags']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="ABS" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">ABS</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="ABS" name="ABS" <?php if(isset($getProductsFeatures[0]['ABS'])) if($getProductsFeatures[0]['ABS']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="centralLocking" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Central Locking</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="centralLocking" name="centralLocking" <?php if(isset($getProductsFeatures[0]['centralLocking'])) if($getProductsFeatures[0]['centralLocking']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="childSafetyLock" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Child Safety Lock</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="childSafetyLock" name="childSafetyLock" <?php if(isset($getProductsFeatures[0]['childSafetyLock'])) if($getProductsFeatures[0]['childSafetyLock']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="rearParkingCensor" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Parking Censor</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="rearParkingCensor" name="rearParkingCensor" <?php if(isset($getProductsFeatures[0]['rearParkingCensor'])) if($getProductsFeatures[0]['rearParkingCensor']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="rearParkingCamera" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Parking Camera</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="rearParkingCamera" name="rearParkingCamera" <?php if(isset($getProductsFeatures[0]['rearParkingCamera'])) if($getProductsFeatures[0]['rearParkingCamera']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="powerSteering" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Power Steering</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="powerSteering" name="powerSteering" <?php if(isset($getProductsFeatures[0]['powerSteering'])) if($getProductsFeatures[0]['powerSteering']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="adjustablePowerSteering" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Adjustable Power Steering</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="adjustablePowerSteering" name="adjustablePowerSteering" <?php if(isset($getProductsFeatures[0]['adjustablePowerSteering'])) if($getProductsFeatures[0]['adjustablePowerSteering']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="fogLamps" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Fog Lamps</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="fogLamps" name="fogLamps" <?php if(isset($getProductsFeatures[0]['fogLamps'])) if($getProductsFeatures[0]['fogLamps']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="lowFuelIndicator" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Low Fuel Indicator</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="lowFuelIndicator" name="lowFuelIndicator" <?php if(isset($getProductsFeatures[0]['lowFuelIndicator'])) if($getProductsFeatures[0]['lowFuelIndicator']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="specs-div" >
														<div class="specs-title">Comfort and Convenience</div>
														<div class="specs-box">
															<div class="row">	
																<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">	
																	<div class="form-group">
																		<label for="AC" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">AC</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox"  id="AC" name="AC" <?php if(isset($getProductsFeatures[0]['AC'])) if($getProductsFeatures[0]['AC']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="heater" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Heater</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="heater" name="heater" <?php if(isset($getProductsFeatures[0]['heater'])) if($getProductsFeatures[0]['heater']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="headlampBeamAdjustor" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Headlamp Beam Adjustor</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="headlampBeamAdjustor" name="headlampBeamAdjustor" <?php if(isset($getProductsFeatures[0]['headlampBeamAdjustor'])) if($getProductsFeatures[0]['headlampBeamAdjustor']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="cruiseControl" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Cruise Control</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="cruiseControl" name="cruiseControl" <?php if(isset($getProductsFeatures[0]['cruiseControl'])) if($getProductsFeatures[0]['cruiseControl']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="steeringMountedAudio" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Steering Mounted Audio</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="steeringMountedAudio" name="steeringMountedAudio" <?php if(isset($getProductsFeatures[0]['steeringMountedAudio'])) if($getProductsFeatures[0]['steeringMountedAudio']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="frontArmRest" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Front Armrest</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="frontArmRest" name="frontArmRest" <?php if(isset($getProductsFeatures[0]['frontArmRest'])) if($getProductsFeatures[0]['frontArmRest']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="rearArmRest" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Armrest</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="rearArmRest" name="rearArmRest" <?php if(isset($getProductsFeatures[0]['rearArmRest'])) if($getProductsFeatures[0]['rearArmRest']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="musicSystem" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Music System</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="musicSystem" name="musicSystem" <?php if(isset($getProductsFeatures[0]['musicSystem'])) if($getProductsFeatures[0]['musicSystem']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="speakers" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Speakers</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="speakers" name="speakers" <?php if(isset($getProductsFeatures[0]['speakers'])) if($getProductsFeatures[0]['speakers']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="tripMeter" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Trip Meter</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="tripMeter" name="tripMeter" <?php if(isset($getProductsFeatures[0]['tripMeter'])) if($getProductsFeatures[0]['tripMeter']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="pillionSeat" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Pillion Seat</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" id="pillionSeat" name="pillionSeat" <?php if(isset($getProductsFeatures[0]['pillionSeat'])) if($getProductsFeatures[0]['pillionSeat']=='Yes') echo 'checked';?> data-on-text="Yes" data-off-text="No"/></div>
																		</div>
																	</div>
																</div>
																
																
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="col-md-4 col-sm-4 col-xs-2"></div>
													<div class="col-md-4 col-sm-4 col-xs-2"></div>
													<div class="col-md-4 col-sm-4 col-xs-8">
														<div class="form-group float-right">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
															<div class="col-sm-6 col-xs-12 float-right">
																<button class="btn btn-default btn-primary pull-right" id="featureData-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
															</div>
														</div>
													</div>
												</div>
												</form>
											</div>
											
										</div>
										<!-- end tab 5 -->
										<div role="tabpanel" class="tab-pane" id="Photos">
											<div class="row">
												<form class="form-horizontal" name="productPhotoData" role="form"  method="POST" id="productPhotoData"  onsubmit="return false">
												<div class="col-md-6 col-sm-6 col-xs-12">										 
													<div class="form-group" id="title_cover_image">
														<label for="" class="col-md-4 col-sm-4 col-xs-12 control-label">
															Picture <span class="form-man"> * </span>
														</label>
														<div class="col-md-6 col-sm-5 col-xs-9">
															<input type="hidden" name="cover_image2" id="image_file_path2" value="" va_req="true"/>
															<div id="progress2" class="progress">
																<div id="image_progress2" class="progress-bar progress-bar-success"></div>
															</div>
															<span>Picture size 200 X 125 Pixels</span>
															
														</div>
														<div class="col-md-2 col-sm-3 col-xs-3">
															<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
																<!-- The file input field used as target for the file upload widget -->
																<input class="fileupload" id="image_upload2" type="file" name="files" message="image_file_msg2" pro_path="image_progress2" save_path="image_file_path2">
															</span>
														</div>
													</div>
													<div class="form-group">
														<label for="fileTitle" class="col-md-4 col-sm-4 col-xs-12 control-label">Title</label>
														<div class="col-md-7 col-sm-6 col-xs-12 ">
															<input type="text" class="form-control" id="fileTitle" name="fileTitle" placeholder="File Name" va_req="true" />
														</div>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<h6>Picture Preview</h6>
													<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
														<div id="image_file_msg2" class="files"></div>
													</div>
												</div>	
												<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="col-md-4 col-sm-3 col-xs-2"></div>
													<div class="col-md-4 col-sm-3 col-xs-2"></div>
													<div class="col-md-4 col-sm-6 col-xs-8">
													  <div class="form-group">
														<label for="inputPassword3" class="col-md-12 col-sm-12 col-xs-12 control-label"></label>
														<div class="col-md-12 col-sm-12 col-xs-12 ">
														  <button class="btn btn-default btn-primary pull-right" id="photoData-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
														</div>
													  </div>
														
													</div>
												</div>
												</form>
											</div>
											<div class="row">
												<div class="col-md-12">
													<table class="table table-bordered picture-color-edit">
														<thead>
														<th>Picture</th>
														<th class="hidden-xs">Title</th>
														<th>Action</th>													
														</thead>
														<tbody>
															<?php
															if(count($getProductsPhotos)){
																foreach($getProductsPhotos as $gpph){
																	echo '
															<tr>
																<td>
																	<center>
																		<img src="'.$prefix.'/'.$gpph['filePath'].'" class="img-rounded img-responsive " alt="'.$gpph['fileTitle'].'" style="width:90px; height:auto;" />
																	</center>
																</td>
																<td class="hidden-xs">'.$gpph['fileTitle'].'</td>
																<td>
																	<!--a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a-->  
																	<a href="javascript:void(0)" class="delete-box-color font-size-16 del-item" data-item="delPhoto" data-id="'.$gpph['fileID'].'"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a>
																</td>
															</tr>
																	';
																}
															}
															else{
																echo '<tr><td colspan="3">No photos added for this product yet.</td></tr>';
															}?>
															
														</tbody>
													</table>
												</div>
											
											</div>
										</div>
										<!-- end tab 6 -->
										<div role="tabpanel" class="tab-pane" id="Videos">
											<div class="row">
												<form class="form-horizontal" name="productVideoData" role="form"  method="POST" id="productVideoData"  onsubmit="return false">
												<div class="col-md-6 col-sm-6 col-xs-12">										 
													<div class="form-group">
														<label for="" class="col-md-4 col-sm-4 col-xs-12 control-label">
															Video <span class="form-man"> * </span>
														</label>
														<div class="col-md-6 col-sm-5 col-xs-9">
															<input type="hidden" name="cover_image3" id="image_file_path3" value="" va_req="true"/>
															<div id="progress2" class="progress">
																<div id="image_progress3" class="progress-bar progress-bar-success"></div>
															</div>
															<span>Size of the video should be less than 50MB.</span>
															
														</div>
														<div class="col-md-2 col-sm-3 col-xs-3">
															<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
																<!-- The file input field used as target for the file upload widget -->
																<input class="fileupload" id="image_upload3" type="file" name="files" message="image_file_msg3" pro_path="image_progress3" save_path="image_file_path3">
															</span>
														</div>
													</div>
													<div class="form-group">
														<label for="fileTitle1" class="col-md-4 col-sm-4 col-xs-12 control-label">Video Title</label>
														<div class="col-md-7 col-sm-6 col-xs-12 ">
															<input type="text" class="form-control"  id="fileTitle1" name="fileTitle1" placeholder="Video Name" />
														</div>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<h6>Video Preview</h6>
													<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
														<div id="image_file_msg3" class="files"></div>
													</div>
												</div>	
												<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="col-md-4 col-sm-3 col-xs-2"></div>
													<div class="col-md-4 col-sm-3 col-xs-2"></div>
													<div class="col-md-4 col-sm-6 col-xs-8">
													  <div class="form-group">
														<label for="inputPassword3" class="col-md-12 col-sm-12 col-xs-12 control-label"></label>
														<div class="col-md-12 col-sm-12 col-xs-12 ">
														  <button class="btn btn-default btn-primary pull-right" id="videoData-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
														</div>
													  </div>
														
													</div>
												</div>
												</form>
											</div>
											
											
											<div class="row">
												<div class="col-md-12">
													<table class="table table-bordered picture-color-edit">
														<thead>
															<th>Video</th>
															<th>Action</th>													
														</thead>
														<tbody>
															<?php
																if(count($getProductsVideos)){
																	foreach($getProductsVideos as $gpv){
																		echo '
																<tr>
																	<td>
																		<center>
																			'.$gpv['fileTitle'].'
																		</center>
																	</td>
																	<td>
																		<!--a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a--> 
																		<a href="javascript:void(0)" class="delete-box-color font-size-16 del-item" data-item="delVideo" data-id="'.$gpv['fileID'].'"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a>
																	</td>
																</tr>
																		';
																	}
																}
																else{
																	echo '<tr><td colspan="2">No videos added for this product yet.</td></tr>';
																}?>
																
															
														</tbody>
	 
													</table>
												</div>
											</div>
											
											
										</div>
										<!-- end tab 7 -->
										
									</div>

								</div>
							</div>
					</div>      
				</div> 
			</section>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-validate.js"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo $assetsPath; ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>
	<script>
		$('document').ready(function(){
			$('.select2').select2({
                placeholder: "Select",
                allowClear: true
            });
			$('#myTab').tabCollapse();
			xu_validation.fileupload('<?php echo $prefix;?>/', '#image_upload', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
			xu_validation.fileupload('<?php echo $prefix;?>/', '#color_upload', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
			xu_validation.fileupload('<?php echo $prefix;?>/', '#image_upload2', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
			xu_validation.fileupload('<?php echo $prefix;?>/', '#image_upload3', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
		});
		$("#basicData-btn").click(function(){
			xu_validation.form_submit('#productBasicData','save_basicData');
		});
		function save_basicData(){
			var vType='Basic';
			var variantID=$("#variantID").val();
			
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+variantID,
				data: $('#productBasicData').serialize(),
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
					setTimeout(function(){window.location.reload();},1000);
				}
				else if(data.status == "Does not exist"){	
					$.gritter.add({
						title: 'Failed',
						text: 'Check Product or variant exist or not',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location.reload();},1000);
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
		$("#colorsData-btn").click(function(){
			xu_validation.form_submit('#productColorData','save_colorsData');
		});
		function save_colorsData(){
			var vType='Colors';
			var variantID=$("#variantID").val();
			
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+variantID,
				data: $('#productColorData').serialize(),
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
					setTimeout(function(){window.location.reload();},1000);
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
		
		$("#priceData-btn").click(function(){
			xu_validation.form_submit('#productPriceData','save_priceData');
		});
		function save_priceData(){
			var vType='Prices';
			var variantID=$("#variantID").val();
			
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+variantID,
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
					setTimeout(function(){window.location.reload();},1000);
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
		
		$("#specData-btn").click(function(){
			xu_validation.form_submit('#productSpecData','save_specData');
		});
		function save_specData(){
			var vType='Specification';
			var variantID=$("#variantID").val();
			
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+variantID,
				data: $('#productSpecData').serialize(),
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
					setTimeout(function(){window.location.reload();},1000);
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
		$("#featureData-btn").click(function(){
			$('input[type=checkbox]').each(function(data){
				var stateValue = $(this).is(":checked") ? 'Yes' : 'No';
				$(this).attr('value', stateValue);
			});
			xu_validation.form_submit('#productFeatureData','save_featureData');
		});
		function save_featureData(){
			var vType='Feature';
			var variantID=$("#variantID").val();
			var airbags = $("#airbags").val();
			var passengerAirbags = $("#passengerAirbags").val();
			var sideAirbags = $("#sideAirbags").val();
			var ABS = $("#ABS").val();
			var centralLocking = $("#centralLocking").val();
			var childSafetyLock = $("#childSafetyLock").val();
			var rearParkingCensor = $("#rearParkingCensor").val();
			var rearParkingCamera = $("#rearParkingCamera").val();
			var powerSteering = $("#powerSteering").val();
			var adjustablePowerSteering = $("#adjustablePowerSteering").val();
			var fogLamps = $("#fogLamps").val();
			var lowFuelIndicator = $("#lowFuelIndicator").val();
			var AC = $("#AC").val();
			var heater = $("#heater").val();
			var headlampBeamAdjustor = $("#headlampBeamAdjustor").val();
			var cruiseControl = $("#cruiseControl").val();
			var steeringMountedAudio = $("#steeringMountedAudio").val();
			var frontArmRest = $("#frontArmRest").val();
			var rearArmRest = $("#rearArmRest").val();
			var musicSystem = $("#musicSystem").val();
			var speakers = $("#speakers").val();
			var tripMeter = $("#tripMeter").val();
			var pillionSeat = $("#pillionSeat").val();
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+variantID,
				data: {'airbags':airbags, 'passengerAirbags':passengerAirbags, 'sideAirbags':sideAirbags, 'ABS':ABS, 'centralLocking':centralLocking, 'childSafetyLock':childSafetyLock, 'rearParkingCensor':rearParkingCensor, 'rearParkingCamera':rearParkingCamera, 'powerSteering':powerSteering, 'adjustablePowerSteering':adjustablePowerSteering, 'fogLamps':fogLamps, 'lowFuelIndicator':lowFuelIndicator, 'AC':AC, 'heater':heater, 'headlampBeamAdjustor':headlampBeamAdjustor, 'cruiseControl':cruiseControl, 'steeringMountedAudio':steeringMountedAudio, 'frontArmRest':frontArmRest, 'rearArmRest':rearArmRest, 'musicSystem':musicSystem, 'speakers':speakers, 'tripMeter':tripMeter, 'pillionSeat':pillionSeat},
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
					setTimeout(function(){window.location.reload();},1000);
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
		$("#photoData-btn").click(function(){
			$('#fileTypeName').attr('value','Photo');
			xu_validation.form_submit('#productPhotoData','save_pnvData');
		});
		$("#videoData-btn").click(function(){
			$('#fileTypeName').attr('value','Video');
			xu_validation.form_submit('#productVideoData','save_pnvData');
		});
		function save_pnvData(){
			var vType=$('#fileTypeName').val();
			var variantID=$("#variantID").val();
			var fileType = vType;
			var fileTitle = "", filePath = "";
			if(fileType=='Photo'){
				fileTitle = $('#fileTitle').val();
				filePath = $('#image_file_path2').val();
			}
			if(fileType=='Video'){
				fileTitle = $('#fileTitle1').val();
				filePath = $('#image_file_path3').val();
			}
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+variantID,
				data: {'fileType':fileType, 'fileTitle':fileTitle, 'filePath':filePath},
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
					setTimeout(function(){window.location.reload();},1000);
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
		$(".del-item").click(function(){
			var id=$(this).attr('data-id');
			var vType=$(this).attr('data-item');
			delete_record(vType, id);
		});
		function delete_record(vType,id){
			var variantID = $("#variantID").val();
			$.ajax({
				url:'<?php echo $prefix;?>/admin/delProducts/',
				data:{'vType':vType,'id':id,'variantID':variantID},
				type:'POST',
				processData: true,
				dataType:'JSON'
			}).done(function(data){
				if(data.status == "Success"){	
					$.gritter.add({
						title: 'Removed',
						text: 'Successfully',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location.reload();},1000);
				}else{
					$.gritter.add({
						title: 'Failed',
						text: 'To Remove',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location.reload();},1000);
				}
			});
		}
	</script>
</body>
</html>



