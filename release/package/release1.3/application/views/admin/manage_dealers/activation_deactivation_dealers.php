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
				<th>S.no</th>
				<th>Dealer Name</th>
				<th>Category</th>
				<th>Manufacture</th>
				<th>Location</th>
				<th>Status</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
			  <?php $i =1 ; foreach($details as $d){ ?>
				  <tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $d->firstName.' '.$d->lastName; ?></td>
					<td><?php echo $d->categoryName; ?></td>
					<td><?php echo $d->manufactureName; ?></td>
					<td><?php echo $d->location; ?></td>
					<td><?php if($d->status =='P'){$dealer_status="Activate";echo $dealer_status;}else{$dealer_status="Deactivate";echo $dealer_status;} ?></td>
					<td>
					<a  href="#" data-VuserID="<?php echo $d->userID; ?>" data-dealerStatus="<?php if($d->status =='P'){$dealer_status="Deactivate";echo "P";}else{$dealer_status="Activate";echo "D";}?>" class=" dealer-activation btn btn-default"><i class="fa fa-pencil"></i> <?php echo $dealer_status ?></a></td>
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
		var dealer_userID= $(this).attr('data-VuserID');		
		$(this).html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
		$(this).attr('disabled','disabled');
		$.ajax({
				url:'<?php echo $prefix;?>/home/activation_deactivation_particular_dealers/'+dealer_userID,
				type:'POST',
				data:{'dealer_status':dealer_status},
				dataType:'JSON'
			}).success(function(data){
				window.location.reload();
			});
		
	});
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
