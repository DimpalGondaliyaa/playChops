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



	$('#postPOSTButton').on('click',function(){

		var baseUrl=$('#base_url').val();

		var data = {
			'postData' : $("#postStory").val(),
			'post_status' : $("#postStatus").val(),
			'post_location' : $("#postLocation").val(),
			'postTag' : $("#postTags").val(),
		};
			/*$.post(baseurl+"login/dologin/",{data:data},function(data){*/
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




});