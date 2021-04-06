<?php
session_start(); 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=market;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query("SELECT * FROM admin WHERE pseudo='".$_POST['pseudo']."' AND pass='".$_POST['pass']."';");

if ($donnees = $reponse->fetch())
{
	$_SESSION['nom']=$donnees['pseudo'];
	header('Location: crud.php');
}else {
	echo 'error';
}

$reponse->closeCursor();