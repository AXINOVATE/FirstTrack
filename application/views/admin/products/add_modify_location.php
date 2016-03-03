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
			<div class="row">
				<h4>Add or Modify Locations</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Manufacture Name</label>
								<div class="col-sm-6 col-md-6 col-xs-12">
								   <select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
									<option value="">Car</option>
									<option value="1" >Yes</option>
									<option value="1" >No</option>
								   </select>
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Manufacture Name</label>
								<div class="col-sm-6 col-md-6 col-xs-12">
								   <select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
									<option value="">Car</option>
									<option value="1" >Yes</option>
									<option value="1" >No</option>
								   </select>
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Manufacture Name</label>
								<div class="col-sm-6 col-md-6 col-xs-12">
								   <select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
									<option value="">Car</option>
									<option value="1" >Yes</option>
									<option value="1" >No</option>
								   </select>
								</div>
							  </div>
							  <br>
							   <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save </button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered picture-color-edit">
						<thead>
						<th>Country</th>
						<th class="hidden-xs">State</th>
						<th class="hidden-xs">City</th>
						<th>Action</th>													
						</thead>
						<tbody>
							<tr>
								<td>India</td>
								<td class="hidden-xs">Karnataka</td>
								<td class="hidden-xs">Bangalore</td>
								<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
							</tr>
							<tr>
								<td>India</td>
								<td class="hidden-xs">Karnataka</td>
								<td class="hidden-xs">Bangalore</td>
								<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
							</tr>
							<tr>
								<td>India</td>
								<td class="hidden-xs">Karnataka</td>
								<td class="hidden-xs">Bangalore</td>
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
