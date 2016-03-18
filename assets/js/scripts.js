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
	
})(jQuery);
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
					$('#abVariant').append('<option value="'+data[i]['manufactureID']+'">'+data[i]['manufactureName']+'</option>');
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