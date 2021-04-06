<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=market;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->exec("insert into produit (titre, description, image) values ('".$_POST['titre']."','".$_POST['description']."','".$_FILES['fichier']['name']."');");

move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' . basename($_FILES['fichier']['name']));
                        echo "L'envoi a bien été effectué !";