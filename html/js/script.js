$(function(){



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



});