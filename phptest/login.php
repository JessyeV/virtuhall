<?php
session_start();
include('connexion.php');
if (isset($_SESSION['pseudo'])) {
	header('Location: ../index.php');
}

// On teste si le visiteur a soumis le formulaire de connexion
// if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {

	$message = '';
	//Test si champs vides
	if (empty($_POST['pseudo']) || empty($_POST['pwd'])){
		$message = "Un ou plusieurs champs sont vides";
	}

	//Initialisation de variables pour les champs
	// $login = $_POST['pseudo'];
	// $password = $_POST['pwd'];

	//Sinon vérification des pseudo et mdp
	if ((isset($_POST['pseudo']) && (isset($_POST['pwd'])) {
		$sql = $db -> prepare('SELECT * FROM membres WHERE login = :pseudo AND password = :password');
		$sql -> bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
		$sql -> bindValue(':password',$_POST['pwd'], PDO::PARAM_STR);
        $sql -> execute();
        $user_data = $sql -> fetchColumn();
    }
    // Si le mdp correspond au mdp hashé dans la bdd, alors accès OK
	if ($user_data['password'] == md5($_POST['pwd'])){
		$_SESSION['pseudo'] = $user_data['login'];
	    $message = '<p>Bienvenue '.$user_data['login'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="../index.php">ici</a> 
			pour revenir à la page d\'accueil</p>';  
	}

	//Si ce n'est pas le cas, alors accès pas OK
	else{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p>
	    <br /><br />Cliquez <a href="../index.php">ici</a> 
	    pour revenir à la page d accueil</p>';
	}
    $query->CloseCursor();   
// }



		// $sql = 'SELECT count(*) FROM membres WHERE login="'.mysql_escape_string($_POST['pseudo']).'" AND password="'.mysql_escape_string(md5($_POST['pwd'])).'"';
		// $req = mysqli_query($conn, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
		// $data = mysqli_fetch_array($req);

		// mysql_free_result($req);
		// mysql_close();

	// Si on obtient une réponse, alors l'utilisateur est un membre
	// if ($data[0] == 1) {
	// 	session_start();
	// 	$_SESSION['pseudo'] = $_POST['pseudo'];
	// 	setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true); 
	// 	header('Location: index.php');
	// 	exit();
	// }

	// Si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
	// elseif ($data[0] == 0) {
	// 	$erreur = 'Compte non reconnu.';
	// 	// echo "$sql"; pour afficher l'erreur
	// }

	// sinon, alors la, il y a un gros problème :)
	// else {
	// 	$erreur = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	// }

	// }
	// else {
	// 	$erreur = 'Au moins un des champs est vide.';
// 	// }
// }
?>