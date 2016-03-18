// common scripts
(function() {
    "use strict";
	
	//for tooltip
	$('[data-toggle="tooltip"]').tooltip();
	$('#advance-booking').on('click' ,function(){
		xu_validation.form_submit('#Advance-Booking','save_advance_booking');		
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
	
})(jQuery);
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