<!-- DATABASE START -->
<?php 
session_start();

include 'phpScripts/database.php';
global $db;
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzeo</title>
    <link rel="icon" href="img/logo.ico" />
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
                <a href="index.php">ACCUEIL</a>
                <a href="catalogue/index.php">CATALOGUE</a>
                <a href="profil/index.php">PROFIL</a>
            </div>
            <?php  
            include 'phpScripts/header.php';
            ?>
        </div>
    </div>
    <!-- MAIN PAGE -->
    <div class="content">
        <div class="leftPage">
            <div class="container">
                <!-- SLOGAN -->
                <div class="slogan">
                    <h1>TO PLAY AND MAKE 
                        <br> YOUR OWN
                        <span class="quizzSlogan">QUIZZ</span>
                    </h1>
                </div>
                <!-- BUTTON PLAY AND CREATE QUIZZ -->
                <div class="game">
                    <a href="catalogue/index.php"><span>JOUER</span></a>
                    <a href="createQuizz/index.php"><span>CREER</span></a>
                </div>
            </div>
        </div>
        <!-- IMAGE RIGHT MAIN PAGE -->
        <div class="rightPage">
            <div class="containerInterrogation">
                <img src="img/interrogation-yellow.png" alt="interrogation-yellow" class="interrogationMainPage1">
                <img src="img/interrogation-yellow.png" alt="interrogation-yellow" class="interrogationMainPage2">
                <img src="img/interrogation-yellow.png" alt="interrogation-yellow" class="interrogationMainPage3">
                <img src="img/interrogation-yellow.png" alt="interrogation-yellow" class="interrogationMainPage4">
            </div>
        </div>
    </div>
    <!-- LOGIN -->
    <div class="popupLogin">
        <div class="boxLogin">
            <div class="contentLogin">
                <h2>CONNEXION</h2>
                <form method="post">
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconLogin"></ion-icon>
                        <input type="email" name="lemail" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="lock-closed-outline" class="iconLogin"></ion-icon>
                        <input type="password" name="lpassword" required>
                        <label>MOT DE PASSE</label>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Se rappeler de moi</label>
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn" name="lformsend">Connexion</button>
                    </div>
                </form>
                <div class="loginRegister">
                    <p>Tu n'as pas de compte ? <a href="#" class="loginToRegisterBtn">Inscription</a></p>
                </div>
                <div class="leavePageLogin">
                    <img src="img/back_arrow.png" alt="">
                    <span>RETOUR</span>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'phpScripts/login.php';
    ?>
    <!-- REGISTER -->
    <div class="popupRegister">
        <div class="boxRegister">
            <div class="contentRegister">
                <h2>INSCRIPTION</h2>
                <form method="post">
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconRegister"></ion-icon>
                        <input type="username" name="username" required>
                        <label>PSEUDO</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconRegister"></ion-icon>
                        <input type="email" name="email" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="lock-closed-outline" class="iconRegister"></ion-icon>
                        <input type="password" name="password" required>
                        <label>MOT DE PASSE</label>
                    </div>
                    <div class="userType">
                        <div class="userChoice">
                            <label><input type="radio" name="role" value="user" required>UTILISATEUR</label>
                        </div>
                        <div class="quizzerChoice">
                            <label><input type="radio" name="role" value="quizzer" required>QUIZZER</label>
                        </div>
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn" name="formsend" id="formsend">Inscription</button>
                    </div>
                </form>
                <?php
                include 'phpScripts/register.php';
                ?>
                <div class="registerLogin">
                    <p>Tu as déja un compte ? <a href="#" class="registerToLoginBtn">Connexion</a></p>
                </div>
                <div class="leavePageRegister">
                    <img src="img/back_arrow.png" alt="">
                    <span>BACK</span>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <div class="footer">    
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="phpScripts/scriptLoginRegister.js"></script>
</html>