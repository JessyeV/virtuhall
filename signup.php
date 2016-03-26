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
		echo "Votre inscription à été prise en compte";
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
		throwError("Connexion à la base de donnée impossible");
	}

	if(isset($_POST['pseudo']) && isset($_POST['pwd']) && isset($_POST['mail']))
	{
		$formCorrect = true;

		//Vérifications des champs - SI ERREUR passer formCorrect à false
		// vérifier la longueur maximale du pseudo et qu'il n'est pas déjà utilisé (bdd)
		// vérifier la longueur maximale du password
		// vérifier que le mail est bien formé

		//Si tout est ok tout enregistrer en bdd
		if($formCorrect){
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
			throwError("Les informations fournies sont incorrecte. Ou votre pseudo est déjà pris.");
		}
	}
?>