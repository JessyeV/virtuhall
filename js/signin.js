$(document).ready(function() {

	var width = window.innerWidth;
	var captcha = document.getElementById("recaptcha");
	var datasize = captcha.getAttribute("data-size");

	function resize(){
		if (width<=400) {
			captcha.setAttribute("data-size", "compact");
		}
	}
 //  $(window).resize(function(){
	// 	if ($(window).width() <= 400){	
	

	
	// captcha.setAttribute("data-size", "compact");

	// 	}	
	// });
});