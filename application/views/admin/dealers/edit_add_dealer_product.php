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
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/bootstrap-switch.min.css" type="text/css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<style type="text/css">
		.picture-color-edit >tr>td>img{text-align:center !important;}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<div class="row">
				<h4>Edit/Add Dealer Products</h4>
				<hr>
			</div>
			<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								<div class="col-sm-10">
								   <select class="form-control entity-type select2" id="all-countrys" name="all-countrys" style="width:100%;">
								   <option value="">-- Select Category -- </option>
									<?php foreach ( $COUNTRY as $country){
										echo '<option value="'.$country['countryID'].'">'.$country['countryName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-10">
								   <select class="form-control entity-type select2" id="all-states" name="all_states" style="width:100%;">
								   <option value=""  >-- Select Manufacturing -- </option>
									<?php foreach ( $STATES as $state){
										echo '<option value="'.$state['stateID'].'">'.$state['stateName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
							<form class="form-horizontal">
							  <div class="form-group">
								
								<div class="col-sm-10">
								   <select class="form-control entity-type select2" id="all-cities" style="width:100%;">
								   <option value="">--Select City --</option>
									<?php foreach ( $CITIES as $city){
										echo '<option value="'.$city['cityID'].'">'.$city['cityName'].'</option>';
									}
									?>									
								   </select>
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-6">
						    <div class="form-group">
								<div class="input-group date datepicker no-padding">
									<input type="text" class="form-control" va_req="true" id="regCloseDate" name="regCloseDate" value="">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
									<div class="input-group bootstrap-timepicker timepicker" style="margin-left:3px">
									<input id="timepicker3" name="reg_time" type="text" class="form-control input-small inpt-timepicker" value="">
									</div>
								</div>
					      </div>
						</div>
						<br>
						<div class="col-md-4">
					    <a href="<?php ?>" class="search-btn" >Get Products</a>
						</div>
					</div>
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered picture-color-edit">
						<thead>
						
						<th >Products </th>
						<th >Color  </th>
						<th >QTY  </th>
						<th> Ex –showroomPrice</th>
						<th >Insurance </th>
						<th >RTO  </th>
						<th >RoadTax </th>
						<th >HandlingCharges& Others </th>
						<th >OnRoadPrice  </th>
						<th >WaitingPeriod(days) </th>
						<th >Offer1 </th>
						 <th>Offer 2 </th>
						<th>Offer3</th>													
						</thead>
						<tbody>
							<tr>
								<td>Maru]–Aulto-LXI	</td>
								<td > </td>
								<td > 10</td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td >0 </td>
								<td > </td>
								<td > </td>
								<td > </td>
							</tr>
							<tr>
								<td></td>
								<td > </td>
								<td >12 </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td >5 </td>
								<td > </td>
								<td > </td>
								<td > </td>
							</tr>
							<tr>
								<td></td>
								<td > </td>
								<td >7 </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > 6</td>
								<td > </td>
								<td > </td>
								<td > </td>
							</tr>
							<tr>
								<td></td>
								<td > </td>
								<td > 5</td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td > </td>
								<td >13 </td>
								<td > </td>
								<td > </td>
								<td > </td>
							</tr>
						</tbody>
					</table>
					<div class="col-md-4 col-xs-12 float-right">
					  <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save</button>
					</div>
				</div>
			</div>
		</section>
	</div>
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-validate.js"></script>

<!-- Bootstrap -->
<script src="<?php echo $assetsPath; ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>
	<script>
	</script>
</body>
</html>
