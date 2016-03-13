<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Téléchargement - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/landing.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/bjqs/bjqs.css">
		<link rel="stylesheet" href="css/bjqs/slider.css">
	</head>
	<body>
		<div class="main">
			<div class="wrapslide">
			<img class="VH-brand" src="assets/icons/VH.png" alt="">
			
			<div id="vh-slider">
				<ul class="bjqs">
					<li><div class="embed-container"><iframe width="711" height="400" src="https://www.youtube.com/embed/8eBwXuXCOUk?rel=0" frameborder="0" allowfullscreen></iframe></div></li>
					<li><img src="assets/images/slider/kata.jpg" /></li>
					<li><img src="assets/images/slider/tomo.jpg" /></li>
				</ul>
			</div>
			
			<ul class="buttons">
				<li class="bluehov"><a href="signin.php">Jouer gratuitement!</a></li>
				<li class="greenhov"><a href="">Acc<span class="forte">é</span>der au site...</a></li>
			</ul>
			</div>
	</div>
</body>
<!-- SCRIPT -->
<script src="js/jquery.min.js"></script>
<script src="js/bjqs-1.3.js"></script>
<script>
	jQuery(document).ready(function($) {
$('#vh-slider').bjqs({
	'height' : 400,
	'width' : 740,
	'responsive' : true
});
});
</script>
</html>