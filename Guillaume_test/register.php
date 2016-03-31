<html>
<?php
include('connect.php');
$siteKey = '6LcB7RQTAAAAAFzpVr-ORXslAbI2G2XS1Uv1PpAj'; // votre clé publique
$secret = '6LcB7RQTAAAAAIukVwmQHBkAieSp--4_mx2O2HOo'; // votre clé privée
require 'recaptchalib.php';
if (isset($_COOKIE['pseudo'])) {
      header('Location: index.php');
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
  $login =   $_POST['login'];
  $sql = mysqli_query($conn, "SELECT * FROM membres WHERE login='$login'");
    if(ISSET($_POST['submit'])){
      if (mysqli_num_rows($sql)!=0) {
          echo 'login deja utilise';
        }
else {
//On créer les variables
$login =   $_POST['login'];
$password = $_POST['password'];
$mail = $_POST['mail'];
$sexe = $_POST['sexe'];
$age = $_POST['age'];
$password = hash("md5", $password);




$req = $bdd->prepare('INSERT INTO membres(login, password, mail, sexe, age) VALUES (:login, :password, :mail, :sexe, :age)');


$req->execute(array("login" => $login, "password" => $password, "mail" => $mail, "sexe" => $sexe, "age" => $age));


if(!empty($login) && !empty($password) && !empty($mail) && !empty($sexe) && !empty($age))
{
  echo "<b>Inscription terminée.</b>";


}
  if(empty($login) || empty($password) || empty($mail) || empty($sexe) || empty($age))
  {
  echo "<b>Veuillez remplir tout les champs</b>";


  }


}
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Inscription Virtuhall</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
 <center>
<?php
$reCaptcha = new ReCaptcha($secret);
if(isset($_POST["g-recaptcha-response"])) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
        );
    if ($resp != null && $resp->success) {;}      //METTRE UN ECHO ICI SI ON VEUT ECRIRE APRTES LA VALIDATION CAPTCHA
    else {echo "CAPTCHA incorrect";}
    }
?> 
<form method="post" action="">

    <legend>S'inscrire sur le site</legend>

    <div class="form-group">
      <label class="col-lg-2 control-label">Pseudo</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="login" placeholder="Pseudo" maxlength="16" autofocus>
      </div>
    </div><br/><br/>

    <div>
      <label >Mot de passe</label>
      <div>
        <input type="password" class="form-control" name="password" placeholder="*******">
      </div>
    </div><br/><br/>
    <div>
      <label >Adresse E-Mail</label>
      <div>
        <input type="text" name="mail" placeholder="exemple@mail.com" >
      </div><br/><br/>
    </div>
    <div>
      <label >Sexe</label>
      <div>
        <input type="radio" class="form-control" name="sexe" value="Homme">Homme
        <input type="radio" class="form-control" name="sexe" value="Femme">Femme
      </div><br/><br/>
    </div>
    <div>
      <label >Age</label>
      <div>
        <input type="number" class="form-control" name="age" maxlength="3" min="10">
      </div><br/><br/>
    </div>
<div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
<br/><br/><button type="submit" name="submit" class="btn btn-primary">S'Inscrire</button>
<a href="login.php">Se connecter</a>
</form>
</center>
</body>
</html>