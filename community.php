<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Suivez VirtuHall sur les réseaux sociaux, que ce soit Facebook, Twitter, Snapchat ou YouTube, on vous attend !" />
		<title>VirtuHall le jeu - Communauté</title>
		<link rel="icon" type="image/png" href="assets/favicon.png" />
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/community.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Communauté</h1>
		</header>
		<div class="row" role="main">
			<div class="main column large-12">

				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="#">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>Communauté
						</li>
					</ul>
				</nav>

				<!-- MAIN -->
				<h2>Réseaux sociaux</h2>
				<!-- LEFT -->
				<section class="sn-divs column large-10">
					<div class="left">
					<div>
						<a href="https://www.facebook.com/VirtuHall-751664391636022/?fref=ts"><img src="assets/images/commu/fb-page.png" alt=""></a>
						<p class="column">Accéder à la page Facebook</p>
					</div>
					
					<div>
						<a href="https://www.youtube.com/channel/UCNzNSFP1D69-F2sG7sDnVTA"><img src="assets/images/commu/youtube-page.png" alt=""></a>
						<p class="column">Accéder à la chaîne YouTube</p>
					</div>	
					</div>

					<div class="right">
					<div>
						<a href="https://twitter.com/virtuhall_game"><img src="assets/images/commu/twitter-page.png" alt=""></a>
						<p class="column">Accéder à la page Twitter</p>
					</div>
					
					<div>
						<a><img src="assets/images/commu/snap-page.png" alt=""></a>
						<p class="column">Ajoutez Virtuhall sur Snapchat</p>
					</div>
					</div>
			
				<!-- ADVERTIZING -->
				<aside class="aside column large-2">
					<ins class="ad-vertical adsbygoogle"
    					style="display:inline-block;width:160px;height:600px;"
    					data-ad-client="ca-pub-8371934832180859"
    					data-ad-slot="1415884923">
    				</ins>

					<!-- <ins class="ad-horizontal adsbygoogle"
    					style="display:inline-block;width:320px;height:90px;"
    					data-ad-client="ca-pub-8371934832180859"
    					data-ad-slot="6700585321"></ins> -->
				</aside>
				</section>
			</div>
		</div>

		<!-- FOOTER -->
		<span class="space"><?php include('footer.inc.php'); ?></span>

		<!-- SCRIPT -->
		<script src="js/community.js"></script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</body>
</html>