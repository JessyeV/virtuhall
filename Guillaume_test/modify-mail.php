<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Document</title>
	</head>
	<body>
		<?php
			if (!(isset($_COOKIE['pseudo']) || $_COOKIE['pseudo'] == '')) {
				header('Location: index.php');
			}
			else{
				if(ISSET($_POST['submit'])){
					include('connect.php');
					if(ISSET($_POST['mail'])){		// MODIFIER LE PASS
						$mail = mysqli_real_escape_string($conn, $_POST['mail']);
						$username = mysqli_real_escape_string($conn, $_COOKIE['pseudo']);
						if (mysqli_query($conn, "UPDATE membres SET mail='$mail' WHERE login='$username'"))
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

		<?php
			}
		?>
		</body>
</html>