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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">

	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<style type="text/css">
		.form-group.required .control-label:after {
  content:"*";
  color:red;
}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-2">
			   <form class="form-horizontal">
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Brand</label>
								<div class="col-md-6">
								   <select class="form-control entity-type select2" id="all-brand" style="width:100%;">
									
								   </select>
								</div>
							  </div>
				</form>
			  </div>
			  <div class="col-md-6 col-md-offset-2">
			   <form class="form-horizontal">
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Vehicle</label>
								<div class="col-md-6">
								   <select class="form-control entity-type select2" id="all-vehicle" style="width:100%;">
									
								   </select>
								</div>
							  </div>
				</form>
			  </div>
			  
			  <div class="col-md-6 col-md-offset-2">
			   <form class="form-horizontal">
							  <div class="form-group required">
								<label for="inputEmail3" class="col-sm-4 col-xs-12 control-label col-md-6">Location</label>
								<div class="col-md-6">
								   <select class="form-control entity-type select2 " id="dealer-location" style="width:100%;">
									
								   </select>
								</div>
							  </div>
							    
				</form>
				<div class= "mt-29 col-md-offset-5">
					<a href="#" class="search-btn"  id="locate-a-dealer">Locate a Dealer </a>
				</div>
			  </div>
		</div>
		<div class="" style="" >
			<div class="" style="margin-top:45px;" id="delar-info-box">
				
			</div>
        </div>			  
	</div>
</div>	
<?php echo $footer; ?>
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js"></script>



<!-- Bootstrap -->

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
		$('document').ready(function(){
		 get_locate_dealer_manufacture();
		 get_locate_dealer_location();
		});
		$('#all-brand').on('change',function(){	
		    
	        var brand_id=$(this,'#all-brand').val();
				$.ajax({
					url:prefix+'/home/get_particular_vechile',
					type:'POST',
					processData: true,
					dataType:'JSON',
					data:{'brand_id':brand_id}
				}).done(function(data){
					
					var html ,i;
					var len=data.length;
					$('#all-vehicle').html('');
					html = "<option value=''>-- Select vechile--</option>";
					for(i=0;i<len;i++){
						html += "<option value='"+ data[i].productID +"' >"+data[i].productName+"</option>";
					}
					$('#all-vehicle').append(html);
				});
		});
		
		function get_locate_dealer_location(){
			$.ajax({
				url:prefix+'/home/get_location',
				type:'POST',
				processData: true,
				dataType:'JSON',
			}).done(function(data){
				var html ,i;
				var len=data.length;
				$('#dealer-location').html('');
				html = "<option value=''>-- Select vechile--</option>";
				for(i=0;i<len;i++){
					html += "<option value='"+ data[i].locationID +"' >"+data[i].location+"</option>";
				}
				$('#dealer-location').append(html);
			});
		}
	
	
		$('#locate-a-dealer').on('click',function(){
			
            var loc_id=$('#dealer-location').val();	
			$.ajax({
				url:prefix+'/home/locate_a_dealer',
				type:'POST',
				processData: true,
				dataType:'JSON',
				data:{'loc_id':loc_id}
			}).done(function(data){
				var html='';
				for(i=0;i<data.length;i++){
					html+='<div class="col-md-3 col-sm-4 col-xs-12 mb-10">'+
						'<div class="dealer-box bg-lightgrey style="margin-top: 41px;"">'+
						'<div class="dealer-name" id="dealers name">'+data[i].firstName+data[i].lastName+'</div>'+'<div class="dealer-address" id="dealers_address">'+data[i].addressLine1+'<br>'+data[i].addressLine2 +'<br>'+data[i].location+'<br>'+data[i].phone+'</div>'+'</div>'+'</div>';
				}
				$('#delar-info-box').html(html);
			});
		});
		
	</script>
</body>
</html>