/* ----------------- Start JS Document ----------------- */

var $ = jQuery.noConflict();

// Page Loader
$(window).load(function () {
    "use strict";
	$('#loader').fadeOut();
});

$(document).ready(function ($) {
	"use strict";



	/*----------------------------------------------------*/
	/*	Hidder Header
	/*----------------------------------------------------*/

	var headerEle = function(){
		var $headerHeight = $('header').height();
		$('.hidden-header').css({ 'height' : $headerHeight  + "px" });
	};

	$(window).load(function () {
	  headerEle();
	});

	$(window).resize(function () {
	   headerEle();
	});


    /*---------------------------------------------------*/
    /* Progress Bar
    /*---------------------------------------------------*/


    $('.skill-shortcode').appear(function() {
  		$('.progress').each(function(){
    		$('.progress-bar').css('width',  function(){ return ($(this).attr('data-percentage')+'%')});
  		});
	},{accY: -100});



    /*--------------------------------------------------*/
    /* Counter
    /*--------------------------------------------------*/



    $('.timer').countTo();

    $('.counter-item').appear(function() {
        $('.timer').countTo();
    },{accY: -100});





	/*----------------------------------------------------*/
	/*	Nav Menu & Search
	/*----------------------------------------------------*/

	$(".nav > li:has(ul)").addClass("drop");
	$(".nav > li.drop > ul").addClass("dropdown");
	$(".nav > li.drop > ul.dropdown ul").addClass("sup-dropdown");

	$('.show-search').click(function() {
		$('.search-form').fadeIn(300);
		$('.search-form input').focus();
	});

	$('.search-form input').blur(function() {
		$('.search-form').fadeOut(300);
	});










	/*----------------------------------------------------*/
	/*	Css3 Transition
	/*----------------------------------------------------*/

	$('*').each(function(){
		if($(this).attr('data-animation')) {
			var $animationName = $(this).attr('data-animation'),
				$animationDelay = "delay-"+$(this).attr('data-animation-delay');
			$(this).appear(function() {
				$(this).addClass('animated').addClass($animationName);
				$(this).addClass('animated').addClass($animationDelay);
			});
		}
	});









	/*----------------------------------------------------*/
	/*	Sticky Header
	/*----------------------------------------------------*/

	(function() {

		var docElem = document.documentElement,
			didScroll = false,
			changeHeaderOn = 100;
			document.querySelector( 'header' );

		// function init() {
		// 	window.addEventListener( 'scroll', function() {
		// 		if( !didScroll ) {
		// 			didScroll = true;
		// 			setTimeout( scrollPage, 250 );
		// 		}
		// 	}, false );
		// }

		function scrollPage() {
			var sy = scrollY();
			if ( sy >= changeHeaderOn ) {
				$('.top-bar').slideUp(300);
				$("header").addClass("fixed-header");
				//$('.navbar-brand').css({ 'padding-top' : 19 + "px", 'padding-bottom' : 19 + "px" });

				if (/iPhone|iPod|BlackBerry/i.test(navigator.userAgent) || $(window).width() < 479 ){
					$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 0 + "px", 'padding-bottom' : 0 + "px" })
				}else{
					$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 20 + "px", 'padding-bottom' : 20 + "px" })
					$('.search-side').css({ 'margin-top' : -7 + "px" });
				};

			}
			else {
				$('.top-bar').slideDown(300);
				$("header").removeClass("fixed-header");
				//$('.navbar-brand').css({ 'padding-top' : 27 + "px", 'padding-bottom' : 27 + "px" });

				if (/iPhone|iPod|BlackBerry/i.test(navigator.userAgent) || $(window).width() < 479 ){
					$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 0 + "px", 'padding-bottom' : 0 + "px" })
				}else{
					$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 28 + "px", 'padding-bottom' : 28 + "px" })
					$('.search-side').css({ 'margin-top' : 0  + "px" });
				};

			}
			didScroll = false;
		}

		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}

		init();



	})();
});