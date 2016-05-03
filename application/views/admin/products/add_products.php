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
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
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
				<h4>Add Products</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<form class="form-horizontal" name="addproductform" role="form"  method="POST" id="addproductform" onsubmit="return false">
							<div class="row">
								<div class="col-md-6 col-sm-6 mb-20">
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-12 control-label">Manufacturer Name</label>
										<div class="col-md-8 col-sm-8 col-xs-12">
											<select class="form-control select2 mb-10" va_req="true" id="manufacturerName" name="manufacturerName">
												<option value="">Select Maker</option>
												<?php 
												if(isset($getMakers)){
													foreach($getMakers as $gm){
														echo '<option value="'.$gm['manufactureID'].'">'.$gm['manufactureName'].'</option>';
													}
												}	
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mb-20">
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-12 control-label">Category type</label>
										<div class="col-md-8 col-sm-8 col-xs-12">
											<select class="form-control select2 mb-10" va_req="true" id="categoryType" name="categoryType">
												<option value="">Select Category</option>
												<?php 
												if(isset($getCategory)){
													foreach($getCategory as $gc){
														echo '<option value="'.$gc['categoryID'].'">'.$gc['categoryName'].'</option>';
													}
												}	
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mb-20">
									<div class="form-group" id="title_cover_image">
										<label for="title" class="col-md-4 col-sm-4 col-xs-12 control-label">
											Upload File
										</label>
										<div class="col-md-6 col-sm-6 col-xs-9">
											<input type="hidden" name="file_path" id="file_path" value="" va_req="true"/>
											<div id="progress" class="progress">
												<div id="image_progress" class="progress-bar progress-bar-success"></div>
											</div>
											<div id="image_file_msg" class="files"></div>
										</div>
										<div class="col-md-2 col-sm-2 col-xs-3">													
											<span class="fa fa-folder-open img-thumnile-bg circle_icon fileinput-button file_upload_btn" target="">
												<input class="fileupload" id="image_upload" type="file" name="files" message="image_file_msg" pro_path="image_progress" save_path="file_path" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-11 mb-20">
									<button class="btn btn-default btn-primary pull-right" type="submit" id="submit_btn"><i class="fa fa-floppy-o padding-right-8"></i>Save </button>
								</div>
							</div>
						</form>
					</div>
				</div>
				
				<div class="">
					<div class="col-md-12" id="list_products">
						<?php
						if(count($getProducts)){
							echo '
						
						<table class="table table-bordered picture-color-edit">
							<thead>
								<th class="col-md-1 col-sm-1 hidden-xs">No.</th>
								<th class="col-md-2 col-sm-2 col-xs-4">Product Name</th>
								<th class="col-md-2 col-sm-2 hidden-xs">Manufacturer</th>
								<th class="col-md-2 col-sm-2 col-xs-3">Variant</th>
								<th class="col-md-2 col-sm-2 hidden-xs">Body Type</th>	
								<th class="col-md-3 col-sm-3 col-xs-5">Action</th>													
							</thead>
							<tbody align="center">';
							$i=1;
								foreach($getProducts as $gp){
								echo '
								<tr>
									<td class="col-md-1 col-sm-1 hidden-xs">'.$i.'</td>
									<td class="col-md-2 col-sm-2 col-xs-4">'.$gp['productName'].'</td>
									<td class="col-md-2 col-sm-2 hidden-xs">'.$gp['manufactureName'].'</td>
									<td class="col-md-2 col-sm-2 col-xs-3">'.$gp['variantName'].'</td> 
									<td class="col-md-2 col-sm-2 hidden-xs">'.$gp['body_type'].'</td>
									<td class="col-md-4 col-sm-4 col-xs-5">
										<a href="javascript:void(0)" class="font-size-16 copy-btn" data-id="'.$gp['variantID'].'"><i class="fa fa-files-o picture-padding-right-5 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Copy</span></a>
										&nbsp &nbsp 
										<a href="'.$prefix.'/admin/edit_product/'.$gp['variantID'].'" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-5 font-size-16">Edit</span></a>
										&nbsp &nbsp 
										<a href="javascript:void(0)" class="delete-box-color font-size-16 del-btn" data-id="'.$gp['variantID'].'"><i class="fa fa-trash-o picture-padding-right-5"></i><span class="hidden-xs">Delete</span></a>
									</td>
								</tr>';
									$i++;
								}
								echo '
							</tbody>
						</table>';
						}
						?>
					</div>
					
				</div>
				
			</div>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
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
	<script>
		$('document').ready(function(){
			$('.select2').select2({
                placeholder: "Select",
                allowClear: true
            });
			xu_validation.fileupload('<?php echo $prefix;?>/', '#image_upload', 'document', '<?php echo $prefix;?>/admin/upload_files/document',/(\.|\/)(<?php foreach($this->config->item('ext_document') as $img_type){echo $img_type.'|';} ?>~~)$/i);
		});
		$('#submit_btn').on('click',function(){
			xu_validation.form_submit('#addproductform','add_product');
		});
		function add_product(){
			$('#submit_btn').attr('disabled', 'disabled');
			//$('#report').html("<center>Loading ...</center>");
			
			$.ajax({
				url:'<?php echo $prefix;?>/admin/upload_products_list/',
				type:'POST',
				data: $('#addproductform').serialize(),
				dataType:'JSON'
			}).done(function(data){
				if(data.status == "Success"){
					$('.disable_div').remove();$.gritter.add({
						title: 'Success ',
						text: 'Products added successfully',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/add_products";},2000);
				}
				else{
					$.gritter.add({
						title: 'Failed',
						text: 'Check the excel sheet data again!',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
				}
			});
		}
		$('.copy-btn').on('click',function(){
			var variantID = $(this).attr('data-id');
			var vType = 'copyProduct';
			copy_productDetails(variantID,vType);
		});
		$('.del-btn').on('click',function(){
			var variantID = $(this).attr('data-id');
			var vType = 'delProduct';
			copy_productDetails(variantID,vType);
		});
		function copy_productDetails(variantID,vType){
			$('#list_products').find('a').removeClass('copy-btn');
			$('#list_products').find('a').removeClass('del-btn');
			$('#list_products').find('a').attr('href','javascript:void(0)');
			
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+variantID,
				data: {},
				type:'POST',
				processData: true,
				dataType:'JSON'
			}).done(function(data){
				if(data.status == "Success"){	
					var vID = data.message;
					$.gritter.add({
						title: 'Successfully',
						text: 'Copied Product Details',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location="<?php echo $prefix;?>/admin/edit_product/"+vID;},1000);
				}
				else if(data.status == "Deleted"){
					$.gritter.add({
						title: 'Removed',
						text: 'Product Details Successfully',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					setTimeout(function(){window.location.reload();},1000);
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
