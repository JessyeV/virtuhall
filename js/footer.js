 $(document).ready(function() {
	 	//SLIDING NAVS
		$('#home').on('click',function(){
			 $('#home-ctnt').slideToggle('300');
			$('#game-ctnt, #media-ctnt, #com-ctnt, #help-ctnt').slideUp();
		});

		$('#game').on('click',function(){
			$('#game-ctnt').slideToggle('300');
			$('#home-ctnt, #media-ctnt, #com-ctnt, #help-ctnt').slideUp();
			$('.right').css({"transform" : "rotate(90deg)"});		
		});

		$('#media').on('click',function(){
			$('#media-ctnt').slideToggle('300');
			$('#home-ctnt, #game-ctnt, #com-ctnt, #help-ctnt').slideUp();
		});

		$('#com').on('click',function(){
			$('#com-ctnt').slideToggle('300');
			$('#home-ctnt, #game-ctnt, #media-ctnt, #help-ctnt').slideUp();
		});

		$('#help').on('click',function(){
			$('#help-ctnt').slideToggle('300');
			$('#home-ctnt, #game-ctnt, #media-ctnt, #com-ctnt').slideUp();
		});
	});	
