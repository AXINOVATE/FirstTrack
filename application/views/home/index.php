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
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
	.body-type-detail{ background-color:#fff; }
	.bg-yellow1{ background-color:#F9D133 !importent; color:#000 !importent; }
	.body-type-detail:hover,.car-type-name:hover { background-color:#F9D133; color:#000; }
	.body-type-detail { text-decoration:none !importent; }
	.c-dashboard .fa{color: #cf0202; font-size: 40px;}
	.c-dashboard .title{font-size: 22px; font-weight: 600; margin: 15px 0px;color: #737373;}
	.c-dashboard .count{font-size: 22px; color: #737373;}
	.c-dashboard .c-border{border: 1px solid #027cd5; height: 180px; padding:24px 0px; } 	
	@media (min-width: 767px){
		.types{  min-height: 340px;}
		.banner-img {width: 100%;height: 345px;}
	}
	.hybrid .nav-tabs>li.active>a, .hybrid .nav-tabs>li.active>a:focus, .hybrid .nav-tabs>li.active>a:hover{
		    color: #fff !important;
    background-color: #F9D133 !important;
    border-bottom: 5px solid #F9D133 !important;
	}
	</style>
	
	
	<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3npoVC8VKJ1fHWq2ZeXRRTkTOVToL9i0";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
</head>
<body>
	<!-- Header starts here -->
	 <?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 mb-10">
					<div class="border-lt-grey">
						<div class="">
							<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightblue" id="cars">
								<div>
									<center>
										<img src="<?php echo $prefix.'/'.$Car[0]['imgPath'];?>" class="cat-img" alt="car" />
										<div style="font-size:14px; margin-bottom:10px;"><?php echo $Car[0]['categoryName']; ?></div>
									</center>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightgrey" id="bikes">							
								<div>
									<center>
										<img src="<?php echo $prefix.'/'.$Bike[0]['imgPath'];?>" class="cat-img" alt="bike">
										<div style="font-size:14px; margin-bottom:10px;"><?php echo $Bike[0]['categoryName']; ?></div>
									</center>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 cat-box bg-lightgrey" id="more">
								
								<div>
									<center>
										<img src="<?php echo $assetsPath;?>/images/more1.png" class="cat-img" alt="car" />
										<div style="font-size:14px; margin-bottom:10px;">More</div>
									</center>
								</div>
							</div>
						</div>
						<div class="types" id="cars-div">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<h5><b>Body Type</b></h5>
							</div>
							<?php foreach($Car as $car){
								echo'<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
										<a href="'.$prefix.'/home/searchList/bodytype/'.$car['bodyTypeID'].'" class="particular-car-detail data-carbodyTypeID="'.$car['bodyTypeID'].'" data-carcategoryID="'.$car['categoryID'].'""> <div class="border-lt-grey ml-m10 mr-m10 body-type-detail">								
										<center>
										<img src="'.$car['body_type_img'].'" style="width:90px;height:60px;" alt="'.$car['body_type'].'" />
										<div class="car-type-name">'.$car['body_type'].'</div>
										</center>							
										</div></a>
									</div>';
								}
							?>
						</div>	
						<div class="types hide" id="bikes-div">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<h5><b>Body Type</b></h5>
							</div>
							<?php foreach($Bike as $bike){
								echo'<div class="col-md-6 col-sm-6 col-xs-6 mb-10">
										<a href="'.$prefix.'/home/searchList/bodytype/'.$bike['bodyTypeID'].'" class="particular-bike-detail" data-bikebodyTypeID="'.$bike['bodyTypeID'].'" data-bikecategoryID="'.$bike['categoryID'].'"><div class="border-lt-grey ml-m10 mr-m10 body-type-detail">								
										<center>
										<img src="'.$bike['body_type_img'].'" style="width:90px;height:60px;" alt="'.$bike['body_type'].'" />
										<div class="car-type-name">'.$bike['body_type'].'</div>
										</center>
										</div></a>
									</div>';
								}
							?>					
						</div>
						<div class="mt-10 hide types" id="more-div">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<h5><b>Other Categories</b></h5>
							</div>
							<?php foreach($More as $more){
									echo '<div class="col-md-4 col-sm-4 col-xs-4 mb-10">
											<a href="'.$prefix.'/home/searchList/category/'.$more['categoryID'].'" class="particular-more-detail" data-morebodyTypeID="'.$more['bodyTypeID'].'" data-morecategoryID="'.$more['categoryID'].'" ><div class="ml-m10 mr-m10 bg-lightgrey pd-5" style="border: 1px solid #e7e7e7;">
												<center>
													<img src="'.$more['imgPath'].'" style="width:100%; height:55px;" alt="'.$more['categoryName'].'" />
													<div class="car-type-name">'.$more['categoryName'].'</div>
												</center>
											</div></a>
										</div>';
								}
							?>					
						</div>
						<div class="">
							<div class="col-md-12 col-sm-12 col-xs-12 mt-10 mb-10">
								<div class="mr-m5 ml-m5">
									<a href="<?php echo $prefix;?>/home/searchList/list" class="search-btn" >Search</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 hybrid">
					<div id="myTabContent" class="tab-content">
					<?php
						for($i=0; $i<=3; $i++){
							$actClass = '';
							if($i==0){$actClass='in active';}
							echo '
							<div class="tab-pane fade '.$actClass.'" id="tab'.($i+1).'">
								<a href="'.$prefix.'/home/product_news/'.$getShowcaseProducts[$i]['uid'].'">
								<center>
									<img src="'.$prefix.'/'.$getShowcaseProducts[$i]['showcaseImage'].'" class="banner-img" alt="'.$getShowcaseProducts[$i]['showcaseTitle'].'" />
								</center>
								</a>
							</div>';
						}
					?>
					</div>
					<ul id="myTab" class="nav-tabs">
					<?php	
						for($i=0; $i<=3; $i++){
							$activeClass = '';
							if($i==0){$activeClass='active';}
							echo '<li class="show-img '.$activeClass.'"><a id = "show_img_'.$i.'" href="#tab'.($i+1).'" data-toggle="tab">'.substr($getShowcaseProducts[$i]['showcaseTitle'], 0, 20).'</a></li>';
						}
					?>
					</ul>
					
				</div>
			</div>
			
			<div class="row mt-20">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<a id="test-drive1" href ="javascript:void(0)" data-toggle="modal" data-target="#test-drive-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/test-drive.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name">Request for<br/>Test Drive</div>
						</center>
					</div>
					</a>
					<a id="adv-book1" href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/adv-booking.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name">Advance<br/>Booking</div>
						</center>
					</div>
					</a>
					<a id="vehicle-loan1" href ="javascript:void(0)" data-toggle="modal" data-target="#vehicle-loan-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/vehicle-loan.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name">Apply for<br/>Vehicle Loan</div>
						</center>
					</div>
					</a>
					<a id="corporate-deal1" href ="javascript:void(0)" data-toggle="modal" data-target="#corporate-deal-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/corporate-deals.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name">Corporate<br/>Deals</div>
						</center>
					</div>
					</a>
					<a id="apply-insurance1" href ="javascript:void(0)" data-toggle="modal" data-target="#apply-insurance-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/apply-insurance.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name">Apply for<br/>Insurance</div>
						</center>
					</div>
					</a>
					
					<a id="on-road-assistance1" href ="javascript:void(0)" data-toggle="modal" data-target="#road-assistance-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/road-assistance.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name">Buy On Road <br/> Assistance </div>
						</center>
					</div>
					</a>
				</div>
			</div>
			<div class="row mt-10 text-center c-dashboard">
				<h2 class="mb-20">Nayagaadi dashboard</h2>
				<div class="col-md-3 col-sm-6 col-sm-6 mb-10">
					<div class="c-border">
						<i class="fa fa-paper-plane"></i>
						<div class="title">NO. OF BRANDS </div>
						<span class="count">50</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-sm-6 mb-10">
					<div class="c-border">
						<i class="fa fa-truck"></i>
						<div class="title">NO OF MODELS </div>
						<span class="count">300</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-sm-6 mb-10">
					<div class="c-border">
						<i class="fa fa-tag"></i>
						<div class="title">NO OF VARIANTS </div>
						<span class="count">500</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-sm-6 mb-10">
					<div class="c-border">
						<i class="fa fa-tag"></i>
						<div class="title">NO. OF VEHICLES </div>
						<span class="count">1000</span>
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
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>

<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script>
	
	$('.cat-box').on('mouseover', function(){
		var id = $(this).attr('id');		
		$('.types').addClass('hide');
		$('#'+id+'-div').removeClass('hide');
		$('.cat-box').removeClass('bg-lightblue');
		$(this).addClass('bg-lightblue');
		$('.cat-box').addClass('bg-lightgrey');
	});
	
	$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
	$('.inpt-timepicker').timepicker();	
	
	$('.body-type-detail').on('click', function(){		
		$('.body-type-detail').removeClass('bg-yellow-active');
		$(this,'.body-type-detail').addClass('bg-yellow-active');
	});
	$('.particular-bike-detail').on('click',function(){
		var bikeid;
		bikeid= $(this).attr("data-bikebodyTypeID");
		alert(bikeid);
		
	});
	$('a[data-toggle="tab"]').hover(function () {
		$('.show-img').removeClass("active");
		 var target = $(this).attr("href");			 // activated tab
		 var id = $(this).attr('id');
		 //alert(target);
		// setTimeout(function(){
		 //$('.nav-tabs a[href="'+target+'"]').tab('show');
		 $('.show-img').removeClass("active");
		 $('.tab-pane').removeClass("active");
		 $('#'+id).tab('show');
		 //},200);
		 
	});
	
</script>
</body>
</html>