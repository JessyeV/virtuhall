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
	$parent = $this.parent();
	
	// $parent.css('background-color', '#2a8ebb');
	if($target.hasClass('active')){
	$target.removeClass('active').slideUp();
	}
	else{
	allPanels.removeClass('active').slideUp();
	$target.addClass('active').slideDown();
	$parent.css('background-color', '#2a8ebb');
	}
	
	if($target.not('active')){
		$parent.css('background-color', 'lightgrey');
	}

	return false;
	});
	})(jQuery);
});	