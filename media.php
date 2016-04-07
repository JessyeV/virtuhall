<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Retrouvez toutes les images, vidéos et fonds d'écran du jeu VirtuHall !" />
		<title>VirtuHall le jeu - Média</title>
		<link rel="icon" type="image/png" href="assets/favicon.png" />
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/magnific-pp/magnific-popup.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/media.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Média</h1>
		</header>
		<div class="row" role="main">
			<div class="main column large-offset-1 large-10">
				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="index.php">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>
							Média
						</li>
					</ul>
				</nav>
				<!-- MAIN -->
				<section class="column large-10 media-wrap">
					<h2>Captures d'écran</h2>
					<div id="screen" class="popup-gallery column large-12">
						<a href="assets/images/media/kata.jpg" class="column small-12 medium-6 large-4"><img src="assets/images/media/kata.jpg" alt="Image du personnage de Kata pour la journée de la femme"></a>
						<a href="assets/images/media/tomo.jpg" class="column small-12 medium-6 large-4"><img src="assets/images/media/tomo.jpg" alt="Image de présentation de Tomo"></a>
					</div>
					
					<h2>Vidéos</h2>
					<div id="video" class="popup-video column large-12">
						<a href="https://www.youtube.com/watch?v=8eBwXuXCOUk" class="column small-12 medium-6 large-4"><img src="assets/images/media/tomo-miniature.jpg" alt="Lien vers la vidéo du trailer de VirtuHall"></a>
						<a href="https://www.youtube.com/watch?v=dwJeSkBlSLU" class="column small-12 medium-6 large-4"><img src="assets/images/media/wn-miniature.jpg" alt="Lien vers la vidéo d'agence de Wrong Number"></a>
					</div>

					<h2>Fonds d'écran</h2>
					<div id="wallpaper" class="popup-wallpaper column large-12">
						<a href="assets/images/media/cubee-tomo-wp.jpg" class="column small-12 medium-6 large-4"><img src="assets/images/media/tomo-cubee-min.jpg" alt="Fond d'écran de Tomo en Cubeecraft" title="Cubeecraft Tomo - 1920x1080" width="780" height="488"></a>
						<a href="assets/images/media/furasu-wp.jpg" class="column small-12 medium-6 large-4"><img src="assets/images/media/furasu-min.jpg" alt="Fond d'écran de Furasu-sama" title="Wise Furasu-sama - 1920x1080" width="780" height="439"></a>
						<a href="assets/images/media/tomo-draw-wp.jpg" class="column small-12 medium-6 large-4"><img src="assets/images/media/tomo-draw-min.jpg" alt="Fond d'écran de Tomo en illustration" title="Brave student - 1920x1080" width="780" height="439"></a>
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
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/media.js"></script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</body>
</html>