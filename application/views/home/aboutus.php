<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com is India's first Online market place for all the Brand New Vehicles.|Book Online, Buy Online , Test Ride all New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV in India,  New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV at your Door Step.</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
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
			<div id="content" class="col-sm-12">      <h3>About Us:</h3>
				 <p>NayaGaadi.com is a Multi Product, Multi Vendor,
                    Independent, Virtual Dealer providing Technology platform to Buy ALL Brand New
                     Vehicles ONLINE in India.</p> 
					 <p>NayaGaadi.com’s Vision to provide personalized Service
                       and Delivery to the End Customer. It’s a step forward in providing hassle free
                       service to the End customer who buys Brand new vehicles from NayaGaadi.com
                         platform and makes payment to an Authorized Dealer on our network.</p>
						 <p><b>Why Use NayaGaadi?</b></p>
						 <p><i class="fa fa-check"></i> India's First and Only Online market place for
                            Brand New Vehicles</p>
							<P><i class="fa fa-check"></i>Power to Customer: Power to buy any brand new vehicle of his/her choice and convenience, truly 24x7.</p>
							<P><i class="fa fa-check"></i> Get Actual, Upfront, transparent Pricing: Get best in town price on your favourite vehicle, without the hassle of negotiations.</p>
						<P><i class="fa fa-check"></i>Zero Transaction Charges: No more Payment gateway charges either to End customer or Dealer.</p>	
                          <P><i class="fa fa-check"></i>Maximum Additional Benefits: Access to dealer and factory incentives, including ones exclusive to NayaGaadi.</p> 	 
						  <P><i class="fa fa-check"></i> Get the Vehicle You Want: NayaGaadi partners with a large network of Authorized Dealer to find the vehicle of your choice.</p>
                          <P><i class="fa fa-check"></i>Delivery: Quick, Personalized service and Delivery of your vehicle “on road.”No surprises or hidden costs.</p>
						  <P><i class="fa fa-check"></i>Democratizing the online buying practice: Give you the power of selecting Brand, Model, Variant, Dealer, Location, Insurance, Financing and Price at your finger tips. A Customer centric business, driven by their needs, convenience and purchase preference.</p>					  
						  
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
		var date = new Date();
        var d = new Date();        
        d.setDate(date.getDate());

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