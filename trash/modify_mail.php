<?php

	session_start();

	function sanitize($data)
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);

	    return $data;
	}

	if(!isset($_SESSION['pseudo']) || empty($_SESSION['pseudo'])){
		header('Location: index.php');
	}
	
	try{
		$db = new PDO('mysql:host=virtuhaldv80085.mysql.db;dbname=virtuhaldv80085', 'virtuhaldv80085', 'Wrongnumber7');
	}
	catch (Exception $e){
	   die('Erreur : ' . $e->getMessage());
	   throwError("<span style='color:crimson'>Connexion impossible.</span>");
	}

	if (isset($_POST['submit'])) {
		if(isset($_POST['mail'])){// MODIFIER LE PASS
			//définir variables
			$mail = $_POST['mail'];
			$login = $_SESSION['pseudo'];

			//Vérifier que mail existe pas déjà
			$checkmail = $bdd->prepare("SELECT * FROM membres WHERE mail='$mail'");
    		$checkmail -> execute();
    		$result_checkmail = $checkmail -> fetchColumn();
    		if ($result_checkmail > 0) {
    			echo "L'email a déjà été utilisé.";
    			$mailModify = false;
    			exit();
    		}
    		else{
    			$mailModify = true;
    		}

			if ($mailModify = true){
				$change = $bdd->prepare("UPDATE membres SET mail='$mail' WHERE login='$login'");
				$checkmail -> execute();
				echo "L'email a bien été modifié.";
			}
			else{
				echo "L'email est invalide.";
			}
		}
	}