<?php

	function sanitize($data)
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);

	    return $data;
	}

	function throwError($msg)
	{
		header('HTTP', true, 500);
		echo $msg;
		exit;
	}

	function throwSuccess()
	{
		header('HTTP', true, 200);
		echo "Votre inscription a bien été prise en compte";
		exit;
	}

	//Connexion à la BDD
	try
	{
		$bdd = new PDO ('mysql:host=localhost;dbname=virtuhaldv80085', 'root', '');
	}	
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());
		throwError("Connexion à la base de données impossible");
	}

	if(isset($_POST['pseudo']) && isset($_POST['pwd']) && isset($_POST['mail']))
	{
		//Vérifier la longueur max du pseudo, afficher msg si pseudo>16 caractères et passer formCorrect à false pour empêcher d'enregistrer les données dans la base
    	if (strlen($_POST['pseudo']) > 16) {
    		echo "Le pseudo ne peut pas dépasser 16 caractères";
    		$formCorrect = false;
    		exit();
    	}

    	//Tentative de sélectionner les infos de la base pour faire correspondre avec la valeur de l'input
    	$checkname = $bdd->prepare ("SELECT login FROM membres WHERE login=".$_POST['pseudo']."");
    	$checker = $bdd->query($checkname);
    	if ($checkname->fetchColumn() > 0) {
    		echo "Le pseudo existe déjà";
    		$formCorrect = false;
    		exit();
    	}

    	//Pour vérifier mail : 
    	//if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) != false) {
  		//echo("$email est invalide");
		//}

		//(Et vérifier que mail pas déjà utilisé dans la base aussi)

    	//Vérifier la longueur maximale du password

    	else{
    		$formCorrect = true;
    	}

		//Si tout est ok tout enregistrer en bdd
		if($formCorrect = true){
			$login = sanitize($_POST['pseudo']);
			$password = hash("sha256", $_POST['pwd']);
			$mail = $_POST['mail'];
			$sexe = $_POST['gender'];
			$age = $_POST['age'];
			if($age == "Vôtre âge...") $age = "none";

			$req = $bdd->prepare('INSERT INTO membres(login, password, mail, age, sexe) VALUES (:login, :password, :mail, :age, :sexe)');
			$req->execute(array("login" => $login, "password" => $password, "mail" => $mail, "age" => $age, "sexe" => $sexe));

			throwSuccess();
		}
		else{
			throwError("Les informations fournies sont incorrectes, ou votre pseudo est déjà pris.");
		}
	}
?>