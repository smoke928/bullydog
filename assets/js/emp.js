(function ($) {
	$.fn.emp = function (parameters) {
    	api_key = 'c8nwvfq5cn5dp3e27nm6udn7'
    	$('#emp').append('<div class="form-group"><input class="form-control" placeholder="Tuner Name: ie. Stock, Cold Air, 93 Octane" name="tuner_name" type="text"></div>');
    	$('#emp').append('<span id="">Select Year: </span> <select class="form-control" id="select_year" name="select_year" class="emp_select"></select><br />');
    	$('#select_year').append('<option value="" disabled selected>Select Year</option>');
    	$('#emp').append(' <span id="">Select Make: </span> <select class="form-control" id="select_make" name="select_make" class="emp_select"></select><br />');
    	$('#select_make').append('<option value="" disabled selected>Select Make</option>');
    	$('#emp').append(' <span id="">Select Model: </span> <select class="form-control" id="select_model" name="select_model" class="emp_select"></select><br />');
    	$('#select_model').append('<option value="" disabled selected>Select Model</option>');
    	$('#emp').append(' <span id="">Select Package: </span> <select class="form-control"  id="select_package" name="select_package" class="emp_select"></select><br />');
    	$('#select_package').append('<option value="" disabled selected>Select Package</option>');
		
		while(parameters.end_year > parameters.start_year - 1){
			$('#select_year').append('<option value="'+parameters.end_year+'">'+parameters.end_year+'</option>');
			parameters.end_year --;
		}
		
		$('#select_model').change(function(){
			$('#select_package').val('').empty();
			$('#select_package').append('<option value="" disabled selected>Select Package</option>');
			$.ajax({			
			    url			: 'https://api.edmunds.com/api/vehicle/v2/'+$('#select_make').val()+'/'+$('#select_model').val()+'/'+$('#select_year').val()+'/styles?state=used&view=basic&fmt=json&api_key='+api_key,
			    type		: 'GET',
			    dataType 	: 'json',
			    success: function(data, textStatus, jqXHR)
			    {
			        $.each(data, function (k, styles){
			        	$.each(styles, function(k, style){
			        		$('#select_package').append('<option value="'+style.id+'">'+style.name+'</option>');
			        	});
			        	
			        });
			         
			        
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
			 
			    }
			});
		});
		
		$('#select_make').change(function(){
			$('#select_model').val('').empty();
			$('#select_model').append('<option value="" disabled selected>Select Model</option>');
			$('#select_package').val('').empty();
			$('#select_package').append('<option value="" disabled selected>Select Package</option>');
			$.ajax({
			    url			: 'https://api.edmunds.com/api/vehicle/v2/'+$('#select_make').val()+'?state=used&year='+$('#select_year').val()+'&view=basic&fmt=json&api_key='+api_key,
			    type		: 'GET',
			    dataType 	: 'json',
			    success: function(data, textStatus, jqXHR)
			    {
			        $.each(data.models, function (k, models){
			        	$('#select_model').append('<option value="'+models.niceName+'">'+models.name+'</option>');
			        });
			         
			        
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
			 
			    }
			});
		});
		
		$('#select_year').change(function(){
			$('#select_make').val('').empty();
			$('#select_make').append('<option value="" disabled selected>Select Make</option>');
			$('#select_model').val('').empty();
			$('#select_model').append('<option value="" disabled selected>Select Model</option>');
			$('#select_package').val('').empty();
			$('#select_package').append('<option value="" disabled selected>Select Package</option>');
			$.ajax({
			    url			: 'https://api.edmunds.com/api/vehicle/v2/makes?state=used&year='+$('#select_year').val()+'&view=basic&fmt=json&api_key='+api_key,
			    type		: 'GET',
			    dataType 	: 'json',
			    success: function(data, textStatus, jqXHR)
			    {
			        $.each(data, function (k, makeslist){
			        	$.each(makeslist, function(key, makes){
			        		$('#select_make').append('<option value="'+makes.niceName+'">'+makes.name+'</option>');
			        	});
			        });
			         
			        
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
			 
			    }
			});
		});
		$('#save_vehicle').click(function(){
			alert('Vehicle Saved');
		});
		$('#openBtn').click(function(){
			$('#myModal').modal({show:true})
		});
		
	};
}(jQuery));