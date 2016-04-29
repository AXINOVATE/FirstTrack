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
<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<style type="text/css">
		
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<h4 class="Dealers-and-Products">Add Dealer Products </h4>
			<hr>
			<div role="tabpanel">
				<div class="" id="Add-Dealer-Products">				  
					<!-- Nav tabs -->
					<ul id="myTab" class="nav  nav-tabs1" role="tablist">
						<li role="presentation" class="active product-panel-heading"><a href="#Add-Dealers-Location" aria-controls="home" role="tab" data-toggle="tab">Add Dealers Location</a></li>
						<li role="presentation"><a href="#Picture-color" aria-controls="profile" role="tab" data-toggle="tab">Add Products</a></li>
						<li role="presentation"><a href="#Pricing" aria-controls="Pricing" role="tab" data-toggle="tab">Availability</a></li>
						<li role="presentation"><a href="#Specification" aria-controls="Specification" role="tab" data-toggle="tab">Offers</a></li>
					</ul>
				<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="Add-Dealers-Location">
							<div class="container1">
								<div class="row">
								<div class="col-md-12">
									<table class="table table-bordered ">
										<!--<thead>
										  <tr>
											<th class="col-md-1">
												<div class="checkbox">
													<label>
													  <input type="checkbox"> 
													</label>
												</div>
											</th>
											<th class="col-md-8">Pratham Motors - Bellandur</th>
										  </tr>
										</thead>-->
										<tbody>
										  <tr>
											<td>
												<div class="checkbox form-group">
													<label>
													  <input type="checkbox"> 
													</label>
												</div>
											</td>
											<td>Pratham Motors – Jayanagar</td>
										  </tr>
										  <tr>
											<td>
												<div class="checkbox form-group">
													<label>
													  <input type="checkbox"> 
													</label>
												</div>
											</td>
											<td>Pratham Motors – Jayanagar</td>
										  </tr>
										  <tr>
											<td>
												<div class="checkbox form-group">
													<label>
													  <input type="checkbox"> 
													</label>
												</div>
											</td>
											<td>Pratham Motors – Jayanagar</td>
										  </tr>
										</tbody>
									</table>
									 <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
								</div>
								</div>
							</div>
						</div><!-- end tab 1 -->
						<div role="tabpanel" class="tab-pane" id="Picture-color">
							<div class="container1">
								<div class="row">
								<div class="col-md-12">
									
									<div class="col-md-4"></div>
									<div class="col-md-4">
									<center>
										<select class="form-control entity-type select2" id="canbe_sme" style="width:100%;">
											<option value="">Car</option>
											<option value="1" >Yes</option>
											<option value="1" >No</option>
										</select>
									</center>
									</div>
									<div class="col-md-4"></div>
									<br>
									<br>
									<table class="table table-bordered ">
										<thead>
										  <tr>
											<th>
												
											</th>
											<th>Model</th>
											<th >Variant</th>
											
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>
												<div class="checkbox form-group">
													<label>
													  <input type="checkbox"> 
													</label>
												</div>
											</td>
											<td>Aulto 800</td>
											<td>Standard</td>
										  </tr>
										  <tr>
											<td>
												<div class="checkbox form-group">
													<label>
													  <input type="checkbox"> 
													</label>
												</div>
											</td>
											<td>Aulto 800</td>
											<td>LX</td>
										  </tr>
										  <tr>
											<td>
												<div class="checkbox form-group">
													<label>
													  <input type="checkbox"> 
													</label>
												</div>
											</td>
											<td>Aulto 800</td>
											<td>LXI</td>
										  </tr>
										  <tr>
											<td>
												<div class="checkbox form-group">
													<label>
													  <input type="checkbox"> 
													</label>
												</div>
											</td>
											<td>Aulto 800</td>
											<td>VXI</td>
										  </tr>
										</tbody>
									</table>
									 <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
								</div>
								</div>
							</div>
						</div><!-- end tab 2 -->
						<div role="tabpanel" class="tab-pane" id="Pricing">
							<div class="container1">
								<div class="row">
								<div class="col-md-12">
									
									<div class="col-md-4"></div>
									<div class="col-md-4">
									<center>
										<h3>Maruti Suzuki </h3>
									</center>
									</div>
									<div class="col-md-4"></div>
									<br>
									<br>
									<table class="table table-bordered ">
										<thead>
										  <tr>
											<th >Dealers Loaction</th>
											<th>Model</th>
											<th >Variant</th>
											<th >Available</th>
											
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Pratham Motors - Bellandur</td>
											<td>Aulto 800</td>
											<td>Standard</td>
											<td>10</td>
										  </tr>
										   <tr>
											<td>Pratham Motors - Bellandur</td>
											<td>Aulto 800</td>
											<td>LX</td>
											<td>12</td>
										  </tr>
										   <tr>
											<td>Pratham Motors - Bellandur</td>
											<td>Aulto 800</td>
											<td>LXI</td>
											<td>7</td>
										  </tr>
										  <tr>
											<td>Pratham Motors - Bellandur</td>
											<td>Aulto 800</td>
											<td>VXI</td>
											<td>5</td>
										  </tr>
										</tbody>
									</table>
									 <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
								</div>
								</div>
							</div>
						</div><!-- end tab 3 -->
						<div role="tabpanel" class="tab-pane" id="Specification">
							       <div class="container1">
								<div class="row">
								<div class="col-md-12">
									
									<div class="col-md-4"></div>
									<div class="col-md-4">
									<center>
										<h3>Maruti Suzuki </h3>
									</center>
									</div>
									<div class="col-md-4"></div>
									<br>
									<br>
									<table class="table table-bordered ">
										<thead>
										  <tr>
											<th >Dealers Loaction</th>
											<th>Model</th>
											<th >Variant</th>
											<th >Offer</th>
											
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Pratham Motors - Bellandur</td>
											<td>Aulto 800</td>
											<td>Standard</td>
											<td>Free one year Insurance </td>
										  </tr>
										   <tr>
											<td>Pratham Motors - Bellandur</td>
											<td>Aulto 800</td>
											<td>LX</td>
											<td>10% Corporate Discount </td>
										  </tr>
										   <tr>
											<td>Pratham Motors - Bellandur</td>
											<td>Aulto 800</td>
											<td>LXI</td>
											<td></td>
										  </tr>
										  <tr>
											<td>Pratham Motors - Bellandur</td>
											<td>Aulto 800</td>
											<td>VXI</td>
											<td></td>
										  </tr>
										</tbody>
									</table>
									 <button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </button>
								</div>
								</div>
							</div>
						</div><!-- end tab 4 -->
						<div role="tabpanel" class="tab-pane" id="Features">
							<p>Features</p>
						</div><!-- end tab 5 -->
						<div role="tabpanel" class="tab-pane" id="Photos">
							<p>Photos</p>
						</div><!-- end tab 6 -->
						<div role="tabpanel" class="tab-pane" id="Videos">
							<p>Videos</p>
						</div><!-- end tab 7 -->
					</div>
			    </div>
			</div>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-validate.js"></script>

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