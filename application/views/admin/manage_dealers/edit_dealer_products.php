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
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.variants tbody{background-color:#F1F1F1;}
		.variants thead{ color: #fff; background-color: #027CD5;}
		.variants input{ width:100px;padding:0px 2px;}
		.variants .vColor div, .variants .vBoard div{ display:inline-block;width:20px;height:20px;}
	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<h4 class="Dealers-and-Products">Add Dealer Products - <?php if(isset($details->firstName)){echo $details->firstName.' '.$details->lastName; }?></h4>
			<hr>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 mb-10">
					<label>Category</label>
					<select class="form-control select2" style="width:100%;" name="category" id="category" disabled>
						<option value="<?php if(isset($details->productCategory)){echo $details->productCategory; }?>" selected ><?php if(isset($details->categoryName)){echo $details->categoryName; }?></option>
					</select>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-10">
					<label>Manufacture</label>
					<select class="form-control select2" style="width:100%;" name="maker" id="manufacture" disabled>
						<option value="<?php if(isset($details->manufacture)){ echo $details->manufacture; }?>" selected><?php if(isset($details->manufactureName)){ echo $details->manufactureName; }?></option>
						<?php /* foreach($manufactures as $m){ ?>
						<option value="<?php echo $m['manufactureID'];?>"><?php echo $m['manufactureName'];?></option>
						<?php } */ ?>
					</select>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-10">
					<label>Products</label>
					<select class="form-control select2" style="width:100%;" id="product" disabled>
						<option value="<?php echo $data[0]->productID; ?>" selected><?php echo $data[0]->productName; ?></option>
					</select>
				</div>
			</div>
			<div class="row">
				
				<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
					<table class="table table-bordered variants">
						<thead>
							<tr>
								<th>Variant</th>
								<th>Boards</th>
								<th>Color</th>
								<th>Qty</th>
								<th>Ex – Showroom Price </th>
								<th>Insurance</th>
								<th>RTO</th>
								<th>Road Tax </th>
								<th>Handling Charges & Others</th>
								<th>On Road Price</th>
								<th>Waiting Period (days)</th>
								
							</tr>
						</thead>
						<tbody id="variants">
						<?php	
						$divColor = '#ffffff'; $k=0;
						foreach($data as $d){
							if($d->boards=='Yellow-board'){
								$divColor = '#FFD400';
							}
							echo 
							'<tr class="'.$d->boards.'-row">
								<td class="vVariant" data-id="'.$d->variantID.'">'.$d->variantName.'</td>
								<td class="vBoard" data-id="'.$d->boards.'"><div style="background-color:'.$divColor.';"></div></td>
								<td class="vColor text-center" data-id="'.$d->colorID.'"><div style="background-color:'.$d->colorCode.';"></div></td>
								<td><input type="text" class="vqty" value="'.$d->quantity.'"></td>
								<td><input type="text" class="vExShowroomPrie" value="'.$d->exShowroomPrice.'" disabled></td>
								<td><input type="text" class="vInsurance" value="'.$d->insurance.'"></td>
								<td><input type="text" class="vRTO" value="'.$d->RTO.'"></td>
								<td><input type="text" class="vRoadTax" value="'.$d->roadTax.'"></td>
								<td><input type="text" class="vHandlingCharges" value="'.$d->handlingOtherCharges.'"></td>
								<td><input type="text" class="vOnRoadPrice" value="'.$d->onRoadPrice.'"></td>
								<td><input type="text" class="vWaitingDays" value="'.$d->waitingPeriodDays.'"></td>
							</tr>';
						}
						?>
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
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js"></script>
<!-- Bootstrap -->

	<script>
		$('document').ready(function(){
			 $('.select2').select2({
                placeholder: "Select",
                allowClear: true
            });
		});
		
		$('body').on('keyup', '#variants input', function() {
			$("#variants tr").each(function(){
				var obj= $(this);
				$(".vOnRoadPrice", obj).val(parseFloat(parseFloat($(".vExShowroomPrie", obj).val())+parseFloat($(".vInsurance", obj).val())+parseFloat($(".vRTO", obj).val())+parseFloat($(".vRoadTax", obj).val())+parseFloat($(".vHandlingCharges", obj).val())));
			}); 
		});
		$('#save').on('click',function(){
			var product = $('#product').val();
			var yelBoard = $('.vBoard').attr('data-id');
			var userID = "<?php echo $userID;?>";
			var contents = [];var i=0;var error=0;;
			$("input","#variants").css({"border": "1px solid grey"});
			$("input","#variants").each(function(){
				if($(this).val() == "" || $(this).val() == 0){
					$(this).css({"border": "2px solid red"});
					error++;
				}
			});
			if(error == 0 && product !="" && userID != ""){
				$("#variants tr").each(function(){
					var data = [];var obj= $(this);
					data[0] = $(".vVariant", obj).data('id');
					data[1] = $(".vBoard", obj).data('id');
					data[2] = $(".vColor", obj).data('id');
					data[3] = parseInt($(".vqty", obj).val());
					data[4] = parseFloat($(".vExShowroomPrie", obj).val());
					data[5] = parseFloat($(".vInsurance", obj).val());
					data[6] = parseFloat($(".vRTO", obj).val());
					data[7] = parseFloat($(".vRoadTax", obj).val());
					data[8] = parseFloat($(".vHandlingCharges", obj).val());
					data[9] = parseFloat($(".vOnRoadPrice", obj).val());
					data[10] = parseInt($(".vWaitingDays", obj).val());
					contents[i++] = data;
				});
				$("#save").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
				$("#save").attr('disabled','disabled');
				$.ajax({
					url:'<?php echo $prefix;?>/home/adding_dealer_products',
					type:'POST',
					data:{'productID':product,'userID':userID,'data':contents,'yelBoard':yelBoard},
					dataType:'JSON'
				}).success(function(data){
					window.location = '<?php echo $prefix;?>/dealer_products/'+userID;
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