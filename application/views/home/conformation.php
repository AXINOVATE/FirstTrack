<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.success-box{padding: 10px;border: 1px solid #EEE; box-shadow: 2px 2px 5px #949494;}
		.success-box .btn{border-radius: 0px; outline: none; background-color: #FFF; border: 2px solid #E45050; color: #E45050; font-weight: 600;}
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
				<div class="col-md-12">
					<h3 class="mt-0 mb-20">Successfully Processed</h3>
					<hr>
				</div>
				<div class="col-md-6">
					<div class="success-box">
						<h2>YOUR ORDER HAS BEEN PLACED!</h2>
						<p>Your order has been successfully processed!</p>
						<p>If you have any questions please contact store owner.</p>
						<p>Thanks for shopping online!</p>
						<button class="btn">Continue</button>
					</div>
				</div>
			</div>
			<br>
			<a href="#" class="pl-10"> Download pdf</a>
		</div>
	</div>
	<!-- Body content ends here -->	
	<!-- Footer start -->
	<?php echo $footer; ?>
	<!-- Footer end -->
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTab').tabCollapse();
	});
	
</script>
</body>
</html>