<?php 

try
{
$db = new PDO('mysql:host=localhost;dbname=virtuhaldv80085', 'root', '');
}
catch (Exception $e)
{
   die('Erreur : ' . $e->getMessage());
}

// Optional PDO attributes
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

?>