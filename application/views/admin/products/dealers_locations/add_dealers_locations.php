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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<style type="text/css">
		
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<h4 class="Dealers-and-Products">Add Dealers Locations</h4>
			<hr>
			<button  class="btn btn-default btn-primary pull-right Add-Dealers-Locations-btn" type="submit">Add</button>
			<br>
			<br>
			<form>
			  <div class="form-group">				
				<input type="text" class="form-control border-radius-0" id="Dealers-Location-Name " placeholder="Dealers Location Name">
			  </div>
			    <div class="row">
					<div class="col-md-3">
					  <div class="form-group">				
						<select class="form-control select2 mb-10">
							<option value="">Select Maker</option>
							<option value="P">Maruti Suzuki</option>
							<option value="S">Hyundai</option>
						</select>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="form-group">				
						<input type="text" class="form-control border-radius-0" id="Location " placeholder="Location">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-group">				
						<input type="text" class="form-control border-radius-0" id="Location " placeholder="Address">
					  </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
					  <div class="form-group">				
						<input type="text" class="form-control border-radius-0" id="Location " placeholder="Contact Number">
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="form-group">				
						<input type="text" class="form-control border-radius-0" id="Location " placeholder="Email">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-group">				
						<input type="text" class="form-control border-radius-0" id="Location " placeholder="Contact Person">
					  </div>
					</div>
				</div>
				<br>
				<button  class="btn btn-default btn-primary pull-right Add-Dealers-Locations-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i><span>Save</span></button>
			</form>
			<br>
			<br>
			<table class="table table-bordered picture-color-edit">
				<thead>
				<th class="col-md-10">Dealers Name</th>				
				<th class="col-md-2">Action</th>													
				</thead>
				<tbody>
					<tr>
						<td>Brilliant Silver</td>
						
						<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
						
					</tr>
					<tr>
						<td>Candy White</td>
						
						<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
						
					</tr>
					<tr>
						<td>Cappuccino Beige</td>
						
						<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
						
					</tr>
					
				</tbody>

			</table>
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