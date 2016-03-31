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
					if(ISSET($_POST['newPassword']) && ISSET($_POST['confirmPassword'])){		// MODIFIER LE PASS
						$password1 = mysqli_real_escape_string($conn, md5($_POST['newPassword']));
						$password2 = mysqli_real_escape_string($conn, md5($_POST['confirmPassword']));
						$username = mysqli_real_escape_string($conn, $_COOKIE['pseudo']);
						if ($password1 <> $password2) { echo "Your passwords do not match.";}

						else if (mysqli_query($conn, "UPDATE membres SET password='$password1' WHERE login='$username'"))
						    {
						    	echo "You have successfully changed your password.";
						    }

						else { mysqli_error($dbcon); }

						mysqli_close($dbcon);
					}
				}
				?>
		<form name="frmChange" role="form" class="form-signin" method="post">
		    <label for="InputPassword2">New Password</label>
		    <input type="password" class="form-control" id="InputPassword2" placeholder="New Password" name="newPassword">
		     <label for="InputPassword3">Confirm New Password</label>
		    <input type="password" class="form-control" id="InputPassword3" placeholder="Confirm Password" name="confirmPassword">  
		</div>
		 <button  type="submit" value="send" name="submit">Change it</button>
      </form>
      <?php
		}
		?>
	<a href="index.php">Retour accueil</a>
</body>
</html>