$(function(){

$(".mybtn").on("click",function(){
 $(".modal").modal();
    $("#q .modal-content").html("");
	$("#q").modal("open");
	var dataid = $(this).data("messid");
	$.post(baseurl+"ProfileDashboard/getcomm/"+dataid,function(dataid){
		$("#q .modal-content").html(dataid);
	});
});

$(".adddeshcomment").on("click",function(){

	var dasform = new FormData($("#dasform")[0]);
	$.ajax({

		url : "ProfileDashboard/adddashcomment",
		data : dasform,
		type:"POST",
		contentType:false,
		processData:false,
		success:function(res)
		{
			
		}
	});
});



/*rating js*/

$(".rating").on("click",function()
{

	var reg_form = new FormData($("#rating-form")[0]);
	$.ajax({

    url : baseurl+"ProfileDashboard/ratingpost/",


    type :"POST",
    data :reg_form, 
    contentType:false,
    processData:false,
    success:function(res)
    {
     /* window.location.reload();*/
    }
  });
});


/*-----comment js--------*/
$(".post-btn").on("click",function(){


  var reg_form = new FormData($("#commentform")[0]);
  var id = $(this).data("comid");

  $.ajax({

    url : baseurl+"ProfileDashboard/commentpost/",
    type :"POST",
    data :reg_form, 
    contentType:false,
    processData:false,
    success:function(res)
    {
      /*window.location.reload();*/
    }
  });
}); 


$('#demo').on("click",function(){

	$(".modal").modal();
	$("#personal-model").modal("open");

});


	$(".like-cnt").click(function() {
  var n = Number($("strong").attr("data-n"))+1;
  $("strong").html(
    a(n,1)+"<i></i>"
  ).attr("data-n",n);
});
	function a(a,b){b=Math.pow(10,b);var c=["k","m","b","t"];for(var i=b.length-1;i>=0;i--){var d=Math.pow(10,(i+1)*3);if(d<=a){a=Math.round(a*b/d)/b;if((a==1000)&&(i<c.length-1)){a=1;i++}a+=c[i];break}}return a}
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


		$("#mediapost").on("click",function(){

				var reg_form = new FormData($("#postMediaa")[0]);
				$.ajax({

					url : baseurl+"ProfileDashboard/postMedia",
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
});