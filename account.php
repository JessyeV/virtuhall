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
</head>
<body>
	<?php 
		if(isset($_SESSION['pseudo'])){
		echo '<h1>Bienvenue sur ton compte '.$_SESSION['pseudo'].' !</h1>';
		}
		else{
			header('Location : index.php');
		}
	?>

	<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
	
	<!-- MODIFIER MAIL && MDP -->		
	Voici les possibilités actuelles:
	<h2>Modifier l'e-mail :</h2>
	<div>
		<form role="form" class="" method="post">
			<label >Nouvelle adresse e-mail</label>
			<input type="mail" name="mail" placeholder="exemple@mail.com">
			<input type="submit" value="Confirmer" name="submit">
		</form>
	</div>	

	<h2>Modifier le mot de passe :</h2>
	<div>
		<form role="form" class="" method="post">
			<label >Nouveau mot de passe</label>
			<input type="password" name="pwd">
			<input type="submit" value="Confirmer" name="submit">
		</form>
	</div>

	<!-- FOOTER -->
	<span class="space"><?php include('footer.inc.php'); ?></span>

	<!-- SCRIPT -->
	<script src="js/mod-mail.js"></script>
	<script src="js/sweetalert.min.js"></script>
</body>
</html>