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
				<h4>Products Category</h4>
				<hr>
				<div class="panel panel-default Locations-panel" style="border-radius: 0px;border:1px solid #f2f2f2;">
					<div class="panel-body">
						<form class="form-horizontal" name="addProductCategoryform" role="form"  method="POST" id="addProductCategoryform" onsubmit="return false">
							<input type="hidden" id="productCategoryID" name="productCategoryID" value="<?php if(count($edit_productsCategoryDetails)>0){ echo $edit_productsCategoryDetails[0]['productCategoryDetailID']; } ?>">
							<div class="row">
								<div class="col-md-6 col-sm-6 mb-20">
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-12 control-label">Manufacturer Name</label>
										<div class="col-md-8 col-sm-8 col-xs-12">
										   <select class="form-control select2 mb-10" va_req="true" id="manufacturerName" name="manufacturerName">
												<option value="">Select Maker</option>
												<?php 
													$manufactureID='';
													$productID='';
													$variantID='';
													$trendTypeID='';
													$ch=0;
													if(count($edit_productsCategoryDetails)>0){
														$ch=1;
														$manufactureID=$edit_productsCategoryDetails[0]['manufactureID'];
														
														$trendTypeID=$edit_productsCategoryDetails[0]['trendTypeID'];
													}
												if(isset($getMakers)){
													foreach($getMakers as $gm){
														if($manufactureID==$gm['manufactureID']){
															echo '<option value="'.$gm['manufactureID'].'" selected>'.$gm['manufactureName'].'</option>';
														}else{
															echo '<option value="'.$gm['manufactureID'].'">'.$gm['manufactureName'].'</option>';
														}
														
													}
												}	
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mb-20">
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-12 control-label">Product Name</label>
										<div class="col-md-8 col-sm-8 col-xs-12">
										   <select class="form-control select2 mb-10" va_req="true" id="select_product" name="select_product">
												<option value="">Select Product</option>
												<?php 
													if(count($edit_productsCategoryDetails)>0){
														$productID=$edit_productsCategoryDetails[0]['productID'];
														echo  $productID;
														foreach($productList as $PL){
															
															if($productID==$PL['productID']){
																echo "<option value='".$PL['productID']."' selected>".$PL['productName']."</option>";
															}else{
																echo "<option value='".$PL['productID']."'>".$PL['productName']."</option>";
															}
														}
													}
													
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mb-20">
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-12 control-label">Variant Name</label>
										<div class="col-md-8 col-sm-8 col-xs-12">
										   <select class="form-control select2 mb-10" va_req="true" id="select_variant" name="select_variant">
												<option value="">Select Variant</option>
												<?php 
													if(count($edit_productsCategoryDetails)>0){
														$variantID=$edit_productsCategoryDetails[0]['variantID'];
														foreach($variantList as $VL){
															if($variantID==$VL['variantID']){
																echo "<option value='".$VL['variantID']."' selected>".$VL['variantName']."</option>";
															}else{
																echo "<option value='".$VL['variantID']."'>".$VL['variantName']."</option>";
															}
														}
													}
													
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mb-20">
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 col-sm-4 col-xs-12 control-label">Trend Type</label>
										<div class="col-md-8 col-sm-8 col-xs-12">
										   <select class="form-control select2 mb-10" va_req="true" id="trendTypeID" name="trendTypeID">
												<option value="">Select Trend Type</option>
												<?php 
												if(isset($getTrendType)){
													foreach($getTrendType as $TT){
														if($trendTypeID==$TT['trendsTypeID']){
															echo '<option value="'.$TT['trendsTypeID'].'" selected>'.$TT['trendsTypeName'].'</option>';
														}else{
															echo '<option value="'.$TT['trendsTypeID'].'">'.$TT['trendsTypeName'].'</option>';
														}
														
													}
												}	
												?>
											</select>
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
				<div class="col-md-12">
					<table class="table table-bordered picture-color-edit">
						<thead>
							<th class="col-md-2">Manufacture Name</th>
							<th class="col-md-2">Product Name</th>
							<th class="col-md-2">Variant Name</th>
                            <th class="col-md-2">Trends Type</th>	
							<th class="col-md-4">Action</th>													
						</thead>
						<tbody align="center">
							<?php 
								foreach($productsCategoryDetails as $PCD){ ?>
									<tr>
										<td><?php echo $PCD['manufactureName']; ?></td>
										<td><?php echo $PCD['productName']; ?></td>
										<td><?php echo $PCD['variantName']; ?></td>
										<td><?php echo $PCD['trendsTypeName']; ?></td>
										<td><a href="<?php echo $prefix;?>/admin/add_products_category/<?php echo $PCD['productCategoryDetailID'];?>" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-5 font-size-16">Edit</span></a>&nbsp &nbsp <a href="javascript:void(0);" class="delete-box-color font-size-16 delete-pcd" data-td="<?php echo $PCD['productCategoryDetailID'];?>"><i class="fa fa-trash-o picture-padding-right-5"></i><span class="hidden-xs">Delete</span></a></td>
									</tr>
							<?php }
							?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
	<script>
		$('document').ready(function(){
			$('.select2').select2({
                placeholder: "Select",
                allowClear: true
            });
			var ch='<?php echo $ch;?>';
		});
		$('#submit_btn').on('click',function(){
			xu_validation.form_submit('#addProductCategoryform','add_product_category');
		});
		
		$("#manufacturerName").on("change",function(){
			var mID=$(this).val();
			$.ajax({
				url:'<?php echo $prefix;?>/admin/getProductList/BM/'+mID,
				type:'POST',
				dataType:'JSON'
			}).done(function(data){
				var len=data.length;
				var html = "<option value=''>Select Product</option>";
				for(var i=0;i<len;i++){
					html += "<option value='"+data[i]['productID']+"'>"+data[i]['productName']+"</option>";
				}
					$("#select_product").html(html);
			});
		});
		$("#select_product").on("change",function(){
			var pID=$(this).val();
			$.ajax({
				url:'<?php echo $prefix;?>/admin/getVariantList/BP/'+pID,
				type:'POST',
				dataType:'JSON'
			}).done(function(data){
				var len=data.length;
				var html = "<option value=''>Select Variant</option>";
				for(var i=0;i<len;i++){
					html += "<option value='"+data[i]['variantID']+"'>"+data[i]['variantName']+"</option>";
				}
					$("#select_variant").html(html);
			});
		});
		function add_product_category(){
				var productCategoryID=$("#productCategoryID").val();
				var manufacturerName=$("#manufacturerName").val();
				var select_product=$("#select_product").val();
				var select_variant=$("#select_variant").val();
				var trendTypeID=$("#trendTypeID").val();
				var vType='';
				if(productCategoryID==''){
					vType='INSERT';
				}else{
					vType='EDIT';
				}
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProductCategoryDetails/',
				type:'POST',
				dataType:'JSON',
				data:{'vType':vType,'productCategoryID':productCategoryID,'manufacturerName':manufacturerName,'select_product':select_product,'select_variant':select_variant,'trendTypeID':trendTypeID}
			}).done(function(data){
				if(data.status == "Success"){	
					$.gritter.add({
						title: 'Success',
						text: 'Saved Successfully',
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
		$(".delete-pcd").click(function(){
			var productCategoryID=$(this).data('td');
			var vType='DELETE';
			$.ajax({
				url:'<?php echo $prefix;?>/admin/insUpdProductCategoryDetails/',
				type:'POST',
				dataType:'JSON',
				data:{'vType':vType,'productCategoryID':productCategoryID,'manufacturerName':'','select_product':'','select_variant':'','trendTypeID':''}
			}).done(function(data){
				if(data.status == "Success"){	
					$.gritter.add({
						title: 'Success',
						text: 'Saved Successfully',
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
