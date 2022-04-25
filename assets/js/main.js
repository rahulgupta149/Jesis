$(".modal form #comment").click(function (event) {
	event.stopPropagation();

});

AOS.init();

$('#showcoupon').on('click', function () {
	$('#checkout_coupon').slideToggle(900);
});
$('#labelcashOnDelivery').on('click', function () {
	$('#cahsonDelivery-detail').slideToggle(900);
});


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




	//  Search Js
	$(".search-toggle").on("click", function () {
		$(".search__area").addClass("opened");
	});
	$(".search-close-btn").on("click", function () {
		$(".search__area").removeClass("opened");
	});


	// Nice Select Js
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



$(function () {
	$(".traderClass").click(function () {
		if ($(this).is(":checked")) {
			$(".dvPassport").show();
			$(".AddPassport").hide();
		} else {
			$(".dvPassport").hide();
			$(".AddPassport").show();
		}
	});
});


$(function () {
	$(".customerClass").click(function () {
		if ($(this).is(":checked")) {
			$(".dvPassport").hide();
			$(".AddPassport").show();
		} else {
			$(".dvPassport").show();
			$(".AddPassport").hide();
		}
	});
});

document.querySelector(".registrationVendor").style.display = "none";

$(function () {
	$(".regCustomer").click(function () {
		if ($("input[name=registration]").is(":checked")) {
			$(".registrationCustomer").show();
			$(".registrationVendor").hide();
		} else {
			$(".registrationCustomer").hide();
			$(".registrationVendor").show();
		}
	});
});
$(function () {
	$(".regVendor").click(function () {
		if ($("input[name=registration]").is(":checked")) {
			$(".registrationCustomer").hide();
			$(".registrationVendor").show();
		} else {
			$(".registrationCustomer").show();
			$(".registrationVendor").hide();
		}
	});
});




$(function () {
	$("#datepicker-13").datepicker();

});

