// common scripts
(function() {
    "use strict";
	
	$('#city-option').on('click',function(){
	
		$.ajax({
		url:prefix+'/home/getCity',
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var html;
		var len=data.length;
		var i=0;
		html="";
		for(i=0;i<len;i++){
			html += '<li class="pd-tp-3" ><a href="#" class="particular-city-id" data-particulaCity-id="'+data[i].cityID +'" data-city-name="'+ data[i].cityName +'">'+ data[i].cityName +'</a></li>';
		}		
		$('#city-option-detail').html(html);
		
	});
	});
	$("#city-option-detail").on('click', 'li a', function() {	
		var VparticularcityID=$(this).attr("data-particulaCity-id");
		var VcityName=$(this).attr("data-city-name");
		//alert(VparticularcityID);
		$('#location').html($(this).attr("data-city-name"));
		$.ajax({
			url:prefix+'/home/getparticularcityID',
			type:'POST',
			processData:true,
			data:{VcityName:VcityName},
			dataType:'JSON'
		}).done();
	});
	
	
	
	//for tooltip
	$('[data-toggle="tooltip"]').tooltip();
	$('#advance-booking').on('click' ,function(){		
		xu_validation.form_submit('#Advance-Booking','save_advance_booking');		
	});

	$('#Request_TestDrive').on('click' ,function(){		
		xu_validation.form_submit('#Request_for_TestDrive','Request_TestDrive_Save');			
	});
	$('#by-on-road-assistance').on('click' ,function(){
		xu_validation.form_submit('#By-on-road-assistance','save_by_on_road_assistance');		
	});
	
	$('#test-drive,#test-drive1,#test-drive2,#test-drive3').on('click', function(){		
		var PageName=$(this).data('page');
		if(PageName=='comparison'){
			var VariantID=$(this).data('vid');
			var catid=$(this).data('catid');
			var manid=$(this).data('manid');
			var prodid=$(this).data('prodid');
			get_rtd_cities();
			get_categories("RTD_Category");
			setTimeout(function() {
			 $("#RTD_Category").val(catid);
			 $("#RTD_Category").trigger('change');
			 }, 1000);
			setTimeout(function() {
			 $("#RTD_Maker").val(manid);
			 $("#RTD_Maker").trigger('change');
			}, 1500);
			setTimeout(function() {
			 $("#RTD_Model").val(prodid);
			 $("#RTD_Model").trigger('change');
			}, 2000);
			setTimeout(function() {
			 $("#RTD_Variant").val(VariantID);
			 $("#RTD_Variant").trigger('change');
			}, 2500);
		}else{	
			get_rtd_cities();
			get_rtd_categories();				
			//get_rtd_manufacture();
			//get_rtd_dealerName();
			//get_rtd_varient();
		}
	});
	$('#adv-book,#adv-book1').on('click', function(){	
		adv_getCatDetails();
		//get_cities("abCity");				
		get_manufacture_adv();
		//get_variant_adv();
	});
	
	$('#GetProformaInvoice').on('click' , function(){
		get_gpi_cities();
		get_gpi_categories();					
		//get_gpi_manufacture();
		//get_gpi_varient();
		
	});
	

	$('document').ready(function(){
	});
	
	
	$('#abMaker').on('change',function(){	
		get_particular_model("abMaker","abModel");		
	});
	$('#RTD_Maker').on('change',function(){			
		get_particular_model("RTD_Maker","RTD_Model");		
	});
	$('#gpi_maker').on('change',function(){
			get_particular_model("gpi_maker","gpi_model");
	});
	$('#boraMaker').on('change',function(){		
		get_particular_model("boraMaker","boraModel");			
	});
	
	
	$('#btn_apply_vehicle_loan').on('click' ,function(){
		xu_validation.form_submit('#apply_for_vehicle_loan','save_vehicle_loan');		
	});
	$(document).on('click', 'a', function(e){
		var href = $(this).attr('href');
		if(href == '#'){
			e.preventDefault();
		}
	});
	$("#vehicle-loan,#vehicle-loan1").on('click',function(){
		get_vehlone_cities(); 
		get_vehlone_categories();
		//get_vehlone_manufacture();
		//get_vehlone_dealerName();
		//get_vehlone_varient();
	});
	$('#insurance-save').on('click' ,function(){
		xu_validation.form_submit('#Apply-for-insurance','save_apply_for_insurance');		
	});
	$("#apply-for-insurance,#apply-for-insurance1").on('click',function(){
		get_insurance_cities();
		get_insurance_manufacture();
		$("#insurance_loan_amount").hide();
		$("#insurance_duration").hide();
		$("#insurance_time_frame").hide();
		$("#insurance_preferd_bank").hide();
		$("#insurance_bank_account").hide();
		$("#insurance_loan_amount").removeAttr('va_req','false');
		$("#insurance_duration").removeAttr('va_req','false');
		$("#insurance_time_frame").removeAttr('va_req','false');
		$("#insurance_preferd_bank").removeAttr('va_req','false');
		$("#insurance_bank_account").removeAttr('va_req','false');
		//get_insurance_varient();
	});
	
	
	$('#corp_save_data').on('click' ,function(){
		xu_validation.form_submit('#corporate_deals_form','save_corporate_deals');		
	});
	
	$("#corporate-deal,#corporate-deal1").on('click',function(){
		get_corp_cities();
		get_corp_categories();
		$("#corp_loan_amount").hide();
		$("#corp_loan_duration").hide();
		$("#corp_pref_bank").hide();
		$("#corp_loan_amount").removeAttr('va_req','false');
		$("#corp_loan_duration").removeAttr('va_req','false');
		$("#corp_pref_bank").removeAttr('va_req','false');
		//get_corp_manufacture();
		//get_corp_varient();
	});
	
	
	/*$("#locate-dealer,#locate-dealer1").on('click',function(){
		get_locate_dealer_manufacture();
		alert('hello');
	});*/
	
	/*$('#by-on-road-assistance').on('click' ,function(){
		xu_validation.form_submit('#By-on-road-assistance','save_by_on_road_assistance');		
	});*/
	
	
	$("#on-road-assistance,#on-road-assistance1").on('click',function(){
		get_road_cities();
		get_road_categories();
		//get_road_manufacture();
		//get_road_varient();
	});
	$("#get_instant_quote_popup").on('click',function(){
		$("#get-instant-quote-div").html('');
		$("#get-instant-quote-div").css('background-color','');
		get_instant_country();
		get_instant_category();
		get_all_country("instquote_country");
		get_categories("instquote_category");
	});
	$('#get_instant_quote_form_save').on('click' ,function(){
		$("#get-instant-quote-div").html('');
		xu_validation.form_submit('#get_instant_quote_form','save_instant_quote');		
	});
})(jQuery);
var prefix=$("#prefix").data("prefix");


/* --------------------- Common Function Starts  --------------------------*/

function getStates(data,callback,selectValue){
	var callback="#"+callback;
	$.ajax({
		url:prefix+'/home/location_detail/PSTATE/'+data.value,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = '<option value=""></option>';
		for(i=0;i<len;i++){
			if(selectValue == data[i].stateID)
				html += "<option value='"+data[i].stateID+"' selected>"+data[i].stateName+"</option>";
			else
				html += "<option value='"+data[i].stateID+"' >"+data[i].stateName+"</option>";
		}
		$(callback).html(html);
		$(callback).select2({placeholder: "Select state",allowClear:true});
		if(selectValue != "")$(callback).trigger('change');
	}); 
}
function getCities(data,callback,selectValue){
	var callback="#"+callback;
	$.ajax({
		url:prefix+'/home/location_detail/PCITY/'+data.value,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = '<option value=""></option>';
		for(i=0;i<len;i++){
			if(selectValue == data[i].cityID)
				html += "<option value='"+data[i].cityID+"' selected>"+data[i].cityName+"</option>";
			else
				html += "<option value='"+data[i].cityID+"' >"+data[i].cityName+"</option>";
		}
		$(callback).html(html);
		$(callback).select2({placeholder: "Select city",allowClear:true});
		if(selectValue != "")$(callback).trigger('change');
	}); 
}
function getLocations(data,callback,selectValue){
	var callback="#"+callback;
	$.ajax({
		url:prefix+'/home/location_detail/PLOCATION/'+data.value,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = '<option value=""></option>';
		for(i=0;i<len;i++){
			if(selectValue == data[i].locationID)
				html += "<option value='"+data[i].locationID+"' selected>"+data[i].locationName+"</option>";
			else
				html += "<option value='"+data[i].locationID+"' >"+data[i].locationName+"</option>";
		}
		$(callback).html(html);
		$(callback).select2({placeholder: "Select location",allowClear:true});
	}); 
}
function get_all_country(callback){
	var callback="#"+callback;
	$.ajax({
		url:prefix+'/admin/getAllCountry',
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select Country --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].countryID+"' >"+data[i].countryName+"</option>";
		}
		$(callback).html(html);
	});
}
function get_cities(callback){
	var callback="#"+callback;
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
		$(callback).html(html);
	});
}
function get_categories(callback){
	var callback="#"+callback;
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
		$(callback).html(html);
	});
}
function get_variant(callback,id){
	var callback="#"+callback;
	var html="";
	$.ajax({
		url:prefix+'/services/getVariantDetail/ALL/'+id,
		type:'POST',
		data:{},
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html += "<option value=''>-- Select Variant --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].variantID+"' >"+data[i].variantName+"</option>";
		}
		$(callback).html(html);
	});
}
function get_manufacture(callback,vID){
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
		html += "<option value=''>-- Select Maker --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].manufactureID+"' >"+data[i].manufactureName+"</option>";
		}
		$(callback).html(html);
	});
}
function get_dealerName(callback,mID){
	var callback="#"+callback;
	if(mID==''){var vType='RLIST';}else{var vType='DEALER-M';}
	$.ajax({
		url:prefix+'/home/get_dealer/'+vType+'/'+mID,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select Dealer Name --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].userID+"' >"+data[i].firstName+" "+data[i].lastName+"</option>";
		}
		$(callback).html(html);
	});
}
function get_dealerLocation(callback,id){
	var callback="#"+callback;
	$.ajax({
		url:prefix+'/home/get_dealer/DEALER-O/'+id,
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select Dealer Location --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].locationID+"' >"+data[i].location+"</option>";
		}
		$(callback).html(html);
	});
}
/*---------------------------- Common Function Ends--------------------------*/
/* -------------------------- GetProformaInvoice start --------------------------*/
function get_gpi_cities(){
	get_cities("gpi_city");
}
function get_gpi_categories(){
	get_categories("gpi_category");
}
$("#gpi_category").on('change',function(){
	get_manufacture("gpi_maker",$(this).val());
});
$("#gpi_maker").on('change',function(){
	get_dealerName("gpi_dealer_name",$(this).val());
});
$("#gpi_model").on('change',function(){
	get_variant("gpi_variant",$(this).val());
});
/* -------------------------- End GetProformaInvoice start --------------------------*/
/*--------------------- Vechicle loan Popup Stats Here -------------*/
function get_vehlone_cities(){
	get_cities("vehlone_city");
}
function get_vehlone_categories(){
	get_categories("vehlone_category");
}
$("#vehlone_category").on('change',function(){
	get_manufacture("vehlone_maker",$(this).val());
});
/*function get_vehlone_manufacture(){
	get_manufacture("vehlone_maker");
}*/
/*function get_vehlone_dealerName(){
	get_dealerName("vehlone_dealerName");
}*/
$("#vehlone_maker").on('change',function(){	
	get_dealerName("vehlone_dealerName",$(this).val());	
});
$("#vehlone_dealerName").on('change',function(){	
	get_dealerLocation("vehlone_dealerLocation",$(this).val());	
});
$("#vehlone_maker").on('change',function(){	
	get_particular_model("vehlone_maker","vehlone_model");	
});
$("#vehlone_model").on('change',function(){	
	get_variant("vehlone_variant", $(this).val());
});
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
             $('#vehicle-loan-modal').modal('hide');			
			$("#thanks-message").modal();
			setTimeout(function(){window.location.reload();},10000);
		}else{
			$.gritter.add({
				title: 'Failed',
				text: 'Failed To Save',
				class_name: 'gritter-info gritter-center' + 'gritter-light'
			});
			setTimeout(function(){window.location.reload();},10000);
		}
	});
}
/*------------------- Vechicle loan Popup Ends Here -----------------*/


/*------------------- Corporate Deals Popup Starts Here -----------------*/

function get_corp_cities(){
	get_cities("corp_city");
}
function get_corp_categories(){
	get_categories("corp_category");
}
/*function get_corp_manufacture(){
	//get_manufacture("corp_maker");
}*/
$("#corp_category").on('change',function(){
	get_manufacture("corp_maker",$(this).val());
});
$("#corp_model").on('change',function(){
	get_variant("corp_variant",$(this).val());
});
$("#corp_maker").on('change',function(){
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
		$("#corp_model").html(html);
	});
});
$("#corp_needloan").on('change',function(){
	if($(this).val()=="No"){
		$("#corp_loan_amount").hide();
		$("#corp_loan_duration").hide();
		$("#corp_pref_bank").hide();
		$("#corp_loan_amount").removeAttr('va_req','false');
		$("#corp_loan_duration").removeAttr('va_req','false');
		$("#corp_pref_bank").removeAttr('va_req','false');
	}else{
		$("#corp_loan_amount").show();
		$("#corp_loan_duration").show();
		$("#corp_pref_bank").show();
		$("#corp_loan_amount").attr('va_req','true');
		$("#corp_loan_duration").attr('va_req','true');
		$("#corp_pref_bank").attr('va_req','true');
	}
});
function save_corporate_deals(){
	var fullname=$("#corp_fullname").val();
	var phone=$("#corp_phone").val();
	var email=$("#corp_email").val();
	var address=$("#corp_address").val();
	var cityID=$("#corp_city").val();
	var manufactureID=$("#corp_maker").val();
	var modelID=$("#corp_model").val();
	var variantID=$("#corp_variant").val();
	var categoryID=$("#corp_category").val();
	var quality_of_vehicle=$("#corp_quality_of_vehicle").val();
	var customer_type=$("#corp_customerType").val();
	var needLoad=$("#corp_needloan").val();
	var loan_amount=$("#corp_loan_amount").val();
	var loan_duration=$("#corp_loan_duration").val();
	var preferenceBank=$("#corp_pref_bank").val();
	var purchaseTimeFrame=$("#corp_purchase_time_frame").val();
	var bestTimeToCall=$("#corp_best_time_to_call").val();
	var salaryAccountBank=$("#corp_salary_account").val();
	var comment=$("#corp_comment").val();
	var termsandconditions=$("#corp_termsadnconditions").val();
	var vType='INSERT';
	$.ajax({
		url:prefix+'/home/add_corporate_deals/',
		data:{'vType':vType,'fullname':fullname,'phone':phone,'email':email,'address':address,'cityID':cityID,'manufactureID':manufactureID,'modelID':modelID,'variantID':variantID,'categoryID':categoryID,'quality_of_vehicle':quality_of_vehicle,'customer_type':customer_type,'needLoad':needLoad,'loan_amount':loan_amount,'loan_duration':loan_duration,'preferenceBank':preferenceBank,'purchaseTimeFrame':purchaseTimeFrame,'bestTimeToCall':bestTimeToCall,'salaryAccountBank':salaryAccountBank,'comment':comment,'termsandconditions':termsandconditions},
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		if(data.status == "Success"){	
		  $('#corporate-deal-modal').modal('hide');	
			$("#thanks-message").modal();
			setTimeout(function(){window.location.reload();},10000);
		}else{
			$.gritter.add({
				title: 'Failed',
				text: 'Failed To Save',
				class_name: 'gritter-info gritter-center' + 'gritter-light'
			});
			setTimeout(function(){window.location.reload();},10000);
		}
	});
}
/*------------------- Corporate Deals Popup Ends Here -----------------*/

/*---------------------GET INSTANCE QUOTE POPUP STARTS --------------*/
function get_instant_country(){
	get_all_country("instquote_country");
}
function get_instant_category(){
	get_categories("instquote_category");
}
/*function get_instant_maker(){
	get_manufacture("instquote_maker");
}*/
$("#instquote_category").on('change',function(){
	get_manufacture("instquote_maker", $(this).val());
});
$("#instquote_model").on('change',function(){
	get_variant("instquote_variant", $(this).val());
});
$("#instquote_maker").on('change',function(){
	get_dealerName("instquote_dealerName", $(this).val());
});
/*function get_instant_dealerName(){
	get_dealerName("instquote_dealerName");
}*/
$('#instquote_country').on('change',function(){
	var country_id=$(this).val();
	$.ajax({
		url:prefix+'/home/get_particular_states',
		type:'POST',
		processData: true,
		dataType:'JSON',
		data:{'country_id':country_id}
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select State --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].stateID+"' >"+data[i].stateName+"</option>";
		}
		$("#instquote_state").html(html);
	});
});
$("#instquote_state").on('change',function(){
	var states_id=$(this).val();
	$.ajax({
		url:prefix+'/home/get_particular_city',
		type:'POST',
		processData: true,
		dataType:'JSON',
		data:{'states_id':states_id}
	}).done(function(data){
		var len=data.length;
		html = "<option value=''>-- Select City --</option>";
		for(i=0;i<len;i++){
			html += "<option value='"+data[i].cityID+"' >"+data[i].cityName+"</option>";
		}
		$("#instquote_city").html(html);
	});
});
$("#instquote_maker").on('change',function(){
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
		$("#instquote_model").html(html);
	});
});

function numComma(x){
	x=x.toString();
	var lastThree = x.substring(x.length-3);
	var otherNumbers = x.substring(0,x.length-3);
	if(otherNumbers != '')
		lastThree = ',' + lastThree;
	var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
	return res;
}
function save_instant_quote(){
	var vType="INSERT";
	var countryID=$("#instquote_country").val();
	var stateID=$("#instquote_state").val();
	var cityID=$("#instquote_city").val();
	var categoryID=$("#instquote_category").val();
	var manufactureID=$("#instquote_maker").val();
	var modelID=$("#instquote_model").val();
	var variantID=$("#instquote_variant").val();
	var dealerName=$("#instquote_dealerName").val();
	var termsandconditions=$("#instquote_termandconditions").val();
	var vType="INSERT";
	$.ajax({
		url:prefix+'/home/add_InstantQuotes/',
		data:{'vType':vType,'countryID':countryID,'stateID':stateID,'cityID':cityID,'categoryID':categoryID,'manufactureID':manufactureID,'modelID':modelID,'variantID':variantID,'dealerName':dealerName,'termsandconditions':termsandconditions},
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		var html = "";
		$('.disable_div').remove();
		if(data.length>0){	
			for(i=0;i<data.length;i++){
				html += '<div class="col-md-6 col-sm-6 col-xs-12 b-rt-bt">'+
							'<h2><font color="red"><i class="fa fa-inr"></i>'+numComma(Math.round(data[i]['onRoadPrice']))+'</font></h2><h3><font color="black">On-Road-Price</font></h3>'+
						'</div>'+
						'<div class="col-md-6 col-sm-6 col-xs-12">'+
							'<table class="instant_quote_table mt-10">'+
								'<tbody style="color: black;"> '+
									'<tr>'+
										'<td class="">Ex-showroom: </td>'+
										'<td style="text-align:right;" ><i class="fa fa-inr"></i> '+numComma(Math.round(data[i]['exShowroomPrice']))+'</td>'+
									'</tr>'+
									'<tr>'+
										'<td class="">Insurance: </td>'+
										'<td style="text-align:right;" ><i class="fa fa-inr"></i> '+numComma(Math.round(data[i]['insurance']))+'</td>'+
									'</tr>'+
									'<tr>'+
										'<td class="">RTO: </td>'+
										'<td style="text-align:right;" ><i class="fa fa-inr"></i> '+numComma(Math.round(data[i]['RTO']))+'</td>'+
									'</tr>'+
									'<tr>'+
										'<td class="">Road Tax: </td>'+
										'<td style="text-align:right;" ><i class="fa fa-inr"></i> '+numComma(Math.round(data[i]['roadTax']))+'</td>'+
									'</tr>'+
									'<tr>'+
										'<td class="">Other Handling Charges: </td>'+
										'<td style="text-align:right;" ><i class="fa fa-inr"></i> '+numComma(Math.round(data[i]['handlingOtherCharges']))+'</td>'+
									'</tr>'+
								'</tbody>'+
							'</table>'+
						'</div>';
			}
		}
		else{
			html += '<div class="col-md-12 col-sm-12 col-xs-12">'+
							'<h4><font color="black">No results found!</font></h4>'+
						'</div>';
		}
		$("#get-instant-quote-div").css('background-color','#ffffff');
		$("#get-instant-quote-div").html(html);
	});
}
/*---------------------GET INSTANCE QUOTE POPUP ENDS --------------*/
/* Advanced Booking Starts Here */

function adv_getCatDetails(){
	get_cities("abCity");
}
$("#abModel").on('change',function(){
	get_variant("abVariant",$(this).val());
});
function get_manufacture_adv(){
	get_manufacture("abMaker",'');
}
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
			}else{
				
			}
		});

}
function adv_getVariantDetail(id){	
	$.ajax({
		url:prefix+'/services/getVariantDetail/ALL/'+id,
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
				
			}else{
				
			}
		});
}

var prefix=$("#prefix").data("prefix");
function save_advance_booking(){
	$.ajax({
			url:prefix+'/services/advanced_booking',
			dataType:'JSON',
			type:'POST',
			data:$('#Advance-Booking').serialize()
		}).done(function(data){			
			if(data == "Success"){	
				$("#thanks-message").modal();
				setTimeout(function(){window.location.reload();},10000);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location.reload();},10000);
			}
		});
}
/* Advanced Booking End Starts Here */

/* ----------------locate dealer--------------------*/


function get_locate_dealer_manufacture(){
	get_manufacture("all-brand",'');
	get_cities("all-vehicle-city");
}
$('#all-vehicle-city').on('change',function(){
	var VehicleCityID= $(this,'#all-vehicle-city').val();
	$.ajax({
		url:prefix+'/home/get_particular_location_detail',
		type:'POST',
		processData: true,
		dataType:'JSON',
		data:{'VehicleCityID':VehicleCityID}
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
	
});
/* ----------------locate dealer  end--------------------*/

/* Requist For Test Drive Starts Here */
function get_rtd_cities(){
	get_cities("RTD_City");
}
function get_rtd_categories(){
	get_categories("RTD_Category");
}
/*function get_rtd_manufacture(){
	get_manufacture("RTD_Maker");
}*/
$("#RTD_Category").on('change',function(){
	get_manufacture("RTD_Maker",$(this).val());
});
/*function get_rtd_dealerName(){
	get_dealerName("RTD_Dealer_Name");
}*/
$("#RTD_Maker").on('change',function(){
	get_dealerName("RTD_Dealer_Name",$(this).val());
});
$("#RTD_Dealer_Name").on('change',function(){
	get_dealerLocation("RTD_Dealer_Location",$(this).val());
});
$("#RTD_Model").on('change',function(){
	get_variant("RTD_Variant", $(this).val());
});
function Request_TestDrive_Save(){
	$.ajax({
			url:prefix+'/services/Request_for_TestDrive',
			dataType:'JSON',
			type:'POST',
			data:$('#Request_for_TestDrive').serialize()
		}).done(function(data){
			
			if(data == "Success"){	
			    $('#test-drive-modal').modal('hide');	
				$("#thanks-message").modal();
				setTimeout(function(){window.location.reload();},10000);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location.reload();},10000);
			}
		});

}

/* Requist For Test End Starts Here */
/* by road assistance pop up start here*/

/*------------------- road assistance popup -----------------*/


function get_road_cities(){
	get_cities("boraCity");
}
function get_road_categories(){
	get_categories("boraCategory");
}
/*function get_road_manufacture(){
	get_manufacture("boraMaker");
}*/
$("#boraCategory").on('change',function(){
	get_manufacture("boraMaker", $(this).val());
});
$("#boraModel").on('change',function(){
	get_variant("boraVarient", $(this).val());
});
$("#boraMaker").on('change',function(){
	get_particular_model("boraMaker","boraModel");		
});
function save_by_on_road_assistance(){
	var vType="INSERT";
	var fullname=$("#boraFullName").val();
	var phone=$("#boraPhone").val();
	var email=$("#boraEmail").val();
	var address=$("#corp_address").val();
	var cityID=$("#boraCity").val();
	var manufactureID=$("#boraMaker").val();
	var modelID=$("#boraModel").val();
	var variantID=$("#boraVarient").val();
	var categoryID=$("#boraCategory").val();
	var use=$("#boraUse").val();
	var plan=$("#boraPlan").val();
	var purchase=$("#boraPurchase").val();
	var roadcompanies=$("#boraRoadcompanies").val();
	var packag=$("#boraPackage").val();
	var packegebenifit=$("#boraPackbenifits").val();
	var packagecost=$("#boraPackcost").val();
	var timeframe=$("#boraTimeframe").val();
	var paymentdetails=$("#boraPaymentdetails").val();
	var timecall=$("#boraTimecall").val();
	var comment=$("#boraComment").val();
	var termsandconditions=$("#boraAgree").val();
	$.ajax({
		url:prefix+'/home/add_by_on_road_assistance',
		data:{'vType':vType,'fullname':fullname,'phone':phone,'email':email,'address':address,'cityID':cityID,'manufactureID':manufactureID,'modelID':modelID,'variantID':variantID,'categoryID':categoryID,'use':use,'plan':plan,'purchase':purchase,'roadcompanies':roadcompanies,'packag':packag,'packegebenifit':packegebenifit,'packagecost':packagecost,'timeframe':timeframe,'paymentdetails':paymentdetails,'timecall':timecall,'comment':comment,'termsandconditions':termsandconditions},
		type:'POST',
		processData: true,
		dataType:'JSON'
		}).done(function(data){
			if(data.status == "Success"){
				$('#road-assistance-modal').modal('hide');	
				$("#thanks-message").modal();
			  
			setTimeout(function(){window.location.reload();},10000);
			}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				setTimeout(function(){window.location.reload();},10000);
			}
			
		});
}

var prefix=$("#prefix").data("prefix");
//$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
//$('.inpt-timepicker').timepicker();
function save_road_assistance(){
	$.ajax({
			url:prefix+'/services/advanced_booking',
			dataType:'json',
			type:'POST',
			data:$('#By-on-road-assistance').serialize()
		}).done(function(data){				
			
		});
	

}
/*-------------------road assistance popup-----------------*/


function openthankmodal(){
	$('#thanks-message').modal('open');
}

/*------------------- apply for insurance Popup Starts Here -----------------*/

function get_insurance_cities(){
	get_cities("insurance_city");
}

function get_insurance_manufacture(){
	get_manufacture("insurance_maker",'');
}
$("#insurance_maker").on('change',function(){	
	get_particular_model("insurance_maker","insurance_model");		
});
$("#insurance_model").on('change',function(){	
	get_variant("insurance_variant", $(this).val());	
});
$("#insurance_need_loan").on('change',function(){
	if($(this).val()=="No"){
		$("#insurance_loan_amount").hide();
		$("#insurance_duration").hide();
		$("#insurance_time_frame").hide();
		$("#insurance_preferd_bank").hide();
		$("#insurance_bank_account").hide();
		$("#insurance_loan_amount").removeAttr('va_req','false');
		$("#insurance_duration").removeAttr('va_req','false');
		$("#insurance_time_frame").removeAttr('va_req','false');
		$("#insurance_preferd_bank").removeAttr('va_req','false');
		$("#insurance_bank_account").removeAttr('va_req','false');
	}else{
		$("#insurance_loan_amount").show();
		$("#insurance_duration").show();
		$("#insurance_time_frame").show();
		$("#insurance_preferd_bank").show();
		$("#insurance_bank_account").show();
		$("#insurance_loan_amount").attr('va_req','true');
		$("#insurance_duration").attr('va_req','true');
		$("#insurance_time_frame").attr('va_req','true');
		$("#insurance_preferd_bank").attr('va_req','true');
		$("#insurance_bank_account").attr('va_req','true');
	}
});
function save_apply_for_insurance(){
	var vType="INSERT";
	var fullname=$("#insurance_fullname").val();
	var phone=$("#insurance_phone").val();
	var email=$("#insurance_email").val();
	var cityID=$("#insurance_city").val();
	var manufactureID=$("#insurance_maker").val();
	var modelID=$("#insurance_model").val();
	var variantID=$("#insurance_variant").val();
	var date=$("#insurance_date").val();
	var time=$("#insurance_time").val();
	var customer_type=$("#insurance_customer_type").val();
	var use=$("#insurance_use").val();
	var needLoan=$("#insurance_need_loan").val();
	var loan_amount=$("#insurance_loan_amount").val();
	var loan_duration=$("#insurance_duration").val();
	var preferenceBank=$("#insurance_preferd_bank").val();
	var purchaseTimeFrame=$("#insurance_time_frame").val();
	var salaryAccountBank=$("#insurance_bank_account").val();
	var comment=$("#insurance_comment").val();
	var termsandconditions=$("#insurance_agree").val();
	var vType='INSERT';
	$.ajax({
		url:prefix+'/home/add_insurance_details',
		data:{'vType':vType,'fullname':fullname,'phone':phone,'email':email,'cityID':cityID,'manufactureID':manufactureID,'modelID':modelID,'variantID':variantID,'date':date,'time':time,'customer_type':customer_type,'use':use,'needLoan':needLoan,'loan_amount':loan_amount,'loan_duration':loan_duration,'preferenceBank':preferenceBank,'purchaseTimeFrame':purchaseTimeFrame,'salaryAccountBank':salaryAccountBank,'comment':comment,'termsandconditions':termsandconditions},
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		if(data.status == "Success"){
             $('#apply-insurance-modal').modal('hide');			
			$("#thanks-message").modal();
			setTimeout(function(){window.location.reload();},10000);
		}else{
			$.gritter.add({
				title: 'Failed',
				text: 'Failed To Save',
				class_name: 'gritter-info gritter-center' + 'gritter-light'
			});
			setTimeout(function(){window.location.reload();},10000);
		}
	});
}
/*-------------------apply for insurance pop end -----------------*/
/*-------------------get particular model name code -----------------*/
function get_particular_model(manufacture_control_name,model_control_name){
		var manufacture_control_name,model_control_name;
		var manufacture_control_name ='#'+manufacture_control_name
		var model_control_name ='#'+model_control_name;
		var abMaker_detail = $(manufacture_control_name).val();		
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
					$(model_control_name).html('<option value="">------ Select Model -------</option>');					
					var i=0;
					for(i=0;i< data.length;i++){
						$(model_control_name).append('<option value="'+data[i]['modelID']+'">'+data[i]['modelName']+'</option>');
					}
					
				}else{
					
				}
			});
		
	}
/*-------------------end get particular model name code -----------------*/
/*-------------------  get_Proforma_Invoice_pdf code -----------------*/

$('#ProformaInvoicePDF').on('click' , function(){
	xu_validation.form_submit('#get_Proforma_Invoice_pdf','get_Proforma_Invoice_pdf');
});
$('#get_Proforma_Invoice_pdf_download').on('click' , function(){
	xu_validation.form_submit('#get_Proforma_Invoice_pdf','get_Proforma_Invoice_pdf');
	setTimeout(function(){window.location.reload();},10000);
});

function get_Proforma_Invoice_pdf(){
	$('#get_Proforma_Invoice_pdf').attr('onSubmit','return true');
	setTimeout(function(){window.location.reload();},10000);
	
	//$('#get_Proforma_Invoice_pdf').submit();
}

/*-------------------  get_Proforma_Invoice_pdf  end code -----------------*/

/* Start of Drop a Query Form*/
$('#drop_a_query_btn').on('click' ,function(){
	xu_validation.form_submit('#drop_a_query_form','save_dropAQuery');		
});
function save_dropAQuery(){
	
	var fullname=$("#dq_fullName").val();
	var phone=$("#dq_phone").val();
	var email=$("#dq_emailID").val();
	var query=$("#dq_query").val();
	
	var vType='INSERT';
	$.ajax({
		url:prefix+'/home/add_dropAQuery/',
		data:{'vType':vType,'fullname':fullname,'phone':phone,'email':email,'query':query},
		type:'POST',
		processData: true,
		dataType:'JSON'
	}).done(function(data){
		if(data.status == "Success"){
           $('#drop-a-query-modal').modal('hide');				
			$("#thanks-message").modal();
			setTimeout(function(){window.location.reload();},10000);
		}else{
			$.gritter.add({
				title: 'Failed',
				text: 'Failed To Save',
				class_name: 'gritter-info gritter-center' + 'gritter-light'
			});
			setTimeout(function(){window.location.reload();},10000);
		}
	});
}
/* End of Drop a Query Form*/
