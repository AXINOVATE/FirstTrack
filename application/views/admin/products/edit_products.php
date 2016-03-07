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
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/bootstrap-switch.min.css" type="text/css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<style type="text/css">
		#myTab-accordion>.panel-default>.panel-heading{background-color: #027CD5; color: white !important; }
		#myTab-accordion>.panel-default>.panel-heading>.panel-title>a{text-decoration:none !important;}
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
					<div class="panel no-border-radius-all panel-default edit-product-panel product-panel-default">
						<div class="panel-heading bg-lightblue"><h3>Edit Products – Rapid</h3></div>
							<div class="panel-body">
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
											<div class="container">
											<div class="col-md-6 ">
												<form class="form-horizontal">
												  <div class="form-group">
													<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label">Manufacture Name</label>
													<div class="col-sm-6 col-xs-12">
													    <select class="form-control select2 mb-10">
															<option value="">Select Maker</option>
															<option value="P">Maruti Suzuki</option>
															<option value="S">Hyundai</option>
														</select>
													</div>
												  </div>
												  <div class="form-group">
													<label for="text" class="col-sm-4 col-xs-12 control-label">Product Type</label>
													<div class="col-sm-6 col-xs-12">
													    <select class="form-control select2 mb-10">
															<option value="">Select Maker</option>
															<option value="P">Maruti Suzuki</option>
															<option value="S">Hyundai</option>
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
												</form>
											</div>
											<div class="col-md-6">
												<form class="form-horizontal">
												   <div class="form-group">
													<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Product Name</label>
													<div class="col-sm-6 col-xs-12 ">
													  <input type="text" class="form-control" placeholder="Product Name">
													</div>
												  </div>												  
												  <div class="form-group">
													<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label">Body Type</label>
													<div class="col-sm-6 col-xs-12">
													   <select class="form-control select2 mb-10">
															<option value="">Select Maker</option>
															<option value="P">Maruti Suzuki</option>
															<option value="S">Hyundai</option>
														</select>
													</div>
												  </div>
												  <div class="form-group">
													<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Transmission</label>
													<div class="col-sm-6 col-xs-12">
													    <select class="form-control select2 mb-10">
															<option value="">Select Maker</option>
															<option value="P">Maruti Suzuki</option>
															<option value="S">Hyundai</option>
														</select>
													</div>
												  </div>
												  <div class="form-group">
													<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Picture Preview</label>
													<div class="col-sm-6 col-xs-12 ">
													  <img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded" alt="Cinque Terre" width="110" height="110">
													</div>
												  </div>
												</form>
											</div>
											<div class="col-md-1 col-sm-1 "></div>
											<div class="col-md-10 col-sm-9">
												<div class="form-group">
													<label for="exampleInputEmail1">Overview</label>
													<textarea class="form-control" rows="5"></textarea>
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
											
										</div><!-- end tab 1 -->
										<div role="tabpanel" class="tab-pane" id="Picture-color">
											<div class="container">
											<div class="col-md-6 ">
												<form class="form-horizontal">												 
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
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Price</label>
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
										</div><!-- end tab 2 -->
										<div role="tabpanel" class="tab-pane" id="Pricing">
											<div class="container">
											<div class="col-md-6 ">
												<form class="form-horizontal">
												  <div class="form-group">
													<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Color Name</label>
													<div class="col-sm-6 col-xs-12 ">
													  <input type="text" class="form-control" placeholder="Color Name">
													</div>
												  </div>
												   <div class="form-group">
													<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">Price</label>
													<div class="col-sm-6 col-xs-12 ">
													  <input type="text" class="form-control" placeholder="Price">
													</div>
												  </div>													
												</form>
											</div>
											<div class="col-md-6">
												<form class="form-horizontal">
												   <div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label">State</label>
														<div class="col-sm-6 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="State">
														</div>
												   </div>
												   <div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
														<div class="col-sm-6 col-xs-12 ">
														  <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save</button>
														</div>
												   </div>
												 
												</form>
											</div>											
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
										</div><!-- end tab 3 -->
										<div role="tabpanel" class="tab-pane" id="Specification">
											<div class="container Specification-padding-20">
											<div class="col-md-6 ">
												<h4>Engine Specification</h4>
												<div class="border-all padding-10">
												<form class="form-horizontal">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Engine Type</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Engine Type">
														</div>
													</div>
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Displacement (CC)</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Displacement ">
														</div>
													</div>
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">No of Cylinder</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="No of Cylinder ">
														</div>
													</div>
												</form>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Dimensions</h4>
												<div class="border-all padding-10">
												<form class="form-horizontal">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Length</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Length">
														</div>
													</div>
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Width</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Width ">
														</div>
													</div>
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Height</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Height ">
														</div>
													</div>
												</form>
												</div>
											</div>
											<div class="col-md-6 ">
												<h4>Transmission</h4>
												<div class="border-all padding-10">
												<form class="form-horizontal">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Engine Type</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Engine Type">
														</div>
													</div>
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Displacement (CC)</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Displacement ">
														</div>
													</div>
												</form>
												</div>
											</div>
											<div class="col-md-6 ">
												<h4>Braking System</h4>
												<div class="border-all padding-10">
												<form class="form-horizontal">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Length</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Engine Type">
														</div>
													</div>
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Width</label>
														<div class="col-sm-7 col-xs-12 ">
														  <input type="text" class="form-control" placeholder="Displacement ">
														</div>
													</div>
												</form>
												</div>
											</div>
											<div class="col-md-12">
												<div class="col-md-4"></div>
												<div class="col-md-4"></div>
												<div class="col-md-4"><br>
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
											<div class="container Specification-padding-20">
												<div class="col-md-6 ">
													<h4>Safety & security features</h4>
													<div class="border-all padding-10">
													<form class="form-horizontal">
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Engine Type</label>
															<div class="col-sm-7 col-xs-12 ">
															 <div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Displacement (CC)</label>
															<div class="col-sm-7 col-xs-12 ">
															  <div class="bootstrap-switch-container float-right" style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">No of Cylinder</label>
															<div class="col-sm-7 col-xs-12 ">
															  <div class="bootstrap-switch-container float-right " style="width: 159px; margin-left: 0px;"><span class="bootstrap-switch-label" style="width: 53px;">&nbsp;</span><input type="checkbox" checked=""></div>
															</div>
														</div>
													</form>
													</div>
												</div>
												<div class="col-md-6 ">
													<h4>Comfort & Convenience</h4>
													<div class="border-all padding-10">
													<form class="form-horizontal">
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Length</label>
															<div class="col-sm-7 col-xs-12 ">
															  <input type="text" class="form-control" placeholder="Length">
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Width</label>
															<div class="col-sm-7 col-xs-12 ">
															  <input type="text" class="form-control" placeholder="Width ">
															</div>
														</div>
														<div class="form-group">
															<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label text-align-left">Height</label>
															<div class="col-sm-7 col-xs-12 ">
															  <input type="text" class="form-control" placeholder="Height ">
															</div>
														</div>
													</form>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="col-md-4"></div>
												<div class="col-md-4"></div>
												<div class="col-md-4">
												  <div class="form-group float-right">
													<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
													<div class="col-sm-6 col-xs-12 float-right">
													  <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
													</div>
												  </div>
													
												</div>
											</div>
										</div><!-- end tab 5 -->
										<div role="tabpanel" class="tab-pane" id="Photos">
											<p>Photos</p>
										</div><!-- end tab 6 -->
										<div role="tabpanel" class="tab-pane" id="Videos">
											<p>Videos</p>
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



