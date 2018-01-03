$(function(){

	 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
         $('select').material_select();
		var baseurl = $("#base_url").val();

		$(".user_Register").on("click",function(){

				var reg_form = new FormData($("#user_reg")[0]);
				$.ajax({

					url : baseurl+"user_register/user_reg_data",
					type :"POST",
					data :reg_form,	
					contentType:false,
					processData:false,
					success:function(res)
					{
						window.location.reload();
					}
				});
		});

	$(".usernextdata").on("click",function(){

		var reg_form = new FormData($("#nextform")[0]);
		$.ajax({

			url : baseurl+"RegisterNext/addnextdata",
			type :"POST",
			data :reg_form,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				window.location.href = baseurl+"user_login";
				/*window.location.reload();*/
			}
		});

	});	
});