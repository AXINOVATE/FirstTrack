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
	<link href="<?php echo $assetsPath;?>/css/bootstrap-switch.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<style type="text/css">
		#myTab-accordion>.panel-default>.panel-heading{background-color: #027CD5; color: white !important; }
		#myTab-accordion>.panel-default>.panel-heading>.panel-title>a{text-decoration:none !important;}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<section class="row">
				<div class="col-sm-12">
					<div class="panel no-border-radius-all panel-default edit-product-panel product-panel-default">
						<div class="panel-heading bg-lightblue"><h3>Add Dealer's Information</h3></div>
							<div class="panel-body">
								<div role="tabpanel">
								  <!-- Nav tabs -->
									<ul id="myTab" class="nav  nav-tabs1" role="tablist">
										<li role="presentation" class="active product-panel-heading"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Information</a></li>
										<li role="presentation"><a href="#bank-info" aria-controls="profile" role="tab" data-toggle="tab">Bank Details</a></li>
									</ul>

								  <!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="info">
											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Dealers Name"/>
												</div>
												<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="House number, Street number"/>
												</div>
												<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Area">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Country">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="State">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="City">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Location">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Contact Number">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Email">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Contact Person">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="password" class="form-control" placeholder="Password">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<select class="form-control select2" style="width:100%;">
														<option value="11">-- Select Category --</option>
														<option value="12" >Diesel</option>
														<option value="13" >LPG</option>
														<option value="14" >CNG</option>
														<option value="15" >Electric Power</option>
													</select>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<select class="form-control select2" style="width:100%;">
														<option value="1">-- Select Manufacturers --</option>
														<option value="2" >Maruti</option>
														<option value="3" >Hyundai</option>
														<option value="4" >Nissan</option>
														<option value="5" >Honda</option>
													</select>
												</div>
												<div class="col-md-12 col-sm-12 col-xs-12 mt-10">
													<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" value=""/>
													<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
														Authorized Dealer for Brand
													</div>
												</div>
												
												<div class="col-md-4 col-sm-4 hidden-xs"></div>
												<div class="col-md-4 col-sm-4 hidden-xs"></div>
												<div class="col-md-4 col-sm-4 col-xs-12">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
														<div class="col-sm-6 col-xs-12 ">
															<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i> Save</button>
														</div>
													</div>
													
												</div>
											</div>
											
										</div><!-- end tab 1 -->
										<div role="tabpanel" class="tab-pane" id="bank-info">
											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Dealers Bank Account Name"/>
												</div>
												<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Dealers Bank Account Number"/>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<select class="form-control select2" style="width:100%;">
														<option value="type">-- Account Type --</option>
														<option value="current" >Current</option>
														<option value="savings" >Savings</option>
													</select>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="IFSC Code">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Dealer TIN">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Dealer Service Tax Number">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Dealer CIN">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
													<input type="text" class="form-control" placeholder="Email">
												</div>
												<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
													<textarea type="text" rows="4" class="form-control" placeholder="Dealer Address"></textarea>
												</div>
												<div class="col-md-12 col-sm-12 col-xs-12 mt-10">
													<input class="col-md-1 col-sm-1 col-xs-2" type="checkbox" value=""/>
													<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
														Authorized Dealer for Brand
													</div>
												</div>
												
												<div class="col-md-4 col-sm-4 hidden-xs"></div>
												<div class="col-md-4 col-sm-4 hidden-xs"></div>
												<div class="col-md-4 col-sm-4 col-xs-12">
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-4 col-xs-12 control-label"></label>
														<div class="col-sm-6 col-xs-12 ">
															<button class="btn btn-default btn-primary pull-right" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i> Save</button>
														</div>
													</div>
													
												</div>
											</div>
										</div><!-- end tab 2 -->
							
									</div>

								</div>
							</div>
					</div>      
				</div> 
			</section>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>
	<script>
		$('document').ready(function(){
			$('.select2').select2({
                placeholder: "Select",
                allowClear: true
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