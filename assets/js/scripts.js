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
		get_cities();
		get_maker();
	});
	$('#adv-book,#adv-book1').on('click', function(){
		get_cities();
		getManufatureDetails();		
	});
	$('document').ready(function(){
		$('#abModel').html('');
	});
	$('#abMaker').on('change',function(){		
		var abMaker_detail = $(this ,'#abMaker').val();
		$.ajax({
			url:prefix+'/services/getModelDetail',
			data:{'abMaker_detail':abMaker_detail},
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
function save_vehicle_loan(){
	var fullname=$("#vehlone_username").val();
	var phone=$("#vehlone_phone").val();
	var email=$("#vehlone_email").val();
	var address=$("#vehlone_address").val();
	var booking_amount=$("#vehlone_booking_amount").val();
	var preferenceBank=$("#vehlone_preference_bank").val();
	var pan=$("#vehlone_pan").val();
	var cityID=$("#vehlone_city").val();
	var categoryID=$("#vehlone_category").val();
	var manufactureID=$("#vehlone_maker").val();
	var customer_type=$("#vehlone_cust_type").val();
	var loan_amount=$("#vehlone_loan_amount").val();
	var loan_duration=$("#vehlone_loan_duration").val();
	var purchase_time=$("#vehlone_purchase_time").val();
	var modelID=$("#vehlone_model").val();
	var variantID=$("#vehlone_variant").val();
	var dealerName=$("#vehlone_dealerName").val();
	var dealerLocation=$("#vehlone_dealerLocation").val();
	var annualIncome=$("#vehlone_annual").val();
	var bankLocation=$("#vehlone_bankLocation").val();
	var timeToCall=$("#vehlone_timeticall").val();
	var salaryAccountBank=$("#vehlone_salaryAccountBank").val();
	var comment=$("#vehlone_comment").val();
	var termsandconditions=$("#vehlone_termsandconditions").val();
	var vType="INSERT";
	$.ajax({
		url:prefix+'/home/add_vehicle_loan/',
		data:{'vType':vType,'fullname':fullname,'phone':phone,'email':email,'address':address,'booking_amount':booking_amount,'preferenceBank':preferenceBank,'pan':pan,'cityID':cityID,'categoryID':categoryID,'manufactureID':manufactureID,'customer_type':customer_type,'loan_amount':loan_amount,'loan_duration':loan_duration,'purchase_time':purchase_time,'modelID':modelID,'variantID':variantID,'dealerName':dealerName,'dealerLocation':dealerLocation,'annualIncome':annualIncome,'bankLocation':bankLocation,'timeToCall':timeToCall,'salaryAccountBank':salaryAccountBank,'comment':comment,'termsandconditions':termsandconditions},
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
/*------------------- Vechicle loan Popup Ends Here -----------------*/
	
/* Advanced Booking Starts Here */
function get_cities(){	
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
			for(i=0;i< data.length;i++){
				$('#abCity').append('<option value="'+data[i]['cityID']+'">'+data[i]['cityName']+'</option>');
			}
			$('#abCity').select2();
		}else{
			
		}
	});
}
function getManufatureDetails(){	
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
			for(i=0;i< data.length;i++){
				$('#abMaker').append('<option value="'+data[i]['manufactureID']+'">'+data[i]['manufactureName']+'</option>');
			}
			$('#abMaker').select2();
		}else{
			
		}
	});
}
function getManufatureDetails(){	
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
			for(i=0;i< data.length;i++){
				$('#abMaker').append('<option value="'+data[i]['manufactureID']+'">'+data[i]['manufactureName']+'</option>');
			}
			$('#abMaker').select2();
		}else{
			
		}
	});
}
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