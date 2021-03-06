<?php
session_start();
?>
<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="VirtuHall - jeu d’action-aventure en 3D au style chibi, qui vous transportera dans les couloirs d’une convention atypique et déjantée du Japon féodal. Rejoignez-nous !" />
		<title>VirtuHall le jeu</title>
		<link rel="icon" type="image/png" href="assets/favicon.png" />
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/prx-style.css">
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php 
			$homepage = true;
			include('header.inc.php'); 
		?>
		
		<!-- MENU -->
		<!--<header class="title-box">
			<h1>Accueil</h1>
		</header>-->
		<div class="row" role="main">
			<div class="main column large-offset-1 large-10">
				<div class="column large-5">
					<div class="presentation-bloc">
						<p><b>VirtuHall est un jeu <br/>d’action-aventure en 3D</b><br/> au style chibi, qui vous transportera dans les couloirs d’une convention atypique et déjantée du Japon féodal !</p>
						<div class="buttons bluehov">
							<a href="signin.php">Jouer gratuitement!</a>
						</div>
					</div>
				</div>
				<div class="column large-7">
					<div class="flex-video widescreen">
						<iframe width="640" height="360" src="https://www.youtube.com/embed/8eBwXuXCOUk?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<!-- MAIN -->
				<section class="articles column large-10">
					<h2 id="actu">Actualités</h2>
					<div>
						<h3>VirtuHall arrive bientôt...</h3>
						<img src="assets/images/articles/vh-soon.jpg" alt="" width="300" height="200">
						<p>L'attente touche bientôt à sa fin ! <br>L'aventure déjantée de Tomo-kun fera son arrivée dans quelques jours... Stay tuned!</p>
					</div>
					
					<div>
						<h3>L'agence Wrong Number présente son site internet !</h3>
						<img src="assets/images/articles/wn-site.jpg" alt="" width="400" height="266">
						<p>Le site de notre est agence en ligne ! <br> Venez découvrir ceux qui composent le projet de VirtuHall :)<br>
						<a href="http://virtuhall-game.com/WrongNumber/">virtuhall-game.com/WrongNumber</a></p>
					</div>
				</section>

				<!-- ADVERTIZING -->
				<aside class="aside column large-2">
					<ins class="ad-vertical adsbygoogle"
						style="display:inline-block;width:160px;height:600px;"
						data-ad-client="ca-pub-8371934832180859"
						data-ad-slot="1415884923">
					</ins>
				
					<ins class="ad-horizontal adsbygoogle"
     					style="display:block"
     					data-ad-client="ca-pub-8371934832180859"
     					data-ad-slot="2868717721"
     					data-ad-format="link">
     				</ins>
				</aside>
			</div>
		</div>

		<!-- FOOTER -->
		<span class="space"><?php include('footer.inc.php'); ?></span>
		<!-- SCRIPT -->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<script src="js/jquery.parallax.js"></script>
	<script>
	// Yep, that's it!
	$('#scene').parallax();
	</script>
	</body>
</html>