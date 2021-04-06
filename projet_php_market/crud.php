<?php
session_start(); 
if($_SESSION['nom']){
    $code = '<div id="cnx"><h3>'.$_SESSION['nom'].'<img src="./images/user(1).png" ></h3><form action="deconecter.php" method="post"><button id="btndec">deconnecter</button></form></div>';
}
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
            <?php
                if($_SESSION['nom']){
                    echo $code;
                }
            ?>
            </nav>
          
            
                
        </div>

        <?php
           try{
            if($_SESSION['nom']){
                echo ' <h1>Ajouter un article</h1>
                <form action="ajouter.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="titre" id=""><br>
                    <textarea name="description" id="" cols="30" rows="10"></textarea><br>
                    <input type="file" name="fichier"><br>
                    <input type="submit" name="submit">
                </form>
                <table>
                <tr>
                    <tr><td>ID</td><td>Nom</td><td>Description</td><td>Action</td></tr>
                </tr>';
            }
            else{
                echo 'Admin non connecté !!';
            }
           }
           catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
            
            
?>
       
       

       
        <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=market;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            if($_SESSION['nom']){
            $reponse = $bdd->query("SELECT * FROM produit");
            while($donnees = $reponse->fetch())
            {?>
            <tr>
                <form action="modiSupp.php" method="post">
                <td><input type="text" name="id"  value="<?php echo $donnees['id']; ?>"></td>
                <td><input type="text"value="<?php echo $donnees['titre']; ?>" name="titre"></td>
                <td><input type="text" value="<?php echo $donnees['description']; ?>" name="description"></td>
                <td><input type="submit" name="delete" value="supprimer"><input type="submit" name="update" value="mdifier"></td>
                </form>
            </tr>
            <?php } 
            $bdd=null;
            }
            else{
                echo 'Utilisateur non connecté !';
            }
            ?>
                
            </table>


            
               
</body>
</html>