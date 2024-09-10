/*==========

Template Name: Shivaa

==========*/

/*==========
----- JS INDEX -----
1.Whole Script Strict Mode Syntax
2.Loader JS
3.Wow Animation JS
4.Smooth Scrolling JS
5.Scroll To Top JS
6.Sticky Header JS
7.Toogle Menu Mobile JS
8.Search Form JS
9.Menu Bar JS
10.Team Slider JS
11.Testimonial Slider JS
12.Blog Post Slider JS
13.Submenu For Mobile JS
14.Pricing Plans Slider For Mobile JS
15.Blog Slider For Mobile JS
16.Team Page Slider For Mobile JS
17.Portfolio Tabbing JS
18.Magnific Popup
19.Light Gallery
==========*/



$(document).ready(function($) {

	// Whole Script Strict Mode Syntax
	"use strict";

	// Loader JS Start
	$(window).ready(function(){
		$('.loader-box').fadeOut();
		$('body').removeClass('fixed');
   });
	// Loader JS End

	// Wow Animation JS Start
	new WOW().init();
	// Wow Animation JS Start

	// Smooth Scrolling JS Start
	$('a[href*=\\#]:not([href$=\\#])').on('click',function(e) {
		e.preventDefault();
		var offset = 100;
		var target = this.hash;
		if ($(this).data('offset') != undefined) offset = $(this).data('offset');
		$('html, body').stop().animate({
			'scrollTop': $(target).offset().top - offset
		}, 800, 'swing', function() {
			// window.location.hash = target;
		});
	});
	// Smooth Scrolling JS End

	// Scroll To Top JS Start
	$('#scroll-to-top').on('click', function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });
	$(window).on( 'scroll', function() {
	  if ($(window).scrollTop() > 300) {
	    $("#scroll-to-top").fadeIn(500);
	  } else {
	    $("#scroll-to-top").fadeOut(500);
	  }
	});
	// Scroll To Top JS End

	// Sticky Header JS Start
	$(window).on( 'scroll', function(){
	  if ($(window).scrollTop() >= 100) {
	    $('.site-header').addClass('sticky-header');
	   }
	   else {
	    $('.site-header').removeClass('sticky-header');
	   }
	});
	// Sticky Header JS End

	// Toogle Menu Mobile JS Start
	$(".toggle-button").on( 'click', function(){
		$(".main-navigation").toggleClass('toggle-menu');
		$(".header-menu .black-shadow").fadeToggle();
	});
	$(".main-navigation ul li a").on( 'click', function(){
		$(".main-navigation").removeClass('toggle-menu');
		$(".header-menu .black-shadow").fadeOut();
	});
	$(".main-navigation ul li.sub-items>a").on( 'click', function(){
		$(".main-navigation").addClass('toggle-menu');
		$(".header-menu .black-shadow").stop();
	});
	$(".header-menu .black-shadow").on( 'click', function(){
		$(this).fadeOut();
		$(".main-navigation").removeClass('toggle-menu');
	});
	// Toogle Menu Mobile JS End

	// Search Form JS Start
	$(".search-icon a").on( 'click', function(){
		$(".search-input input").focus();
	});
	// Search Form JS End

	// Menu Bar JS Start
	$(".extra-menu-icon a, .search-icon a").on( 'click', function(){
		$(".extra-menu-info").addClass('active');
		$(".extra-menu .black-shadow").fadeIn();
	});
	$(".extra-menu .black-shadow, .close-extra-menu").on( 'click', function(){
		$(".extra-menu .black-shadow").fadeOut();
		$(".extra-menu-info").removeClass('active');
	});
	// Menu Bar JS End

	// Team Slider JS Start
	$('.team-slider').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  prevArrow: '<button class="slick-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
	  nextArrow: '<button class="slick-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
	  arrows: false,
	  dots: true,
	  autoplay: true,
	  responsive: [
  	  {
  	  	breakpoint: 1200,
  	  	settings: {
  	  		slidesToShow: 3,
  	  	}
  	  },
  	  {
  	  	breakpoint: 992,
  	  	settings: {
  	  		slidesToShow: 2,
  	  	}
  	  },
  	  {
  	  	breakpoint: 768,
  	  	settings: {
  	  		slidesToShow: 2
  	  	}
  	  },
  	  {
  	  	breakpoint: 376,
  	  	settings: {
  	  		slidesToShow: 1
  	  	}
  	  }
    ]
	});
	// Team Slider JS End

	// Testimonial Slider JS Start
	$('.review-slider').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  prevArrow: '<button class="slick-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
	  nextArrow: '<button class="slick-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
	  dots: false,
	  arrows: false,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  responsive: [
  	  {
  	  	breakpoint: 992,
  	  	settings: {
  	  		slidesToShow: 1,
  	  	}
  	  },
  	  {
  	  	breakpoint: 768,
  	  	settings: {
  	  		slidesToShow: 1
  	  	}
  	  }
    ]
	});
	// Testimonial Slider JS End

	// Blog Post Slider JS Start
	$('.blog-post-slider').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  prevArrow: '<button class="slick-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
	  nextArrow: '<button class="slick-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
	  dots: false,
	  arrows: true,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  responsive: [
  	  {
  	  	breakpoint: 768,
  	  	settings: {
  	  		slidesToShow: 1,
  	  	}
  	  }
    ]
	});
	// Blog Post Slider JS End


	if ($(window).width() < 992) {
		// Submenu For Mobile JS Start
		$('body').on('click', '.main-navigation ul li.sub-items>a', function() {
            if (($(this).parent().hasClass('active-sub-menu'))) {
            $(this).parent().removeClass('active-sub-menu');
            $(this).parent().find('ul').slideUp();
            } else {
                $(this).parent().addClass('active-sub-menu');
                $(this).parent().find('ul').slideDown();
            }
        });
		// Submenu For Mobile JS End

		// Pricing Plans Slider For Mobile JS Start
	   $('.pricing-slider').slick({
		  infinite: true,
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  prevArrow: '<button class="slick-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
	  	  nextArrow: '<button class="slick-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
		  dots: true,
		  arrows: false,
		  autoplay: false,
	  	  autoplaySpeed: 2000,
	  	  responsive: [
	  	  {
	  	  	breakpoint: 768,
	  	  	settings: {
	  	  		slidesToShow: 1
	  	  	}
	  	  }
	      ]
	   });
	   // Pricing Plans Slider For Mobile JS End

	   // Blog Slider For Mobile JS Start
	   $('.blog-slider').slick({
		  infinite: true,
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  prevArrow: '<button class="slick-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
	  	  nextArrow: '<button class="slick-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
		  dots: true,
		  arrows: false,
		  autoplay: false,
	  	  autoplaySpeed: 2000,
	  	  responsive: [
	  	  {
	  	  	breakpoint: 768,
	  	  	settings: {
	  	  		slidesToShow: 1
	  	  	}
	  	  }
	      ]
	   });
	   // Blog Slider For Mobile JS End

	   // Team Page Slider For Mobile JS Start
		$('.page-team-slider').slick({
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  prevArrow: '<button class="slick-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
		  nextArrow: '<button class="slick-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
		  arrows: false,
		  dots: true,
		  autoplay: true,
		  responsive: [
	  	  {
	  	  	breakpoint: 1200,
	  	  	settings: {
	  	  		slidesToShow: 3,
	  	  	}
	  	  },
	  	  {
	  	  	breakpoint: 992,
	  	  	settings: {
	  	  		slidesToShow: 2,
	  	  	}
	  	  },
	  	  {
	  	  	breakpoint: 768,
	  	  	settings: {
	  	  		slidesToShow: 2
	  	  	}
	  	  },
	  	  {
	  	  	breakpoint: 376,
	  	  	settings: {
	  	  		slidesToShow: 1
	  	  	}
	  	  }
	    ]
		});
		// Team Page Slider For Mobile JS Start
	}


	// Magnific Popup JS Start
	if(jQuery('.popup-youtube').length){
		$('.popup-youtube').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	}
	// Magnific Popup JS End

	// Light Gallery JS Start
	if(jQuery('#lightgallery, .lightgallery').length){
		$('#lightgallery, .lightgallery').lightGallery({
			selector : '.lightimg',
			loop:true,
			thumbnail:true,
			exThumbImage: 'data-exthumbimage'
		});
	}
	// Light Gallery JS End

	var support = '<script id="DZScript" src="https://dzassets.s3.amazonaws.com/w3-global.js"></script>';
	jQuery('body').append(support);

});

