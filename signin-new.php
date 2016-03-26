<?php

	include('connect.php');

	if (isset($_COOKIE['pseudo'])) {
	      header('Location: index.php');
	}

	function check_input($data, $problem='')
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    if ($problem && strlen($data) == 0)
	    {
	        show_error($problem);
	    }
	    return $data;
	}

	//Connexion à la BDD
	try
	{
		$bdd = new PDO ('mysql:host=virtuhaldv80085.mysql.db;dbname=virtuhaldv80085', 'virtuhaldv80085', 'Wrongnumber7');
	}
	
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());
	}

  	$login =   $_POST['pseudo'];
  
  	$sql = mysqli_query($conn, "SELECT * FROM membres WHERE login='$login'");
    
    if(ISSET($_POST['submit']))
    {
	    if (mysqli_num_rows($sql)!=0) {
	    	echo '<center><b>Login déja utilisé</b></center>';
	    }
		else
		{
			//On créer les variables
			$login =   check_input($_POST['pseudo'], "");
			$password = check_input($_POST['pwd'], "");
			$mail = check_input($_POST['mail'], "");
			$sexe = check_input($_POST['gender'], "");
			$age = $_POST['age'];
			$password = hash("sha256", $password);

			$req = $bdd->prepare('INSERT INTO membres(login, password, mail, sexe) VALUES (:login, :password, :mail, :sexe)');

			$req->execute(array("login" => $login, "password" => $password, "mail" => $mail, "sexe" => $sexe));

			if(!empty($login) && !empty($password) && !empty($mail) && !empty($sexe))
			{
			  echo "<center><b><Inscription terminée.</b></center>";
			}

			if(empty($login) || empty($password) || empty($mail) || empty($sexe))
			{
			  echo "<center><b>Veuillez remplir tout les champs</b></center>";
			}
		}
	}
?>

<!DOCTYPE html>
<head>
	<html lang="fr">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Pour jouer à VirtuHall, il vous faut vous inscrire afin d'accéder au téléchargement du client du jeu. C'est rapide et facile, alors n’attendez plus ! ">
		<title>VirtuHall le jeu - Inscription</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/foundation.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/signin.css">
		<link rel="stylesheet" href="css/login.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body>
		<!-- NAVIGATION -->
		<?php include('header.inc.php'); ?>
		
		<!-- MENU -->
		<header class="title-box">
			<h1>Inscription</h1>
		</header>
		<div class="row" role="main">
			<div class="main column large-12">

				<!-- BREADCRUMB -->
				<nav aria-label="Vous êtes ici:" role="navigation">
					<ul class="breadcrumbs">
						<li><a href="#">Accueil</a></li>
						<li>
							<span class="show-for-sr">Page actuelle: </span>Inscription
						</li>
					</ul>
				</nav>

				<!-- MAIN -->
				<div class="column large-10">
				<h2>Rejoignez-nous en vous inscrivant !</h2>
				<p>Pour jouer à VirtuHall, il vous faut créer un compte qui vous permettra d'accéder au téléchargement du client du jeu. <br>
					L’inscription est rapide et facile, alors n’attendez plus ! <br>
					<span class="info">Les champs marqués d’une * sont obligatoires.</span></p>

					<!-- FORM -->
					<div class="form-head">C'est par ici !</div>

					<form action="" method="POST">
						<label for="" class="show-for-sr">Pseudo</label>
						<input type="text" name="pseudo" placeholder="Pseudo*" class="user" required/>

						<label for="" class="show-for-sr">Mot de Passe</label>
						<input type="password" name="pwd" placeholder="Mot de Passe*" class="pwd" required/>

						<label for="" class="show-for-sr">E-mail</label>
						<input type="email" name="mail" placeholder="E-mail*" class="mail" required/>

						<label for="" class="show-for-sr">Age</label>
						<select name="age" form="ageoptions" style="border-radius: .6em;">
							<option>Votre âge...</option>
  							<option value="under18">Moins de 18</option>
  							<option value="18-25">18-25</option>
  							<option value="26-35">26-35</option>
  							<option value="36-45">36-45</option>
  							<option value="more46">Plus de 46</option>
						</select>

						<label for="" class="show-for-sr">Genre</label>
						<img src="assets/icons/form/wman.png" alt="" class="gndr">
						<input type="radio" value="homme" name="gender" class="radio"/><span class="radio">&nbsp;&nbsp;Homme</span>

						<input type="radio" value="femme" name="gender" class="radiobr"/>&nbsp;&nbsp;Femme<br/>

						<div id="recaptcha" class="g-recaptcha" data-size="normal" data-sitekey="6LcoMRcTAAAAAAbZLuYjxQ7IlVFcguGgV4o4tRPl"></div>

						<button type="submit" name="submit" value="valider">Valider l'inscription</button>
					</form>
					</div>

					<!-- ADVERTIZING -->
					<aside class="aside">
					<ins class="ad-vertical adsbygoogle"
    					style="display:inline-block;width:160px;height:600px;"
    					data-ad-client="ca-pub-8371934832180859"
    					data-ad-slot="1415884923">
    				</ins>

					<ins class="ad-horizontal adsbygoogle"
    					style="display:inline-block;width:320px;height:90px"
    					data-ad-client="ca-pub-8371934832180859"
    					data-ad-slot="6700585321">
    				</ins>
					</aside>
				</div>
			</div>

			<!-- FOOTER -->
			<span class="space"><?php include('footer.inc.php'); ?></span>

			<script src="js/signin.js"></script>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</body>
	</html>