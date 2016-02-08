<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Le Jeu - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="dev/foundation-6/css/foundation.min.css">
		<link rel="stylesheet" href="css/game.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
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
					<article class="large-8 column">
						<h2>Présentation</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident ducimus repellendus sequi soluta suscipit consequatur quibusdam eos quam aspernatur, veniam, expedita impedit! Eius aut modi doloribus cumque? Molestias saepe, magni.</p>
					</article>
					<span class="large-2 column">
						<img src="" alt="">
					</span>
				</section>
				<hr>
				
				<section class="story large-10 column">
					<span class="large-2 column">
						<img src="" alt="">
					</span>
					<article class="large-8 column">
						<h2>Histoire</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, doloribus inventore sint animi placeat mollitia libero itaque autem, et earum explicabo accusamus architecto. Quam placeat cum, dolore molestias impedit quis.</p>
					</article>
				</section>

				<aside class="ad large-2 column">
					<ins class="adsbygoogle"
					style="display:inline-block;width:160px;height:600px"
					data-ad-client="ca-pub-8371934832180859"
					data-ad-slot="8348896925"></ins>
				</aside>
			</div>
		</div>

		<!-- FOOTER -->
		<span class="space"><?php include('footer.inc.php'); ?></span>

		<!-- SCRIPTS -->
		<script src="dev/foundation-6/js/jquery/jquery.min.js"></script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</body>
</html>