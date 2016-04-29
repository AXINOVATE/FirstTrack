<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Nayagaadi</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
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
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h4>Add or Modify Showcase Products</h4>
					<hr>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
						<div class="panel-body">
							<form class="form-horizontal" name="showcase_data" role="form" method="POST" id="showcase_data" onsubmit="return false">
								<input type="hidden" id="showcaseID" value="<?php if(count($getShowcaseProducts)) echo $getShowcaseProducts[0]['showcaseID']?>">
								<?php
								for($i=0;$i<=3;$i++){	?>
								<div class="row">		
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<label for="showcaseTitle<?php echo ($i+1); ?>" class="col-sm-4 col-md-4 col-xs-12 control-label text-align-left">Showcase Title <?php echo ($i+1); ?></label>
											<div class="col-sm-8 col-xs-12 col-md-8 ">
											  <input type="text" class="form-control" id="showcaseTitle<?php echo ($i+1); ?>" name="showcaseTitle<?php echo ($i+1); ?>" va_req="true" placeholder="Showcase Title" value="<?php if(count($getShowcaseProducts)) echo $getShowcaseProducts[$i]['showcaseTitle']?>" maxlength="50" />
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-md-4 col-sm-4 col-xs-12 control-label">
												Picture <span class="form-man"> * </span>
											</label>
											<div class="col-md-6 col-sm-5 col-xs-9">
												<input type="hidden" name="cover_image<?php echo ($i+1); ?>" id="image_file_path<?php echo ($i+1); ?>" value="<?php if(count($getShowcaseProducts)) echo $getShowcaseProducts[$i]['showcaseImage']?>" va_req="true"/>
												<div id="progress<?php echo ($i+1); ?>" class="progress">
													<div id="image_progress<?php echo ($i+1); ?>" class="progress-bar progress-bar-success"></div>
												</div>
												<span>Picture size 1600 X 810 Pixels</span>
												<div id="image_file_msg<?php echo ($i+1); ?>" class="files">
													<?php if(count($getShowcaseProducts))echo "<img src='".$prefix."/".$getShowcaseProducts[$i]['showcaseImage']."' class='img-rounded img-responsive Picture-Preview' alt='Image' style='width: 150px; height: auto;' >"; ?>
												</div>
											</div>
											<div class="col-md-2 col-sm-3 col-xs-3">
												<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
													<!-- The file input field used as target for the file upload widget -->
													<input class="fileupload" id="color_upload<?php echo ($i+1); ?>" type="file" name="files" message="image_file_msg<?php echo ($i+1); ?>" pro_path="image_progress<?php echo ($i+1); ?>" save_path="image_file_path<?php echo ($i+1); ?>">
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<label for="showcaseDesc<?php echo ($i+1); ?>" class="col-sm-4 col-md-4 col-xs-12 control-label text-align-left">Showcase Desc <?php echo ($i+1); ?></label>
											<div class="col-sm-8 col-xs-12 col-md-8 ">
											  <textarea type="text" class="form-control" id="showcaseDesc<?php echo ($i+1); ?>" name="showcaseDesc<?php echo ($i+1); ?>" va_req="true" placeholder="Showcase Desc" rows="5"><?php if(count($getShowcaseProducts)) echo $getShowcaseProducts[$i]['showcaseDesc']?></textarea>
											</div>
										</div>
									</div>
								</div>
								<?php
								}
								?>
								
								<div class="row">
									<div class="col-md-9 col-sm-8 col-xs-3">&nbsp;</div>
									<div class="col-md-3 col-sm-4 col-xs-9">
										<button class="btn btn-default btn-success pull-left submit-btn" type="submit" id="publish-btn" style="background-color: #5cb85c !important;" data-type="showcaseDataP"><i class="fa fa-floppy-o padding-right-8"></i>Publish </button>
										<button class="btn btn-default btn-primary pull-right submit-btn" type="submit" id="add-btn" data-type="showcaseDataS"><i class="fa fa-floppy-o padding-right-8"></i>Save </button>
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

<script src="<?php echo $assetsPath; ?>/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo $assetsPath; ?>/plugin/file-upload/js/jquery.fileupload-validate.js"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
<script src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<!-- Bootstrap -->
	<script>
	$(document).ready(function(){
		xu_validation.fileupload('<?php echo $prefix;?>/', '#color_upload1', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
		xu_validation.fileupload('<?php echo $prefix;?>/', '#color_upload2', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
		xu_validation.fileupload('<?php echo $prefix;?>/', '#color_upload3', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
		xu_validation.fileupload('<?php echo $prefix;?>/', '#color_upload4', 'image', '<?php echo $prefix;?>/admin/upload_files/image',/(\.|\/)(<?php foreach($this->config->item('ext_img') as $img_type){echo $img_type.'|';} ?>~~)$/i);
	});	 
	$(".submit-btn").click(function(){
		xu_validation.form_submit('#showcase_data','save_showcaseData');
	});
	
	
	function save_showcaseData(){
		var vType=$('.submit-btn').attr('data-type');
		var showcaseID=$("#showcaseID").val();
		
		$.ajax({
			url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+showcaseID,
			data: $('#showcase_data').serialize(),
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
				setTimeout(function(){window.location="<?php echo $prefix;?>/admin/showcase_list";},1000);
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
