<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Téléchargement - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/landing.css">
		<link rel="stylesheet" href="SSS-master/sss/sss.css" type="text/css" media="all">
	</head>
	<body>
		<div class="main row">
		<img class="VH-brand" src="assets/icons/VH.png" alt="">
		<div class="slider">
			<iframe width="560" height="400" src="https://www.youtube.com/embed/8eBwXuXCOUk?rel=0" frameborder="0" allowfullscreen></iframe>
			<img src="assets/images/slider/kata.jpg" />
			<img src="assets/images/slider/tomo.jpg" />
		</div>
	
		<ul class="buttons">
			<li><a href="">Jouer gratuitement !</a></li>
			<li><a href="">En découvrir plus...</a></li>
		</ul>

		<footer class="rad"></footer>
		</div>

	</body>
	<!-- SCRIPT -->
	<script src="js/jquery.min.js"></script>
	<script src="SSS-master/sss/sss.min.js"></script>
	<script>
		jQuery(function($) {
			$('.slider').sss();
			slideShow: false;
		});
	</script>
</html>