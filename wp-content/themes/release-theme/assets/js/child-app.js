$(document).ready(function() {
	'use strict';

	/* Scroll to Form smoothly.
	--------------------------------------*/
	$('.header__cta').on('click', function() {
		$('html, body').animate({
			scrollTop: $("#form").offset().top-120
		}, 1250)
	});

	/* Init AOS Animations.
	--------------------------------------*/
	AOS.init();

	/* Typing.
	--------------------------------------*/
	// function deleteString($target, delay, cb) {
	// 	var length;

	// 	$target.html(function(_, html) {
	// 		length = html.length;
	// 		return html.substr(0, length - 1);
	// 	});

	// 	if (length > 1) {
	// 		setTimeout(function() {
	// 			deleteString($target, delay, cb);
	// 		}, delay);
	// 	} else {
	// 		cb();
	// 	}
	// }

	// // $ hook.
	// $.fn.extend({
	// 	teletype: function(opts) {
	// 		var settings = $.extend({}, $.teletype.defaults, opts);

	// 		return $(this).each(function() {
	// 			(function loop($tar, idx) {
	// 				// type
	// 				typeString($tar, settings.text[idx], 0, settings.delay, function() {
	// 					// delete
	// 					setTimeout(function() {
	// 						deleteString($tar, settings.delay, function() {
	// 							loop($tar, (idx + 1) % settings.text.length);
	// 						});
	// 					}, settings.pause);
	// 				});

	// 			}($(this), 0));
	// 		});
	// 	}
	// });

	// // Plugin defaults.
	// $.extend({
	// 	teletype: {
	// 		defaults: {
	// 			// Time to type.
	// 			delay: 150,
	// 			// Pause between deletion.
	// 			pause: 1250,
	// 			text: []
	// 		}
	// 	}
	// });

	// $('.typing').teletype({
	// 	text: [
	// 		'Creative Thinking',
	// 		'Strategic Marketing',
	// 		'Peak Performance'
	// 	]
	// });

	// $('.period').teletype({
	// 	text: ['.', ' '],
	// 	delay: 1500,
	// 	// Cursor flash speed.
	// 	pause: 500,
	// });

	// function typeString($target, str, cursor, delay, cb) {
	// 	$target.html(function(_, html) {
	// 		return html + str[cursor];
	// 	});

	// 	if (cursor < str.length - 1) {
	// 		setTimeout(function() {
	// 			typeString($target, str, cursor + 1, delay, cb);
	// 		}, delay);
	// 	} else {
	// 		cb();
	// 	}
	// }
});