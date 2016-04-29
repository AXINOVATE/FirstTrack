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
	<link href="<?php echo $assetsPath;?>/css/bootstrap-slider.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.padding-left-30{padding-left:30px !impotant;}
		.product-details ul li{padding:5px; display: inline-block !important;padding-left:10px;}
		.product-details #manufactures-Details ul li{padding:5px; display:inline !important;padding-left:10px;}
		
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>
			<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
				
				<div class="col-md-3"> 
					<h4>Instant Quote</h4>	
					<ul class="padding-left-30">
						<li><a href="#" data-toggle="modal" data-target="#get-instant-quote" id="get_instant_quote_popup" class="pd-tp-3">Get Instant Quote</a></li>
					</ul>
					<h4>Proforma Invoice</h4>	
					<ul class="padding-left-30">
						<li><a href="#" data-toggle="modal" data-target="#Get-Proforma-Invoice" id="GetProformaInvoice" class="pd-tp-3">Pro forma Invoice</a></li>
					</ul>
					<h4>Compare</h4>	
					<ul class="padding-left-30">
						<li><a href="<?php echo $prefix;?>/compare">Compare</a></li>
					</ul>
					<h4>Trends</h4>	
					<ul class="padding-left-30">						
						<li><a href="<?php echo $prefix;?>/searchList/latest">Latest</a></li>
						<li><a href="<?php echo $prefix;?>/searchList/popular">Popular</a></li>
						<li><a href="<?php echo $prefix;?>/searchList/upcoming">Upcoming</a></li>
					</ul>
					<h4>News</h4>	
					<ul class="padding-left-30">
						<li><a href="<?php echo $prefix;?>/news">News</a></li>
					</ul>
					<h4>Review</h4>	
					<ul class="padding-left-30">
						<li><a href="<?php echo $prefix;?>/review">Review</a></li>
					</ul>
					<h4>Blog</h4>	
					<ul class="padding-left-30">
						<li><a href="<?php echo $prefix;?>/#blog">Blog</a></li>
					</ul>
					<h4>Tools</h4>	
					<ul class="padding-left-30">
						<li><a href="<?php echo $prefix;?>/emi_calculator">EMI Calculator</a></li>
						<li><a href="<?php echo $prefix;?>/service_cost_analyzer">Service Cost Analyzer</a></li>
						<li><a href="<?php echo $prefix;?>/locate_dealer">Locate dealer</a></li>
					</ul>
					<h4>Service</h4>	
					<ul class="padding-left-30">
						<li><a href="<?php echo $prefix;?>/emi_calculator">EMI Calculator</a></li>
						<li><a href="<?php echo $prefix;?>/service_cost_analyzer">Service Cost Analyzer</a></li>
						<li><a href="<?php echo $prefix;?>/locate_dealer">Locate dealer</a></li>
					</ul>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="product-details">
							<ul>
								<?php foreach($category as $categorys ) { ?>
								<li class="col-md-6" ><h3><?php echo $categorys['categoryName'];?></h3>
									<div class="row">
										<ul id="manufactures-Details" >
											<?php foreach($manufacture as $manufactures ) { 
												if($categorys['categoryID'] == $manufactures['categoryID']){?>
												<li class="col-md-4" ><h4><?php echo $manufactures['manufactureName'];?></h4> 
												<ul class="product-Basic-Details">
													<?php foreach($productBasic as $productBasics ) { 
														if($manufactures['manufactureID'] == $productBasics['manufactureID']){?>
														<li ><h5><?php echo $productBasics['productName'];?></h5> 
														<ul class="product-Details">
															<?php foreach($productDetail as $productDetails ) { 
																if($productBasics['productID'] == $productDetails['productID']){?>
																<li ><h6><a href="<?php echo $prefix;?>/details/<?php echo $productDetails['slugName']; ?>"><?php echo $productDetails['variantName'].''.$productDetails['fueltype'];?> </a></h6> </li>
																<?php }
															} ?>
														</ul>
														</li>
														<?php }
													} ?>
												</ul>
												</li>
													
												<?php }
											} ?>
										</ul>
									</div>
								</li>
																	
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- Your Sitemap -->
				
				<url>
					<loc></loc>
				
					<priority></priority>
				</url>
				
			 
			</urlset>
		</div>
	</div>
	<!-- Body content ends here -->	
	<!-- Footer start -->
	<?php echo $footer; ?>
	<!-- Footer end -->
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>

<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>

<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-slider.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$('document').ready(function(){
		$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
		$('.inpt-timepicker').timepicker();	
		$('#RTD_Pre_date,#rtd-icon').datepicker({ 
			startDate: new Date()
			
		});	
		

		var date = new Date();
        var d = new Date();        
        d.setDate(date.getDate());
		$('#credit_points_date,#calander-icon1').datepicker({
			 endDate: d,  
       });
	   $('#insurance_date,#insurance_date_icon').datepicker({
			 startDate: new Date() 
       });
	});
</script>
</body>
</html>