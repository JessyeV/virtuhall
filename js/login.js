$(document).ready(function(){
	// var Wmarges = ((window.innerWidth - 400)/2);
	// $('.main').css({'margin-left': Wmarges ,'margin-right': Wmarges});

	// if($(window).resize == true){
	// 	$('.main').css({'margin-left': marges ,'margin-right': marges});
	// }

	// //refresh page on browser resize
	// $(window).bind('resize', function(e){
	// 	if (window.RT) clearTimeout(window.RT);
	// 	window.RT = setTimeout(function(){
	// 	this.location.reload(false); /* false to get page from cache */
	// 	}, 200);
	// });

	// $('.login').on('click',function(){
 //    	$('.wrap').show();
 //    	$('.main').show();
 //  	});

 //  	$('.popup-close').on('click',function(){
 //    	$('.wrap').fadeOut();
 //    	$('.main').fadeOut();
 //  	});

// Popup Window
var scrollTop = '';
var newHeight = '100';
 
$(window).bind('scroll', function() {
  scrollTop = $( window ).scrollTop();
  newHeight = scrollTop + 100;
});
		
$('.popup-trigger').click(function(e) {
  e.stopPropagation();
   $('.popup').after('<div class="overlay"></div>');
  if(jQuery(window).width() < 620) {
    $(this).after( $( ".popup" ) );
    $('.popup').show().addClass('popup-mobile').css('top', 0);
    $('html, body').animate({
      scrollTop: $('.popup').offset().top
    }, 500);   
  } else {
    $('.popup').removeClass('popup-mobile').css('top', newHeight).toggle();
  };
});
		
$('html, .popup-btn-close').click(function(e) {
  $('.popup').hide();
  $('.overlay').detach();
});
 
$('.popup').click(function(e){
  e.stopPropagation();
});
});