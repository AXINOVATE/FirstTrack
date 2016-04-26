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
	.c-dashboard .title{font-size: 18px; font-weight: 600; color: #737373;}
	.c-dashboard .count{font-size: 32px; color: #737373;margin: 15px 0px;}
	

	.bodytype-img{margin-top: 10px; width:75%; height:45px;}
	@media (min-width: 767px){
		.types{  min-height: 340px;}
		.banner-img {width: 100%;height: 345px;}
	}
	.hybrid .nav-tabs>li.active>a, .hybrid .nav-tabs>li.active>a:focus, .hybrid .nav-tabs>li.active>a:hover{
		    color: #fff !important;
    background-color: #F9D133 !important;
    border-bottom: 5px solid #F9D133 !important;
	}
	.hybrid .nav-tabs>li.active {
		background-color: #F9D133;
	}
	.span1 {
		display: block;
		margin-top: -27px;
		margin-bottom: 15px;
		background-position: center;
		background-repeat: no-repeat;
		background-image: url('<?php echo $assetsPath;?>/images/break-pointed-bg.png');
	}
	.span1-white {
		display: block;
		margin-top: -27px;
		margin-bottom: 15px;
		background-position: center;
		background-repeat: no-repeat;
		background-image: url('<?php echo $assetsPath;?>/images/break-pointed-bg-inverse.png');
	}
	.img-underline{
		 background-image: url('<?php echo $assetsPath;?>/images/undeline1.png');
		 background-position: center;
		 background-repeat: no-repeat;
		 padding:12px;
	}
	.img-underline1{
		 background-image: url('<?php echo $assetsPath;?>/images/arrows-black.png');
		 background-position: center;
		 background-repeat: no-repeat;
		 padding:12px;
	}
	.img-underline-white{
		 background-image: url('<?php echo $assetsPath;?>/images/dash-bord-view.png');
		 background-position: center;
		 background-repeat: no-repeat;
		 padding:12px;
	}
	#flip-this {
	width: 100%;
    height: 170px;
    margin: 0 auto;
	}
	.next-prev-button{
		
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: red;
    padding: 2px;
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
										<img src="'.$car['body_type_img'].'" alt="'.$car['body_type'].'" class="bodytype-img"/>
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
										<img src="'.$bike['body_type_img'].'" alt="'.$bike['body_type'].'" class="bodytype-img"/>
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
													<img src="'.$more['imgPath'].'" style="width:100%; height:35px; " alt="'.$more['categoryName'].'" />
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
							echo '<li class="show-img text-center '.$activeClass.'"><a id = "show_img_'.$i.'" href="#tab'.($i+1).'" data-toggle="tab">'.substr($getShowcaseProducts[$i]['showcaseTitle'], 0, 20).'</a></li>';
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
						<div class="imge-service">
							<img src="<?php echo $assetsPath;?>/images/request test drive.png" class="mt-10" width="50%" alt="car" />
						</div>	
							<div class="car-type-name" ><strong>Request for<br/>Test Drive</strong></div>
					</center>
					</div>
					</a>
					<a id="adv-book1" href ="javascript:void(0)" data-toggle="modal" data-target="#adv-book-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/advance booking.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name"><strong>Advance<br/>Booking</strong></div>
						</center>
					</div>
					</a>
					<a id="vehicle-loan1" href ="javascript:void(0)" data-toggle="modal" data-target="#vehicle-loan-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/vechile-loan.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name"><strong>Apply for<br/>Vehicle Loan</strong></div>
						</center>
					</div>
					</a>
					<a id="corporate-deal1" href ="javascript:void(0)" data-toggle="modal" data-target="#corporate-deal-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/corporate-deal.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name"><strong>Corporate<br/>Deals</strong></div>
						</center>
					</div>
					</a>
					<a id="apply-insurance1" href ="javascript:void(0)" data-toggle="modal" data-target="#apply-insurance-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/insurance.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name"><strong>Apply for<br/>Insurance</strong></div>
						</center>
					</div>
					</a>
					
					<a id="on-road-assistance1" href ="javascript:void(0)" data-toggle="modal" data-target="#road-assistance-modal">
					<div class="col-md-2 col-sm-2 col-xs-4 border-lt-blue mb-10">
						<center>
							<img src="<?php echo $assetsPath;?>/images/buy-on-road.png" class="mt-10" width="50%" alt="car" />
							<div class="car-type-name"><strong>Buy On Road <br/> Assistance </strong></div>
						</center>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Start of Dashboard section-->
	<section class="dashboard-section" style="background-color:#666666;">	
		<div class="container">
			<div class="row mt-10 text-center c-dashboard">
				<h2 class="home-page-title">NayaGaadi <span style="color:#027cd5;">Dashboard</span></h2>
				<span class="span1-white"><i class="img-underline-white"></i></span>
				<div class="col-md-3 col-sm-3 col-xs-12 mb-20">
					<div id="flip-this" class="flip-horizontal"> 
						<div class="front"> 
							<center>
								<div class="c-border">
									<span class="counter"><?php echo $Brands[0]['brands']; ?></span>
									<p>Brands</p>
								</div>
							</center>
						</div>
						<div class="back">
							<center>
								<div class="c-border">
									<img src="<?php echo $assetsPath;?>/images/car-brands.png" alt="pic1" class="img-responsive" style="width: 42%;" >
									<p>Brands</p>
								</div>
							</center>
						</div> 
					</div> 
				</div>				
				<div class="col-md-3 col-sm-3 col-xs-12 mb-20">
					<div id="flip-this" class="flip-horizontal"> 
						<div class="front"> 
							<center>
								<div class="c-border">
									<span class="counter"><?php echo $Brands[0]['models']; ?></span>
									<p>Models</p>
								</div>
							</center>
						</div>
						<div class="back">
							<center>
								<div class="c-border">
									<img src="<?php echo $assetsPath;?>/images/car-models.png" alt="pic1" class="img-responsive" style="width: 42%;" >
									<p>Models</p>
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 mb-20">
					<div id="flip-this" class="flip-horizontal"> 
						<div class="front"> 
							<center>
								<div class="c-border">
									<span class="counter"><?php echo $Brands[0]['variants']; ?></span>
									<p>Variants</p>
								</div>
							</center>
						</div>
						<div class="back">
							<center>
								<div class="c-border">
									<img src="<?php echo $assetsPath;?>/images/car-variant.png" alt="pic1" class="img-responsive" style="width: 42%;" >
									<p>Variants </p>
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 mb-20">
					<div id="flip-this" class="flip-horizontal"> 
						<div class="front"> 
							<center>
								<div class="c-border">
									<span class="counter"><?php echo $Brands[0]['vehicles']; ?></span>
									<p>Vehicles</p>
								</div>
							</center>
						</div>
						<div class="back">
							<center>
								<div class="c-border">
									<img src="<?php echo $assetsPath;?>/images/car-madel1.png" alt="pic1" class="img-responsive" style="width: 42%;" >
									<p>Vehicles</p>
								</div>
							</center>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End of Dashboard section-->
	<!--start of Product wise Dashboard section-->
	
	<section class="dashboard-section" style="background-color:grey;">	
		<div class="container">
			<div class="row mt-10 text-center c-dashboard">
				<h2 class="home-page-title">NayaGaadi <span style="color:#027cd5;">Product Dashboard</span></h2>
				<span class="span1-white"><i class="img-underline-white"></i></span>
				<div class="col-md-3 col-sm-3 col-xs-12 mb-20">
					<div id="flip-this" class="flip-horizontal"> 
						<div class="front"> 
							<center>
								<div class="p-border">
									<span class="counter"><?php echo $Products[0]['products']; ?></span>
									<p>Bike</p>
								</div>
							</center>
						</div>
						<div class="back">
							<center>
								<div class="p-border">
									<img src="<?php echo $assetsPath;?>/images/bike2.png" alt="pic1" class="img-responsive" style="width: 42%;" >
									<p>Bike</p>
								</div>
							</center>
						</div> 
					</div> 
				</div>				
				<div class="col-md-3 col-sm-3 col-xs-12 mb-20">
					<div id="flip-this" class="flip-horizontal"> 
						<div class="front"> 
							<center>
								<div class="p-border">
									<span class="counter"><?php echo $Products[1]['products']; ?></span>
									<p>Scooter</p>
								</div>
							</center>
						</div>
						<div class="back">
							<center>
								<div class="p-border">
									<img src="<?php echo $assetsPath;?>/images/scooter2 (2).png" alt="pic1" class="img-responsive" style="width: 42%;" >
									<p>Scooter</p>
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 mb-20">
					<div id="flip-this" class="flip-horizontal"> 
						<div class="front"> 
							<center>
								<div class="p-border">
									<span class="counter"><?php echo $Products[2]['products']; ?></span>
									<p>Car</p>
								</div>
							</center>
						</div>
						<div class="back">
							<center>
								<div class="p-border">
									<img src="<?php echo $assetsPath;?>/images/car-models.png" alt="pic1" class="img-responsive" style="width: 42%;" >
									<p>car </p>
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 mb-20">
					<div id="flip-this" class="flip-horizontal"> 
						<div class="front"> 
							<center>
								<div class="p-border">
									<span class="counter"><?php echo $Products[3]['products']; ?></span>
									<p>Auto</p>
								</div>
							</center>
						</div>
						<div class="back">
							<center>
								<div class="p-border">
									<img src="<?php echo $assetsPath;?>/images/auto2.png" alt="pic1" class="img-responsive" style="width: 42%;" >
									<p>Auto</p>
								</div>
							</center>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- END of Product wise Dashboard Section-->
	
	<!-- Start of Benefits section-->
	<section class="dashboard-section" style="background-color:#A0A0A0;">	
		<div class="container">
			<div class="row mt-10 text-center c-dashboard">
				<div class="col-md-12 col-sm-12 col-xs-12">	
					<h2 class="home-page-title" style="color:#027cd5;"><span class="txt_white">NayaGaadi <span style="color:#027cd5;">     Benefits</span> </span> </h2>	
					<span class="span1"><i class="img-underline1"></i></span>
		
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
					<div class="blue-box">
						<center><img src="<?php echo $assetsPath;?>/images/redius-hand.png" alt="one" /></center>
						<center class="mt-7"><div class="blue-box-text">Independent and Expert advice at zero cost.</div></center>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
					<div class="blue-box">
						<center><img src="<?php echo $assetsPath;?>/images/map.png" alt="two" /></center>
						<center class="mt-7"><div class="blue-box-text">No Obligation, Multiple Free Test Ride at your Door Step.</div></center>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
					<div class="blue-box">
						<center><img src="<?php echo $assetsPath;?>/images/main-discount.png" alt="three" /></center>
						<center class="mt-7"><div class="blue-box-text">Fully registered Vehicle Delivered at your Door Step.</div></center>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
					<div class="blue-box">
						<center><img src="<?php echo $assetsPath;?>/images/money (2).png" alt="four" /></center>
						<center class="mt-7"><div class="blue-box-text">  Hassle free Vehicle Loan documentation at your Door step</div></center>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
					<div class="blue-box">
						<center><img src="<?php echo $assetsPath;?>/images/insurance.jpg" alt="four" /></center>
						<center class="mt-7"><div class="blue-box-text"> Freedom to select your preferred Insurance</div></center>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
					<div class="blue-box">
						<center><img src="<?php echo $assetsPath;?>/images/calendar.png" alt="four" /></center>
						<center class="mt-7"><div class="blue-box-text">Reduced waiting Period.</div></center>
					</div>
				</div>
				
			</div>
			<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
						<div class="blue-box">
							<center><img src="<?php echo $assetsPath;?>/images/discount-all.png" alt="four" /></center>
							<center class="mt-7"><div class="blue-box-text">  Discount on Accessories and Value Add Products.</div></center>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
						<div class="blue-box">
							<center><img src="<?php echo $assetsPath;?>/images/extra-services.png" alt="four" /></center>
							<center class="mt-7"><div class="blue-box-text">Extra Free Services.</div></center>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
						<div class="blue-box">
							<center><img src="<?php echo $assetsPath;?>/images/icon-discount-all.png" alt="four" /></center>
							<center class="mt-7"><div class="blue-box-text"> Discounts on On-Road assistance Packages.</div></center>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
						<div class="blue-box">
							<center><img src="<?php echo $assetsPath;?>/images/hammer.png" alt="four" /></center>
							<center class="mt-7"><div class="blue-box-text"> Simple, Transparent and Hassle free Services.</div></center>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
						<div class="blue-box">
							<center><img src="<?php echo $assetsPath;?>/images/new.png" alt="four" /></center>
							<center class="mt-7"><div class="blue-box-text"> All new vehicles under one roof.</div></center>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mb-20">
						<div class="blue-box">
							<center><img src="<?php echo $assetsPath;?>/images/transport.png" alt="four" /></center>
							<center class="mt-7"><div class="blue-box-text">White Board and Yellow Board Vehicles in a click. </div></center>
						</div>
					</div>
				</div>
		</div>
	</section>
	<!-- End of Benefits section-->
	
	<!-- Start of how nayagaadi work section -->
	<section class="dashboard-section" style="background-color:#666666;">	
		<div class="container">
			<div id="myCarousel-2" class="carousel slide carousel2" data-ride="carousel">
				<div class="row mt-10 text-center c-dashboard">
					<div class="col-md-12 col-sm-12 col-xs-12">	
						<h2 class="home-page-title" style="color:#027cd5;"><span class="txt_white"> How NayaGaadi <span style="color:#027cd5;">     Works</span> </span> </h2>	
						<span class="span1"><i class="img-underline1"></i></span>
					</div>
					<div class="col-md-12" >
								<div class="carousel-inner" role="listbox">					
										<div class="item active">
											<img src="<?php echo $assetsPath;?>/images/how naya gaadi work2.png" class="img-responsive img-crausal" style="width:1200px !important;"alt="four" />
										</div>
											<div class="item">
												<img src="<?php echo $assetsPath;?>/images/how naya gaadi work2.png" class="img-responsive img-crausal" style="width:1200px !important;"alt="four" />
											</div>
								</div>
											<!-- Left and right controls -->
								<a class="left carousel-control " href="#myCarousel-2" role="button" 
										data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left next-prev-button" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control " href="#myCarousel-2" role="button" 
									data-slide="next">
									<span class="glyphicon glyphicon-chevron-right next-prev-button" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end of how nayagaadi work section -->
	
	<!-- Start of Feedbacks section-->
	<section class="dashboard-section" style="background-color:#B1B1B1;">	
		<div class="container">
			<div class="row mt-10 text-center c-dashboard">
				<div class="col-md-12 col-sm-12 col-xs-12">	
					<h2 class="home-page-title txt_white" >Customer <span style="color:#027cd5;">Feedback</span></h2>
					<span class="span1"><i class="img-underline"></i></span>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
					<div style="width:100%; overflow:hidden;">
						<center>
							<img src="<?php echo $assetsPath;?>/images/pic1.jpg" alt="pic1" width="100%" height="100%">
							<div class="user-info">
								<h4 class="usr-scr txt-bluecolor"><b>Adele</b></h4>
								<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
							</div>
						</center>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
					<div style="width:100%;">
						<center>
							<img src="<?php echo $assetsPath;?>/images/pic2.jpg" alt="pic2" width="100%" height="100%">
							<div class="user-info">
								<h4 class="usr-scr txt-bluecolor"><b>Karen</b></h4>
								<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
							</div>
						</center>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
					<div style="width:100%;">
						<center>
							<img src="<?php echo $assetsPath;?>/images/pic3.jpg" alt="pic3" width="100%" height="100%">
							<div class="user-info">
								<h4 class="usr-scr txt-bluecolor"><b>Jonathan</b></h4>
								<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
							</div>
						</center>
					</div>
				</div>
				<div class="col-md-3 hidden-sm col-xs-12 mb-20">
					<div style="width:100%;">
						<center>
							<img src="<?php echo $assetsPath;?>/images/pic4.jpg" alt="pic4" width="100%" height="100%">
							<div class="user-info">
								<h4 class="usr-scr txt-bluecolor"><b>Carey</b></h4>
								<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
							</div>
						</center>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End of Feedbacks section-->
	
	<!---  start section Seller/Dealer : OEM-Manufacturer Testimonials-->
	
	<section class="dashboard-section" style="background-color:#B1B1B1;">	
		<div class="container">
		<div id="myCarousel-3" class="carousel slide carousel2" data-ride="carousel">
			<div class="row mt-10 text-center c-dashboard">
				<div class="col-md-12 col-sm-12 col-xs-12">	
					<h2 class="home-page-title txt_white" >Seller:Dealer/OEM-Manufacturer  <span style="color:#027cd5;">Testimonials</span></h2>
					<span class="span1"><i class="img-underline"></i></span>
				</div>
				<div class="carousel-inner" role="listbox">
				<div class="item active">
				  <div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
						<div style="width:100%; overflow:hidden;">
							<center>
								<img src="<?php echo $assetsPath;?>/images/pic1.jpg" alt="pic1" width="100%" height="100%">
								<div class="user-info">
									<h4 class="usr-scr txt-bluecolor"><b>Adele</b></h4>
									<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
						<div style="width:100%;">
							<center>
								<img src="<?php echo $assetsPath;?>/images/pic2.jpg" alt="pic2" width="100%" height="100%">
								<div class="user-info">
									<h4 class="usr-scr txt-bluecolor"><b>Karen</b></h4>
									<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
						<div style="width:100%;">
							<center>
								<img src="<?php echo $assetsPath;?>/images/pic3.jpg" alt="pic3" width="100%" height="100%">
								<div class="user-info">
									<h4 class="usr-scr txt-bluecolor"><b>Jonathan</b></h4>
									<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-3 hidden-sm col-xs-12 mb-20">
						<div style="width:100%;">
							<center>
								<img src="<?php echo $assetsPath;?>/images/pic4.jpg" alt="pic4" width="100%" height="100%">
								<div class="user-info">
									<h4 class="usr-scr txt-bluecolor"><b>Carey</b></h4>
									<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
								</div>
							</center>
						</div>
					</div>
					</div>
				</div>
				<div class="item ">
				  <div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
						<div style="width:100%; overflow:hidden;">
							<center>
								<img src="<?php echo $assetsPath;?>/images/pic1.jpg" alt="pic1" width="100%" height="100%">
								<div class="user-info">
									<h4 class="usr-scr txt-bluecolor"><b>Adele</b></h4>
									<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
						<div style="width:100%;">
							<center>
								<img src="<?php echo $assetsPath;?>/images/pic2.jpg" alt="pic2" width="100%" height="100%">
								<div class="user-info">
									<h4 class="usr-scr txt-bluecolor"><b>Karen</b></h4>
									<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 mb-20">
						<div style="width:100%;">
							<center>
								<img src="<?php echo $assetsPath;?>/images/pic3.jpg" alt="pic3" width="100%" height="100%">
								<div class="user-info">
									<h4 class="usr-scr txt-bluecolor"><b>Jonathan</b></h4>
									<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-3 hidden-sm col-xs-12 mb-20">
						<div style="width:100%;">
							<center>
								<img src="<?php echo $assetsPath;?>/images/pic4.jpg" alt="pic4" width="100%" height="100%">
								<div class="user-info">
									<h4 class="usr-scr txt-bluecolor"><b>Carey</b></h4>
									<div class="started-title">My habit is to test drive any car in mid size comes into Market. At last, I ended with Punto and now, I am completely happy with my Italian Beauty.</div>
								</div>
							</center>
						</div>
					</div>
					</div>
				</div>
				
				</div>
					<a class="left carousel-control" href="#myCarousel-3" role="button" 
											data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left next-prev-button" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
					</a>
								<a class="right carousel-control" href="#myCarousel-3" role="button" 
									data-slide="next">
									<span class="glyphicon glyphicon-chevron-right next-prev-button" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
			</div>
		</div>
		</div>
	</section>
	<!---  End section Seller/Dealer : OEM-Manufacturer Testimonials-->
	<!-- Start of Carousel section-->
	<section class="dashboard-section fd" style="background-color:#666666; background-image: url('<?php echo $assetsPath?>/images/customers-collage.jpg');">		
		<div class="dark-shade">	</div>		
		<div class="container">
			<br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
				<!--ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol-->

			<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">					
					<div class="item active">
						<center>
							<div class="car-owner-feedback">
								It was really a very good experience from the date of enquiry of vehicles to 4 different test drives till the date of delivery of my car, the enthusiasm was same with the entire team. We are very happy with the final deal. One thing which surprised me was that when you organised for the test drive of 4 cars to happen on one single day without any hassles. I really recommend everyone to go through Zipzapwheels and enjoy with the quality of service.
							</div>
						</center>
						<img src="<?php echo $assetsPath;?>/upload/category/20160401040423Skoda-Superb-2015-Geneva-01.jpg" alt="Chania" />
						<center>
							<div class="car-owner-name">
								Mr Rajiv Goel
							</div>
							<div class="car-owner-vehicle">
								Skoda Rapid
							</div>
						</center>
					</div>

					<div class="item">
						<center>
							<div class="car-owner-feedback">
								It was really a very good experience from the date of enquiry of vehicles to 4 different test drives till the date of delivery of my car, the enthusiasm was same with the entire team. We are very happy with the final deal. One thing which surprised me was that when you organised for the test drive of 4 cars to happen on one single day without any hassles. I really recommend everyone to go through Zipzapwheels and enjoy with the quality of service.
							</div>
						</center>
						<img src="<?php echo $assetsPath;?>/upload/category/20160330110351fait.jpg" alt="Chania" />
						<center>
							<div class="car-owner-name">
								Mr Rajiv Goel
							</div>
							<div class="car-owner-vehicle">
								Skoda Rapid
							</div>
						</center>
					</div>
				
					<div class="item">
						<center>
							<div class="car-owner-feedback">
								It was really a very good experience from the date of enquiry of vehicles to 4 different test drives till the date of delivery of my car, the enthusiasm was same with the entire team. We are very happy with the final deal. One thing which surprised me was that when you organised for the test drive of 4 cars to happen on one single day without any hassles. I really recommend everyone to go through Zipzapwheels and enjoy with the quality of service.
							</div>
						</center>
						<img src="<?php echo $assetsPath;?>/upload/category/20160401040423Skoda-Superb-2015-Geneva-01.jpg" alt="Chania" />
						<center>
							<div class="car-owner-name">
								Mr Rajiv Goel
							</div>
							<div class="car-owner-vehicle">
								Skoda Rapid
							</div>
						</center>
					</div>

					<div class="item">
						<center>
							<div class="car-owner-feedback">
								It was really a very good experience from the date of enquiry of vehicles to 4 different test drives till the date of delivery of my car, the enthusiasm was same with the entire team. We are very happy with the final deal. One thing which surprised me was that when you organised for the test drive of 4 cars to happen on one single day without any hassles. I really recommend everyone to go through Zipzapwheels and enjoy with the quality of service.
							</div>
						</center>
						<img src="<?php echo $assetsPath;?>/upload/category/20160330110351fait.jpg" alt="Chania" />
						<center>
							<div class="car-owner-name">
								Mr Rajiv Goel
							</div>
							<div class="car-owner-vehicle">
								Skoda Rapid
							</div>
						</center>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left next-prev-button" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right next-prev-button" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<!-- End of Carousel section-->
	
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
<script src="<?php echo $assetsPath; ?>/js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.flip.min.js" type="text/javascript"></script>

<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script>

var date = new Date();
        var d = new Date();        
        d.setDate(date.getDate());
    
	
	$('.cat-box').on('mouseover', function(){
		var id = $(this).attr('id');		
		$('.types').addClass('hide');
		$('#'+id+'-div').removeClass('hide');
		$('.cat-box').removeClass('bg-lightblue');
		$(this).addClass('bg-lightblue');
		$('.cat-box').addClass('bg-lightgrey');
	});
	$('document').ready(function(){
		$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
		$('.inpt-timepicker').timepicker();	
		$('.counter').counterUp({
			delay: 10,
			time: 2000
		});
		$('#RTD_Pre_date').datepicker({ 
			startDate: new Date() 
		});
		$('#credit_points_date').datepicker({
        format: 'mm-dd-yyyy',
        endDate: d,       
    });
		
	});
	$('#RTD_Pre_Time').timepicker();
	$('.body-type-detail').on('click', function(){		
		$('.body-type-detail').removeClass('bg-yellow-active');
		$(this,'.body-type-detail').addClass('bg-yellow-active');
	});
	$('.particular-bike-detail').on('click',function(){
		var bikeid;
		bikeid= $(this).attr("data-bikebodyTypeID");
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
	$(function(){
    	$(".flip-horizontal").flip({
  			trigger: 'hover'
		});
		$(".flip-vertical").flip({
			axis: 'x',
  			trigger: 'hover'
		});
    });
</script>
</body>
</html>