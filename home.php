<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="VirtuHall - jeu d’action-aventure en 3D au style chibi, qui vous transportera dans les couloirs d’une convention atypique et déjantée du Japon féodal. Rejoignez-nous !" />
		<title>VirtuHall le jeu</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/login.css">
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
			<div class="main column large-12">
				<div class="column large-4">
					<div class="presentation-bloc">
						<p><b>VirtuHall est un jeu <br/>d’action-aventure en 3D</b><br/> au style chibi, qui vous transportera dans les couloirs d’une convention atypique et déjantée du Japon féodal !</p>
						<div class="buttons bluehov">
							<a href="signin.php">Jouer gratuitement!</a>
						</div>
					</div>
				</div>
				<div class="column large-8">
					<div class="flex-video widescreen">
						<iframe width="640" height="360" src="https://www.youtube.com/embed/8eBwXuXCOUk?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<!-- MAIN -->
				<section class="articles column large-10">
					<h2 id="actu">Actualités</h2>
					<div>
						<h3>VirtuHall arrive bientôt...</h3>
						<img src="assets/images/articles/vh-soon.jpg" alt="">
						<p>L'attente touche bientôt à sa fin ! <br>L'aventure déjantée de Tomo-san fera son arrivée dans quelques jours... Stay tuned!</p>
					</div>
					
					<div>
						<h3>L'agence Wrong Number présente son site internet !</h3>
						<img src="assets/images/articles/wn-site.jpg" alt="">
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
				
					<!-- <ins class="ad-horizontal adsbygoogle"
    					style="display:inline-block;width:320px;height:90px"
    					data-ad-client="ca-pub-8371934832180859"
    					data-ad-slot="6700585321">
    				</ins> -->
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
	</body>
</html>