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
			<h3> Future Order Details</h3>
			<hr>
			<table class="table table-bordered dealer-products">
			<thead>
			  <tr>
				<th>User name</th>
				<th>phone</th>
				<th>email</th>
				<th>address</th>
				<th>manufacture</th>
				<th>model</th>
				<th>varient</th>
				<th>date</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
			        <?php foreach($buylaterdetails as $d){ ?>
				  <tr>
				     
					<td><?php echo $d['buyLaterFullname'];?></td>
					<td><?php echo $d['buyLaterPhone'];?></td>
					<td><?php echo $d['buyLaterAddress'];?></td>
					<td><?php echo $d['buyLateremailID'];?></td>
					<td><?php echo $d['manufactureName'];?></td>
					<td><?php echo $d['productName'];?></td>
					<td><?php echo $d['variantName'];?></td>
					<td><?php echo $d['createdDateTime'];?></td>
					<td><a href="#" class="delete-box-color  delete-buy-later font-size-16" data-id="<?php echo $d['buyLaterID']; ?>" ><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
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
	  $(".delete-buy-later").click(function(){
		var buylaterId=$(this).data('id');
		
		$.ajax({
			url:'<?php echo $prefix;?>/home/delete_buy_later_details/',
			data:{'buylaterId':buylaterId},
			type:'POST',
			processData: true,
			dataType:'JSON'
		}).done(function(data){
			if(data == "sucess deleted"){	
				$.gritter.add({
					title: 'Success',
					text: 'delete Successfully',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location="<?php echo $prefix;?>/home/buylater_details";},500);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To delete',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location="<?php echo $prefix;?>/home/buylater_details";},500);
			}
		});
	});
	  
	</script>
</body>
</html>
