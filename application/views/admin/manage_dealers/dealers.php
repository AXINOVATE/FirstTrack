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
					<td><a href="<?php echo $prefix;?>/home/dealer_products/<?php echo $d->userID; ?>" class="btn btn-default"><i class="fa fa-eye"></i> View Products</a>
					<a href="<?php echo $prefix;?>/home/dealer/<?php echo $d->userID; ?>" class="btn btn-default"><i class="fa fa-pencil"></i> Edit </a></td>
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
	
	</script>
</body>
</html>
