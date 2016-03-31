<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Accueil</title>
</head>

<body>
Connexion à l'espace membre :<br />
<form action="login.php" method="post">
Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
Mot de passe : <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>"><br />
<input type="submit" name="connexion" value="Connexion">
</form>
<a href="register.php">Vous inscrire</a>
<a href="index.php">Retour accueil</a>

<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</body>
</html>