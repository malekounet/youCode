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
            <div><a href="#accueil">Accueil</a></div>
            <div><a href="#acheter">Acheter</a></div>
            <div><a href="#contact">Contact</a></div>
            <div><a href="#apropos">A Propos</a></div>
            </nav>

        </div>

        <form action="conexion.php" method="post">
            <input type="text" name="pseudo" value="pseudo"><br>
            <input type="text" name="pass" value="password"><br>
            <input type="submit">
        </form>
    
</body>
</html>