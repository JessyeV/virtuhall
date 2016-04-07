<?php
	session_start();

	function sanitize($data)
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);

	    return $data;
	}
	
	if (!isset($_SESSION['pseudo'])) {
		header('Location: index.php');
		exit();
	}
	
	try{
		$bdd = new PDO('mysql:host=xxxx;dbname=xxxx', 'xxxx', 'xxxx');
	}
	catch (Exception $e){
	   die('Erreur : ' . $e->getMessage());
	   echo("<span style='color:crimson'>Impossible de se connecter.</span>");
	}

	if(empty($_POST['mail'])){
		echo "<span style='color:crimson'>Le champ est vide !</span>";
		exit();
	}

	if(isset($_POST['mail']))
	{// MODIFIER LE MAIL
		//Vérifier que mail pas déjà utilisé dans la base aussi
		$checkmail = $bdd->prepare("SELECT mail FROM membres WHERE mail=:mail");
		$checkmail -> bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);
    	$checkmail -> execute();
    	$result_checkmail = $checkmail -> fetch();

    	if ($result_checkmail > 0) {
    		echo "<span style='color:crimson'>Oups ! Cet e-mail a déjà été utilisé.</span>";
    	}
    	else {
			$query = $bdd -> prepare("UPDATE `membres` SET `mail`=:mail WHERE `login`=:login");
			$query -> bindValue(':login',$_SESSION['pseudo'], PDO::PARAM_STR);
			$query -> bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);
	    	$query -> execute();

	    	echo "<span style='color:mediumseagreen'>L'e-mail a bien été changé !</span>";
	    	$_SESSION['mail'] = $_POST['mail'];

	    	//Send mail to check the mail has been changed correctly
				$to = $_POST['mail'];
				$subject = 'Votre changement d\'e-mail sur le site de VirtuHall';
				$message = 'Bonjour '.$_SESSION['pseudo'].' !'."\r\n\r\n".'Vous avez récemment modifié l\'adresse e-mail de votre compte sur VirtuHall.'."\r\n".'Désormais vous recevrez tous les mails en rapport avec VirtuHall sur cette adresse. Si vous n\'avez pas effectué ce changement vous-même, merci de nous contacter sur le site et de nous envoyer un message à ce propos.'."\r\n\r\n".'Bien cordialement,'."\r\n\r\n".'L\'équipe Wrong Number.'."\r\n\r\n\r\n". 'Ce mail est généré automatiquement, merci de ne pas y répondre ;).';
				$headers = 'From: noreply@virtuhall-game.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

				mail($to, $subject, htmlspecialchars($message, $encoding = ini_get("utf-8")),$headers."\nContent-Type: text/plain; charset=UTF-8\nContent-Transfer-Encoding: 8bit\n");
	    	exit();
    	}
    }
    else{
        echo "<span style='color:crimson'>Impossible de modifier l'e-mail.</span>";
        exit();
    }

?>