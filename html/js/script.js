$(function(){

	$('.parallax').parallax();


/*Position Fixed On Scroll top */

	var stickySidebar = $('.sticky');

	if (stickySidebar.length > 0) {	
	  var stickyHeight = stickySidebar.height(),
	      sidebarTop = stickySidebar.offset().top;
	}

	// on scroll move the sidebar
	$(window).scroll(function () {
	  if (stickySidebar.length > 0) {	
	    var scrollTop = $(window).scrollTop();
	    if (sidebarTop < scrollTop) {
	      $('.sticky').css('top', scrollTop - sidebarTop);

	      // stop the sticky sidebar at the footer to avoid overlapping
	      var sidebarBottom = stickySidebar.offset().top + stickyHeight,
	          stickyStop = $('.PostContainer').offset().top +  $('.PostContainer').height();
	      if (stickyStop < sidebarBottom) {
	        var stopPosition = $('.PostContainer').height() - stickyHeight;
	        stickySidebar.css('top', stopPosition);
	      }
	    }
	    else {
	      stickySidebar.css('top', '0');
	    } 
	  }
	});



	/*Smooth Scroillig*/

var baseurl = $("#base_url").val();
	/*=================== Like Button for PostBox =======================*/



 $(".like-cnt").on("click",function(){
    var baseurl=$("#base_url").val();  
    var productID=$(this).data("likesid");
    alert(productID);
    $('like-cnt_'+productID).css('background','blue');
  /*  $.post(baseurl+"product/getTowishList"+productID,function(data){
      var data=$.parseJSON(data);  */
    });

/*--------------------script for comment fetch-----------------*/

  



/*
var check_status = false;
var like_cnt = $(".like-cnt");
var like_parent = $(".like-container");
*/
/*var likBtnId=$(this).data('likesid');*/
/*
var burst = new mojs.Burst({
  parent: like_parent,
  radius:   { 20: 60 },
  count: 15,
  angle:{0:30},
  children: {
    delay: 250,
    duration: 700,
    radius:{10: 0},
    fill:[ '#ddd' ],
    easing:mojs.easing.bezier(.08,.69,.39,.97)
  }
});

$(".like-cnt").click(function(){
  var t1 = new TimelineLite();
  var t2 = new TimelineLite();

  if(!check_status){
    t1.set(like_cnt, {scale:0});
    t1.set('.like-btn', {scale: 0});
    t1.to(like_cnt, 0.6, {scale:1, background: '#002a43',ease: Expo.easeOut});
    t2.to('.like-btn', 0.65, {scale: 1, ease: Elastic.easeOut.config(1, 0.3)}, '+=0.2');*/
//    t1.timeScale(5);
    //check_status=true;
    //circleShape.replay();
    /*burst.replay();
  }
  else{
    t1.to(like_cnt, 1, {scale:1})
      .to(like_cnt, 1, {scale:1, background: '#ddd', ease: Power4.easeOut});
      
    t1.timeScale(7);
    check_status=false;
  }
  
})*/



/*========= For Like ===========*/
$('.btnLike').on('click',function(){

  var baseUrl=$('#baseurl').val();

  var data:{
    
  }

})

});

