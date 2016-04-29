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
<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />	
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
				<h4>Add Dealers </h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="col-md-12">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-4  col-xs-12 control-label text-align-left">Dealers Name </label>
								<div class="col-sm-3 col-xs-12 col-md-4 ">
								  <input type="text" class="form-control" placeholder="dealers name">
								</div>
							  </div>
							</form>
						</div>
						<br>
						<div class="col-md-3">
						<h4>Add Dealers Location </h4>
						</div>
						<div class="col-sm-6 col-xs-12 ">
							<button class="btn btn-default btn-primary pull-right" type="submit">Add</button>
						</div>
						<br>
						<div class="col-md-12">
						<form class="form-horizontal">
							  <div class="form-group">
								<div class=" ">
								  <input type="text" class="form-control" placeholder="dealers location">
								</div>
							  </div>
							</form>
						</div>
						<div class="row">
						<div class="col-md-3">
						<select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
														<option value="">selectcity</option>
						 </select>
						</div>
						<div class="col-md-3">
						<input type="text" class="form-control" placeholder="location">
						</div>
						<div class="col-md-4">
						<input type="text" class="form-control" placeholder="address">
						</div>
						</div>
						<br>
						<div class="row">
						<div class="col-md-3">
						<input type="text" class="form-control" placeholder="contactnumber">
						</div>
						<div class="col-md-3">
						<input type="text" class="form-control" placeholder="email">
						</div>
						<div class="col-md-4">
						<input type="text" class="form-control" placeholder="contact person">
						</div>
						 <br>
						 <div class="col-sm-4 col-xs-12 float-right">
													  <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save</button>
													</div>
						</div>
						
					</div>
					
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered">
						<thead>
						<th>Dealers Name </th>
						</thead>
						<tbody>
							<tr>
								<td><a href="<?php echo $prefix;?>/md_view_dealers_and_products">Pratham Motors - Bellandur </a></td>
							</tr>
							<tr>
								<td><a href="">Pratham Motors - Bellandur </a></td>
							</tr>
							<tr>
								<td><a href="">Pratham Motors - Bellandur </a></td>
							</tr>
							<tr>
								<td><a href="">Pratham Motors - Bellandur </a></td>
							</tr>
							
						</tbody>

					</table>
				</div>
			</div>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.iframe-transport.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
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
		
	</script>
</body>
</html>
