<?php
include('connect.php');
if (isset($_COOKIE['pseudo'])) {
			header('Location: index.php');
		}
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
	$sql = 'SELECT count(*) FROM membres WHERE login="'.mysql_escape_string($_POST['login']).'" AND password="'.mysql_escape_string(md5($_POST['password'])).'"';
	$req = mysqli_query($conn, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
	$data = mysqli_fetch_array($req);

	mysql_free_result($req);
	mysql_close();

	// si on obtient une réponse, alors l'utilisateur est un membre
	if ($data[0] == 1) {
		session_start();
		$_SESSION['login'] = $_POST['login'];
		setcookie('pseudo', $_POST['login'], time() + 365*24*3600, null, null, false, true); 
		header('Location: index.php');
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
		// echo "$sql"; pour afficher l'erreur
	}
	// sinon, alors la, il y a un gros problème :)
	else {
		$erreur = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Accueil</title>
</head>

<body>
Connexion à l'espace membre :<br />
<form action="login.php" method="post">
Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
Mot de passe : <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>"><br />
<input type="submit" name="connexion" value="Connexion">
</form>
<a href="register.php">Vous inscrire</a>
<a href="index.php">Retour accueil</a>

<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</body>
</html>