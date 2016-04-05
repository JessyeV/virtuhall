<?php
function sanitize($data)
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);

	    return $data;
	}
	
	// if (!isset($_SESSION['pseudo'])) {
	// 	header('Location: index.php');
	// }
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=virtuhaldv80085', 'root', '');
	}
	catch (Exception $e){
	   die('Erreur : ' . $e->getMessage());
	   throwError("<span style='color:crimson'>Impossible de se connecter.</span>");
	}

	if(ISSET($_POST['submit'])){
		if(ISSET($_POST['mail'])){		// MODIFIER LE MAIL

			$query = $db -> prepare('UPDATE membres SET mail= :mail WHERE login= :login');
			$query -> bindValue(':mail',sanitize($_POST['mail']), PDO::PARAM_STR);
			$query -> bindValue(':login',sanitize($_SESSION['pseudo']), PDO::PARAM_STR);
        	$query -> execute();

        	echo "L'email a été changé";
        	exit();
        }
        else{
        	echo "Impossible de modifier le mail";
        	exit();
        }


					// 	if (mysqli_query($db, "UPDATE membres SET mail='$mail' WHERE login='$username'"))
					// 	{
					// 		echo "Email changé.";
					// 	}
					// 	else {
					// 	mysqli_error($dbcon); 
					// 	}
					// 	mysqli_close($dbcon);
		
	}
		?>
		<form name="frmChange" role="form" class="form-signin" method="post">
			<div>
				<label >Adresse E-Mail</label>
				<input type="mail" name="mail" placeholder="exemple@mail.com">
				<button  type="submit" value="send" name="submit">Confirmer</button>
			</form></br>
			<a href="index.php">Retour accueil</a>
		</body>
</html>