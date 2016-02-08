<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Aide - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="dev/foundation-6/css/foundation.min.css">
		<link rel="stylesheet" href="css/support.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Aide</h1>
		</header>
		<div class="row" role="main">
			<div class="main column">

				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="#">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>Aide: Support
						</li>
					</ul>
				</nav>

				<!-- MAIN -->
				<h2>Support</h2>
				<p>Un problème, une question, une information ? Envoyez-nous un message ici, nous tâcherons de vous répondre dans les plus brefs délais !<br>
				Avant d'envoyer un message au support, merci de vérifier si la réponse à votre question ne se trouve pas déjà dans la Foire Aux Questions (FAQ), on est jamais trop prudents ;)<br>
					
				<span class="info">Les champs marqués d’une * sont obligatoires.</span></p>

					<!-- FORMULAIRE -->
					<div class="form-head">Besoin d'aide ?</div>

					<form action="" method="POST">
						<label for="" class="show-for-sr">Pseudo</label>
						<input type="text" name="pseudo" placeholder="Votre super pseudo*" class="user" required/>

						<label for="" class="show-for-sr">E-mail</label>
						<input type="email" name="mail" placeholder="Un e-mail pour les joindre tous !*" class="mail" required/>

						<label for="" class="show-for-sr">Sujet</label>
						<input type="text" name="subject" placeholder="Un sujet intéressant (ou pas)*" class="subject" required/>

						<label for="" class="show-for-sr">E-mail</label>
						<textarea name="message" class="msg" cols="30" rows="10" placeholder="Votre gentil message ici*"></textarea>

						<div id="recaptcha" class="g-recaptcha" data-size="normal" data-sitekey="6LcoMRcTAAAAAAbZLuYjxQ7IlVFcguGgV4o4tRPl"></div>

						<button type="submit" name="" value="envoyer">Envoyer le message</button>
					</form>
				</div>
			</div>

			<!-- FOOTER -->
			<span class="space"><?php include('footer.inc.php'); ?></span>

			<script src="dev/foundation-6/js/jquery/jquery.min.js"></script>
			<script src="js/signin.js"></script>
		</body>
	</html>