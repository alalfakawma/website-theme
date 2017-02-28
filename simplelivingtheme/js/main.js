$(document).ready(function () {

	// Run functions

	checkScroll();

	// Scroll down with arrow click

	$("#arrow").click(function() {
	    $('html,body').animate({scrollTop: $("#main-wrapper").offset().top - 25},'slow');
	});

	// Sroll to top

	$("#scroll-top").click(function() {
		$("html,body").animate({scrollTop:0}, "slow");
	});

	// Show scroll to top

	$(window).scroll(checkScroll)

	function checkScroll() {
		if ($(this).scrollTop() > ($("#section-header-box").offset().top)) {
	        $('#scroll-top').fadeIn();
	    } else {
	        $('#scroll-top').fadeOut();
	    }
	}

});