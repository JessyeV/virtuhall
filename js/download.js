$( document ).ready(function() {
	$('.dl-btn').mouseenter(function(){
		$(this).css({'transform':'translate(0, 5px)','transition':'.5s ease'});
		$('.dl-img').addClass('floating');
	});

	$('.dl-btn').mouseleave(function(){
		$(this).css({'transform':'translate(0, 0px)', 'transition':'.5s ease'});
		$('.dl-img').removeClass('floating');
	});
});