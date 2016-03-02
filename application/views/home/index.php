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
	<link href="<?php echo $assetsPath;?>/css/home_page_style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
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
				<div class="col-md-4 border-all-lite ">
					<div class="categories-list">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4 img-box-1">
								<div class="categori-box">
									<div>
									<center>
									<img src="<?php echo $assetsPath;?>/images/car1.png" class="" alt="car" />
									<div><center><h6>Car</h6></center></div>
									</center>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 img-box-all">
								<div class="categori-box">
									<div>
									<center>
									<img src="<?php echo $assetsPath;?>/images/bike1.png" class="" alt="car">
									<div><center><h6>Bike</h6></center></div>
									</center>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 img-box-all">
								<div class="categori-box">
									<div>
									<center>
									<img src="<?php echo $assetsPath;?>/images/more1.png" class="" alt="car" />
									<div><center><h6>More</h6></center></div>
									</center>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h4>Body Type</h4>
					<div class="col-md-6 border-all-lite">
						<img src="<?php echo $assetsPath;?>/images/car1.png" class="" alt="car" />
					</div>
					
					<div class="col-md-6 border-all-lite">
						<img src="<?php echo $assetsPath;?>/images/car1.png" class="" alt="car" />
					</div>
					
				</div>
				<div class="col-md-8">
				sadasdasasd
				asd
				asdasd
				asdasd</br>
				asdasd</br>
				asdasd</br>
				asdasd</br>
				asdasd</br>
				</div>
			</div>
			
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>