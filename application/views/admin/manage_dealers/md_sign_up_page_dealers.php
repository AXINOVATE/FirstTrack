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
		.picture-color-edit >tr>td>img{text-align:center !important;}
hr.style-eight {
             height: 10px;
              border: 1;
          background: #F9D133;
}
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
			
				<h2><center>Signup Page for Dealers </center></h2>
				<hr class="style-eight"/>
				
				<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="Dealers Name"/>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="House number, Street number"/>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="Area">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="Country">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="State">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="City">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="Location">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="Contact Number">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="Email">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<input type="text" class="form-control" placeholder="Contact Person">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<input type="password" class="form-control" placeholder="Password">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<select class="form-control select2" style="width:100%;">
						<option value="11">-- Select Category --</option>
						<option value="12" >Diesel</option>
						<option value="13" >LPG</option>
						<option value="14" >CNG</option>
						<option value="15" >Electric Power</option>
					</select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
					<select class="form-control select2" style="width:100%;">
						<option value="1">-- Select Manufacturers --</option>
						<option value="2" >Maruti</option>
						<option value="3" >Hyundai</option>
						<option value="4" >Nissan</option>
						<option value="5" >Honda</option>
					</select>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 mt-10">
					<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" value=""/>
					<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
						Authorized Dealer for Brand
					</div>
				</div>
				<a href="<?php echo $prefix;?>/home/edit_dealer_info" style="text-decoration:none;"><button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save</button></a>
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

<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>
	<script>
		$(document).ready(function() {
			$('.select2').select2({
				placeholder: "Select",
				allowClear: true
			});
		});	
	</script>
</body>
</html>
