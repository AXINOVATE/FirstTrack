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
						<div class="col-md-12">
							<form class="form-horizontal">
							  <div class="form-group">
								<div class="col-sm-6 col-xs-12 col-md-10">
								  <input type="text" class="form-control" placeholder="Dealers Name">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-12">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-10">
								  <input type="text" class="form-control" placeholder="house number,street number">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-12">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-10">
								  <input type="text" class="form-control" placeholder="area">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-8">
								  <input type="text" class="form-control" placeholder="country">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-8">
								  <input type="text" class="form-control" placeholder="state">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" placeholder="city">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" placeholder="location">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" placeholder="area">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" placeholder="contact number">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" placeholder="email">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="password" class="form-control" placeholder="password">
								</div>
							  </div>
							</form>
						</div>
					<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save</button>
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
