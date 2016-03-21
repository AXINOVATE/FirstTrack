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
				<h4>Edit Products – Rapid</h4>
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

								  <!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Basic-Details">
											<form class="form-horizontal">
												<div class="row">
													<div class="col-md-6 ">
														<div class="form-group">
															<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label">Manufacture Name</label>
															<div class="col-sm-6 col-xs-12">
																<select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
																	<option value=""></option>
																	<option value="1" >Yes</option>
																	<option value="1" >No</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="text" class="col-sm-4 col-xs-12 control-label">Product Type</label>
															<div class="col-sm-6 col-xs-12">
															  <select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
																<option value="">Car</option>
																<option value="1" >Yes</option>
																<option value="1" >No</option>
															   </select>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Variant</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Variant">
															</div>
														</div>
														<div class="form-group" id="title_cover_image">
															<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
																Cover Image <span class="form-man"> * </span>
															</label>
															<div class="col-md-6 col-sm-5 col-xs-10">
																<input type="hidden" name="cover_image" id="image_file_path" value="" va_req="true"/>
																<div id="progress" class="progress">
																	<div id="image_progress" class="progress-bar progress-bar-success"></div>
																</div>
																<span>Picture size 200 X 125 Pixels</span>
																<div id="image_file_msg" class="files"></div>
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
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Product Name</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Product Name">
															</div>
														</div>												  
														<div class="form-group">
															<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label">Body Type</label>
															<div class="col-sm-6 col-xs-12">
																<select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
																	<option value="">Body Type</option>
																	<option value="1" >Yes</option>
																	<option value="1" >No</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Transmission</label>
															<div class="col-sm-6 col-xs-12">
																<select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
																	<option value="">Car</option>
																	<option value="1" >Yes</option>
																	<option value="1" >No</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Picture Preview</label>
															<div class="col-sm-6 col-xs-12 ">
																<img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded" alt="Cinque Terre" width="110" height="110">
															</div>
														</div>
													</div>
													
													<div class="col-md-1 col-sm-1 "></div>
													<div class="col-md-10 col-sm-9 col-xs-12">
														<div class="form-group">
															<label for="exampleInputEmail1" class="col-md-12 col-sm-12 col-xs-12">Overview</label>
															<div class="col-sm-6 col-xs-12 col-md-12">
																<textarea class="form-control" rows="5"></textarea>
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
																	<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
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
												<form class="form-horizontal">
													<div class="col-md-6 ">									 
														<div class="form-group" id="title_cover_image">
															<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
																Picture <span class="form-man"> * </span>
															</label>
															<div class="col-md-6 col-sm-5 col-xs-10">
																<input type="hidden" name="cover_image" id="image_file_path" value="" va_req="true"/>
																<div id="progress" class="progress">
																	<div id="image_progress" class="progress-bar progress-bar-success"></div>
																</div>
																<span>Picture size 200 X 125 Pixels</span>
																<div id="image_file_msg" class="files"></div>
															</div>
															<div class="col-md-2 col-sm-2 col-xs-2">
																<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
																	<!-- The file input field used as target for the file upload widget -->
																	<input class="fileupload" id="image_upload" type="file" name="files" message="image_file_msg" pro_path="image_progress" save_path="image_file_path">
																</span>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Color Name</label>
															<div class="col-sm-6 col-xs-12 ">
															  <input type="text" class="form-control" placeholder="Color Name">
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Color Code</label>
															<div class="col-sm-6 col-xs-12 ">
															  <input type="text" class="form-control" placeholder="Color Name">
															</div>
														</div>
													</div>
													<div class="col-md-6 ">
														<h6>Picture Preview</h6>
														<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
														  <img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded img-responsive Picture-Preview" alt="Cinque Terre" width="80%" height="210">
														</div>
													</div>	
													<div class="col-md-12">
														<div class="col-md-4"></div>
														<div class="col-md-4"></div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
																<div class="col-sm-6 col-xs-12 ">
																	<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
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
															<tr>
																<td>Brilliant Silver</td>
																<td class="hidden-xs">#a5a7a6</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															</tr>
															<tr>
																<td>Candy White</td>
																<td class="hidden-xs">#c6c5c1</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															</tr>
															<tr>
																<td>Cappuccino Beige</td>
																<td class="hidden-xs">#d8d4cb</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															</tr>
														</tbody>
													</table>
												</div>
													
											</div>
										</div>
										<!-- end tab 2 -->
										<div role="tabpanel" class="tab-pane" id="Pricing">
											<div class="row">
												<form class="form-horizontal">
													<div class="col-md-6 ">
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Color Name</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Color Name">
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Ex-showroom Price</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Price">
															</div>
														</div>	
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Insurance</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Price">
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Other Handling Charges</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Price">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">City</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="State">
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Road Tax</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Price">
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">RTO</label>
															<div class="col-sm-6 col-xs-12 ">
																<input type="text" class="form-control" placeholder="Price">
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
															<div class="col-sm-6 col-xs-12 ">
																<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save</button>
															</div>
														</div>
													</div>
												</form>
												<div class="col-md-12 col-sm-12">
													<table class="table table-bordered picture-color-edit">
														<thead>
															<th>Color Name</th>
															<th class="hidden-xs">State</th>
															<th class="hidden-xs">Price</th>
															<th>Action</th>													
														</thead>
														<tbody>
															<tr>
																<td>Brilliant Silver</td>
																<td class="hidden-xs">Karnataka</td>
																<td class="hidden-xs">Rs 9,25,000</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															</tr>
															<tr>
																<td>Candy White</td>
																<td class="hidden-xs">Karnataka</td>
																<td class="hidden-xs">Rs 9,25,000</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															</tr>
															<tr>
																<td>Cappuccino Beige</td>
																<td class="hidden-xs">Karnataka</td>
																<td class="hidden-xs">Rs 9,25,000</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!-- end tab 3 -->
										<div role="tabpanel" class="tab-pane" id="Specification">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="specs-div" >
														<div class="specs-title">Engine Specifications</div>
														<div class="specs-box">
															<div class="row">	
																<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Engine Type</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Displacement (CC)</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">No. of Cylinders</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Power (BHP)</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Power (RPM)</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Torque (Nm)</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Torque (RPM)</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
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
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Length</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Width</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Height</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Ground Clearance</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Wheelbase</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Seat Capacity</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Minimum Turning Radius</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
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
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Tyre Type</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Front Brake Type</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Brake Type</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Front Tyre Size</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Tyre Size</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
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
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Fuel Type</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Mileage (kmpl)</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">No. of Gears</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Fuel Tank Capacity (litres)</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Power Steering</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Adjustable Power Steering</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Front Suspension</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Suspension</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Battery</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Headlamp</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																		  <input type="text" class="form-control" placeholder="Length">
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
																<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div><!-- end tab 4 -->
										<div role="tabpanel" class="tab-pane" id="Features">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="specs-div" >
														<div class="specs-title">Safety & security features</div>
														<div class="specs-box">
															<div class="row">	
																<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Airbags</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Passenger Airbags</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Side Airbags</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">ABS</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Central Locking</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Child Safety Lock</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Parking Censor</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Parking Camera</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Fog Lamps</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Low Fuel Indicator</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
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
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">AC</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Heater</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Headlamp Beam Adjustor</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Cruise Control</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Steering Mounted Audio</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Front Armrest</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Rear Armrest</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Music System</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Speakers</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Trip Meter</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Pillion Seat</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
																		</div>
																	</div>
																</div>
																
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Seat Height (mm)</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<input type="text" class="form-control" placeholder="200">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Speedometer</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<input type="text" class="form-control" placeholder="Analogue">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Tachometer</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<input type="text" class="form-control" placeholder="Analogue">
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 mb-10">	
																	<div class="form-group">
																		<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label text-align-left">Light Type</label>
																		<div class="col-md-7 col-sm-7 col-xs-12 ">
																			<input type="text" class="form-control" placeholder="Halogen">
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
																<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- end tab 5 -->
										<div role="tabpanel" class="tab-pane" id="Photos">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">										 
													<div class="form-group" id="title_cover_image">
														<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
															Picture <span class="form-man"> * </span>
														</label>
														<div class="col-md-6 col-sm-5 col-xs-9">
															<input type="hidden" name="cover_image" id="image_file_path" value="" va_req="true"/>
															<div id="progress" class="progress">
																<div id="image_progress" class="progress-bar progress-bar-success"></div>
															</div>
															<span>Picture size 200 X 125 Pixels</span>
															<div id="image_file_msg" class="files"></div>
														</div>
														<div class="col-md-2 col-sm-3 col-xs-3">
															<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
																<!-- The file input field used as target for the file upload widget -->
																<input class="fileupload" id="image_upload" type="file" name="files" message="image_file_msg" pro_path="image_progress" save_path="image_file_path">
															</span>
														</div>
													</div>
													<div class="form-group">
														<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label">Title</label>
														<div class="col-md-7 col-sm-6 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Color Name">
														</div>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<h6>Picture Preview</h6>
													<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
													  <img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded img-responsive Picture-Preview" alt="Cinque Terre" width="80%" height="210">
													</div>
												</div>	
												<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="col-md-4 col-sm-3 col-xs-2"></div>
													<div class="col-md-4 col-sm-3 col-xs-2"></div>
													<div class="col-md-4 col-sm-6 col-xs-8">
													  <div class="form-group">
														<label for="inputPassword3" class="col-md-12 col-sm-12 col-xs-12 control-label"></label>
														<div class="col-md-12 col-sm-12 col-xs-12 ">
														  <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
														</div>
													  </div>
														
													</div>
												</div>
												<div class="col-md-12">
													<table class="table table-bordered picture-color-edit">
														<thead>
														<th>Picture</th>
														<th class="hidden-xs">Title</th>
														<th>Action</th>													
														</thead>
														<tbody>
															<tr>
																<td><center><img src="<?php echo $assetsPath;?>/images/car-type2.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
																<td class="hidden-xs">Brilliant Silver</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
																
															</tr>
															<tr>
																<td><center><img src="<?php echo $assetsPath;?>/images/car-type2.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
																<td class="hidden-xs">Candy White</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
																
															</tr>
															<tr>
																<td><center><img src="<?php echo $assetsPath;?>/images/car-type2.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
																<td class="hidden-xs">Cappuccino Beige</td>
																<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
																
															</tr>
															
														</tbody>
	 
													</table>
												</div>
											
											</div>
										</div><!-- end tab 6 -->
										<div role="tabpanel" class="tab-pane" id="Videos">
											<div class="container">
											<div class="col-md-6 ">
												<form class="form-horizontal">												 
													<div class="form-group" id="title_cover_image">
														<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
															Video <span class="form-man"> * </span>
														</label>
														<div class="col-md-6 col-sm-5 col-xs-10">
															<input type="hidden" name="cover_image" id="image_file_path" value="" va_req="true"/>
															<div id="progress" class="progress">
																<div id="image_progress" class="progress-bar progress-bar-success"></div>
															</div>
															<span>Picture size 200 X 125 Pixels</span>
															<div id="image_file_msg" class="files"></div>
														</div>
														<div class="col-md-2 col-sm-2 col-xs-2">
															<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
																<!-- The file input field used as target for the file upload widget -->
																<input class="fileupload" id="image_upload" type="file" name="files" message="image_file_msg" pro_path="image_progress" save_path="image_file_path">
															</span>
															
														</div>
													</div>
													
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Title</label>
														<div class="col-sm-6 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Color Name">
														</div>
													</div>
												</form>
											</div>
											<div class="col-md-6 ">
												<div class="">
													<h6>Picture Preview</h6>
													<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
													  <img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded img-responsive Picture-Preview" alt="Cinque Terre" width="80%" height="210">
													</div>
												</div>
											</div>	<br>										
											<div class="col-md-12"><br>
												<table class="table table-bordered picture-color-edit">
													<thead>
													<th>Video</th>
													<th class="hidden-xs">Title</th>
													<th>Action</th>													
													</thead>
													<tbody>
														<tr>
															<td><center><img src="<?php echo $assetsPath;?>/images/car-type2.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
															<td class="hidden-xs">Brilliant Silver</td>
															<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															
														</tr>
														<tr>
															<td><center><img src="<?php echo $assetsPath;?>/images/car-type2.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
															<td class="hidden-xs">Candy White</td>
															<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															
														</tr>
														<tr>
															<td><center><img src="<?php echo $assetsPath;?>/images/car-type2.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
															<td class="hidden-xs">Cappuccino Beige</td>
															<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
															
														</tr>
														
													</tbody>
 
												</table>
											</div>
											<div class="col-md-12">
												<div class="col-md-4"></div>
												<div class="col-md-4"></div>
												<div class="col-md-4">
												  <div class="form-group">
													<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
													<div class="col-sm-6 col-xs-12 ">
													  <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
													</div>
												  </div>
													
												</div>
											</div>
											</div>
										</div><!-- end tab 7 -->
										
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
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-validate.js"></script>

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
			 $('button').on('click', function(){
			alert('preserve attached java script data!');
		});
		$('#myTab').tabCollapse();
			
		});
		
	</script>
</body>
</html>



