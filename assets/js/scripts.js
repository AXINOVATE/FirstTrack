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
	
})(jQuery);
function get_cities(){
	alert('hello');
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
	