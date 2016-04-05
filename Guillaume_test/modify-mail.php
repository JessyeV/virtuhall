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
		$db = new PDO('mysql:host=virtuhaldv80085.mysql.db;dbname=virtuhaldv80085', 'virtuhaldv80085', 'Wrongnumber7');
	}
	catch (Exception $e){
	   die('Erreur : ' . $e->getMessage());
	   throwError("<span style='color:crimson'>Impossible de modifier l'email.</span>");
	}

	//Connexion BDD
	// $host = 'localhost';
	// $user = 'root';
	// $pwd = '';
	// $database = 'virtuhaldv80085'; // Nom de la base de données
	// $db = mysqli_connect($host, $user, $database, $pwd);

	//Modifier mail
	if(ISSET($_POST['submit'])){
		if(ISSET($_POST['mail'])){		// MODIFIER LE MAIL
			$mail = mysqli_real_escape_string($db, $_POST['mail']);
			$username = mysqli_real_escape_string($db, $_SESSION['pseudo']);
						if (mysqli_query($db, "UPDATE membres SET mail='$mail' WHERE login='$username'"))
						{
							echo "Email changé.";
						}
						else {
						mysqli_error($dbcon); 
						}
						mysqli_close($dbcon);
					}
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