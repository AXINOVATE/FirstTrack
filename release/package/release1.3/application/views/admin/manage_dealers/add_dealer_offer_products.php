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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.variants tbody{background-color:#F1F1F1;}
		.variants thead{ color: #fff; background-color: #027CD5;}
		.variants input{ width:100px;padding:0px 2px;}
		.variants .vColor div, .variants .vBoard div{ display:inline-block;width:20px;height:20px;}
		textarea{width:100%;}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<h4 class="Dealers-and-Products">Add Dealer Products Offer- <?php if(isset($details->firstName)){echo $details->firstName.' '.$details->lastName; }?></h4>
			<hr>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 mb-10">
					<label>Category</label>
					<select class="form-control select2" style="width:100%;" name="category" id="category">
						<option value=""></option>
						<option value="<?php if(isset($details->productCategory)){echo $details->productCategory; }?>"><?php if(isset($details->categoryName)){echo $details->categoryName; }?></option>
						<?php /*foreach($categories as $ca){ ?>
						<option value="<?php echo $ca['categoryID'];?>"><?php echo $ca['categoryName'];?></option>
						<?php } */ ?>
					</select>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-10">
					<label>Manufacture</label>
					<select class="form-control select2" style="width:100%;" name="maker" id="manufacture">
						<option value=""></option>
						<option value="<?php if(isset($details->manufacture)){ echo $details->manufacture; }?>"><?php if(isset($details->manufactureName)){ echo $details->manufactureName; }?></option>
						<?php /* foreach($manufactures as $m){ ?>
						<option value="<?php echo $m['manufactureID'];?>"><?php echo $m['manufactureName'];?></option>
						<?php } */ ?>
					</select>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-10">
					<label>Products</label>
					<select class="form-control select2" style="width:100%;" id="product">
						<option value=""></option>
					</select>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12 mt-10 mb-10 text-center">
					<button class="btn btn-primary" id="getProducts" style="width:40%;border-radius:0px;">Get Products</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 mb-10" style="text-align: right;" id="whiteBoard-btn" data-yel="">
					
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
					<table class="table table-bordered variants">
						<thead>
							<tr>
								<th>Variant</th>
								<th>Board</th>
								<th>Color</th>
								<th>Offer1</th>
								<th>Offer2</th>
							</tr>
						</thead>
						<tbody id="variants">
							
						</tbody>
					</table>
					<button class="btn btn-primary pull-right" id="save" style="width:150px;border-radius:0px;"> Save </button>
				</div>
			</div>
		</section>
	</div>
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<!-- Bootstrap -->

	<script>
		$('document').ready(function(){
			 $('.select2').select2({
                placeholder: "Select",
                allowClear: true
            });
		});
		$('#manufacture,#category').on('change',function(){
			var category = $('#category').val();
			var manufacture = $('#manufacture').val();
			if(category != "" && manufacture != ""){
				$.ajax({
					url:'<?php echo $prefix;?>/home/getProducts/PLIST',
					type:'POST',
					data:{'category':category,'manufacture':manufacture},
					dataType:'JSON'
				}).success(function(data){
					var html = '<option value=""></option>';
					for(var i=0;i<data.length;i++){
						html+='<option value="'+data[i]['productID']+'">'+data[i]['productName']+'</option>';
					}
					$("#product").html(html);
				});
			}
		});
		$('#getProducts').on('click',function(){
			var product = $('#product').val();
			var userID = '<?php echo $userID; ?>';
			if(product != ""){
				$.ajax({
					url:'<?php echo $prefix;?>/home/getProducts/OFFERS',
					type:'POST',
					data:{'productID':product,'userID':userID},
					dataType:'JSON'
				}).success(function(data){
					var html = ''; var divColor = '#ffffff'; var k=0;
					for(var i=0;i<data.length;i++){
						if(data[i]['boards']=='Yellow-board'){
							divColor = '#FFD400';
							k++;
						}
						html+='<tr class="'+data[i]['boards']+'-row">'+
							'<td class="vVariant" data-id="'+data[i]['variantID']+'">'+data[i]['variantName']+'</td>'+
							'<td class="vBoard" data-id="'+data[i]['boards']+'"><div style="background-color:'+divColor+';"></div></td>'+
							'<td class="vColor text-center" data-id="'+data[i]['colorID']+'"><div style="background-color:'+data[i]['colorCode']+';"></div></td>'+
							'<td><textarea class="vOffer1">'+data[i]['offer1']+'</textarea></td>'+
							'<td><textarea class="vOffer2">'+data[i]['offer2']+'</textarea></td>'+
						'</tr>';
					}
					$("#variants").html(html);
					if(k==0){
						$("#whiteBoard-btn").html('<a href="javascript:void(0)" id="yellowBoard">Need Yellow-board?</a>');
					}
					else{
						$("#whiteBoard-btn").html('<a href="javascript:void(0)" id="remYellowBoard">Remove Yellow-board?</a>');
					}
				});
			}
		});
		$(document).on("click","#yellowBoard",function(){
			$("#whiteBoard-btn").attr('data-yel','Yes');
			$('#yellowBoard').parent().html('<a href="javascript:void(0)" id="remYellowBoard">Remove Yellow-board?</a>');
			var clonedItem = $('tbody>tr').clone();
			clonedItem.find('.vBoard').attr("data-id", "Yellow-board");
			clonedItem.find('.vBoard').parent().attr("class", "Yellow-board-row");
			clonedItem.find('.vBoard>div').css("background-color", "#FFD400");
			clonedItem.appendTo("#variants");
		});
		$(document).on("click","#remYellowBoard",function(){
			$("#whiteBoard-btn").attr('data-yel','No');
			$('#remYellowBoard').parent().html('<a href="javascript:void(0)" id="yellowBoard">Need Yellow-board?</a>');
			$('#variants').find('.Yellow-board-row').remove();
		});
		$('#save').on('click',function(){
			var product = $('#product').val();
			var yelBoard = $('#whiteBoard-btn').attr('data-yel');
			var userID = "<?php echo $userID;?>";
			var contents = [];var i=0;var error=0;;
			$("textarea","#variants").css({"border": "1px solid grey"});
		/*	$("textarea","#variants").each(function(){
				if($(this).val() == ""){
					$(this).css({"border": "2px solid red"});
					error++;
				}
			});	*/
			if(error == 0 && product !="" && userID != ""){
				$("#variants tr").each(function(){
					var data = [];var obj= $(this);
					data[0] = $(".vVariant", obj).data('id');
					data[1] = $(".vBoard", obj).data('id');
					data[2] = $(".vColor", obj).data('id');
					data[3] = $(".vOffer1", obj).val();
					data[4] = $(".vOffer2", obj).val();
					contents[i++] = data;
				});
				
				$.ajax({
					url:'<?php echo $prefix;?>/home/adding_dealer_products_offer',
					type:'POST',
					data:{'productID':product,'userID':userID,'data':contents,'yelBoard':yelBoard},
					dataType:'JSON'
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