<?php
include('connect.php');
if (isset($_COOKIE['pseudo'])) {
	header('Location: index.php');
}

// On teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['pwd']) && !empty($_POST['pwd']))) {
		$sql = 'SELECT count(*) FROM membres WHERE login="'.mysql_escape_string($_POST['pseudo']).'" AND password="'.mysql_escape_string(md5($_POST['pwd'])).'"';
		$req = mysqli_query($conn, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
		$data = mysqli_fetch_array($req);

		mysql_free_result($req);
		mysql_close();

	// Si on obtient une réponse, alors l'utilisateur est un membre
	if ($data[0] == 1) {
		session_start();
		$_SESSION['pseudo'] = $_POST['pseudo'];
		setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true); 
		header('Location: index.php');
		exit();
	}

	// Si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
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