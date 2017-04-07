// jQuery for page scrolling feature - requires jQuery Easing plugin

function onResize(winWidth) {

	if ( winWidth < 769 ) {
		$('section.ge_background_wrapper').css('height', '100%');
		$('ul.nav.navbar-nav').removeClass('nav-justified')
		$('nav.navbar').addClass('navbar-fixed-top');
			
	} else {
		$('section.ge_background_wrapper').css('height', '100vh');		
		$('ul.nav.navbar-nav').addClass('nav-justified');
		$('nav.navbar').removeClass('navbar-fixed-top');
	}		
}


jQuery(function() {
	

	jQuery('.page-top').click(function(event) {
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
		return false;
	});

	// Closes the Responsive Menu on Menu Item Click
	jQuery('.navbar-collapse ul li a').click(function() {
		jQuery('.navbar-toggle:visible').click();
	});

	var onePage = jQuery('body.backend-layout-t3sbootstrap_10');
	
	if (onePage.length) {
	
		jQuery('a.page-scroll').bind('click', function(event) {
			var $anchor = $(this);
			jQuery('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});	

		// navbar fixed top
		var navpos = $('#navbar-main').offset();
		var navheight = $('#navbar-main').outerHeight();
		
		$(window).bind('scroll', function() {
			if ($(window).scrollTop() > navpos.top) {
				$('#navbar-main').addClass('navbar-fixed-top');
				$('body').css('marginTop',navheight);
			} else {
				$('#navbar-main').removeClass('navbar-fixed-top');
				$('body').css('marginTop','0');
			}
		});
		
		var winWidth = $(window).width();
		onResize(winWidth);
	
		$(window).on('resize', function(){
			var winWidth = $(window).width();
			onResize(winWidth);
		});
	
	}

});
