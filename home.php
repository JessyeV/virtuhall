<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Suivez VirtuHall sur les réseaux sociaux, que ce soit Facebook, Twitter, Snapchat ou YouTube, on vous attend !" />
		<title>VirtuHall le jeu - Communauté</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/home.css">
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php 
			$homepage = true;
			include('header.inc.php'); 
		?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Accueil</h1>
		</header>
		<div class="row" role="main">
			<div class="main column large-12">

				<!-- MAIN -->
				<section class="articles column large-10">
					<h2 id="actu">Actualités</h2>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil reprehenderit, sit, consectetur tenetur ullam, praesentium itaque ab repudiandae voluptas facilis exercitationem nesciunt ipsum porro! Ab ea, ipsa doloribus. Id, amet!</p>
					</div>
					
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quod optio voluptatibus, accusamus consectetur. Quis hic numquam quo nostrum laborum quibusdam dicta id nesciunt, voluptates quos suscipit accusamus. Ipsa, omnis?</p>
					</div>
					
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis eum laborum debitis placeat sequi amet optio saepe deserunt, inventore recusandae, sunt expedita asperiores mollitia dolorem corporis ut consequuntur! Modi, commodi?</p>
					</div>
					
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, amet, saepe. Alias itaque, quo et laboriosam impedit, culpa corporis perferendis. Quidem laudantium tenetur laboriosam velit dolorem consequuntur, architecto error voluptatibus.</p>
					</div>
				</section>

				<!-- ADVERTIZING -->
				<aside class="aside column large-2">
					<ins class="ad-vertical adsbygoogle"
					style="display:inline-block;width:160px;height:600px;"
					data-ad-client="ca-pub-8371934832180859"
					data-ad-slot="1415884923">
					</ins>
				
					<ins class="ad-horizontal adsbygoogle" style="display:inline-block;width:100%;height:100px; border:solid 5px red;"data-ad-client="ca-pub-8371934832180859" data-ad-slot="5008479721">		
					</ins>
				</aside>
			</div>
		</div>

		<!-- FOOTER -->
		<span class="space"><?php include('footer.inc.php'); ?></span>
		<!-- SCRIPT -->
		<script src="js/jquery.min.js"></script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</body>
</html>