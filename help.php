<?php session_start(); ?>
<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Un problème, une question, une information ? Envoyez-nous un message ici, nous tâcherons de vous répondre dans les plus brefs délais !">
		<title>VirtuHall le jeu - Aide</title>
		<link rel="icon" type="image/png" href="assets/favicon.png" />
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/help.css">
		<link rel="stylesheet" href="css/faq.css">
		<link rel="stylesheet" href="css/login.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header id="title-box" class="title-box">
			<h1>Aide</h1>
		</header>
		<div class="row" role="main">
			<div class="main column large-offset-1 large-10">
				
				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="index.php">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>Aide : FAQ & Support
						</li>
					</ul>
				</nav>

				<!-- MAIN -->
				<!-- FAQ PART -->
				<section id="faq" class="accordeon column large-10">
					<h2>Foire Aux Questions (FAQ)</h2>
					<article>
						<h3>Wrong Number, qu'est-ce que c'est ?</h3>
						<div><p>Ou plutôt qui sommes-nous ?<br>
							Wrong Number c'est tout d'abord une agence étudiante composée de cinq membres motivés et fascinés par le monde du jeu vidéo, qui ont décidé de créer VirtuHall, leur propre petit jeu !<br>
						Wrong Number c'est aussi cinq amis, soudés et solidaires, prêts à en découdre avec le monde du jeu vidéo, dans la joie et la bonne humeur bien sûr :) .</p></div>
					</article>

					<article>
						<h3>Que dois-je faire pour m'inscrire ?</h3>
						<div><p>Pour s’inscrire c’est simple ! Il suffit de cliquer sur “<a href="signin.php">Inscription</a>” en haut de page et de remplir le formulaire qui permettra de créer le compte.</p></div>
					</article>

					<article>
						<h3>Comment jouer à VirtuHall ?</h3>
						<div><p>Pour jouer à VirtuHall, il faut tout d'abord <a href="signin.php">créer un compte</a> pour pouvoir télécharger le jeu.<br>
						Une fois le compte créé, la page de téléchargement s'affichera et vous pourrez télécharger le client du jeu.<br>
						Si vous êtes <b>déjà connecté</b>, vous pouvez télécharger le jeu directement, sur la <a href="download.php">page de téléchargement</a>.<br>
						Une fois téléchargé, il suffit de se rendre dans le dossier de destination du téléchargement et d’installer le jeu grâce au client exécutable (.exe).
					</p></div>
				</article>

				<article>
					<h3>Est-ce que je dois payer pour jouer à VirtuHall ?</h3>
					<div><p>Non, VirtuHall est un jeu entièrement gratuit et indépendant. Nous privilégions l’accessibilité de notre jeu en misant sur la gratuité, mais sans oublier la qualité !<br>
						Nos seuls revenus sont ceux générés grâce aux quelques publicités présentes sur le site, alors si vous utilisez un programme qui bloque les publicités (ex : AdBlock, uBlock), nous vous serions très reconnaissants si vous le désactiviez, merci !
					</p></div>
				</article>
			</section>
			
			<!-- SUPPORT PART -->
			<section id="supp" class="column large-10">
				<h2>Support</h2>
				<p>Un problème, une question, une information ? Envoyez-nous un message ici, nous tâcherons de vous répondre dans les plus brefs délais !<br>
					Avant d'envoyer un message au support, merci de vérifier si la réponse à votre question ne se trouve pas déjà dans la Foire Aux Questions (FAQ), on est jamais trop prudents ;).<br>
					
					<span class="info">Les champs marqués d’une * sont obligatoires.</span></p>
					<!-- FORM -->
					<div class="form-head">Besoin d'aide ?</div>
					<form action="post.php" method="POST">
						<label for="" class="show-for-sr">Pseudo</label>
						<input type="text" name="pseudo" placeholder="Votre pseudo*" class="user" required/>

						<label for="" class="show-for-sr">E-mail</label>
						<input type="email" name="mail" placeholder="Votre e-mail*" class="mail" required/>

						<label for="" class="show-for-sr">Sujet</label>
						<input type="text" name="subject" placeholder="Le sujet*" class="subject" required/>

						<label for="" class="show-for-sr">Message</label>
						<textarea name="message" class="msg" cols="30" rows="10" placeholder="Votre message*"></textarea>

						<div id="recaptcha" class="g-recaptcha" data-size="normal" data-sitekey="6LcoMRcTAAAAAAbZLuYjxQ7IlVFcguGgV4o4tRPl"></div>

						<button type="submit" name="submit" value="envoyer">Envoyer le message !</button>
					</form>
				</section>

				<aside class="aside">
					<ins class="ad-vertical adsbygoogle"
    					style="display:inline-block;width:160px;height:600px;"
    					data-ad-client="ca-pub-8371934832180859"
    					data-ad-slot="1415884923">
    				</ins>

					<ins class="ad-horizontal adsbygoogle"
    					style="display:inline-block;width:320px;height:90px"
    					data-ad-client="ca-pub-8371934832180859"
    					data-ad-slot="6700585321">
    				</ins>
				</aside>
			</div>
		</div>

		<!-- FOOTER -->
		<span><?php include('footer.inc.php'); ?></span>

		<!--SCRIPTS-->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<script src="js/signin.js"></script>
		<script src="js/faq.js"></script>
	</body>
</html>