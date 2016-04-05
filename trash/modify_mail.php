<?php

	session_start();

	function sanitize($data)
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);

	    return $data;
	}

	if(!isset($_SESSION['pseudo'])){
		header('Location: index.php');
	}
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=virtuhaldv80085', 'root', '');
	}
	catch (Exception $e){
	   die('Erreur : ' . $e->getMessage());
	   throwError("<span style='color:crimson'>Connexion impossible.</span>");
	}

	if (isset($_POST['formerMail']) && isset($_POST['newMail']))
	{	
		if (empty($_POST['formerMail']) || empty($_POST['newMail'])){
			echo("<span style='color:crimson'>Un ou plusieurs champs sont vides</span>");
		}
		else{
			$sql = $db -> prepare('SELECT mail, login FROM membres WHERE login = :pseudo AND mail = :mail');
			$sql -> bindValue(':pseudo',sanitize($_SESSION['pseudo']), PDO::PARAM_STR);
			$sql -> bindValue(':mail',sanitize($_POST['mail']), PDO::PARAM_STR);
        	$sql -> execute();

        	$result_sql = $sql -> fetch();

        	if ($result_sql['mail'] = $_SESSION['pseudo'])
        	{
				$change = $bdd->prepare("UPDATE membres SET mail='$mail' WHERE login='$login'");
				$change -> execute();
				echo "L'email a bien été modifié.";
			}
			else{
				echo "L'email est invalide.";
			}
		}
	}
			//     //throwSuccess('<span style="color:mediumseagreen">Bienvenue '.$user_data['login'].' !</span>'); // ne reconnait pas la fonction
			//     echo('<span style="color:mediumseagreen">Bienvenue '.$user_data['login'].' !</span>');  
			// }
			// else
			// {
			// 	//throwError('<span style="color:crimson">Les identifiants sont incorrects.</span>'); // ne reconnait pas
			// 	echo('<span style="color:crimson">Les identifiants sont incorrects.</span>');
			// }







	// if (isset($_POST['submit'])) {
	// 	if(isset($_POST['mail'])){// MODIFIER LE MAIL
	// 		//définir variables
	// 		$mail = $_POST['mail'];
	// 		$login = $_SESSION['pseudo'];

	// 		//Vérifier que mail existe pas déjà
	// 		$checkmail = $bdd->prepare("SELECT * FROM membres WHERE mail='$mail'");
 //    		$checkmail -> execute();
 //    		$result_checkmail = $checkmail -> fetchColumn();
 //    		if ($result_checkmail > 0) {
 //    			echo "L'email a déjà été utilisé.";
 //    			$mailModify = false;
 //    			exit();
 //    		}
 //    		else{
 //    			$mailModify = true;
 //    		}

	// 		if ($mailModify = true){
	// 			$change = $bdd->prepare("UPDATE membres SET mail='$mail' WHERE login='$login'");
	// 			$change -> execute();
	// 			echo "L'email a bien été modifié.";
	// 		}
	// 		else{
	// 			echo "L'email est invalide.";
	// 		}
	// 	}
	// }