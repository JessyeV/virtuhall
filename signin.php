<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Inscription - Virtuhall</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/signin.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Inscription</h1>
		</header>
		<div class="row" role="main">
			<div class="main column">

				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="#">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>Inscription
						</li>
					</ul>
				</nav>

				<!-- MAIN -->
				<h2>Rejoignez-nous en vous inscrivant !</h2>
				<p>Pour jouer à VirtuHall, il vous faut créer un compte qui vous permettra d'accéder au téléchargement du client du jeu. <br>
					L’inscription est rapide et facile, alors n’attendez plus ! <br>
					<span class="info">Les champs marqués d’une * sont obligatoires.</span></p>

					<!-- FORMULAIRE -->
					<div class="form-head">C'est par ici !</div>

					<form action="" method="POST">
						<label for="" class="show-for-sr">Pseudo</label>
						<input type="text" name="pseudo" placeholder="Pseudo*" class="user" required/>

						<label for="" class="show-for-sr">Mot de Passe</label>
						<input type="password" name="pwd" placeholder="Mot de Passe*" class="pwd" required/>

						<label for="" class="show-for-sr">E-mail</label>
						<input type="email" name="mail" placeholder="E-mail*" class="mail" required/>

						<label for="" class="show-for-sr">Genre</label>
						<img src="assets/icons/form/wman.png" alt="" class="gndr">
						<input type="radio" value="homme" name="gender" class="radio"/><span class="radio">&nbsp;&nbsp;Homme</span>

						<input type="radio" value="femme" name="gender" class="radiobr"/>&nbsp;&nbsp;Femme<br/>

						<div id="recaptcha" class="g-recaptcha" data-size="normal" data-sitekey="6LcoMRcTAAAAAAbZLuYjxQ7IlVFcguGgV4o4tRPl"></div>

						<button type="submit" name="" value="valider">Valider l'inscription</button>
					</form>
				</div>
			</div>

			<!-- FOOTER -->
			<span class="space"><?php include('footer.inc.php'); ?></span>

			<script src="js/jquery.min.js"></script>
			<script src="js/signin.js"></script>
		</body>
	</html>