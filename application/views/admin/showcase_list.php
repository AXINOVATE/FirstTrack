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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
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
				<div class="col-md-9 col-sm-9 col-xs-8">
					<h4>List Showcase Products</h4>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-4">
					<a href="<?php echo $prefix.'/admin/add_showcase';?>"class="btn btn-default btn-primary pull-right" type="submit" id="add_manufacture"><i class="fa fa-plus padding-right-8"></i> Add  </a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<hr class="mt-10 mb-10">
				</div>
				
				<div class="col-md-12 col-sm-12 col-xs-12">
					<table class="table table-bordered picture-color-edit" id="listProducts">
						<thead>
							<th>Showcase Products</th>
							<th>Last Updated On</th>
							<th class="hidden-xs">Status</th>
							<th>Action</th>													
						</thead>
						<tbody>
							
							<?php 
							if(count($getShowcaseProducts)){
								foreach($getShowcaseProducts as $gsp){
									$date = date_create($gsp['createdOn']);
									$date = date_format($date,"jS \of M Y");
									$status = 'Saved';
									if($gsp['status']=='P'){
										$status = 'Active';
									}
									echo '
							<tr>
								<td>'.$gsp['showcaseTitle'].'</td>
								<td>'.$date.'</td>
								<td class="hidden-xs">'.$status.'</td>
								<td>
									<a href="'.$prefix.'/admin/add_showcase/'.$gsp['showcaseID'].'" class="font-size-16"><i class="fa fa-pencil-square-o picture-padding-right-10 font-size-16"></i><span class="hidden-xs padding-right-10 font-size-16">Edit</span></a> &nbsp &nbsp 
									<a href="javascript:void(0)" class="delete-box-color font-size-16 del-item" data-item="delShowcaseProducts" data-id="'.$gsp['showcaseID'].'"><i class="fa fa-trash-o picture-padding-right-10"></i><span class="hidden-xs">Delete</span></a>
								</td>
							</tr>
									';
								}
							}
							else{
								echo '<tr><td colspan="4">Showcasing products for the home page not yet added.</td></tr>';
							}	?>
							
						</tbody>
					</table>
				</div>
				
					
				
			</div>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<!-- Bootstrap -->
	<script>
	$(document).ready(function(){
		
	});	 
	$(".del-item").click(function(){
		var id = $(this).attr('data-id');
		var vType = $(this).attr('data-item');
		delete_ShowcaseProducts(id,vType);
	});
	function delete_ShowcaseProducts(id,vType){
		$('#listProducts').find('a').removeClass('del-btn');

		$.ajax({
			url:'<?php echo $prefix;?>/admin/insUpdProducts/'+vType+'/'+id,
			data: {},
			type:'POST',
			processData: true,
			dataType:'JSON'
		}).done(function(data){
			if(data.status == "Success"){	
				var vID = data.message;
				$.gritter.add({
					title: 'Deleted',
					text: 'Showcased Products Successfully',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location.reload();},1000);
			}
			else{
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
