<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="accueil">
            <nav class="menu">
            <div><a href="./index.php">Accueil</a></div>
            <div><a href="#">Acheter</a></div>
            <div><a href="./index.php#contact">Contact</a></div>
            <div><a href="#apropos">A Propos</a></div>
            </nav>

    </div>

    <div class="cartes">
            
            <?php
                try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=market;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
                $reponse = $bdd->query("SELECT * FROM produit");
                while ($donnees = $reponse->fetch())
                {?>
                    <div class="carte">
                        <div class="img">
                         <img src="<?php echo './uploads/'.$donnees['image']; ?>" alt="">
                        </div>
                        <div class="txt">
                             <h3><?php echo $donnees['titre']; ?></h3>
                             <p><?php echo $donnees['description']; ?></p>
                        </div>
                    </div>
                    <?php }?>
	            
        </div>
</body>
</html>