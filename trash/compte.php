<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mon compte</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
</head>
	
<body>
	<?php 
		if(isset($_SESSION['pseudo'])){
			echo '<h1>Bienvenue sur ton compte'.$_SESSION['pseudo'].' !</h1>';
			}
			else{
				header('Location : index.php');
			}
	?>
		<div>	
			Voici les possibilités actuelles:
			<ul>
				<a href="modify.php"><li>Modifier le pass</li></a>
				<a href="modify-mail.php"><li>Modifier le mail</li></a>
			</ul>
		</div>	

		<form action="modify_mail.php" role="form" class="form-signin" method="post">
			<div>
				<label >Nouvelle Adresse E-Mail</label>
				<input type="mail" name="mail" placeholder="exemple@mail.com">
				<button  type="submit" value="send" name="submit">Confirmer</button>
			</form>			
</div>
</body>
</html>