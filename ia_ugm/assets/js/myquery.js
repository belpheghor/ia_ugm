var stickyNavTop = $('.navbar-float').offset().top;
var whiteNavTop = $('#head-bg').offset().top + $("#head-bg").height();


$(window).scroll(function() {
	bg_fix();
	stickyNav();
	whiteNav();
})

function bg_fix() {
    var scrollTop = $(window).scrollTop()
	$('#head-bg').css('background-position','center ' + (scrollTop*0.7) + 'px')
}



// When the user scrolls the page, execute myFunction 
// Get the navbar

	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	 function stickyNav(){
                    			// grab the initial top offset of the navigation 
		   	
		   	
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			         
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > stickyNavTop) { 
			        $('.navbar-float').addClass('sticky');
			    } else {
			        $('.navbar-float').removeClass('sticky'); 
			    }
			};

		   	 function whiteNav(){
                    			// grab the initial top offset of the navigation 
		   	
		   	
			    // our current vertical position from the top
				 var scrollNav = $('#navbar-home').height() + $(window).scrollTop();
			         
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollNav > whiteNavTop) { 	
			        $('#navbar-home').addClass('whiteNav');
			    } else {
			        $('#navbar-home').removeClass('whiteNav'); 
			    }
			};
 

