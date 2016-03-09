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
		.picture-color-edit >tr>td>img{text-align:center !important;}
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
				<h4>Add or Modify Product Type</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-4  col-xs-12 control-label text-align-left">product type</label>
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" placeholder="Color Name">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
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
							<div class="col-md-12">
								<h6>Picture Preview</h6>
								<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
								  <img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded img-responsive Picture-Preview" alt="Cinque Terre" width="80%" height="210">
								</div>
								<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save </button>
							</div>
						</div>
						<div class="col-md-2">
							 
						</div>
					</div>
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered picture-color-edit">
						<thead>
						<th class="col-md-4">product type</th>	
                         <th class="col-md-4">picture</th>							
						<th class="col-md-4">Action</th>													
						</thead>
						<tbody align="center">
							<tr>
								<td>car</td>	
								<td><center><img src="<?php echo $assetsPath;?>/images/car-type2.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
								<td><a href="" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
							</tr>
							<tr>
								<td>bike</td>	
								<td><center><img src="<?php echo $assetsPath;?>/images/bike.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
								<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
							</tr>
							<tr>
								<td>vans</td>	
								<td><center><img src="<?php echo $assetsPath;?>/images/car-type2.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
								<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
							</tr>
							<tr>
								<td>scooter</td>	
								<td><center><img src="<?php echo $assetsPath;?>/images/scooters.png" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
								<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
							</tr>
							
						</tbody>

					</table>
				</div>
			</div>
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
		
		
	</script>
</body>
</html>
