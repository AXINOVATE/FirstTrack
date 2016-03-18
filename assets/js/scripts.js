// common scripts
(function() {
    "use strict";
	
	//for tooltip
	$('[data-toggle="tooltip"]').tooltip();
	$('#advance-booking').on('click' ,function(){
		xu_validation.form_submit('#Advance-Booking','save_advance_booking');		
	});
	$('#by-on-road-assistance').on('click' ,function(){
		xu_validation.form_submit('#By-on-road-assistance','save_by_on_road_assistance');		
	});
	$('#test-drive,#test-drive1').on('click', function(){
		
	});
	$('#adv-book,#adv-book1').on('click', function(){
		adv_get_cities();
		adv_getManufatureDetails();		
		adv_getVariantDetail();
	});
	$('document').ready(function(){
		$('#abModel').html('');
	});
	$('#abMaker').on('change',function(){		
		var abMaker_detail = $(this ,'#abMaker').val();
		var manufactureDetail="NUll";
		var Maker_detail="Maker-M";
		$.ajax({
			url:prefix+'/services/getModelDetail/'+ Maker_detail +'/'+manufactureDetail+'/'+abMaker_detail,
			data:{},
			type:'POST',
			processData: true,
			dataType:'JSON'
			}).done(function(data){
				if(data.length > -1){					
					$('#abModel').html('');					
					var i=0;
					for(i=0;i< data.length;i++){
						$('#abModel').append('<option value="'+data[i]['modelID']+'">'+data[i]['modelName']+'</option>');
					}
					$('#abModel').select2();
				}else{
					
				}
			});
		
	});
	$('#btn_apply_vehicle_loan').on('click' ,function(){
		xu_validation.form_submit('#apply_for_vehicle_loan','save_vehicle_loan');		
	});
	$("#vehicle-loan").on('click',function(){
		get_vehlone_cities();
		get_vehlone_categories();
		get_vehlone_manufacture();
		get_vehlone_varient();
	});
	
})(jQuery);
var prefix=$("#prefix").data("prefix");
/*--------------------- Vechicle loan Popup Stats Here -------------*/
function get_vehlone_cities(){
	$.ajax({
		url:prefix+'/home/location_detail/UCITY',
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select City --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].cityID+"' >"+data[i].cityName+"</option>";
		}
		$("#vehlone_city").html(html);
	});
}
function get_vehlone_categories(){
	$.ajax({
		url:prefix+'/home/get_category_detail/ALL',
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select Category --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].categoryID+"' >"+data[i].categoryName+"</option>";
		}
		$("#vehlone_category").html(html);
	});
}
function get_vehlone_manufacture(){
	$.ajax({
		url:prefix+'/home/get_manufacture_detail/ALL',
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select Maker --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].manufactureID+"' >"+data[i].manufactureName+"</option>";
		}
		$("#vehlone_maker").html(html);
	});
}
$("#vehlone_maker").on('change',function(){
	var maID=$(this).val();
	$.ajax({
		url:prefix+'/services/getModelDetail/Maker-M/null/'+maID,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select Model --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].modelID+"' >"+data[i].modelName+"</option>";
		}
		$("#vehlone_model").html(html);
	});
});
function get_vehlone_varient(){
	$.ajax({
		url:prefix+'/services/getVariantDetail/ALL',
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select Varient --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].variantID+"' >"+data[i].variantName+"</option>";
		}
		$("#vehlone_variant").html(html);
	});
}
/*------------------- Vechicle loan Popup Ends Here -----------------*/
	
/* Advanced Booking Starts Here */
function adv_get_cities(){	
	$.ajax({
		url:prefix+'/services/get_city',
		data:{},
		type:'POST',
		processData: true,
		dataType:'JSON'
		}).done(function(data){
			if(data.length > -1){					
				$('#abCity').html('');					
				var i=0;
				$('#abCity').append('<option value="">-- Select City --</option>');
				for(i=0;i< data.length;i++){
					$('#abCity').append('<option value="'+data[i]['cityID']+'">'+data[i]['cityName']+'</option>');
				}
				$('#abCity').select2();
			}else{
				
			}
		});
}
function adv_getManufatureDetails(){	
	$.ajax({
		url:prefix+'/services/getManufatureDetails',
		data:{},
		type:'POST',
		processData: true,
		dataType:'JSON'
		}).done(function(data){
			if(data.length > -1){					
				$('#abMaker').html('');					
				var i=0;
				$('#abMaker').append('<option value="">-- Select Maker --</option>');
				for(i=0;i< data.length;i++){
					$('#abMaker').append('<option value="'+data[i]['manufactureID']+'">'+data[i]['manufactureName']+'</option>');
				}
				$('#abMaker').select2();
			}else{
				
			}
		});

}
function adv_getVariantDetail(){	
	$.ajax({
		url:prefix+'/services/getVariantDetail/ALL/null',
		data:{},
		type:'POST',
		processData: true,
		dataType:'JSON'

		}).done(function(data){
			if(data.length > -1){					
				$('#abVariant').html('');					
				var i=0;
				$('#abVariant').append('<option value="">-- Select Variant --</option>');
				for(i=0;i< data.length;i++){
					$('#abVariant').append('<option value="'+data[i]['variantID']+'">'+data[i]['variantName']+'</option>');
				}
				$('#abVariant').select2();
			}else{
				
			}
		});
}

var prefix=$("#prefix").data("prefix");
function save_advance_booking(){
	$.ajax({
			url:prefix+'/services/advanced_booking',
			dataType:'json',
			type:'POST',
			data:$('#Advance-Booking').serialize()
		}).done(function(data){				
			
		});
}
/* Advanced Booking End Starts Here */
