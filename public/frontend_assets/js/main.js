(function ($) {
	"use strict";

/*=============================================
	=    		 Preloader			      =
=============================================*/
function preloader() {
	$('#preloader').delay(0).fadeOut();
};

$(window).on('load', function () {
	preloader();
	mainSlider();
	mainSliderTwo();
	wowAnimation();
});


/*=============================================
	=    	   Toggle Active  	         =
=============================================*/
$('.cat-toggle').on('click', function () {
	$('.category-menu').slideToggle(500);
	return false;
});
$('.more_slide_open').slideUp();
$('.more-categories').on('click', function () {
	$(this).toggleClass('show');
	$('.more_slide_open').slideToggle();
});


/*=============================================
	=       Product Tooltip Active        =
=============================================*/
$(".tooltip-btn").click(function () {
	$(".product-tooltip-item").removeClass("active"),
		$(this).next().addClass("active"),
		$(this).parents(".slider-two-item").addClass("active")
});
$(".product-tooltip-item .close-btn").click(function () {
	$(this).parent().removeClass("active")
});


/*=============================================
	=    		Mobile Menu			      =
=============================================*/
//SubMenu Dropdown Toggle
if ($('.menu-area li.menu-item-has-children ul').length) {
	$('.menu-area .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

}

//Mobile Nav Hide Show
if ($('.mobile-menu').length) {

	var mobileMenuContent = $('.menu-area .main-menu').html();
	$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

	//Dropdown Button
	$('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function () {
		$(this).toggleClass('open');
		$(this).prev('ul').slideToggle(500);
	});
	//Menu Toggle Btn
	$('.mobile-nav-toggler').on('click', function () {
		$('body').addClass('mobile-menu-visible');
	});

	//Menu Toggle Btn
	$('.menu-backdrop, .mobile-menu .close-btn').on('click', function () {
		$('body').removeClass('mobile-menu-visible');
	});
}



/*=============================================
	=          Data Background               =
=============================================*/
$("[data-background]").each(function () {
	$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
})


/*=============================================
	=     Menu sticky & Scroll to top      =
=============================================*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 370) {
		$("#sticky-header").removeClass("sticky-menu");
		$('.scroll-to-target').removeClass('open');

	} else {
		$("#sticky-header").addClass("sticky-menu");
		$('.scroll-to-target').addClass('open');
	}
});


/*=============================================
	=    		 Scroll Up  	         =
=============================================*/
if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
}



/*=============================================
	=    		 Main Slider		      =
=============================================*/
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: true,
		fade: true,
		arrows: false,
		responsive: [
			{ breakpoint: 767, settings: { dots: false, arrows: false } }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}


/*=============================================
	=    		 Main Slider		      =
=============================================*/
function mainSliderTwo() {
	var BasicSlider = $('.slider-active-two');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: false,
		fade: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>',
		appendArrows: ".banner-nav",
		responsive: [
			{ breakpoint: 767, settings: { dots: false, arrows: false } }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}


/*=============================================
	=    	 Slider Range Active  	         =
=============================================*/

var fil_min = $('#min_price').val();
var fil_max = $('#max_price').val();
$("#slider-range").slider({
	range: true,
	min: 100,
	max: 100000,
	values: [fil_min, fil_max],
	slide: function (event, ui) {
		$("#amount").val("Rs" + ui.values[0] + " - Rs" + ui.values[1]);
		$('#min_price').val(ui.values[0]);
		$('#max_price').val(ui.values[1]);
	}
});
$("#amount").val("Rs" + $("#slider-range").slider("values", 0) + " - Rs" + $("#slider-range").slider("values", 1));


/*=============================================
	=    		Brand Active		      =
=============================================*/
$('.brand-active').slick({
	dots: false,
	infinite: true,
	speed: 1500,
	autoplay: true,
	arrows: false,
	slidesToShow: 7,
	slidesToScroll: 2,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});



/*=============================================
	=    		Add-Banner Active		      =
=============================================*/
$('.banner-active').slick({
	dots: true,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});



/*=============================================
	=    		Sell Active		   =
=============================================*/
$('.sell-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: true,
	prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>',
	appendArrows: ".sell-nav",
	slidesToShow: 6,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    		Sell Active		   =
=============================================*/
$('.wc-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: true,
	prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
	appendArrows: ".wc-nav",
	slidesToShow: 3,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    		Arrivals Active		      =
=============================================*/
$('.arrivals-active').slick({
	dots: true,
	infinite: true,
	speed: 2000,
	autoplay: false,
	arrows: false,
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    Popular-Product Active    =
=============================================*/
$('.popular-product-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 6,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});



/*=============================================
	=    		 Cart Active  	         =
=============================================*/
$(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
$(".qtybutton").on("click", function () {
	var $button = $(this);
	var oldValue = $button.parent().find("input").val();
	if ($button.text() == "+") {
		var newVal = parseFloat(oldValue) + 1;
	} else {
		// Don't allow decrementing below zero
		if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
		} else {
			newVal = 0;
		}
	}
	$button.parent().find("input").val(newVal);
});



/*=============================================
	=    	  Countdown Active  	         =
=============================================*/
$('[data-countdown]').each(function () {
	var $this = $(this), finalDate = $(this).data('countdown');
	$this.countdown(finalDate, function (event) {
		$this.html(event.strftime('<div class="time-count day"><span>%D</span><strong>Days</strong> </div><div class="time-count hour"><span>%H</span><strong>hrs</strong></div><div class="time-count min"><span>%M</span><strong>min</strong></div><div class="time-count sec"><span>%S</span><strong>sec</strong></div>'));
	});
});



/*=============================================
	=            Custom Scroll            =
=============================================*/
$(window).on("load", function () {
	if ($(".navigation .scroll, .recommended.scroll").length) {
			$(".navigation .scroll, .recommended.scroll").mCustomScrollbar({
			mouseWheelPixels: 50,
			scrollInertia: 0,
		});
	}
});


/*=============================================
	=    		Isotope	Active  	      =
=============================================*/
$('.flash-isotope-active').imagesLoaded(function () {
	// init Isotope
	var $grid = $('.flash-isotope-active,.flash-isotope-active-two').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-item',
		}
	});
	// filter items on button click
	$('.product-menu-nav').on('click', 'button', function () {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	});

});
//for menu active class
	$('.product-menu-nav button,.shop-details-color label,.color-wrap li').on('click', function (event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
});


/*=============================================
	=    		 Wow Active  	         =
=============================================*/
function wowAnimation() {
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: false,
		live: true
	});
	wow.init();
}

function getCartData() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url: SITE_URL+"/get/cart/data",
		type:"GET",
		success:function(response){
				var html = '';
				var total = 0;
			if (response.status == 'success') {
				response.data.forEach(element => {
					html += '<li><div class="d-flex gap-2"><div>';
					html += '<img src="'+ ASSET_URL+'product_image/'+element.product.image +'" width="65px" height="65px" alt="">';
					html += '</div><div style="width: 230px"><p class="mt-0 fw-bolder fs-6 mb-0">'+element.product.title+'</p>';
					html += '<div class="">Price : '+ element.product.price +' , Q : '+element.quantity+' , C : <span class="cartColor" style="background-color:'+ element.color_code +';"></span> <br> Sub Total : '+element.sub_total+'</div></div>';
					html += '</div><div><button id="removeCartBtn" data-id="'+ element.id +'"><i class="fa fa-trash"></i></button></div></li>'
					total += element.sub_total;
				});

				var cart_bottom = '<h6 class="text-right">Total : <span id="TotalCart">'+total+'</span></h6>';
				cart_bottom +='<a href="/checkout" class="btn btn-info w-100">Checkout</a>';
				$('#cartUl').html(html);
				$('#cartBottom').html(cart_bottom);
			}else if(response.status == 'unauthenticated'){
				$('#cartUl').html('<h5 class="text-center">'+response.message+'!</h5>');
			}
		}
	});
}

$(document).on('click','#cartBtn',function(){
	getCartData();
	var offcanvasElement = document.getElementById('cartCanvas');
	var offcanvas = new bootstrap.Offcanvas(offcanvasElement);
	offcanvas.show();
});
$(document).on('click','#removeCartBtn',function(){
	let id = $(this).data('id');
	let _this = $(this);

	$.ajax({
		url: SITE_URL+"/remove/cart/data",
		type:"POST",
		data:{id},
		beforeSend:function(){
			$(_this).append('<div id="loader_div"><img src="'+LOADER+'" style="width:40px !important"></div>');
		},
		success:function(response){
			if (response.status == 'success') {
				getCartData();
				Toastify({
				text: response.message,
				className: response.status,
				style: {
					background: response.status == 'success' ? "#008000" : 'red',
				}
				}).showToast();
				$('#cartCount').html(response.count);
			}
		},
		complete: function(){
			_this.find('#loader_div').remove();
		},
	});
});

})(jQuery);