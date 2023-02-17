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
    <div class="header">
        <div class="left">
            <div class="logo">
                <img src="../img/logo.ico" alt="logo">
            </div>
        </div>
        <div class="right">
            <div class="choice">
                <a href="../index.php">ACCUEIL</a>
                <a href="../catalogue/index.php">CATALOGUE</a>
                <a href="index.php">PROFIL</a>
            </div>
            <div class="connexion">
                <a href="#" class="loginBtn">LOGIN</a>
                <a href="#" class="registerBtn">REGISTER</a>
            </div>
        </div>
    </div>    
    <!-- <div class="popupLogin">
        <div class="boxLogin">
            <div class="contentLogin">
                <h2>LOGIN</h2>
                <form action="#">
                    <div class="btnContainer">
                        <input type="email" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <input type="password" required>
                        <label>PASSWORD</label>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Remember me</label>
                    </div>
                </form>
                <div class="submit">
                    <button type="submit" class="btn">Login</button>
                </div>
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
    <div class="popupRegister">
        <div class="boxRegister">
            <div class="contentRegister">
                <h2>REGISTER</h2>
                <form action="#">
                    <div class="btnContainer">
                        <input type="pseudo" required>
                        <label>PSEUDO</label>
                    </div>
                    <div class="btnContainer">
                        <input type="email" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <input type="password" required>
                        <label>PASSWORD</label>
                    </div>
                    <div class="userType">
                        <div class="userChoice">
                            <label><input type="checkbox">USER</label>
                        </div>
                        <div class="quizzerChoice">
                            <label><input type="checkbox">QUIZZER</label>
                        </div>
                    </div>
                </form>
                <div class="submit">
                    <button type="submit" class="btn">Register</button>
                </div>
                <div class="registerLogin">
                    <p>You already have an account ? <a href="#" class="registerToLoginBtn">Login</a></p>
                </div>
                <div class="leavePageRegister">
                    <img src="img/back_arrow.png" alt="">
                    <span>BACK</span>
                </div>
            </div>
        </div>
    </div> -->
    <div class="content">
        <div class="user-header">
            <div class="left-header">
                <div class="profil-picture">    
                    <div class="tempPP"></div>
                    <!-- <img src="" alt="profil-picture"> -->
                </div>
            </div>
            <div class="right-header">
                <div class="username"><span>NAME</span></div>
                <div class="userTypeProfil"><span>USER TYPE</span></div>
            </div>
        </div>
        <div class="content-description">
            <div class="stats">
                <div id="player-stats" class="player-level"><span>NIVEAU : </span></div>
                <div id="player-stats" class="quizz-played"><span>QUIZZ JOUÉS : </span></div>
                <div id="player-stats" class="quizz-created"><span>QUIZZ CRÉÉS : </span></div>
                <div id="player-stats" class="average-correct-response"><span>% BONNES REPONSES : </span></div>
                <div id="player-stats" class="player-elo"><span>ELO : </span></div>
            </div>
            <div class="rank">
                <img src="../img/maïs.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer">     
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="../scriptLoginRegister.js"></script>
</html>