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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		
	
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
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h4>Reviews</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<img src="<?php echo $assetsPath;?>/images/car-news1.jpg" alt="" class="news-thumbnail-img"/>
						<div class="news-title">
							Factory Ready for Track Day
						</div>
						<div class="news-brief">
							Getting Your Car Ready for the Track. Now that you've signed up for a track day with MVP Track Time, you need to prepare your car. The first course of action is to review do require your factory seat belts function properly.
						</div>
					</div>
					
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<img src="<?php echo $assetsPath;?>/images/car-news2.jpg" alt="" class="news-thumbnail-img"/>
						<div class="news-title">
							A Sport Utility for Family
						</div>
						<div class="news-brief">
							Getting Your Car Ready for the Track. Now that you've signed up for a track day with MVP Track Time, you need to prepare your car. The first course of action is to review do require your factory seat belts function properly.
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<img src="<?php echo $assetsPath;?>/images/car-news1.jpg" alt="" class="news-thumbnail-img"/>
						<div class="news-title">
							Factory Ready for Track Day
						</div>
						<div class="news-brief">
							Getting Your Car Ready for the Track. Now that you've signed up for a track day with MVP Track Time, you need to prepare your car. The first course of action is to review do require your factory seat belts function properly.
						</div>
					</div>
					
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<img src="<?php echo $assetsPath;?>/images/car-news2.jpg" alt="" class="news-thumbnail-img"/>
						<div class="news-title">
							A Sport Utility for Family
						</div>
						<div class="news-brief">
							Getting Your Car Ready for the Track. Now that you've signed up for a track day with MVP Track Time, you need to prepare your car. The first course of action is to review do require your factory seat belts function properly.
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<img src="<?php echo $assetsPath;?>/images/car-news1.jpg" alt="" class="news-thumbnail-img"/>
						<div class="news-title">
							Factory Ready for Track Day
						</div>
						<div class="news-brief">
							Getting Your Car Ready for the Track. Now that you've signed up for a track day with MVP Track Time, you need to prepare your car. 
						</div>
					</div>
					
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mb-10">
					<div class="news-box">
						<img src="<?php echo $assetsPath;?>/images/car-news2.jpg" alt="" class="news-thumbnail-img"/>
						<div class="news-title">
							A Sport Utility for Family
						</div>
						<div class="news-brief">
							Getting Your Car Ready for the Track. Now that you've signed up for a track day with MVP Track Time, you need to prepare your car. The first course of action is to review do require your factory seat belts function properly.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	<!-- Footer start -->
	<?php echo $footer; ?>
	<!-- Footer end -->
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.typeahead.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script>
	$('document').ready(function(){
		$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
		$('.inpt-timepicker').timepicker();	
	});
</script>
</body>
</html>