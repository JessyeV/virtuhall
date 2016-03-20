<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<a class="popup-trigger">Open Pop Up</a>
<div class="popup">
	<p class="title">Connexion</p>
	<label for="pseudo" class="show-for-sr">Pseudo</label>
  	<input type="text" name="pseudo" placeholder="Pseudo" required>
	
	<label for="pwd" class="show-for-sr">Mot de passe</label>
  	<input type="password" name="pwd" placeholder="Mot de passe" required>

  	<input type="submit" value="Se connecter">
  <span class="popup-btn-close">fermer</span>
</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/login.js"></script>
</body>