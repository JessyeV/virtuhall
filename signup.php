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
		echo "Votre inscription a été prise en compte !";
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

	//On va vérifier tous les champs, pour plusieurs conditions : 
	if(isset($_POST['pseudo']) && isset($_POST['pwd']) && isset($_POST['mail'])){
		//Déclarer variables qui contiennent les valeurs des inputs
		$login = $_POST['pseudo'];
		$password = $_POST['pwd'];
		$mail = $_POST['mail'];

		//Vérifier la longueur max du pseudo, afficher msg si pseudo>16 caractères et passer formCorrect à false pour empêcher d'enregistrer les données dans la base
    	if (strlen($login) > 16) {
    		echo "Le pseudo ne peut pas dépasser 16 caractères.";
    		$formCorrect = false;
    		exit();
    	}

    	//Vérifier si le pseudo n'existe pas déjà dans la BDD, passer formCorrect à false, si le pseudo existe déjà
    	$checkname = $bdd->prepare("SELECT * FROM membres WHERE login='$login'");
    	$checkname -> execute();
    	$result_checkname = $checkname -> fetchColumn();
    	if ($result_checkname > 0) {
    		echo "Le pseudo existe déjà.";
    		$formCorrect = false;
    		exit();
    	}

    	//Vérifier la longueur max du mot de passe, passer formCorrect à false si mdp < 6
    	if (strlen($password) < 6) {
    		echo "Le mot de passe doit contenir minimum 6 caractères.";
    		$formCorrect = false;
    		exit();
    	}

    	//Sanitize les caractères illégaux de l'email et Vérifier la validité de l'email
    	$mail_sanitize = filter_var($mail, FILTER_SANITIZE_EMAIL);
    	if (!filter_var($mail, FILTER_VALIDATE_EMAIL) != false) {
  			echo("L'email est invalide.");
  			$formCorrect = false;
  			exit();
		}

		//Vérifier que mail pas déjà utilisé dans la base aussi
		$checkmail = $bdd->prepare("SELECT * FROM membres WHERE mail='$mail'");
    	$checkmail -> execute();
    	$result_checkmail = $checkmail -> fetchColumn();
    	if ($result_checkmail > 0) {
    		echo "L'email a déjà été utilisé.";
    		$formCorrect = false;
    		exit();
    	}
    //Si toutes les vérifications sont passées et qu'il n'y a pas de problème, on passe formCorrect à true pour valider le formulaire, afin d'envoyer les données dans la bdd
    else{
    	$formCorrect = true;
    }

		//Quand tout est ok, on enregistre tout en bdd
		if($formCorrect = true){
			$login = sanitize($_POST['pseudo']);
			$password = hash("sha256", $_POST['pwd']);
			$mail = $_POST['mail'];
			$sexe = $_POST['gender'];
			$age = $_POST['age'];
			if($age == "Vôtre âge...") $age = "none";

			$req = $bdd->prepare('INSERT INTO membres(login, password, mail, age, sexe) VALUES (:login, :password, :mail, :age, :sexe)');
			$req->execute(array("login" => $login, "password" => $password, "mail" => $mail, "age" => $age, "sexe" => $sexe));

			//Send mail
				

				$to = $mail;
				$subject = 'Votre inscription sur le site de VirtuHall';
				$message = 'Bonjour '.$login.' !'."\r\n\r\n".'Vous avez reçu cet e-mail en confirmation de votre inscription à VirtuHall.'."\r\n".'Il ne vous reste plus qu\'à vous connecter sur le site pour pouvoir télécharger le jeu. :)'."\r\n\r\n".'Merci et à bientôt sur VirtuHall !'."\r\n\r\n".'L\'équipe Wrong Number.'."\r\n\r\n\r\n". 'Ce mail est généré automatiquement, merci de ne pas y répondre ;).';
				$headers = 'From: noreply@virtuhall-game.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

				mail($to, $subject, htmlspecialchars($message, $encoding = ini_get("utf-8")),$headers."\nContent-Type: text/plain; charset=UTF-8\nContent-Transfer-Encoding: 8bit\n");

			echo "Votre inscription a été prise en compte !\r\nUn email de confirmation vous a été envoyé.";
			//throwSuccess(); // ne reconnaît pas la fonction
		}
		else{
			//throwError("Les informations fournies sont incorrectes, ou votre pseudo est déjà pris."); // ne reconnait pas
			echo("Les informations fournies sont incorrectes, ou votre pseudo est déjà pris.");
		}
	}
	else{
		header('Location: signin.php'); //Redirection vers signin.php si rien POST
	}
?>