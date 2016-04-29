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
			<div class="row">
				<h4>Add or Modify Manufacture</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="col-md-10">
							<form class="form-horizontal" name="manufacture_data" role="form"  method="POST" id="manufacture_data"  onsubmit="return false">
							<input type="hidden" id="manufactureID" value="<?php if(count($editmanufactureDetails) > 0) { echo $editmanufactureDetails[0]['manufactureID'];} ?>">
							  <div class="form-group">
								<label for="category" class="col-sm-4 col-md-3 col-xs-12 control-label text-align-left">Categoty</label>
								<div class="col-sm-6 col-xs-12 col-md-8 ">
									<select class="select2" va_req="true" style="width:100%" id="category">
										<option value=""></option>
										<?php 
										$categoryID = '';
										if(count($editmanufactureDetails) > 0) { $categoryID = $editmanufactureDetails[0]['categoryID'];}
										
										foreach($categoryDetails as $c){ ?>										
											<option value="<?php echo $c['categoryID']; ?>" <?php if($categoryID == $c['categoryID'])echo 'selected';?>><?php echo $c['categoryName']; ?></option>
										<?php } ?>										
									</select>
							  </div>
							  </div>
							  <div class="form-group">
								<label for="manufacture_name" class="col-sm-4 col-md-3 col-xs-12 control-label text-align-left">Manufacture Name</label>
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" id="manufactureName" va_req="true" placeholder="manufacture name" value="<?php if(count($editmanufactureDetails) > 0) { echo $editmanufactureDetails[0]['manufactureName'];} ?>">
								</div>
							  </div>
							</form>
						</div>
						<div class="col-md-2">
							 <button class="btn btn-default btn-primary pull-right" type="submit" id="add_manufacture"><i class="fa fa-floppy-o padding-right-8" ></i>Save </button>
						</div>
					</div>
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered picture-color-edit">
						<thead>
						<th class="col-md-4">Manufacture Name</th>						
						<th class="col-md-4">Category</th>						
						<th class="col-md-4">Action</th>													
						</thead>
						<tbody>
							<?php 
								foreach($manufactureDetails as $MD){ ?>
										<tr>
									<td><?php echo $MD['manufactureName']; ?></td>								
									<td><?php foreach($categoryDetails as $c){if($MD['categoryID'] == $c['categoryID'])echo $c['categoryName'];} ?></td>								
									<td><a href="<?php echo $prefix;?>/admin/add_manufacture/<?php echo $MD['manufactureID'];?>" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16 delete_manufacture" data-mid="<?php echo $MD['manufactureID'];?>"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
									
								</tr>
								<?php
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
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo $assetsPath; ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>
	<script>
	$(document).ready(function() {
		$("select").select2({placeholder:"Select.."});
	});
		$("#add_manufacture").click(function(){
			xu_validation.form_submit('#manufacture_data','save_manufacture');
		});
		function save_manufacture(){
			var vType='INSERT';
			var manufactureID=$('#manufactureID').val();
			var manufactureName=$('#manufactureName').val();
			var category=$('#category').val();
			if(manufactureID==''){
				vType='INSERT';
			}else{
				vType='EDIT';
			}
			$.ajax({
				url:'<?php echo $prefix;?>/admin/add_modify_manufactureDetails/',
				data:{'vType':vType,'manufactureID':manufactureID,'manufactureName':manufactureName,'category':category},
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
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_manufacture";},1000);
				}else{
					$.gritter.add({
						title: 'Failed',
						text: 'Failed To Save',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_manufacture";},1000);
				}
			});
		}
		$(".delete_manufacture").click(function(){
			var manufactureID=$(this).data('mid');
			$.ajax({
				url:'<?php echo $prefix;?>/admin/add_modify_manufactureDetails/',
				data:{'vType':'DELETE','manufactureID':manufactureID,'manufactureName':''},
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
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_manufacture";},1000);
				}else{
					$.gritter.add({
						title: 'Failed',
						text: 'Failed To Save',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_manufacture";},1000);
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
