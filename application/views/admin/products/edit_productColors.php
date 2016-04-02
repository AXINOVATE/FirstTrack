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
				<h4>Modify Product Color</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<div class="row">	
							<form class="form-horizontal" name="productColorData" role="form"  method="POST" id="productColorData"  onsubmit="return false">
								<input type="hidden" id="colorID" value="<?php if(count($getProductsColors) > 0 ){ echo $getProductsColors[0]['colorID'];} ?>">
								<div class="col-md-6 col-sm-6 col-xs-12">									 
									<div class="form-group">
										<label for="contestLogo" class="col-md-4 col-sm-4 col-xs-12 control-label">
											Picture <span class="form-man"> * </span>
										</label>
										<div class="col-md-6 col-sm-5 col-xs-9">
											<input type="hidden" name="cover_image1" id="image_file_path1" value="<?php if(isset($getProductsColors[0]['colorImage'])) echo $getProductsColors[0]['colorImage']; ?>" va_req="true"/>
											<div id="progress" class="progress">
												<div id="image_progress1" class="progress-bar progress-bar-success"></div>
											</div>
											<span>Picture size 200 X 125 Pixels</span>
											
										</div>
										<div class="col-md-2 col-sm-3 col-xs-3">
											<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
												<!-- The file input field used as target for the file upload widget -->
												<input class="fileupload" id="color_upload" type="file" name="files" message="image_file_msg1" pro_path="image_progress1" save_path="image_file_path1">
											</span>
										</div>
									</div>
									<div class="form-group">
										<label for="colorName" class="col-md-4 col-sm-4 col-xs-12 control-label">Color Name</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
										  <input type="text" class="form-control" placeholder="Superior White" id="colorName" name="colorName" value="<?php if(isset($getProductsColors[0]['colorName'])) echo $getProductsColors[0]['colorName'];?>" />
										</div>
									</div>
									<div class="form-group">
										<label for="colorCode" class="col-md-4 col-sm-4 col-xs-12 control-label">Color Code</label>
										<div class="col-md-7 col-sm-7 col-xs-12 ">
										  <input type="text" class="form-control" placeholder="Eg. #dfdfdf" id="colorCode" name="colorCode" value="<?php if(isset($getProductsColors[0]['colorCode'])) echo $getProductsColors[0]['colorCode'];?>" />
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<h6>Picture Preview</h6>
									<div class=" col-md-12 col-sm-12 col-xs-12 Picture-Preview  border-all-lite ">
										<div id="image_file_msg1" class="files">
											<?php if(isset($getProductsBasic[0]['coverImage'])){ if($getProductsBasic[0]['coverImage']!='')echo "<img src='".$prefix."/".$getProductsBasic[0]['coverImage']."' class='img-rounded img-responsive Picture-Preview' alt='Image' width='80%' height='210'>";} ?>
										</div>
									</div>
								</div>	
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="col-md-4 col-sm-3 hidden-2"></div>
									<div class="col-md-4 col-sm-3 hidden-2"></div>
									<div class="col-md-4 col-sm-6 hidden-8">
										<div class="form-group">
											<label for="inputPassword3" class="col-md-4 col-sm-4 col-xs-12 control-label"></label>
											<div class="col-md-6 col-sm-6 col-xs-12 ">
												<button class="btn btn-default btn-primary pull-right" id="colorsData-btn" type="submit"><i class="fa fa-floppy-o padding-right-8" ></i>Save</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
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
	<script>
		$(document).ready(function(){
		
		xu_validation.fileupload('<?php echo $prefix;?>/', '#image_upload', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
	});	 
	$("#colorsData-btn").click(function(){
		xu_validation.form_submit('#productColorData','save_colorsData');
	});
	function save_colorsData(){
		var vType='ColorsOne';
		var colorID=$("#colorID").val();
		
		$.ajax({
			url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+colorID,
			data: $('#productColorData').serialize(),
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
				setTimeout(function(){window.location="<?php echo $prefix;?>/admin/edit_product/<?php echo $getProductsColors[0]['variantID']?>";},1000);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location.reload();},1000);
			}
		});
	}
	</script>
</body>
</html>
