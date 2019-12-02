<?php
$serveur = "localhost";
$login = "aloudiy";
$pass="rapist666";
try
{
  $db = mysqli_connect($serveur, $login, $pass, "tiss") or die("Failed to 
  connect to MySQL: " . mysqli_error());
  $db->set_charset("utf8");
}
catch(PDOException $e)
{
  echo 'Echec de la connexion : ' .$e->getMessage();
}
?>