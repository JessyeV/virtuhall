<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Aide - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/faq.css">
		<link rel="stylesheet" href="dev/foundation-6/css/foundation.min.css">
	</head>
	<body>
		<section class="accordion">
			<article>
				<h3><a href="">Wrong Number, qu'est-ce que c'est ?</a></h3>
				<div><p>Ou plutôt qui sommes-nous ?<br>
					Wrong Number c'est tout d'abord une agence étudiante composée de cinq membres motivés et fascinés par le monde du jeu vidéo, qui ont décidé de créer VirtuHall, leur propre petit jeu !<br>
				Wrong Number c'est aussi cinq amis, soudés et solidaires, prêts à en découdre avec le monde du jeu vidéo, dans la joie et la bonne humeur bien sûr :) .</p></div>
			</article>

			<article>
				<h3><a href="">Que dois-je faire pour m'inscrire ?</a></h3>
				<div><p>Pour s’inscrire c’est simple ! Il suffit de cliquer sur “Inscription” en haut de page et de remplir le formulaire qui permettra de créer le compte.</p></div>
			</article>

			<article>
				<h3><a href="">Comment jouer à VirtuHall ?</a></h3>
				<div><p>Pour jouer à VirtuHall, il faut tout d'abord créer un compte pour pouvoir télécharger le jeu : <a href="signin.php">Créer un compte</a>.<br>
				Une fois le compté créé, le page de téléchargement s'affichera et vous pourrez télécharger le client du jeu.<br>
				Vous pouvez également télécharger le jeu sur la page de téléchargement : <a href="">Télécharger le jeu</a>.<br>
				Une fois téléchargé, il suffit de se rendre dans le dossier de destination du téléchargement et d’installer le jeu grâce au client éxecutable (.exe).
			</p></div>
		</article>

		<article>
			<h3><a href="">Est-ce que je dois payer pour jouer à VirtuHall ?</a></h3>
			<div><p>Non, VirtuHall est un jeu entièrement gratuit et indépendant. Nous privilégions l’accessibilité de notre jeu en misant sur la gratuité, mais sans oublier la qualité !<br>
				Nos seuls revenus sont ceux générés grâce aux quelques publicités présentes sur le site, alors si vous utilisez un programme qui bloque les publicités (ex : AdBlock ), nous vous serions très reconnaissants si vous le désactiviez, merci !
			</p></div>
		</article>
	</section>
	
	<script src="dev/foundation-6/js/jquery/jquery.min.js"></script>
	<script>
	function openFirstPanel(){
	$('.accordion > article:first-child > h3:first-child').next().addClass('active').slideDown();
	}
	(function($) {
	
	var allPanels = $('.accordion > article > div').hide();
	
	openFirstPanel();
	
	$('.accordion > article > h3 > a').click(function() {
	$this = $(this);
	$target =  $this.parent().next();
	
	
	if($target.hasClass('active')){
	$target.removeClass('active').slideUp();
	}else{
	allPanels.removeClass('active').slideUp();
	$target.addClass('active').slideDown();
	}
	
	return false;
	});
	})(jQuery);
	</script>
</body>
</html>