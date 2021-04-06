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
            <div><a href="achats.php">Acheter</a></div>
            <div><a href="#contact">Contact</a></div>
            <div><a href="#apropos">A Propos</a></div>
            </nav>

        </div>
        <div id="acheter">
            <div class="text">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </div>
            <div class="image"><img src="images/20201204_Editorial_Food_Detox-Food-Shoot-2021_FONIO-BREAKFAST-PORRIDGE-WITH-BERRIES-AND-NUTS_051-1024x780.jpg" alt=""></div>
        </div>

        <div class="cartes">
            <div class="carte">
                <div class="img">
                    <img src="images/imgs/20201204_Editorial_Food_Detox-Food-Shoot-2021_FONIO-BREAKFAST-PORRIDGE-WITH-BERRIES-AND-NUTS_051-1024x780.jpg" alt="">
                </div>
                <div class="txt">
                    <h3>Titre repas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            </div>

            <div class="carte">
                <div class="img">
                    <img src="images/imgs/meatball-lasagne-e64e936.jpg" alt="">
                </div>
                <div class="txt">
                <h3>Titre repas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            </div>

            <div class="carte">
                <div class="img">
                    <img src="images/imgs/Easy-Pad-Thai_EXPS_FT20_249632_F_0109_1.jpg" alt="">
                </div>
                <div class="txt">
                    <h3>Titre repas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            </div>
        </div>

        <div class="contact">
            <form action="">
                <input type="text" value="Nom" name="nom"><br>
                <input type="text" name="prenom" id="" value="Prénom"><br>
                <input type="email" value="Email" name="email"><br>
                <textarea name="msg" id="" cols="30" rows="10">Votre message</textarea><br>
                <input type="submit" name="submit" id="contact">
            </form>
        </div>


   
</body>
</html>