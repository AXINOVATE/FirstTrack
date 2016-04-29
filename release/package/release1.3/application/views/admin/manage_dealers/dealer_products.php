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
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
	.dealer-products tbody{background-color:#F9F9F9;}
	.dealer-products thead{ color: #fff; background-color: #027CD5;}
	.vColor div{ display:inline-block;width:20px;height:20px;}
	.ml-10{margin-left:10px;}

</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<h3> Dealer Products - <?php if(isset($details->firstName)){echo $details->firstName.' '.$details->lastName; }?>
			<a href="<?php echo $prefix;?>/add_dealer_products/<?php echo $userID;?>" class="btn btn-default btn-primary pull-right  ml-10">Add Products</a><a href="<?php echo $prefix;?>/add_dealer_offer_products/<?php echo $userID;?>" class="btn btn-default btn-primary pull-right">Add Offers</a>
			</h3>
			<hr>
			<table class="table table-bordered dealer-products">
			<thead>
			  <tr>
				<th>Product</th>
				<th>Variant</th>
				<th>Boards</th>
				<th>Color</th>
				<th>Qty</th>
				<th>Waiting Period (days)</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
			  <?php foreach($data as $d){ 
					$boards = '<div style="background-color:#ffffff; width:30px; float:left;">&nbsp;</div>';
					if($d->boards=='Yellow-board'){
						$boards = '<div style="background-color:#FFD400; width:30px; float:left;">&nbsp;</div>';
					}?>
				  <tr>
					<td><?php echo $d->productName; ?></td>
					<td><?php echo $d->variantName; ?></td>
					<td><?php echo $boards.'&nbsp;board'; ?></td>
					<td class="vColor"><div style="background-color:<?php echo $d->colorCode; ?>;"></div></td>
					<td><?php echo $d->quantity; ?></td>
					<td><?php echo $d->waitingPeriodDays; ?></td>
					<td><a href="<?php echo $prefix;?>/edit_dealer_products/<?php echo $userID;?>/<?php echo $d->ID;?>" class=""><i class="fa fa-pencil"></i> Edit</a></td>
				  </tr>
			  <?php } ?>
			</tbody>
		  </table>
		</section>
	</div>
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js"></script>
	<script>
	function checkemail(email){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
			return 1;
		}
		return 0;
	}
		$(document).ready(function() {
			$('#categories').select2({placeholder: "Select category"});
			$('#manufacture').select2({placeholder: "Select manufacturer"});
			$('#country').select2({placeholder: "Select country"});
			$('#state').select2({placeholder: "Select state"});
			$('#cities').select2({placeholder: "Select city"});
			getStates('<?php if(isset($details->countryID))?>','state','');
		});	
	$("#register_btn").on('click',function(){
		//Validations
		$(".text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		$("#dealer_form .form-control").each(function(){if($(this).val() == ""){$(this).parent().append(text_error);error++;}});
		if(!checkemail($("#userEmail").val()) && $("#userEmail").val() != ""){$("#userEmail").parent().append('<span class="text-danger"> Invalid email </span>');error++;}
		if($("#password").val().length < 7 && $("#password").val() != ""){$("#password").parent().append('<span class="text-danger"> This field should contain 6 characters minimum </span>');error++;}
		
		if(error == 0){
			$("#register_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#register_btn").attr('disabled','disabled');
			$.ajax({
				url:'<?php echo $prefix;?>/home/dealer_registration',
				type:'POST',
				data:$('#dealer_form').serialize(),
				dataType:'JSON'
			}).success(function(data){
				if(data.message == 'DUPLICATE'){
					$("#userEmail").parent().append('<span class="text-danger"> This email is already exists in system. Please try forgot password to retrive the password </span>');
					$("#register_btn").html('Signup');
					$("#register_btn").attr('disabled',false);
				}else{
					//window.location="<?php echo $prefix;?>/home/bank_details".data.userID;
				}
				
			});
		}
	});
	</script>
</body>
</html>
