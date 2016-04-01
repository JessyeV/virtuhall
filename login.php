<?php

	session_start();

	function sanitize($data)
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);

	    return $data;
	}

	function throwError($msg)
	{
		header('HTTP', true, 200);
		echo $msg;
		exit;
	}

	function throwSuccess($msg)
	{
		header('HTTP', true, 200);
		echo $msg;
		exit;
	}

	if(isset($_SESSION['pseudo'])){
		header('Location: index.php');
	}
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=virtuhaldv80085', 'root', '');
	}
	catch (Exception $e){
	   die('Erreur : ' . $e->getMessage());
	   throwError("<span style='color:crimson'>Connexion impossible.</span>");
	}

	if (isset($_POST['pseudo']) && isset($_POST['pwd']))
	{	
		if (empty($_POST['pseudo']) || empty($_POST['pwd'])){
			throwError("<span style='color:crimson'>Un ou plusieurs champs sont vides</span>");
		}
		else{
			$sql = $db -> prepare('SELECT * FROM membres WHERE login = :pseudo');
			$sql -> bindValue(':pseudo',sanitize($_POST['pseudo']), PDO::PARAM_STR);
        	$sql -> execute();
        	
        	$user_data = $sql -> fetch();

        	if ($user_data['password'] == hash("sha256",$_POST['pwd']))
        	{
				$_SESSION['pseudo'] = $user_data['login'];
			    throwSuccess('<span style="color:mediumseagreen">Bienvenue '.$user_data['login'].' !</span>');  
			}
			else
			{
				throwError('<span style="color:crimson">Les identifiants sont incorrects.</span>');
			}

			$sql->CloseCursor();  
    	}
    }
    else
    {
    	throwError("<span style='color:crimson'>Une erreur est survenue.</span>");
    }

?>