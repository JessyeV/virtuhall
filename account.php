<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mon compte</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/account.css">
</head>
<body>
	<!-- NAVIGATION -->
	<?php include('header.inc.php'); ?>

	<!-- MENU -->
		<header id="title-box" class="title-box">
			<h1>Mon compte</h1>
		</header>

		<div class="row" role="main">
			<div class="main column large-offset-1 large-10">
				
				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="index.php">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>Mon compte
						</li>
					</ul>
				</nav>
	
				<!-- MODIFIER MAIL && MDP -->		
				<?php 
					if(isset($_SESSION['pseudo'])){
					echo '<h2>Voici ton compte '.$_SESSION['pseudo'].' !</h2>';
					}
					else{
						header('Location : index.php');
					}
				?>

				<h3>Modifier mes informations</h3>
				<form role="form" id="changeEmail" method="post">
					<label>Modifier mon adresse e-mail</label>
					<input type="mail" name="mail" placeholder="nouveau@mail.com">
					<input type="submit" value="Confirmer" name="submit">
					<span id="message"></span>
				</form>	


			<!--<h2>Modifier le mot de passe :</h2>
			<div>
				<form role="form" class="" method="post">
					<label >Nouveau mot de passe</label>
					<input type="password" name="pwd">
					<input type="submit" value="Confirmer" name="submit">
				</form>
			</div>-->
			</div>
	</div>

	<!-- FOOTER -->
	<span class="space"><?php include('footer.inc.php'); ?></span>
	<script src="js/mod-mail.js"></script>
</body>
</html>