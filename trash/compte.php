<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mon compte</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
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
			
	Voici les possibilités actuelles:
	<h2>Modifier l'email :</h2>
	<div>
		<form action="modify_mail.php" role="form" class="form-signin" method="post">
			<label >Nouvelle adresse e-mail</label>
			<input type="mail" name="mail" placeholder="exemple@mail.com">
			<button  type="submit" value="send" name="submit">Confirmer</button>
		</form>
	</div>	

	<h2>Modifier le mot de passe :</h2>
	<div>
		<form action="modify_mail.php" role="form" class="form-signin" method="post">
			<label >Nouveau mot de passe</label>
			<input type="password" name="pwd">
			<button  type="submit" value="send" name="submit">Confirmer</button>
		</form>
	</div>
</body>
</html>