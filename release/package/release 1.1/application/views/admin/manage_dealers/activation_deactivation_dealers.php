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
	thead{ color: #fff; background-color: #027CD5;}
	tbody{background-color:#F9F9F9;}
	.btn-default:hover,.btn-default:active {
		color: #FFF;
		background-color: #027CD5;
		border-color: #ccc;
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
			<h3> Dealers</h3>
			<hr>
			<table class="table table-bordered dealer-products">
			<thead>
			  <tr>
				<th>Dealer Name</th>
				<th>Category</th>
				<th>Manufacture</th>
				<th>Location</th>
				<th>Status</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
			  <?php foreach($details as $d){ ?>
				  <tr>
					<td><?php echo $d->firstName.' '.$d->lastName; ?></td>
					<td><?php echo $d->categoryName; ?></td>
					<td><?php echo $d->manufactureName; ?></td>
					<td><?php echo $d->location; ?></td>
					<td><?php echo $d->status; ?></td>
					<td>
					<a  href="#" data-dealerStatus="<?php if($d->status =='P'){$dealer_status="Deactivate";echo "P";}else{$dealer_status="Activate";echo "D";}?>" class=" dealer-activation btn btn-default"><i class="fa fa-pencil"></i> <?php echo $dealer_status ?></a></td>
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
	$('.dealer-activation').on('click' ,function(){		
		var dealer_status= $(this).attr('data-dealerStatus');
		$(".dealer-activation").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
		$(".dealer-activation").attr('disabled','disabled');
		$.ajax({
				url:'<?php echo $prefix;?>/home/activation_deactivation_particular_dealers/<?php echo $d->userID; ?>',
				type:'POST',
				data:{'dealer_status':dealer_status},
				dataType:'JSON'
			}).success(function(data){
				window.location.reload();
			});
		
	});
	</script>
</body>
</html>
