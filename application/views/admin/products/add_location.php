<?php
if(defined('BASEPATH') OR exit('No direct script access allowed'));
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
		<section class="container">
		<div id="my-toast-location" style="position:relative; top:0px; right:20px; z-index:100 !important; float:right;"></div>
			<div class="row">
				<h4>Add or Modify Locations</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<form class="form-horizontal" name="location_data" role="form"  method="POST" id="location_data"  onsubmit="return false">
							<input type="hidden" id="locationID" value="<?php if(isset($edit_locations[0]['locationID'])){ echo $edit_locations[0]['locationID']; } ?>">
							<div class="col-md-4">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Country</label>
								<div class="col-sm-10">
								   <select class="form-control entity-type select2" id="all-countrys" name="all-countrys" style="width:100%;" va_req="true">
								   <option value="">--Select country --</option>
									<?php foreach ( $COUNTRY as $country){
										$selected='';
											if(count($edit_locations) > 0){
												$cID=$edit_locations[0]['countryID'];
												if($cID==$country['countryID']){
													$selected="selected";
												}
											}
										echo '<option value="'.$country['countryID'].'" '.$selected.'>'.$country['countryName'].'</option>';
									}
									?>	
								   </select>
								</div>
							  </div>
							</div>
						<div class="col-md-4">
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">State</label>
							<div class="col-sm-10">
							   <select class="form-control entity-type select2" va_req="true" id="all-states" name="all_states" style="width:100%;">
							   <option value=""  >--Select State --</option>
								<?php
									if(count($edit_locations) > 0){
										foreach ( $STATES as $state){
											$selected='';
											$sID=$edit_locations[0]['stateID'];
											if($sID==$state['stateID']){
												$selected="selected";
											}
											echo '<option value="'.$state['stateID'].'" '.$selected.'>'.$state['stateName'].'</option>';
										}
									} 
								?>	
							   </select>
							</div>
						  </div>
						</div>
						<div class="col-md-4">
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">City</label>
							<div class="col-sm-10">
							   <select class="form-control entity-type select2" va_req="true" id="all-cities" style="width:100%;">
							   <option value="">--Select City --</option>
								<?php 
									if(count($edit_locations) > 0){
										foreach ( $CITIES as $city){
											$selected='';
											$ciID=$edit_locations[0]['cityID'];
											if($ciID==$city['cityID']){
												$selected="selected";
											}
											echo '<option value="'.$city['cityID'].'" '.$selected.'>'.$city['cityName'].'</option>';
										}
									} 
								?>									
							   </select>
							</div>
						  </div>
						</div>
						<div class="col-md-4">
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2  control-label">Location</label>
							<div class="col-sm-10 ">
							  <textarea class="form-control" rows="3" id="location" va_req="true" ><?php if(count($edit_locations) > 0){ echo $edit_locations[0]['location'];}?></textarea></div>
						  </div>
						</div>	
						<div class="col-md-4">
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-3  control-label">Pin Code</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" va_req="true" id="pincode" value="<?php if(count($edit_locations) > 0){ echo $edit_locations[0]['pincode'];}?>">
							</div>
						  </div>
						</div>	
						<div class="col-md-2"></div>						
						<div class="col-md-4">
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label"></label>
							<div class="col-sm-10">
							   <a class="btn btn-default btn-primary pull-right" id="location-save" name="location_save" ><i class="fa fa-floppy-o padding-right-8" ></i>Save</a>
							</div>
						  </div>
						</div>
						</form>
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
							<?php 
								foreach($locationDetail as $LD){
									echo '<tr>
								<td>'.$LD["countryName"].'</td>
								<td class="hidden-xs">'.$LD["stateName"].'</td>
								<td class="hidden-xs">'.$LD["cityName"].'</td>
								<td><a href="'.$prefix.'/admin/add_location/'.$LD["locationID"].'" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="javascript:void();" class="delete-box-color delete-location font-size-16" data-lid="'.$LD["locationID"].'"><i class="fa fa-trash-o picture-padding-right-10" ></i><span class="hidden-xs" >Delete</span></a></td>
								
							</tr>';
								}
							?>
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
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo $assetsPath; ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
	<script>
		
		$('document').ready(function(){	
			 $('.select2').select2({
                placeholder: "Select",
                allowClear: true
            });		
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
		$("#location-save").click(function(){
			xu_validation.form_submit('#location_data','save_location');
		});
		function save_location(){
			var locationID = $('#locationID').val();
			if(locationID==''){
				vType='INSERT';
			}else{
				vType='EDIT';
			}
			var country_id = $('#all-countrys').val();						
			var states_id = $('#all-states').val();
			var city_id=$('#all-cities').val();
			var location=$('#location').val();
			var pincode=$('#pincode').val();
			$.ajax({
				url:'<?php echo $prefix;?>/admin/save_location_detail/',
				data:{'vType':vType,'locationID':locationID,'country_id':country_id,'states_id':states_id,'city_id':city_id,'location':location,'pincode':pincode},
				type:'POST',
				processData: true,
				dataType:'JSON'
			}).done(function(data){
				if(data.status == "Success"){	
					$.gritter.add({
						title: 'Success',
						text: 'Saved Successfully',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_location";},1000);
				}else{
					$.gritter.add({
						title: 'Failed',
						text: 'Failed To Save',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_location";},1000);
				}
			});
		}
		$(".delete-location").click(function(){
			var locationID=$(this).data("lid");
			$.ajax({
				url:'<?php echo $prefix;?>/admin/save_location_detail/',
				data:{'vType':'DELETE','locationID':locationID,'country_id':'','states_id':'','city_id':'','location_detail':'','pincode':''},
				type:'POST',
				processData: true,
				dataType:'JSON'
			}).done(function(data){
				if(data.status == "Success"){	
					$.gritter.add({
						title: 'Success',
						text: 'Saved Successfully',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					window.location.reload();
				}else{
					$.gritter.add({
						title: 'Failed',
						text: 'Failed To Save',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_location";},1000);
				}
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
