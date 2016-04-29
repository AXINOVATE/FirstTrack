<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
function convertNum($n) {
	// first strip any formatting;
	$n = (0+str_replace(",","",$n));
	
	// is this a number?
	if(!is_numeric($n)) return false;
	
	// now filter it;
	if($n>10000000) return round(($n/10000000),2).' Cr';
	else if($n>100000) return round(($n/100000),2).' L';
	else if($n>1000) return round(($n/1000),2).' Thousands';
	
	return number_format($n);
}
$bodyTypeID = "";
$catID = "";
if($pageName=='Bodytype'){
	$bodyTypeID = $typeID;
	$catID=$categoryID;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/bootstrap-slider.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		
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
				<div class="col-md-12">
					<h3 class="mt-0 mb-20" id="fullPageName"><?php echo $fullPageName; ?></h3>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">						
							SELECT CATEGORY <i class="fa fa-minus minimize-all" id="minimize-category"></i>
							<input type="hidden" id="bodyTypeID" name="bodyTypeID" value="<?php echo $bodyTypeID; ?>"/>
							<input type="hidden" id="trendTypeID" name="trendTypeID" value="<?php echo $trendsTypeID; ?>"/>
							<input type="hidden" id="orderBy" name="orderBy" value=""/>
						</div>
						<center id="select-category">
							<select class="form-control select2" id="search_category" style="width:95%;">
								<option value='ALL' selected data-name="ALL">ALL</option>
								<?php 
									foreach($categoryDetails as $CD){
										echo "<option value='".$CD['categoryID']."' data-name='".$CD['categoryName']."'";
										if($pageName=='Category'){
											if($typeID==$CD['categoryID']){
												echo "selected";
											}
										}else if($pageName=='Bodytype'){
											if($catID==$CD['categoryID']){
												echo "selected";
											}
										} 
										echo ">".$CD['categoryName']."</option>";
									}
								?>
							</select>
						</center>
					</div>
					<div class="filter-price">
						<div class="filter-heading">
							PRICE RANGE <i class="fa fa-minus"id="minimize-price" ></i>
						</div>
						<div class="slider-example"id="slider-example">
							<input id="ex1" type="text" class="span2" data-slider-min="<?php echo $categories[0]['Minsum']; ?>" data-slider-max="<?php echo $categories[0]['Maxsum']; ?>" data-slider-step="5" data-slider-value="[<?php echo $categories[0]['Minsum'].','.$categories[0]['Maxsum']; ?>]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT MANUFACTURERS <i class="fa fa-minus" id="minimize-manufacture"></i>
						</div>
						<center id="select-manufacture">
							<select class="form-control select2" id="search_manufacture" style="width:95%;">
								<option value='ALL' selected>ALL</option>
								<?php 
									foreach($manufactureDetails as $MD){
										echo "<option value='".$MD['manufactureID']."'>".$MD['manufactureName']."</option>";
									}
								?>
							</select>
						</center>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT FUEL TYPE <i class="fa fa-minus" id="minimize-fuel"></i>
						</div>
						<center id="select-fuel">
							<select class="form-control select2" id="search_fuelType" style="width:95%;">
								<option value="ALL">ALL</option>
								<option value="Petrol">Petrol</option>
								<option value="Diesel" >Diesel</option>
								<option value="LPG" >LPG</option>
								<option value="CNG" >CNG</option>
								<option value="Electric Power" >Electric Power</option>
							</select>
						</center>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SELECT TRANSMISSION <i class="fa fa-minus" id="minimize-transmission"></i>
						</div>
						<div id="select-transmission">
						<div class="checkbox" id="">
						  <label><input type="checkbox" name="transmission[]"  class="transmission" value="Manual">Manual</label>
						</div>
						<div class="checkbox" id="">
						  <label><input type="checkbox" name="transmission[]"  class="transmission" value="Automatic">Automatic</label>
						</div>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							MILEAGE <i class="fa fa-minus" id="minimize-milage"></i>
						</div>
						<div class="slider-example" id="slider-milage">
							<input id="ex2" type="text" class="span2" data-slider-min="<?php echo $categories[0]['minMileage']; ?>" data-slider-max="<?php echo $categories[0]['maxMileage']; ?>" data-slider-step="1" data-slider-value="[<?php echo $categories[0]['minMileage'].','.$categories[0]['maxMileage']; ?>]"/>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							SEATING CAPACITY <i class="fa fa-minus" id="minimize-seating-capacity"></i>
						</div>
						<div class="seating-capacity">
							<div class="checkbox">
							  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="1">1</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="2">2</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="3">3</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="4">4</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="5">5</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" name="seatCapacity[]" class="seatCapacity" value="6">6 or more</label>
							</div>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							ENGINE CAPACITY <i class="fa fa-minus" id="minimize-engine-capacity"></i>
						</div>
						<div class="slider-example" id="engine-slider">
							<input id="ex3" type="text" class="span2" data-slider-min="<?php echo $categories[0]['minDisplacement']; ?>" data-slider-max="<?php echo $categories[0]['maxDisplacement']; ?>" data-slider-step="10" data-slider-value="[<?php echo $categories[0]['minDisplacement']; ?>,<?php echo $categories[0]['maxDisplacement']; ?>]"/>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							MANUFACTURING YEAR <i class="fa fa-minus" id="manufacture-year"></i>
						</div>
						<div class="slider-example"id="slider-manufacture-year">
							<input id="ex4" type="text" class="span2" data-slider-min="1999" data-slider-max="2016" data-slider-step="1" data-slider-value="[1999,2016]"/>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							WAITING PERIOD <i class="fa fa-minus" id="minimize-wating-period"></i>
						</div>
						<div class="slider-example"id="slider-wating">
							<input id="ex5" type="text" class="span2" data-slider-min="<?php echo $categories[0]['minWaitingPeriod']; ?>" data-slider-max="<?php echo $categories[0]['maxWaitingPeriod']; ?>" data-slider-step="1" data-slider-value="[<?php echo $categories[0]['minWaitingPeriod']; ?>,<?php echo $categories[0]['maxWaitingPeriod']; ?>]"/>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading mb-10">
							DEALER NAME <i class="fa fa-minus"id="minimize-dealer-name"></i>
						</div>
						<div id="dealerDetailsCheck">
						<?php 
							foreach($dealerDetails as $DD){
								?>
								<div class="checkbox">
								  <label><input type="checkbox" name="dealerID" class="dealerID" value="<?php echo $DD->userID; ?>"><?php echo $DD->firstName.' '.$DD->lastName; ?></label>
								</div>
							<?php
							}
						?>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							EMISSION STANDARD <i class="fa fa-minus"id="minimize-emission-standard"></i>
						</div>
						<div id="emission-standard">
							<div class="checkbox">
							  <label><input type="checkbox" class="emissionStandard" value="BS-I">BS I</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" class="emissionStandard" value="BS-II">BS II</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" class="emissionStandard" value="BS-III">BS III</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" class="emissionStandard" value="BS-IV">BS IV</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" class="emissionStandard" value="BS-V">BS V</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" class="emissionStandard" value="BS-VI">BS VI</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" class="emissionStandard" value="BS-VII">BS VII</label>
							</div>
						</div>
					</div>
					<div class="filter-manufacture">
						<div class="filter-heading mb-10">
							POWER STEERING <i class="fa fa-minus"id="minimize-power-stearing"></i>
						</div>
						<div id="power-stearing">
						<div class="checkbox">
						  <label><input type="checkbox" class="power_streering" name="power_streering[]" value="Yes">Yes</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" class="power_streering" name="power_streering[]" value="No">No</label>
						</div>
						</div>
					</div>
					<div class="filter-mileage">
						<div class="filter-heading">
							POWER<i class="fa fa-minus" id="minimize-power"></i>
						</div>
						<div class="slider-example" id="slider-power">
							<input id="ex6" type="text" class="span2" data-slider-min="<?php echo $categories[0]['minPower']; ?>" data-slider-max="<?php echo $categories[0]['maxPower']; ?>" data-slider-step="5" data-slider-value="[<?php echo $categories[0]['minPower']; ?>,<?php echo $categories[0]['maxPower']; ?>]"/>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-9 pl-0">
					<div class="sort-by">
						<span id="showing">Loading....</span>
						<ul class="pull-right">
							<li>Sort By</li>
							<li id='orderByPrice'><a href='javascript:void(0);'> Price</a></li>
							<?php 
							if($pageName=='Bodytype' || $pageName == 'Category'){	
								foreach($getTType as $gT){
									echo "<li data-id=".$gT['trendsTypeID']." class='trType'><a href='javascript:void(0);'> ".$gT['trendsTypeName']."</a></li>";
									
								}
								}	?>
							
						</ul>
					</div>
					
					<div id="table_data">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body content ends here -->	
	<!-- Footer start -->
	<?php echo $footer; ?>
	<!-- Footer end -->
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.typeahead.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-slider.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2({
			placeholder: "Select",
			allowClear: true
		});
		$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
		$('.inpt-timepicker').timepicker();	
		getData();
		$("#ex1").slider({tooltip: 'always'});
		$("#ex2").slider({tooltip: 'always'});
		$("#ex3").slider({tooltip: 'always'});
		$("#ex4").slider({tooltip: 'always'});
		$("#ex5").slider({tooltip: 'always'});
		$("#ex6").slider({tooltip: 'always'});

		if($('#bodyTypeID').val() !=''){
			//$("#search_category").trigger('change');
			var id=$("#search_category").val();
			if(id=='ALL'){
				id='';
			}
			get_manufacture1('search_manufacture',id);
			get_dealerName1('dealerDetailsCheck',id);
		}

	});		
	$("#ex1").change(function(){
		getData();
	});
	$("#ex2").change(function(){
		getData();
	});
	$("#ex3").change(function(){
		getData();
	});
	$("#ex5").change(function(){
		getData();
	});
	$("#ex6").change(function(){
		getData();
	});
	
		
        
    
	
	$("#search_category").on('change',function(){
		$('#bodyTypeID').val('');
		var pageNames='<?php echo $pageName; ?>';
		if(pageNames=='Bodytype' || pageNames == 'Category'){
			var fpageName=$(this).find(':selected').data('name');
			$("#fullPageName").text(fpageName);
			var id=$(this).val();
			if(id=='ALL'){
				id='';
			}
			get_manufacture1('search_manufacture',id);
			get_dealerName1('dealerDetailsCheck',id);
		}
		getData();
	});
	$("#search_manufacture").on('change',function(){
		getData();
	});
	$("#search_fuelType").on('change',function(){
		getData();
	});
	$(".power_streering").click(function(){
		getData();
	});
	$(".transmission").click(function(){
		getData();
	});
	$(".seatCapacity").click(function(){
		getData();
	});
	$(".dealerID").click(function(){
		getData();
	});
	$(".trType").click(function(){
		if($("#trendTypeID").val()==''){
			$("#trendTypeID").val($(this).data("id"));
		}else{
			$("#trendTypeID").val('');
		}
		getData();
	});
	$("#orderByPrice").click(function(){
		var pr=$("#orderBy").val();
		if(pr=='No'){
			$("#orderBy").val('Price');
		}else{
			$("#orderBy").val('No');
		}
		getData();
	});
	$(".emissionStandard").click(function(){
		getData();
	});
	function convertNum(n) {
		// first strip any formatting;
		//n = (0+str_replace(",","",n));
		
		// is this a number?
		if(isNaN(n)) return false;
		
		// now filter it;
		if(n>10000000) return (n/10000000).toFixed(2)+' Cr';
		else if(n>100000) return (n/100000).toFixed(2)+' L';
		else if(n>1000) return (n/1000).toFixed(2)+' Thousands';
		
		return n;
	}
	function getData(){
		var bodyTypeID = $("#bodyTypeID").val();
		var power_streering = $('input:checkbox:checked.power_streering').map(function(){return this.value; }).get().join(",");
		var transmission = $('input:checkbox:checked.transmission').map(function(){return this.value; }).get().join(",");
		var seatCapacity = $('input:checkbox:checked.seatCapacity').map(function(){return this.value; }).get().join(",");
		var dealerID = $('input:checkbox:checked.dealerID').map(function(){return this.value; }).get().join(",");
		var emissionStandard = $('input:checkbox:checked.emissionStandard').map(function(){return this.value; }).get().join(",");
		var categoryID=$("#search_category").val();
		var manufactureID=$("#search_manufacture").val();
		var fuelType=$("#search_fuelType").val();
		var price=$("#ex1").val();
		var mileage=$("#ex2").val();
		var displacement=$("#ex3").val();
		var waitingPeriod=$("#ex5").val();
		var power=$("#ex6").val();
		var trendsTypeID=$("#trendTypeID").val();
		var orderBy=$("#orderBy").val();
		$("#showing").text("Loading.....");
		$.ajax({
			url:'<?php echo $prefix; ?>/home/getTrendData/ALL',
			dataType:'JSON',
			type:'POST',
			data:{'categoryID':categoryID,'manufactureID':manufactureID,'fuelType':fuelType,'power_streering':power_streering,'transmission':transmission,'trendsTypeID':trendsTypeID,'price':price,'mileage':mileage,'displacement':displacement,'waitingPeriod':waitingPeriod,'power':power,'seatCapacity':seatCapacity,'dealerID':dealerID, 'bodyTypeID':bodyTypeID, 'orderBy':orderBy, 'emissionStandard':emissionStandard}
		}).done(function(data){
			var html='';
			var totalCount=0;
			var vID=[100];
			var pID=[100];
			var vID1=[100];
			var data1=data;
			var len=data.length;
			for(var i=0;i<len;i++){
				if($.inArray(data[i]['productID'],pID)<0){
					pID[pID.length]=data[i]['productID'];
				 if($.inArray(data[i]['variantID'],vID)<0){
					  vID[vID.length]=data[i]['variantID'];
					   var sum=[];
					   var variantName=[];
					   var slugName=[];
					   var fuelType=[];
					   var transmission=[];
						for(var j=0;j<data1.length;j++){
							if(data1[j]['productID']==data[i]['productID']){
								if($.inArray(data1[j]['variantID'],vID1)<0){
									vID1[vID1.length]=data1[j]['variantID'];
									sum[sum.length]=data1[j]['exShowroomPrice'];
									variantName[variantName.length]=data1[j]['variantName'];
									slugName[slugName.length]=data1[j]['slugName'];
									if($.inArray(data[j]['fuelType'],fuelType)<0){
										fuelType[fuelType.length]=data[j]['fuelType'];
									}
									if($.inArray(data[j]['transmission'],transmission)<0){
										transmission[transmission.length]=data[j]['transmission'];
									}
								}else{
									sum[sum.length]=data1[j]['exShowroomPrice'];
									if($.inArray(data[j]['fuelType'],fuelType)<0){
										fuelType[fuelType.length]=data[j]['fuelType'];
									}
									if($.inArray(data[j]['transmission'],transmission)<0){
										transmission[transmission.length]=data[j]['transmission'];
									}
								}
							}
						}
						var min=convertNum(Math.min.apply(Math, sum));
						var max=convertNum(Math.max.apply(Math, sum));
						//Math.min.apply(Math, sum)+' - '+Math.max.apply(Math, sum)+
						totalCount++;
						var imgPath = "";
						if(data[i]['coverImage']=='' || data[i]['coverImage']==' ' || data[i]['coverImage']=='assets/upload/products/'){
							imgPath = '<?php echo base_url();?>assets/images/no-image.png';
						}
						else{
							imgPath = '<?php echo base_url();?>'+data[i]['coverImage'];
						}
						html += '<div class="product-car">'+
									'<div class="row">'+
										'<div class="col-md-3 col-sm-3">'+
											'<a href="<?php echo $prefix;?>/details/'+slugName[0]+'"><img src="'+imgPath+'" alt="'+data[i]['productName']+'"></a>'+
										'</div>'+
										'<div class="col-md-6 col-sm-6">'+
											'<a href="<?php echo $prefix;?>/details/'+slugName[0]+'"><h4>'+data[i]['productName']+'</h4></a>'+
											'<ul class="product-variant">'+
												'<li><i class="fa fa-car"></i>&nbsp; '+data[i]['body_type']+'</li>'+
												'<li><i class="fa fa-cog"></i>&nbsp; '+transmission+'</li>'+
												'<li><i class="fa fa-clock-o"></i>&nbsp; '+data[i]['mileage']+' kmpl</li>'+
												'<li><i class="fa fa-filter"></i>&nbsp; '+fuelType+'</li>'+
											'</ul>'+
										'</div>'+
										'<div class="col-md-3 col-sm-3 text-center">'+
											'<div class="product-price"><i class="fa fa-inr"></i>'+min+' - '+max+'</div>'+
											'<span class="product-on-road">(On-road Proce <b><?php $cityName = !empty($this->session->userdata('cityID')) ?  $this->session->userdata('cityID') : "Bangalore";
			echo $cityName; ?></b>)</span>'+
										'</div>'+
										'<div class="col-md-12 col-sm-12 text-center">'+
											'<div class="dropdown">'+
												'<div data-toggle="dropdown">'+variantName.length+' variants available<span class="caret"></span></div>'+
												'<ul class="dropdown-menu">';
												for(var k=0;k<variantName.length;k++){
													html+='<li><a href="<?php echo $prefix.'/details/';?>'+slugName[k]+'">'+variantName[k]+'</a></li>';
												}
												html+='</ul>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
				 }else{
					
				 }
				}else{
					
				}
			}
			if(totalCount>0){
				var result="Showing 1-"+totalCount+" of "+totalCount;
				$("#showing").html(result);
			}else{
				$("#showing").html("No Result Found");
			}
			$("#table_data").html(html);
		});
	}
	function get_manufacture1(callback,vID){
	if(vID==''){
		var vType='ALL';
	}else{
		var vType='ALL_C';
	}
	var callback="#"+callback;
	var html="";
	$.ajax({
		url:prefix+'/home/get_manufacture_detail/'+vType+'/'+vID,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html += "<option value='ALL'>ALL</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].manufactureID+"' >"+data[i].manufactureName+"</option>";
		}
		$(callback).html(html);
	});
}
function get_dealerName1(callback,mID){
	var callback="#"+callback;
	if(mID==''){var vType='RLIST';}else{var vType='DEALER-C';}
	$.ajax({
		url:prefix+'/home/get_dealer/'+vType+'/'+mID,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "";
		for(i=0;i<len;i++){
			 html +="<div class='checkbox'><label><input type='checkbox' name='dealerID' class='dealerID' value='"+data[i].userID+"'>"+data[i].firstName+" "+data[i].lastName+"</label></div>";
		}
		$(callback).html(html);
	});
}
$('#minimize-category').on('click',function(){
        $('#select-category').slideToggle();
		$('#minimize-category').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-price').on('click',function(){
        $('#slider-example').slideToggle();
		$('#minimize-price').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-manufacture').on('click',function(){
        $('#select-manufacture').slideToggle();
		$('#minimize-manufacture').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-fuel').on('click',function(){
        $('#select-fuel').slideToggle();
		$('#minimize-fuel').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-milage').on('click',function(){
        $('#slider-milage').slideToggle();
		$('#minimize-milage').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-transmission').on('click',function(){
        $('#select-transmission').slideToggle();
		$('#minimize-transmission').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-seating-capacity').on('click',function(){
        $('.seating-capacity').slideToggle();
		$('#minimize-seating-capacity').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-engine-capacity').on('click',function(){
        $('#engine-slider').slideToggle();
		$('#minimize-engine-capacity').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#manufacture-year').on('click',function(){
        $('#slider-manufacture-year').slideToggle();
		$('#manufacture-year').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-wating-period').on('click',function(){
        $('#slider-wating').slideToggle();
		$('#minimize-wating-period').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-dealer-name').on('click',function(){
        $('#dealerDetailsCheck').slideToggle();
		$('#minimize-dealer-name').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-emission-standard').on('click',function(){
        $('#emission-standard').slideToggle();
		$('#minimize-emission-standard').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-power-stearing').on('click',function(){
        $('#power-stearing').slideToggle();
		$('#minimize-power-stearing').toggleClass('fa fa-minus fa fa-plus');
		
    });
	$('#minimize-power').on('click',function(){
        $('#slider-power').slideToggle();
		$('#minimize-power').toggleClass('fa fa-minus fa fa-plus');
		
    });
			
</script>
</body>
</html>