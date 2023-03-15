<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzeo</title>
</head>
<body>
    <h1>Bienvenue sur votre profil</h1>
    <?php                
        if (isset($_SESSION['id'])) 
        {
            ?>
            <p>Votre pseudo : <?= $_SESSION['pseudo']; ?></p>
            <p>Votre email : <?= $_SESSION['email']; ?></p>
            <?php
            echo '<a href="phpScripts/deconnexion.php">Se déconnecter</a>';
        } else {
            echo '<a href="index.php">Veuiller vous connecter</a>';
        }
    ?>
</body>
</html>