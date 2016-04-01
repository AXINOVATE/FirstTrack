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
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
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
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="page-title"><?php echo $Name;?> Request - <?php echo $details[0]['requestNo'];?></div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<?php 
				foreach($counts as $count){
					$totalCount = $count['totalCount'];
					$openedCount = $count['openedCount'];
					$progressCount = $count['progressCount'];
					$closedCount = $count['closedCount'];
				}
			?>
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box bg-yellow">
						<h5><?php echo $totalCount; ?></h5>
						<p>Total Request</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5><?php echo $openedCount; ?></h5>
						<p>New Request</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5><?php echo $progressCount; ?></h5>
						<p>In-progress</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 mt-10 mb-10">
					<div class="request-count-box">
						<h5><?php echo $closedCount; ?></h5>
						<p>Closed</p>
					</div>
				</div>
			</div>
			<form class="form-horizontal" name="request_report_form" role="form"  method="POST" id="request_report_form" submit="return false">
				<input type="hidden" id="re_UID" name="re_UID" value="<?php echo $details[0]['UID']; ?>">
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Requester Name:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['fullName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Contact No.:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['phone'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Email-id:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['email'];?>
					</div>
					<?php if($page!='DropAQuery'){?>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						City:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['cityName'];?>
					</div>
					
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Maker:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['manufactureName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Model:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['modelName'];?>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Variant:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['variantName'];?>
					</div>
					<?php }	?>
					<div class="col-md-2 col-sm-2 col-xs-6 mt-10 mb-10">
						Received Date:
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 mt-10 mb-10">
						<?php echo $details[0]['createdDateTime'];?>
					</div>
					<?php if($page=='DropAQuery'){?>
					<div class="col-md-2 col-sm-2 col-xs-12 mt-10 mb-10">
						Query:
					</div>
					<div class="col-md-10 col-sm-10 col-xs-12 mt-10 mb-10">
						<?php echo $details[0]['query'];?>
					</div>
					<?php }	?>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
						Description
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
						<textarea type="text" class="form-control" name="re_desc" id="re_desc" va_req="true"><?php echo $details[0]['description'];?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
						Respond
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
						<textarea type="text" class="form-control" name="re_respond" id="re_respond" va_req="true"><?php echo $details[0]['respond'];?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
						&nbsp;
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 mb-10 mt-10">
						<select class="form-control entity-type select2" name="re_status" id="re_status"  va_req="true" style="width:100%;">
							<option value="" <?php if($details[0]['status']==''){echo 'selected';}?>>--Select Status--</option>
							<option value="In-progress" <?php if($details[0]['status']=='In-progress'){echo 'selected';}?> >In-Progress</option>
							<option value="Closed" <?php if($details[0]['status']=='Closed'){echo 'selected';}?> >Closed</option>
						</select>
					</div>
					<div class="col-md-1 col-sm-1 hidden-xs mb-10 mt-10">
						&nbsp;
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
						<a href="javascript:void(0)" id="btn_request_report" class="search-btn" >Save</a>
					</div>
				</div>
			</form>
		<!--	<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<div class="page-title">My Requests</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th class="hidden-xs">Request No</th>
								<th>Request Date</th>
								<th>Request Type</th>													
								<th>Status</th>													
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="hidden-xs">REQ0001</td>
								<td>20 Feb 2016</td>
								<td>Test Drive</td>
								<td>In-progress</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					Respond
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 mb-10 mt-10">
					<textarea type="text" class="form-control"></textarea>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 mb-10 mt-10">
					<a href="javascript:void(0)" class="search-btn" >Save</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mt-30">
					<div class="page-title">History of Road Test Request - REQ00001</div>
					<hr class="mt-0"></hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-13 col-xs-12 mt-10 mb-10">
					<table class="table table-bordered">
						<thead class="bg-lightblue">
							<tr>
								<th>Responded By</th>
								<th>Respond Date</th>
								<th>Status</th>													
								<th class="hidden-xs">Respond Message</th>													
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Agent</td>
								<td>20 Feb 2016</td>
								<td>In-Progress</td>
								<td class="hidden-xs">Thank you. We will confirm the time in 30 mins.</td>
								
							</tr>
							<tr>
								<td>Agent</td>
								<td>20 Feb 2016</td>
								<td>In-Progress</td>
								<td class="hidden-xs">We got the time at 3pm on 25th Feb 2016. Is that ok for you?</td>
							</tr>
							<tr>
								<td>Jay Prakash</td>
								<td>20 Feb 2016</td>
								<td>In-Progress</td>
								<td class="hidden-xs">Yes. That is fine.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> -->
		</div>
	</div>
	<!-- Body content ends here -->	
	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script>
	$('.request-count-box').on('click', function(){
		$('.request-count-box').removeClass('bg-yellow');
		$(this).addClass('bg-yellow');
	});
	$('#btn_request_report').on('click' ,function(){
		xu_validation.form_submit('#request_report_form','save_request_report');		
	});
	function save_request_report(){
		var page='<?php echo $page;?>';
		var myUrl='<?php echo $prefix;?>/admin/updateRequestReport';
		var description = $("#re_desc").val();
		var respond = $("#re_respond").val();
		var status = $("#re_status").val();
		var UID = $("#re_UID").val();
		$.ajax({
			url:myUrl,
			dataType:'JSON',
			type:'POST',
			data:{'vType':'UPDATE','description':description,'respond':respond,'status':status,'UID':UID,'page':page}
		}).done(function(data){
			if(data.status == "Success"){	
				$.gritter.add({
					title: 'Success',
					text: 'Saved Successfully',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location.reload();},1000);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location.reload();},1000);
			}
		}); 
	}
</script>
</body>
</html>