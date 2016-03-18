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
		.required .control-label:after {
		  content:"*";color:red;		  
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
		<div id="my-toast-location" style="position:relative; top:0px; right:20px; z-index:100 !important; float:right;"></div>
			<div class="row">				
				<div class="panel panel-default Locations-panel border-none-all" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="col-md-3">							
						</div>
						<div class="col-md-5">
							<form class="form-horizontal">
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-3  control-label text-align-left">Vehicle</i></label>
								<div class="col-sm-9">
								   <select class="form-control entity-type select2" id="all-states" name="all_states" style="width:100%;">
								   <option value=""  >--Select State --</option>
									<?php foreach ( $STATES as $state){
										echo '<option value="'.$state['stateID'].'">'.$state['stateName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-3 control-label text-align-left">Brand</label>
								<div class="col-sm-9">
								   <select class="form-control entity-type select2 text-align-left" id="all-states" name="all_states" style="width:100%;">
								   <option value=""  >--Select State --</option>
									<?php foreach ( $STATES as $state){
										echo '<option value="'.$state['stateID'].'">'.$state['stateName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-3 control-label text-align-left">Model</label>
								<div class="col-sm-9">
								   <select class="form-control entity-type select2" id="all-states" name="all_states" style="width:100%;">
								   <option value=""  >--Select State --</option>
									<?php foreach ( $STATES as $state){
										echo '<option value="'.$state['stateID'].'">'.$state['stateName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-3 control-label text-align-left">ServiceCost</label>
								<div class="col-sm-9">
								   <select class="form-control entity-type select2" id="all-states" name="all_states" style="width:100%;">
								   <option value=""  >--Select State --</option>
									<?php foreach ( $STATES as $state){
										echo '<option value="'.$state['stateID'].'">'.$state['stateName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-3 control-label text-align-left">Location</label>
								<div class="col-sm-9">
								   <select class="form-control entity-type select2" id="all-states" name="all_states" style="width:100%;">
								   <option value=""  >--Select State --</option>
									<?php foreach ( $STATES as $state){
										echo '<option value="'.$state['stateID'].'">'.$state['stateName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>	
								<a href="#" class="search-btn">Service Cost Analyzer</a>					  
							</form>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered picture-color-edit">
						<thead>
						<th>Part Description</th>
						<th class="hidden-xs">Unit Price(in INR)</th>
						<th class="hidden-xs">Quantity</th>
						<th>Total Price</th>													
						</thead>
						<tbody id="location-detail-all">
							<tr>
								<td>Engine Oil</td>
								<td class="hidden-xs">940</td>
								<td class="hidden-xs">3</td>
								<td>2632</td>
							</tr>
							<tr>
								<td>Oil Filter</td>
								<td class="hidden-xs">325</td>
								<td class="hidden-xs">1</td>
								<td>325</td>
							</tr>
							<tr>
								<td>Fuel Filter</td>
								<td class="hidden-xs">493</td>
								<td class="hidden-xs">1</td>
								<td>493</td>
							</tr>
							<tr>
								<td>Pollen Filter</td>
								<td class="hidden-xs">664</td>
								<td class="hidden-xs">3</td>
								<td>664</td>
							</tr>
							<tr>
								<td>Windshield Washer</td>
								<td class="hidden-xs">530</td>
								<td class="hidden-xs">3</td>
								<td>530</td>
							</tr>
							<tr>
								<td>Air Filter</td>
								<td class="hidden-xs">694</td>
								<td class="hidden-xs">1</td>
								<td>694</td>
							</tr>
							<tr>
								<td>Brake Fluid</td>
								<td class="hidden-xs">239</td>
								<td class="hidden-xs">5</td>
								<td>1099</td>
							</tr>
						</tbody>
					</table>
					<div class="col-md-4"><div class="total-cost-text">Total service cost</div></div>
					<div class="col-md-4"></div>
					<div class="col-md-3 col-md-offset-1 "><div class="total-cost-text"><center>RS.7759.00</div></div>
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
<script src="<?php echo $assetsPath; ?>/js/result_status.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>
	<script>
		
		$('document').ready(function(){	
					
			 $('.select2').select2({
                placeholder: "Select",
                allowClear: true
            });
			 $('button').on('click', function(){
			alert('preserve attached java script data!');
			});		
			$('#myTab').tabCollapse();			
		});
		
		
		
	</script>
</body>
</html>