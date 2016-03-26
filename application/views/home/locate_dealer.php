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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">

	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<style type="text/css">
		.form-group.required .control-label:after {
  content:"*";
  color:red;
}
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
			<div class="col-md-6 col-md-offset-2">
			   <form class="form-horizontal">
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Brand</label>
								<div class="col-md-6">
								   <select class="form-control entity-type select2" id="ld-brand" style="width:100%;">
									<option value="">Car</option>
									<option value="" ></option>
									<option value="1" >No</option>
								   </select>
								</div>
							  </div>
				</form>
			  </div>
			  <div class="col-md-6 col-md-offset-2">
			   <form class="form-horizontal">
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Vehicle</label>
								<div class="col-md-6">
								   <select class="form-control entity-type select2" id="ld_vehicle" style="width:100%;">
									<option value="">Car</option>
									<option value="1" >Yes</option>
									<option value="1" >No</option>
								   </select>
								</div>
							  </div>
				</form>
			  </div>
			  
			  <div class="col-md-6 col-md-offset-2">
			   <form class="form-horizontal">
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Location</label>
								<div class="col-md-6">
								   <select class="form-control entity-type select2 " id="canbe_sme" style="width:100%;">
									<option value="">Car</option>
									<option value="1" >Yes</option>
									<option value="1" >No</option>
								   </select>
								</div>
							  </div>
							    
				</form>
				<div class= "mt-29 col-md-offset-5">
					<a href="<?php ?>" class="search-btn" >Locate a Dealer </a>
				</div>
			  </div>
		</div>
		<div class="row" style="margin-top: 50px;">
		<div class="col-md-3 col-sm-4 col-xs-12 mb-10 col-md-offset-2" >
					<div class="dealer-box bg-lightgrey  style="margin-top: 45px;"">
						
						<div class="dealer-name">
							M/S Keerthi
						</div>
						<div class="dealer-address">
							Address:banglore adress banglore location
							banglore
							<br>
							phone:9164545924
						</div>
					</div>
					
		</div>
                <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
					<div class="dealer-box bg-lightgrey style="margin-top: 41px;"">
						
						<div class="dealer-name">
							Amba Bajaj
						</div>
						<div class="dealer-address">
						     Address:banglore adress banglore location
							banglore
							<br>
							phone:9164545924
						</div>
					</div>
					
				</div>
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
					<div class="dealer-box bg-lightgrey style="margin-top: 41px;"">
						
						<div class="dealer-name ">
							M/S Keerthi
						</div>
						<div class="dealer-address">
							Address:banglore adress banglore location
							banglore
							<br>
							phone:9164545924
						</div>
					</div>
					
				</div>
         </div>			  
	</div>
</div>	
<?php echo $footer; ?>
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>


<!-- Bootstrap -->

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