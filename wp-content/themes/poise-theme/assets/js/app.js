$(document).ready(function() {
	'use strict';

	/* Add class to html if js enabled.
	--------------------------------------*/
	$('html').addClass('js');

	$('.hamburger').on('click', function() {
		$(this).toggleClass('is-active');
		$('body').toggleClass('mobile-nav-active');
	});

	/* Add class to html if js enabled.
	--------------------------------------*/
	// if ($.cookie('t24')) {
	// 	$.cookie('t24');
	// 	$('body').addClass('returning-user');
	// } else {

	// }

	// if (typeof $.cookie('t24') === 'undefined'){
	// 		//no cookie

	// 	} else {
	// 		//cookie
	// 		$.cookie('t24');
	// 		$('body').addClass('returning-user');
	// 	}

	/* On scroll, add class .user-has-scrolled to body.
	--------------------------------------*/
	$(function() {
		var body = $('body');
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			// Set scroll distance.
			if (scroll >= 90) {
				body.addClass('user-has-scrolled');
			} else {
				body.removeClass('user-has-scrolled');
			}
		});
	});

	/* Add ID to each section.
	--------------------------------------*/
	var section_id = 1;
	$('.section').each(function() {
		$(this).attr('data-t24-section', section_id);
		$(this).attr('id', 's-'+section_id);
		section_id++;
	});

	/* Add ID to each column.
	--------------------------------------*/
	var col_id = 1;
	$('.col, .cols').each(function() {
		$(this).attr('data-t24-col', col_id);
		$(this).attr('id', 'col-'+col_id);
		col_id++;
	});

	/* Add ID to each component.
	--------------------------------------*/
	var t24_id = 1;
	$('.t24-component').each(function() {
		$(this).attr('data-t24-component', t24_id);
		$(this).attr('id', 'c-'+t24_id);
		t24_id++;
	});

	/* Scroll to #main smoothly.
	--------------------------------------*/
	$('.lede__arrow').on('click', function() {
		$('html, body').animate({
			scrollTop: $("#main").offset().top-90
		}, 800)
	});

	/* Scroll to Top smoothly.
	--------------------------------------*/
	$('.scroll-to-top').on('click', function() {
		$('html, body').animate({
			scrollTop: $(".lede").offset().top-90
		}, 1250)
	});

	/* Details fix.
	--------------------------------------*/
	$('.details__header').each(function() {
		$(this).on('click', function() {
			$(this).parent().toggleClass('details--open');
		})
	});

	document.getElementById('lede__video').play();
})(jQuery);