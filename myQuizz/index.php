<!-- DATABASE START -->
<?php
    session_start();
    
    include '../phpScripts/database.php';
    global $db;
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzeo</title>
    <link rel="icon" href="../img/logo.ico" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <div class="header">
        <div class="left">
            <div class="logo">
                <img src="img/logo.ico" alt="logo">
            </div>
        </div>
        <div class="right">
            <div class="choice">
                <a href="../index.php">ACCUEIL</a>
                <a href="../catalogue/index.php">CATALOGUE</a>
                <a href="../profil/index.php">PROFIL</a>
            </div>
            <?php  
            include '../phpScripts/header.php';
            ?>
        </div>
    </div>
</body>
</html>