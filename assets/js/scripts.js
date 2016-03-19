// common scripts
(function() {
    "use strict";
	
	//for tooltip
	$('[data-toggle="tooltip"]').tooltip();
	$('#advance-booking').on('click' ,function(){
		xu_validation.form_submit('#Advance-Booking','save_advance_booking');		
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
					for(i=0;i< data.length;i++){
						$('#abModel').append('<option value="'+data[i]['modelID']+'">'+data[i]['modelName']+'</option>');
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
})(jQuery);
var prefix=$("#prefix").data("prefix");


/* --------------------- Common Function Starts  --------------------------*/

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
	var needLoad=$("#corp_needloan").val();
	var loanLooking=$("#corp_loan_looking").val();
	var lookDuration=$("#corp_loan_duration").val();
	var preferenceBank=$("#corp_pref_bank").val();
	var purchaseTimeFrame=$("#corp_purchase_time_frame").val();
	var bestTimeToCall=$("#corp_best_time_to_call").val();
	var salaryAccountBank=$("#corp_salary_account").val();
	var comment=$("#corp_comment").val();
	var termsandconditions=$("#corp_termsadnconditions").val();
	$.ajax({
		url:prefix+'/home/add_corporrate_deals/',
		data:{'vType':vType,'fullname':fullname,'phone':phone,'email':email,'address':address,'cityID':cityID,'manufactureID':manufactureID,'modelID':modelID,'variantID':variantID,'categoryID':categoryID,'quality_of_vehicle':quality_of_vehicle,'needLoad':needLoad,'loanLooking':loanLooking,'lookDuration':lookDuration,'preferenceBank':preferenceBank,'purchaseTimeFrame':purchaseTimeFrame,'bestTimeToCall':bestTimeToCall,'salaryAccountBank':salaryAccountBank,'comment':comment,'termsandconditions':termsandconditions},
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
/* Advanced Booking End Starts Here */

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
/*-------------------road assistance popup-----------------*/
