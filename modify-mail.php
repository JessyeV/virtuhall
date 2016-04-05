<?php
function sanitize($data)
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);

	    return $data;
	}
	
	if (!isset($_SESSION['pseudo'])) {
		header('Location: index.php');
	}
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=virtuhaldv80085', 'root', '');
	}
	catch (Exception $e){
	   die('Erreur : ' . $e->getMessage());
	   echo("<span style='color:crimson'>Impossible de se connecter.</span>");
	}

	if(isset($_POST['mail'])){// MODIFIER LE MAIL
		//Vérifier que mail pas déjà utilisé dans la base aussi
		$checkmail = $bdd->prepare("SELECT mail FROM membres WHERE mail=:mail");
		$checkmail -> bindValue(':mail',sanitize($_POST['mail']), PDO::PARAM_STR);
    	$checkmail -> execute();
    	$result_checkmail = $checkmail -> fetchColumn();
    	if ($result_checkmail > 0) {
    		echo "L'email a déjà été utilisé.";
    		$formCorrect = false;
    		exit();
    	}

			$query = $db -> prepare('UPDATE membres SET mail= :mail WHERE login= :login');
			$query -> bindValue(':login',sanitize($_SESSION['pseudo']), PDO::PARAM_STR);
			$query -> bindValue(':mail',sanitize($_POST['mail']), PDO::PARAM_STR);
        	$query -> execute();

        	$result_sql = $sql -> fetch();

        	echo "L'email a été changé";
        }
        else{
        	echo "Impossible de modifier le mail";
        	exit();
        }
?>