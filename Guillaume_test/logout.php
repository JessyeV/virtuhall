<?php
session_start();
session_unset();
session_destroy();
setcookie('pseudo', $_POST['login'], time() -3600); 
header('Location: index.php');
?>