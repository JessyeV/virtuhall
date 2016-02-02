$(document).ready(function() {

	var width = window.innerWidth;
	var captcha = document.getElementById("recaptcha");
	var datasize = captcha.getAttribute("data-size");

	 if ($(window).width() <= 400){	
	 	captcha.setAttribute("data-size", "compact");
	}	
});