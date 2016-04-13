<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
//var_dump($details); exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com is India's first Online market place for all the Brand New Vehicles.|Book Online, Buy Online , Test Ride all New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV in India,  New Autos, Bikes, Cycles, Cars, Scooters, Buses, Lorries, Tractors, Trucks, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV at your Door Step.</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">

	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.page-title{font-size: 18px;
    color: #7D7D7D;
    margin-bottom: 10px;}
	
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
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<div class="page-title">My Cart</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<?php 
					$loginStatus=$this->session->userdata('login');
					if($loginStatus =='' || $loginStatus == null){
						echo "<tr><td>Please Login to view items in your cart<td><tr>";
					}else{
						if(count($cartDetails) <= 0 ){
							echo "Kindly add some items to your cart";
						}else{
									
			?>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th>Product Name</th>
								<th>Variant Name</th>
								<th>Color Name</th>
								<th>Total Price</th>												
								<th>Quantity</th>													
								<th>Board</th>													
								<th>Action</th>													
							</tr>
						</thead>
						<tbody>
							<?php 
								if($this->session->userdata('login')==true){
									foreach($cartDetails as $CD){
										?>
										<tr>
									<td><a href="#" data-productID="<?php echo $CD['productID'];?>" data-variantID="<?php echo $CD['variantID'];?>" data-dealerID="<?php echo $CD['dealerID'];?>" data-colorID="<?php echo $CD['colorID'];?>" data-board="<?php echo $CD['board'];?>" data-cityName="<?php echo $CD['cityName'];?>" class="goFromCart"><?php echo $CD['productName']; ?></a></td>
									<td><?php echo $CD['variantName']; ?></td>
									<td><?php echo $CD['colorName']; ?></td>
									<td><?php echo $CD['totalPrice']; ?></td>
									<td><?php echo $CD['qty']; ?></td>
									<td><?php echo $CD['board']; ?></td>
									<td><center><a href="#" class="deleteCart" data-id="<?php echo $CD['cartID']; ?>"><i class="fa fa-trash"></i></a></center></td>
								</tr>
									<?php
									}
								}else{
									echo "login";
								}
									?>
							
						</tbody>
					</table>
				</div>
			</div>
			<?php } 
					}?>
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.typeahead.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script>	
	$(document).ready(function() {
		
	});
	$(".deleteCart").click(function(){
		var delID=$(this).data('id');
		$.ajax({
				url:'<?php echo $prefix;?>/home/deleteCart/DELETE/'+delID,
				type:'POST',
				dataType:'JSON'
			}).success(function(data){
				if(data[0].status=='Success')
					window.location.reload();
			});
	});
	$(".goFromCart").click(function(){
		var productID=$(this).data('productid');
		var variantID=$(this).data('variantid');
		var dealerID=$(this).data('dealerid');
		var colorID=$(this).data('colorid');
		var cityName=$(this).data('cityname');
		var board=$(this).data('board');
		$.ajax({
				url:'<?php echo $prefix;?>/home/creating_checkout',
				type:'POST',
				data:{'productID':productID,'variantID':variantID,'dealerID':dealerID,'colorID':colorID,'cityName':cityName,'board':board},
				dataType:'JSON'
			}).success(function(data){
				if(data)
					window.location='<?php echo $prefix;?>/home/checkout';
			});
	});
</script>
</body>
</html>