$(function(){

	var baseurl = $("#base_url").val();

	$(".user_login").on("click",function(){

		var data = {
			'email' : $("#email").val(),
			'password' : $("#password").val()
		};
			/*$.post(baseurl+"login/dologin/",{data:data},function(data){*/
			$.post(baseurl+"User_login/userlog/",{data:data},function(data){

				var check = jQuery.parseJSON(data);
				if(check.status=='ok')
				{
					alert("ok");
					window.location.href=baseurl+"ProfileDashboard";
				}
				else if(check.status=='fail')
				{
					alert("login fail");
				}
				else
				{
					console.log(data);
				}
			});
	
	});
});