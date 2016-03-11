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
		<div id="my-toast-location" style="position:relative; top:0px; right:20px; z-index:100 !important; float:right;">ddff</div>
			<div class="row">
				<h4>Add or Modify Locations</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Country</label>
								<div class="col-sm-10">
								   <select class="form-control entity-type select2" id="all-countrys" name="all-countrys" style="width:100%;">
								   <option value="">--Select country --</option>
									<?php foreach ( $COUNTRY as $country){
										echo '<option value="'.$country['countryID'].'">'.$country['countryName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">State</label>
								<div class="col-sm-10">
								   <select class="form-control entity-type select2" id="all-states" name="all_states" style="width:100%;">
								   <option value=""  >--Select State --</option>
									<?php foreach ( $STATES as $state){
										echo '<option value="'.$state['stateID'].'">'.$state['stateName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">City</label>
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
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2  control-label">Location</label>
								<div class="col-sm-10 ">
								  <textarea class="form-control" rows="3" id="location_detail"></textarea></div>
							  </div>
							</form>
						</div>	
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-3  control-label">Pin Code</label>
								<div class="col-sm-9">
								  <input class="form-control">
								</div>
							  </div>
							</form>
						</div>	
						<div class="col-md-2"></div>						
						<div class="col-md-4">
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label"></label>
								<div class="col-sm-10">
								   <a class="btn btn-default btn-primary pull-right" id="location-save" name="location_save" ><i class="fa fa-floppy-o padding-right-8" ></i>Save & Next </a>
								</div>
							  </div>
							</form>
						</div>
						
					</div>
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered picture-color-edit">
						<thead>
						<th>Country</th>
						<th class="hidden-xs">State</th>
						<th class="hidden-xs">City</th>
						<th>Action</th>													
						</thead>
						<tbody id="location-detail-all">
							<tr>
								<td>India</td>
								<td class="hidden-xs">Karnataka</td>
								<td class="hidden-xs">Bangalore</td>
								<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
							</tr>
							<tr>
								<td>India</td>
								<td class="hidden-xs">Karnataka</td>
								<td class="hidden-xs">Bangalore</td>
								<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
							</tr>
							<tr>
								<td>India</td>
								<td class="hidden-xs">Karnataka</td>
								<td class="hidden-xs">Bangalore</td>
								<td><a href="#" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
								
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
		$('#all-countrys').on('change',function(){
			var country_id = $(this , '#all-countrys').val();
			$.ajax({
				url:'<?php echo $prefix;?>/home/get_particular_states/',
				data:{'country_id':country_id},
				type:'POST',
				processData: true,
				dataType:'JSON'
			}).done(function(data){
				if(data.length > -1){					
					$('#all-states').html('');					
					var i=0;
					for(i=0;i< data.length;i++){
						$('#all-states').append('<option value="'+data[i]['stateID']+'">'+data[i]['stateName']+'</option>');
					}
					$('#all-states').select2();
				}else{
					
				}
			});
		});
		$('#all-states').on('change',function(){
			var states_id = $(this , '#all-states').val();			
			$.ajax({
				url:'<?php echo $prefix;?>/home/get_particular_city/',
				data:{'states_id':states_id},
				type:'POST',
				processData: true,
				dataType:'JSON'
			}).done(function(data){
				if(data.length > -1){					
					$('#all-cities').html('');					
					var i=0;
					for(i=0;i< data.length;i++){
						$('#all-cities').append('<option value="'+data[i]['cityID']+'">'+data[i]['cityName']+'</option>');
					}
					$('#all-cities').select2();
				}else{
					
				}
			});
		});		
		$('#location-save').on('click', function(){
			var country_id = $('#all-countrys').val();						
			var states_id = $('#all-states').val();
			var city_id=$('#all-cities').val();
			var location_detail=$('#location_detail').val();
			var error=0;
			if(country_id=='' ){error=1;}
			if(states_id=='' ){error=1;}
			if(city_id=='' ){error=1;}
			if(location_detail=='' ){error=1;}
			if(error==0){
				$.ajax({
					url:'<?php echo $prefix;?>/home/save_location_detail/',
					data:{'country_id':country_id,'states_id':states_id,'city_id':city_id,'location_detail':location_detail},
					type:'POST',
					processData: true,
					dataType:'JSON'
				}).done(function(data){
					
					if(data == "Successfully"){	
						$('#my-toast-location').toastee({
                        type: 'success'
						});	
						window.location.reload();
					}else{
						$('#my-toast-location').toastee({
                        type: 'error'
						});	
						setTimeout(function(){window.location="<?php echo $prefix;?>/home/add_modify_location";},1000);
					}
				});
			}
			
		});
		
		
	</script>
</body>
</html>
