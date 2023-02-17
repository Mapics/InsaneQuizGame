<?php session_start();

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
                <a href="#">PROFIL</a>
            </div>
            <?php  
            if(isset($_SESSION['pseudo']) && (isset($_SESSION['email']))) {
                echo $_SESSION['pseudo'];
                ?>
                <div class="connecte">
                    <a href="moncompte.php" >MON COMPTE</a>
                </div>
                <?php
            } else {
                ?>
                <div class="connexion">
                    <a href="#" class="loginBtn">LOGIN</a>
                    <a href="#" class="registerBtn">REGISTER</a>
                </div>
                <?php
            }
            ?>
            <!-- <div class="connexion">
                <a href="#" class="loginBtn">LOGIN</a>
                <a href="#" class="registerBtn">REGISTER</a>
            </div> -->
        </div>
    </div>
    <div class="content">
        <div class="leftPage">
            <div class="container">
                <div class="slogan">
                    <h1>TO PLAY AND MAKE 
                        <br> YOUR OWN
                        <span class="quizzSlogan">QUIZZ</span>
                    </h1>
                </div>
                <div class="game">
                    <a href="catalogue/index.html"><span>PLAY</span></a>
                    <a href="#"><span>CREATE</span></a>
                </div>
            </div>
        </div>
        <div class="rightPage">
            <div class="containerInterrogation">
                <img src="img/interrogation-green.png" alt="interrogation-green" class="interrogationMainPage1">
                <img src="img/interrogation-green.png" alt="interrogation-green" class="interrogationMainPage2">
                <img src="img/interrogation-green.png" alt="interrogation-green" class="interrogationMainPage3">
                <img src="img/interrogation-green.png" alt="interrogation-green" class="interrogationMainPage4">
            </div>
        </div>
    </div>
    <div class="popupLogin">
        <div class="boxLogin">
            <div class="contentLogin">
                <!-- Formulaire de connexion -->
                <h2>LOGIN</h2>
                <form method="post">
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconLogin"></ion-icon>
                        <input type="email" name="lemail">
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="lock-closed-outline" class="iconLogin"></ion-icon>
                        <input type="password" name="lpassword">
                        <label>PASSWORD</label>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Remember me</label>
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn" name="lformsend">Login</button>
                    </div>
                </form>
                <div class="loginRegister">
                    <p>Don't have an account ? <a href="#" class="loginToRegisterBtn">Register</a></p>
                </div>
                <div class="leavePageLogin">
                    <img src="img/back_arrow.png" alt="">
                    <span>BACK</span>
                </div>
            </div>
        </div>
    </div>
                <?php
                include 'phpScripts/login.php';
                ?>
    <div class="popupRegister">
        <div class="boxRegister">
            <div class="contentRegister">
                <h2>REGISTER</h2>
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
                        <label>PASSWORD</label>
                    </div>
                    <div class="userType">
                        <div class="userChoice">
                            <label><input type="radio" name="role" value="user" required>USER</label>
                        </div>
                        <div class="quizzerChoice">
                            <label><input type="radio" name="role" value="quizzer" required>QUIZZER</label>
                        </div>
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn" name="formsend" id="formsend">Register</button>
                    </div>
                </form>
                <?php
                include 'phpScripts/register.php';
                ?>
                <div class="registerLogin">
                    <p>You already have an account ? <a href="#" class="registerToLoginBtn">Login</a></p>
                </div>
                <div class="leavePageRegister">
                    <img src="img/back_arrow.png" alt="">
                    <span>BACK</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">    
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="scriptLoginRegister.js"></script>
</html>