// common scripts
(function() {
    "use strict";
	
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

	

	$('#test-drive,#test-drive1').on('click', function(){		
		get_rtd_cities();
		get_rtd_categories();					
		get_rtd_manufacture();
		get_rtd_varient();
	});
	$('#adv-book,#adv-book1').on('click', function(){	
		adv_getCatDetails();
		//get_cities("abCity");				
		get_manufacture_adv();
		get_variant_adv();
	});

	$('#adv-book,#adv-book1').on('click', function(){	
		requestTD_getcityDetails();
		//get_cities("abCity");				
		requestTD_manufacture_adv();
		requestTD_variant_adv();
	});
	$('#on-road-assistance,#on-road-assistance1').on('click', function(){
		by_road_on_get_cities();
		by_road_on_getManufatureDetails();		
		by_road_on_getVariantDetail();
		by_road_on_categories();
	});

	$('document').ready(function(){
		$('#abModel').html('');
	});
	$('document').ready(function(){
		$('#boraModel').html('');
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
					$('#abModel').append('<option value="">-- Select Model --</option>');
					for(i=0;i< data.length;i++){
						$('#abModel').append('<option value="'+data[i]['modelID']+'">'+data[i]['modelName']+'</option>');
					}
					
				}else{
					
				}
			});
		
	});
	$('#RTD_Maker').on('change',function(){		
		var abMaker_detail = $(this ,'#RTD_Maker').val();
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
					$('#RTD_Model').html('');					
					var i=0;
					$('#RTD_Model').append('<option value="">-- Select Model --</option>');
					for(i=0;i< data.length;i++){
						$('#RTD_Model').append('<option value="'+data[i]['modelID']+'">'+data[i]['modelName']+'</option>');
					}
					
				}else{
					
				}
			});
		
	});
	$('#boraMaker').on('change',function(){		
		var abMaker_detail = $(this ,'#boraMaker').val();
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
					$('#boraModel').html('');					
					var i=0;
					for(i=0;i< data.length;i++){
						$('#boraModel').append('<option value="'+data[i]['modelID']+'">'+data[i]['modelName']+'</option>');
					}
					
				}else{
					
				}
			});
		
	});
	$('#btn_apply_vehicle_loan').on('click' ,function(){
		xu_validation.form_submit('#apply_for_vehicle_loan','save_vehicle_loan');		
	});
	$("#vehicle-loan,#vehicle-loan1").on('click',function(){
		get_vehlone_cities();
		get_vehlone_categories();
		get_vehlone_manufacture();
		get_vehlone_varient();
	});
	$('#insurance-save').on('click' ,function(){
		xu_validation.form_submit('#Apply-for-insurance','save_apply_for_insurance');		
	});
	$("#apply-for-insurance,#apply-for-insurance1").on('click',function(){
		get_insurance_cities();
		get_insurance_manufacture();
		get_insurance_varient();
	});
	
	
	$('#corp_save_data').on('click' ,function(){
		xu_validation.form_submit('#corporate_deals_form','save_corporate_deals');		
	});
	
	$("#corporate-deal,#corporate-deal1").on('click',function(){
		get_corp_cities();
		get_corp_categories();
		get_corp_manufacture();
		get_corp_varient();
	});
	$('#by-on-road-assistance').on('click' ,function(){
		xu_validation.form_submit('#By-on-road-assistance','save_by_on_road_assistance');		
	});
	
	$("#on-road-assistance,#on-road-assistance1").on('click',function(){
		get_road_cities();
		get_road_categories();
		get_road_manufacture();
		get_road_varient();
	});
	$("#get_instant_quote_popup").on('click',function(){
		get_instant_country();
		get_instant_category();
		get_instant_maker();
		get_instant_variant();
	});
	$('#get_instant_quote_form_save').on('click' ,function(){
		xu_validation.form_submit('#get_instant_quote_form','save_instant_quote');		
	});
})(jQuery);
var prefix=$("#prefix").data("prefix");


/* --------------------- Common Function Starts  --------------------------*/
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
function get_variant(callback){
	var callback="#"+callback;
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
		$(callback).html(html);
	});
}
function get_manufacture(callback){
	var callback="#"+callback;
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
		$(callback).html(html);
	});
}
/*---------------------------- Common Function Ends--------------------------*/




/*--------------------- Vechicle loan Popup Stats Here -------------*/
function get_vehlone_cities(){
	get_cities("vehlone_city");
}
function adv_getCatDetails(){
	get_cities("abCity");
}
function get_variant_adv(){
	get_variant("abVariant");
}
function get_manufacture_adv(){
	get_manufacture("abMaker");
}
function get_vehlone_categories(){
	get_categories("vehlone_category");
}
function get_vehlone_manufacture(){
	get_manufacture("vehlone_maker");
}
function get_vehlone_varient(){
	get_variant("vehlone_variant");
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


/*------------------- Corporate Deals Popup Starts Here -----------------*/

function get_corp_cities(){
	get_cities("corp_city");
}
function get_corp_categories(){
	get_categories("corp_category");
}
function get_corp_manufacture(){
	get_manufacture("corp_maker");
}
function get_corp_varient(){
	get_variant("corp_variant");
}
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
/*------------------- Corporate Deals Popup Ends Here -----------------*/

/*---------------------GET INSTANCE QUOTE POPUP STARTS --------------*/
function get_instant_country(){
	get_all_country("instquote_country");
}
function get_instant_category(){
	get_categories("instquote_category");
}
function get_instant_maker(){
	get_manufacture("instquote_maker");
}
function get_instant_variant(){
	get_variant("instquote_variant");
}
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
/*---------------------GET INSTANCE QUOTE POPUP ENDS --------------*/
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
/* Advanced Booking End Starts Here */
/* Requist For Test Drive Starts Here */
function get_rtd_cities(){
	get_cities("RTD_City");
}
function get_rtd_categories(){
	get_categories("RTD_Category");
}
function get_rtd_manufacture(){
	get_manufacture("RTD_Maker");
}
function get_rtd_varient(){
	get_variant("RTD_Variant");
}
function Request_TestDrive_Save(){
	$.ajax({
			url:prefix+'/services/Request_for_TestDrive',
			dataType:'JSON',
			type:'POST',
			data:$('#Request_for_TestDrive').serialize()
		}).done(function(data){
			
			if(data == "Success"){	
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

/* Requist For Test End Starts Here */
/* by road assistance pop up start here*/

/*------------------- road assistance popup -----------------*/


function get_road_cities(){
	get_cities("boraCity");
}
function get_road_categories(){
	get_categories("boraCategory");
}
function get_road_manufacture(){
	get_manufacture("boraMaker");
}
function get_road_varient(){
	get_variant("boraVarient");
}
$("#boraMaker").on('change',function(){
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
		$("#boraModel").html(html);
	});
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

var prefix=$("#prefix").data("prefix");
$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
$('.inpt-timepicker').timepicker();
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




/*------------------- apply for insurance Popup Starts Here -----------------*/

function get_insurance_cities(){
	get_cities("insurance_city");
}

function get_insurance_manufacture(){
	get_manufacture("insurance_maker");
}
function get_insurance_varient(){
	get_variant("insurance_variant");
}
$("#insurance_maker").on('change',function(){
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
		$("#insurance_model").html(html);
	});
});
function save_apply_for_insurance(){
	var vType="INSERT";
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
		data:{'vType':vType,'phone':phone,'email':email,'cityID':cityID,'manufactureID':manufactureID,'modelID':modelID,'variantID':variantID,'date':date,'time':time,'customer_type':customer_type,'use':use,'needLoan':needLoan,'loan_amount':loan_amount,'loan_duration':loan_duration,'preferenceBank':preferenceBank,'purchaseTimeFrame':purchaseTimeFrame,'salaryAccountBank':salaryAccountBank,'comment':comment,'termsandconditions':termsandconditions},
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
/*-------------------apply for insurance pop end -----------------*/
