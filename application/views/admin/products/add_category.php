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
		#image_file_msg>img{padding: 20px !important;    width: 86% !important;    border-radius: 6px !important;height:210px !important;max-width:none !important;}
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
				<h4>Add or Modify Category Type</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<form class="form-horizontal" name="category_data" role="form"  method="POST" id="category_data"  onsubmit="return false">
							<input type="hidden" id="categoryID" value="<?php if(count($editcategoryDetails) > 0 ){ echo $editcategoryDetails[0]['categoryID'];} ?>">
							<div class="col-md-6">
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-4  col-xs-12 control-label text-align-left">Category Name</label>
								<div class="col-sm-6 col-xs-12 col-md-8 ">
								  <input type="text" class="form-control" placeholder="Category Name" va_req="true" id="categoryName" value="<?php if(count($editcategoryDetails) > 0 ){ echo $editcategoryDetails[0]['categoryName'];} ?>">
								</div>
							  </div>
							</div>
							<div class="col-md-6">
								<div class="form-group" id="title_cover_image">
									<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
										Picture <span class="form-man"> * </span>
									</label>
									<div class="col-md-6 col-sm-5 col-xs-10">
										<input type="hidden" name="cover_image" id="image_file_path" value="<?php if(count($editcategoryDetails) > 0 ){ echo $editcategoryDetails[0]['imgPath'];} ?>" va_req="true"/>
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
								<div class="col-md-12">
									<h6>Picture Preview</h6>
									<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
										 <div id="image_file_msg" class="files"><?php if(count($editcategoryDetails) > 0 ){ echo "<img src='".$prefix."/".$editcategoryDetails[0]['imgPath']."' class='img-rounded img-responsive Picture-Preview' alt='Image' width='80%' height='210'>";} ?></div>
									 <!--<img src="<?php echo $assetsPath;?>/images/baner-car.png" class="img-rounded img-responsive Picture-Preview" alt="Cinque Terre" width="80%" height="210"> -->
									</div>
									<button class="btn btn-default btn-primary pull-right" type="submit" id="save_category"><i class="fa fa-floppy-o padding-right-8" ></i>Save </button>
								</div>
							</div>
							<div class="col-md-2">
								 
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-12"><br>
					<table class="table table-bordered picture-color-edit">
						<thead>
						<th class="col-md-4">Category type</th>	
                         <th class="col-md-4">picture</th>							
						<th class="col-md-4">Action</th>													
						</thead>
						<tbody align="center">
							<?php 
								foreach($categoryDetails as $CD){  ?>
									<tr>
										<td><?php echo $CD['categoryName']; ?></td>	
										<td><center><img src="<?php echo $prefix.'/'.$CD['imgPath'];?>" class="img-rounded img-responsive " alt="Cinque Terre" height="30px" width="30%"></center></td>
										<td><a href="<?php echo $prefix.'/home/add_category/'.$CD['categoryID']; ?>" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp <a href="#" class="delete-box-color font-size-16 delete-category" data-cid="<?php echo $CD['categoryID']; ?>"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a></td>
										
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
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo $assetsPath; ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/highlight.js"></script>
<script src="<?php echo $assetsPath; ?>/js/main.js"></script>
	<script>
		$(document).ready(function(){
		$('.select2').select2({
			placeholder: "Select",
			allowClear: true
		});
		xu_validation.fileupload('<?php echo $prefix;?>/', '#image_upload', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
	});	 
	$("#save_category").click(function(){
		xu_validation.form_submit('#category_data','save_category');
	});
	function save_category(){
		var vType;
		var categoryID=$("#categoryID").val();
		if(categoryID==''){
			vType='INSERT';
		}else{
			vType='EDIT';
		}
		var categoryName=$("#categoryName").val();
		var imgPath=$("#image_file_path").val();
		$.ajax({
			url:'<?php echo $prefix;?>/admin/add_modify_categoryDetails/',
			data:{'vType':vType,'categoryID':categoryID,'categoryName':categoryName,'imgPath':imgPath},
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
				setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_category";},1000);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_category";},1000);
			}
		});
	}
	$(".delete-category").click(function(){
		var categoryID=$(this).data('cid');
		var vType='DELETE';
		$.ajax({
			url:'<?php echo $prefix;?>/admin/add_modify_categoryDetails/',
			data:{'vType':vType,'categoryID':categoryID,'categoryName':'','imgPath':''},
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
				setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_category";},1000);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_category";},1000);
			}
		});
	});
	</script>
</body>
</html>
