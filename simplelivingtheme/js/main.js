$(document).ready(function () {

	// Run functions

	checkScroll();

	// Scroll down with arrow click

	$("#arrow").click(function() {
		var adminBar = $("body").hasClass("admin-bar");

		if (adminBar) {
	    	$('html,body').animate({scrollTop: $("#main-wrapper").offset().top - 25},'slow');
	    }
	    else {
	    	$('html,body').animate({scrollTop: $("#main-wrapper").offset().top},'slow');
	    }
	});

	// Sroll to top

	$("#scroll-top").click(function() {
		$("html,body").animate({scrollTop:0}, "slow");
	});

	// Show scroll to top

	$(window).scroll(checkScroll)

		function checkScroll() {

			var getBox = $("#section-header-box").length >= 1;

			if 	(getBox) {
				if ($(this).scrollTop() > ($("#section-header-box").offset().top)) {
			        $('#scroll-top').fadeIn();
			    } else {
			        $('#scroll-top').fadeOut();
			    }
			}
			else {
				if ($(this).scrollTop() > ($("#main-header").height() + 100)) {
			        $('#scroll-top').fadeIn();
			    } else {
			        $('#scroll-top').fadeOut();
			    }
			}
	}

});