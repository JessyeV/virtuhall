<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Le Jeu - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/game.css">
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Le Jeu</h1>
		</header>
		<div class="row" role="main">
			<div class="main column">
				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="#">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>Le Jeu
						</li>
					</ul>
				</nav>
				<!-- SECTIONS -->
				<section class="pres">
					<article class="large-8 column" id="intro">
						<h2>Présentation</h2>
						<p>VirtuHall est un jeu d’action-aventure en 3D au style chibi, où vous incarnerez Thomas, le héros de ce jeu.
							À travers de nombreuses quêtes qui feront appel à votre habileté, votre réflexion et votre persévérance, VirtuHall vous transportera dans les couloirs d’une convention atypique et déjantée, où règne l’univers original du Japon féodal.
							<br>
							<br>
						Laissez vous embarquer dans cette unique aventure au son des taïko et préparez-vous à vous confronter à Furasu-sensei qui mettra vos neurones à l’épreuve, ou encore à affronter les terribles free huggers qui errent dans les allées de l’évènement !</p>
					</article>
					<span class="large-2 column">
						<img src="" alt="">
					</span>
				</section>
				<hr>
				
				<section class="story large-10 column" id="story">
					<span class="large-2 column">
						<img src="" alt="">
					</span>
					<article class="large-8 column">
						<h2>Histoire</h2>
						<p>Thomas est un jeune étudiant, passionné par le japon d’antan et amateur de mangas qui s’y réfèrent. Ce qu’il aime par dessus tout dans ces histoires, ce sont les <span class="strike" aria-hidden="true">jolies Geisha</span> samouraïs et les ninjas.<br>
							Rêveur, il s’imagine souvent, lors de ses nombreuses siestes durant le cours de philosophie, dans la peau d’un samouraï aguerri, bravant tous les dangers qui se hissent sur son chemin pour sauver les ravissantes princesses des différentes contrées du Japon !
							<br>
							<br>
							Oui bon, tout ça n’est que chimères donc retour à la réalité, voulez-vous ?
							<br>
							<br>
							Notre héros, comme tout otaku qui se respecte, ne manque aucune occasion de se rendre aux multiples conventions qui se rapportent à la culture japonaise, afin de, oui disons-le, se pavaner aux yeux de tous dans ses plus beaux cosplays qu’il confectionne de ses mains.<br>
						Mais en plus de sa rivale Kata, d'autres ennemis plus féroces encore guettent dans l'ombre, prêts à tout pour remporter le concours !</p>
					</article>
				</section>
					<ins class="adsbygoogle large-2 column"
					style="display:inline-block;width:160px;height:600px"
					data-ad-client="ca-pub-8371934832180859"
					data-ad-slot="8348896925"></ins>
			</div>
		</div>
		<!-- FOOTER -->
		<span class="space"><?php include('footer.inc.php'); ?></span>
		<!-- SCRIPTS -->
		<script src="js/jquery.min.js"></script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</body>
</html>