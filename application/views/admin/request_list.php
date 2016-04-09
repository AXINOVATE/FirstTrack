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
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
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
			<?php 
				foreach($counts as $count){
					$totalCount = $count['totalCount'];
					$openedCount = $count['openedCount'];
					$progressCount = $count['progressCount'];
					$closedCount = $count['closedCount'];
				}
			?>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="page-title"><?php echo $Name; ?> Request</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box bg-yellow" data-req="ALL">
						<h5><?php echo $totalCount; ?></h5>
						<p>Total Request</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box" data-req="OPENED">
						<h5><?php echo $openedCount; ?></h5>
						<p>New Request</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box" data-req="PROGRESS">
						<h5><?php echo $progressCount; ?></h5>
						<p>In-progress</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box" data-req="CLOSED">
						<h5><?php echo $closedCount; ?></h5>
						<p>Closed</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th class="hidden-xs">Request No</th>
								<th>Requester Name</th>
								<th>Phone</th>													
								<th class="hidden-xs">Email</th>
								<?php if($page=='DropAQuery'){
									?>
									<th>Query</th>
								<?php } else{?>
								<th>Vehicle Variant</th>
								<?php } ?>																
								<th>Status</th>													
							</tr>
						</thead>
						<tbody id="table_data">
							<?php 
								foreach($details as $D){    ?>
									<tr>
										<td class="hidden-xs"><?php echo $D['requestNo']; ?></td>
										<td><a href="<?php echo $prefix;?>/admin/request_report/<?php echo $page."/".$D['UID']; ?>"><?php echo $D['fullName']; ?></a></td>
										<td><?php echo $D['phone']; ?></td>
										<td class="hidden-xs"><?php echo $D['email']; ?></td>
										<?php if($page=='DropAQuery'){
											?>
											<td><?php echo $D['query']; ?></td>
										<?php } else{?>
										<td><?php echo $D['variantName']; ?></td>
										<?php } ?>
										<td><?php echo $D['status']; ?></td>
										
									</tr>
							<?php  }  ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script>
	$('.request-count-box').on('click', function(){
		var page='<?php echo $page;?>';
		$('.request-count-box').removeClass('bg-yellow');
		$(this).addClass('bg-yellow');
		var vType=$(this).data("req");
		var myUrl='';
		if(page=='Corporate'){
			myUrl="<?php echo $prefix;?>/admin/getCorporateDetailsRequest/"+vType;
		}else if(page=='VehicleLoan'){
			myUrl="<?php echo $prefix;?>/admin/getVehicleLoanRequest/"+vType;
		}else if(page=='AdvanceBooking'){
			myUrl="<?php echo $prefix;?>/admin/getAdvanceBookingRequest/"+vType;
		}else if(page=='RASSISTANCE'){
			myUrl="<?php echo $prefix;?>/admin/getRoadAssistanceRequest/"+vType;
		}else if(page=='APInsurance'){
			myUrl="<?php echo $prefix;?>/admin/getApplyForInsuranceRequest/"+vType;
		}else if(page=='RoadTest'){
			myUrl="<?php echo $prefix;?>/admin/getRoadTestRequest/"+vType;
		}else if(page=='DropAQuery'){
			myUrl="<?php echo $prefix;?>/admin/getDropAQueryRequest/"+vType;
		}else if(page=='booking'){
			myUrl="<?php echo $prefix;?>/admin/getBookingRequest/"+vType;
		}
		$.ajax({
			url:myUrl,
			dataType:'JSON',
			type:'POST'
		}).done(function(data){
			var html='';
			var len=data.length;
			for(var i=0;i<len;i++){
				html += '<tr><td class="hidden-xs">'+data[i]['requestNo']+'</td>'+
							'<td><a href="<?php echo $prefix;?>/admin/request_report/<?php echo $page; ?>/'+data[i]['UID']+'">'+data[i]['fullName']+'</a></td>'+
							'<td>'+data[i]['phone']+'</td>'+
							'<td class="hidden-xs">'+data[i]['email']+'</td>';
							if(page=='DropAQuery'){
								html +='<td>'+data[i]['query']+'</td>';
							}else{
							html +='<td>'+data[i]['variantName']+'</td>';
							}
							html +='<td>'+data[i]['status']+'</td>'+
						'</tr>';
			}
			$("#table_data").html(html);
		});
	});
</script>
</body>
</html>