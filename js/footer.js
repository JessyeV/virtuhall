 $(document).ready(function() {

	 	var $sections = $('.sections').data('toggled');

	 	if ($sections === true){
	 		$('.right').css({"transform" : "rotate(90deg)"});
	 	}

		else if ($sections != true){
	 		$('.right').css({"transform" : "rotate(180deg)"});
	 	}

// if($('#game-ctnt').css('display') === 'none'){
// 	 		$('.right').css({"transform" : "rotate(180deg)"});
// 		}


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


 //Pour les flèches de l'accordion => faire une variable qui vérifie si la flèche is toggled (referme l'arrow), sinon l'inverse ?