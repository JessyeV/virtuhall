$(document).ready(function(){
	var Wmarges = ((window.innerWidth - 400)/2);
	$('.main').css({'margin-left': Wmarges ,'margin-right': Wmarges});

	if($(window).resize == true){
		$('.main').css({'margin-left': marges ,'margin-right': marges});
	}

	//refresh page on browser resize
	$(window).bind('resize', function(e){
		if (window.RT) clearTimeout(window.RT);
		window.RT = setTimeout(function(){
		this.location.reload(false); /* false to get page from cache */
		}, 200);
	});

	$('.login').on('click',function(){
    	$('.wrap').show();
    	$('.main').show();
  	});

  	$('.popup-close').on('click',function(){
    	$('.wrap').fadeOut();
    	$('.main').fadeOut();
  	});
});