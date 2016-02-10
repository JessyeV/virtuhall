$(document).ready(function(){
function openFirstPanel(){
	$('.accordeon > article:first-child > h3:first-child').addClass('active').slideDown();
	}
	(function($) {
	
	var allPanels = $('.accordeon > article > div').hide();
	
	openFirstPanel();
	
	$('.accordeon > article > h3').click(function() {
	$this = $(this);
	$target =  $this.next();
	
	
	if($target.hasClass('active')){
	$target.removeClass('active').slideUp();
	}else{
	allPanels.removeClass('active').slideUp();
	$target.addClass('active').slideDown();
	}
	
	return false;
	});
	})(jQuery);
});	