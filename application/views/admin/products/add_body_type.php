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
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
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
				<h4>Add or Modify Body Type</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<form class="form-horizontal" name="body_type_data" role="form"  method="POST" id="body_type_data"  onsubmit="return false">
							<input type="hidden" id="body_typeID" value="<?php if(count($editbodyTypeDetails) > 0 ){ echo $editbodyTypeDetails[0]['bodyTypeID'];} ?>">
							<div class="col-md-6">
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-4  col-xs-12 control-label text-align-left">Category type</label>
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <select class="form-control entity-type select2" id="categoryID" name="categoryID" style="width:100%;" va_req="true">
								   <option value="">--Select country --</option>
								   <?php 
										$cID='';
										if(count($editbodyTypeDetails) > 0 ){ $cID= $editbodyTypeDetails[0]['categoryID'];}
										foreach($categoryDetails as $CD){
											$selected="";
											if($cID==$CD['categoryID']){
												$selected="selected";
											}
											echo "<option value='".$CD['categoryID']."' ".$selected.">".$CD['categoryName']."</option>";
										}
								   ?>
								   </select>
								</div>
							  </div>
							</div>
						
						<div class="col-md-6">
							<div class="form-group" id="title_cover_image">
								<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
									Picture <span class="form-man"> * </span>
								</label>
								<div class="col-md-6 col-sm-5 col-xs-10">
									<input type="hidden" name="cover_image" id="image_file_path" value="<?php if(count($editbodyTypeDetails) > 0 ){ echo $editbodyTypeDetails[0]['body_type_img'];} ?>" va_req="true"/>
									<div id="progress" class="progress">
										<div id="image_progress" class="progress-bar progress-bar-success"></div>
									</div>
									<span>Picture size 200 X 125 Pixels</span>
									<!--<div id="image_file_msg" class="files"></div>-->
								</div>
								<div class="col-md-2 col-sm-2 col-xs-2">
									<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
										<!-- The file input field used as target for the file upload widget -->
										<input class="fileupload" id="image_upload" type="file" name="files" message="image_file_msg" pro_path="image_progress" save_path="image_file_path">
									</span>
									
								</div>
							</div>
							<br>
						</div>
						<div class="">
							<div class="col-md-6">
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-4  col-xs-12 control-label text-align-left">Body Type</label>
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" placeholder="Body Type" va_req="true" id="body_type" value="<?php if(count($editbodyTypeDetails) > 0 ){ echo $editbodyTypeDetails[0]['body_type'];} ?>">
								</div>
							  </div>
							</div>
							<div class="col-md-6">
								<h6>Picture Preview</h6>
								<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
								  <div id="image_file_msg" class="files"><?php if(count($editbodyTypeDetails) > 0 ){ echo "<img src='".$prefix."/".$editbodyTypeDetails[0]['body_type_img']."' class='img-rounded img-responsive Picture-Preview' alt='Image' style='width:200px; height:auto;' >";} ?></div>
								  <!--<img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded img-responsive Picture-Preview" alt="Cinque Terre" width="80%" height="210"> -->
								</div>
								<button class="btn btn-default btn-primary pull-right" id="save_body_type" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save </button>
							</div>
						</div>
					</form>
						
					</div>
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered picture-color-edit">
						<thead>
						<th class="col-md-3">product type</th>
                         <th class="col-md-3">Body Type</th>						
                         <th class="col-md-3">picture</th>							
						<th class="col-md-3">Action</th>													
						</thead>
						<tbody align="center">
							<?php 
								foreach($bodyTypeDetails as $BTD){  ?>
									<tr>
										<td><?php echo $BTD['categoryName']; ?></td>
										<td><?php echo $BTD['body_type']; ?></td>   								
										<td><center><img src="<?php echo $prefix.'/'.$BTD['body_type_img'];?>" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
										<td><a href="<?php echo $prefix.'/admin/add_body_type/'.$BTD['bodyTypeID']; ?>" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16 delete-bodyType" data-btid="<?php echo $BTD['bodyTypeID']; ?>"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
										
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
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-validate.js"></script>

<!-- Bootstrap -->
<script src="<?php echo $assetsPath; ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
	<script>
		$('document').ready(function(){	
			 $('.select2').select2({
                placeholder: "Select",
                allowClear: true
            });		
			xu_validation.fileupload('<?php echo $prefix;?>/', '#image_upload', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
		});
		$("#save_body_type").click(function(){
			xu_validation.form_submit('#body_type_data','save_body_type');
		});
		function save_body_type(){
			var vType;
			var body_typeID=$("#body_typeID").val();
			if(body_typeID==''){
				vType="INSERT";
			}else{
				vType="EDIT";
			}
			var categoryID=$("#categoryID").val();
			var body_type=$("#body_type").val();
			var body_type_img=$("#image_file_path").val();
			$.ajax({
				url:'<?php echo $prefix;?>/admin/add_modify_bodyTypeDetails/',
				data:{'vType':vType,'body_typeID':body_typeID,'categoryID':categoryID,'body_type':body_type,'body_type_img':body_type_img},
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
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_body_type";},1000);
				}else{
					$.gritter.add({
						title: 'Failed',
						text: 'Failed To Save',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_body_type";},1000);
				}
			});
		}
		$(".delete-bodyType").click(function(){
			var bodyTypeID=$(this).data("btid");
			$.ajax({
				url:'<?php echo $prefix;?>/admin/add_modify_bodyTypeDetails/',
				data:{'vType':'DELETE','body_typeID':bodyTypeID,'categoryID':'','body_type':'','body_type_img':''},
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
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_body_type";},1000);
				}else{
					$.gritter.add({
						title: 'Failed',
						text: 'Failed To Save',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_body_type";},1000);
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
