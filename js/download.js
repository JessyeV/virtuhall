$( document ).ready(function() {
	$('.dl-btn').mouseenter(function(){
		$(this).css({'transform':'translate(0, 5px)','transition':'.5s ease'});
		$('.dl-img').addClass('floating');
	});

	$('.dl-btn').mouseleave(function(){
		$(this).css({'transform':'translate(0, 0px)', 'transition':'.5s ease'});
		$('.dl-img').removeClass('floating');
	});

	$('.dl-btn-vsn').mouseenter(function(){
		$(this).css({'transform':'translate(0, 5px)', 'transition':'.5s ease'});
	});

	$('.dl-btn-vsn').mouseleave(function(){
		$(this).css({'transform':'translate(0, 0px)', 'transition':'.5s ease'});
	});

	$('.dl-btn-vsn').on('click',function(){
		$(this).css({'transform':'translate(0, 0px)', 'transition':'.5s ease'});
		$('#dl-versions').slideToggle('300');
	});
});