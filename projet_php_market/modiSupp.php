<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=market;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['delete'])){
    $reponse = $bdd->query("DELETE FROM produit where id=".$_POST['id']);

}

if(isset($_POST['update'])){
    $reponse = $bdd->query("UPDATE produit SET titre='".$_POST['titre']."', description='".$_POST['description']."' WHERE id=".$_POST['id']);

}