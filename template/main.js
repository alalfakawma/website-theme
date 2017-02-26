$(document).ready(function () {

	// Scroll down with arrow click

	$("#arrow").click(function() {
	    $('html,body').animate({scrollTop: $("#main-wrapper").offset().top},'slow');
	});

	// Sroll to top

	$("#scroll-top").click(function() {
		$("html,body").animate({scrollTop: $("#main-header").offset().top}, "slow");
	});

	// Show scroll to top

	$(window).scroll(function() {

	    if ($(this).scrollTop() > ($("#main-header").height())) {
	        $('#scroll-top').fadeIn();
	    } else {
	        $('#scroll-top').fadeOut();
	    }
	});

	// Get link
	
	$(".link").each(function() {
	    var href = $(this).find('a').attr('href');
	    if (href === window.location.href) {
	      $(this).find('a').addClass('active');
	    }
    });

});