$(function(){

	/*parallax effect*/
    


  $('#postStory').val('');
  $('#postStory').trigger('autoresize');

	/*Post View/media/status/blog*/	

	$('.statusPostBtn').on('click',function(){
		$('#postStatus').show();
		$('#postMedia').hide();
		$('#postLocation').hide();
	});


	$('.mediaPostBtn').on('click',function(){
		$('#postMedia').show();
		$('#postStatus').hide();
		$('#postLocation').hide();
	});


	$('.locationPostBtn').on('click',function(){
		$('#postLocation').show();
		$('#postMedia').hide();
		$('#postStatus').hide();
	});
	
	/*mediaPostBtn
	*/
	/* // Post View/media/status/blog*/	



	var baseurl = $("#base_url").val();

		$("#postPOSTButton").on("click",function(){

				var reg_form = new FormData($("#postPOST")[0]);
				$.ajax({

					url : baseurl+"ProfileDashboard/postStatus",
					type :"POST",
					data :reg_form,	
					contentType:false,
					processData:false,
					success:function(res)
					{
						/*window.location.href = reload();*/
						/*window.location.href=baseurl+"RegisterNext";*/
						window.location.reload();
					}
				});
		});


	/*$('#postPOSTButton').on('click',function(){

		var baseUrl=$('#base_url').val();

		var data = {
			'postData' : $("#postStory").val(),
			'post_status' : $("#postStatus").val(),
			'email' : $("#email").val(),
			'post_location' : $("#postLocation").val(),
			'postTag' : $("#postTags").val(),
		};
			
			$.post(baseUrl+"ProfileDashboard/postStatus/",{data:data},function(data){

				var check = jQuery.parseJSON(data);
				if(check.status=='ok')
				{
					alert("ok");
					window.location.reload();
				}
				else if(check.status=='fail')
				{
					alert("login fail");
					window.location.href='#!';
				}
				else
				{
					console.log(data);
				}
			});
	});
*/






/*Get Cuurt Time*/
	
	

});