$( document ).ready(function() {
	$('.sn-divs p').hide();
	$('.sn-divs a').mouseenter(function(){
		$(this).next().slideDown('200');
	});

	$('.sn-divs a').mouseleave(function(){
		$(this).next().slideUp('200');
	});
});