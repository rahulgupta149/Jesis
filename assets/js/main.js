AOS.init();

$('.butcher-product-slider').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	autoplay: true,
	items: 4,
	dots: false,
	slideSpeed: 300,
	responsiveClass: true,
	autoplayTimeout: 3000,
	autoplayHoverPause: true,
	responsive: {
		0: {
			items: 1,
		},
		600: {
			items: 2,
		},
		1000: {
			items: 4,
			nav: true,
		}
	}
});

(function ($) {
	"use strict";

	new VenoBox();

	var windowOn = $(window);
	//01. PreLoader Js
	windowOn.on('load', function () {
		$("#loading").fadeOut(500);
	});

	// 02. Mobile Menu Js
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	// 03. Mobile Menu 2 Js
	$('#mobile-menu-2').meanmenu({
		meanMenuContainer: '.mobile-menu-2',
		meanScreenWidth: "30000",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	// 03. Sidebar Js
	$(".offcanvas-toggle-btn").on("click", function () {
		$(".offcanvas__area").addClass("opened");
		$(".body-overlay").addClass("opened");
	});
	$(".offcanvas__close-btn").on("click", function () {
		$(".offcanvas__area").removeClass("opened");
		$(".body-overlay").removeClass("opened");
	});

	// // 04. Body overlay Js
	// $(".body-overlay").on("click", function () {
	// 	$(".offcanvas__area").removeClass("opened");
	// 	$(".body-overlay").removeClass("opened");
	// });

	// 05. Search Js
	$(".search-toggle").on("click", function () {
		$(".search__area").addClass("opened");
	});
	$(".search-close-btn").on("click", function () {
		$(".search__area").removeClass("opened");
	});

	// // 06. Sticky Header Js
	// windowOn.on('scroll', function () {
	// 	var scroll = $(window).scrollTop();
	// 	if (scroll < 100) {
	// 		$("#header-sticky").removeClass("header-sticky");
	// 	} else {
	// 		$("#header-sticky").addClass("header-sticky");
	// 	}
	// });

	// 07. Nice Select Js
	$('header-select').niceSelect();

	$('.category-toggle-button').on('click', function () {
		$('.menu-section').slideToggle(500);
	});
	$('.category-toggle-button-2').on('click', function () {
		$('.side-menu').slideToggle(500);
	});

})(jQuery);



$(document).ready(function () {
	$('.minus').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$('.plus').click(function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
});



/*------ Timer Countdown ----*/
$("[data-countdown]").each(function () {
	var $this = $(this),
		finalDate = $(this).data("countdown");
	$this.countdown(finalDate, function (event) {
		$(this).html(event.strftime("" + '<span class="countdown-area"><span class="countdown-amount hover-up">%D</span><span class="countdown-period"> days </span></span>' + '<span class="countdown-area"><span class="countdown-amount hover-up">%H</span><span class="countdown-period"> hours </span></span>' + '<span class="countdown-area"><span class="countdown-amount hover-up">%M</span><span class="countdown-period"> mins </span></span>' + '<span class="countdown-area"><span class="countdown-amount hover-up">%S</span><span class="countdown-period"> sec </span></span>'));
	});
});


const allHoverImages = document.querySelectorAll('.hover-container div img')
const imgContainer = document.querySelector('.img-container')

window.addEventListener('DOMContentLoaded', () => {
	allHoverImages[0].parentElement.classList.add('active');
});

allHoverImages.forEach((image) => {
	image.addEventListener('mouseover', () => {
		imgContainer.querySelector('img').src = image.src;
	});
});

function myFunction() {
	var dots = document.getElementById("dots");
	var moreText = document.getElementById("more");
	var btnText = document.getElementById("myBtn");

	if (dots.style.display === "none") {
		dots.style.display = "inline";
		btnText.innerHTML = "View more";
		moreText.style.display = "none";
	} else {
		dots.style.display = "none";
		btnText.innerHTML = "View less";
		moreText.style.display = "inline";
	}
}



document.querySelector("#dvPassport").style.display="none";
document.querySelector("#registartionVendor").style.display="none";

$(function () {
	$("#chkPassport").click(function () {
		if ($(this).is(":checked")) {
			$("#dvPassport").show();
			$("#AddPassport").hide();
		} else {
			$("#dvPassport").hide();
			$("#AddPassport").show();
		}
	});
});


$(function () {
	$("#chkCustomer").click(function () {
		if ($(this).is(":checked")) {
			$("#dvPassport").hide();
			$("#AddPassport").show();
		} else {
			$("#dvPassport").show();
			$("#AddPassport").hide();
		}
	});
});



$(function () {
	$(".regCustomer").click(function () {
		if ($("input[name=registration]").is(":checked")) {
			$(".registrationCustomer").show();
			$(".registartionVendor").hide();
		} else {
			$(".registrationCustomer").hide();
			$(".registartionVendor").show();
		}
	});
});
$(function () {
	$(".regVendor").click(function () {
		if ($("input[name=registration]").is(":checked")) {
			$(".registrationCustomer").hide();
			$(".registartionVendor").show();
		} else {
			$(".registrationCustomer").show();
			$(".registartionVendor").hide();
		}
	});
});


$(function () {
	$("#datepicker-13").datepicker();
  
  });
  
