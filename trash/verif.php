<html>
		<?php
		session_start();
		/* 
		si la variable de session login n'existe pas cela siginifie que le visiteur 
		n'a pas de session ouverte, il n'est donc pas logué ni autorisé à
		acceder à l'espace membres
		*/
		if(!isset($_SESSION['pseudo'])) {
		  echo '<a href="login.php" title="Connexion">Accéder à la page de connexion</a>'; 
		  echo "<img src='http://downloadicons.net/sites/default/files/connected-icon-61290.png' style='width:5%;height:5%;'>";
		}
		else{
		  echo "Bienvenue ".$_COOKIE['pseudo'].", dans le monde de Virtuhall !";
		}
		 ?>
</html>