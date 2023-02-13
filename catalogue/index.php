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
                <a href="index.php">CATALOGUE</a>
                <a href="#">PROFIL</a>
            </div>
            <div class="connexion">
                <a href="#" class="loginBtn">LOGIN</a>
                <a href="#" class="registerBtn">REGISTER</a>
            </div>
        </div>
    </div>
    <div class="popupLogin">
        <div class="boxLogin">
            <div class="contentLogin">
                <h2>LOGIN</h2>
                <form action="#">
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconLogin"></ion-icon>
                        <input type="email" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="lock-closed-outline" class="iconLogin"></ion-icon>
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
                    <img src="../img/back_arrow.png" alt="">
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
                        <ion-icon name="mail-outline" class="iconRegister"></ion-icon>
                        <input type="email" required>
                        <label>PSEUDO</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconRegister"></ion-icon>
                        <input type="email" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="lock-closed-outline" class="iconRegister"></ion-icon>
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
                    <img src="../img/back_arrow.png" alt="">
                    <span>BACK</span>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="firstContainer">
            <div class="populaires">
                <div class="titlePopulaires">
                    <h2>POPULAIRES</h2>
                </div>
                <div class="affichesPopulaires">
                    <div class="affichePopulaire">
                        <div class="imagePopulaire"></div>
                        <div class="namePopulaire">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="affichePopulaire">
                        <div class="imagePopulaire"></div>
                        <div class="namePopulaire">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="affichePopulaire">
                        <div class="imagePopulaire"></div>
                        <div class="namePopulaire">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="affichePopulaire">
                        <div class="imagePopulaire"></div>
                        <div class="namePopulaire">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="affichePopulaire">
                        <div class="imagePopulaire"></div>
                        <div class="namePopulaire">
                            <span>NAME</span>
                        </div>
                    </div>
                    
                </div>
            </div> 
            <div class="search">
                <div class="filter">
                    <div class="viewFilter">
                        <div class="leftFilter">
                            <div class="textFilter">
                                <span>FILTER</span>
                            </div>
                            <div class="arrowFilter">
                                <img src="../img/arrow_down.png" alt="arrow_down">
                            </div>                       
                        </div>
                        <div class="rightFilter">
                            <img src="../img/filter.png" alt="filter">
                        </div>
                    </div>
                    <div class="filterOptions">
                        <div class="themeFilter">
                            <div class="textTheme">
                                <span>THEME</span>
                            </div>
                            <div class="arrowTheme">
                                <img src="../img/arrow_right.png" alt="arrow_right">
                            </div>
                        </div>
                        <div class="levelFilter">
                            <div class="textLevel">
                                <span>NIVEAU</span>
                            </div>
                            <div class="arrowLevel">
                                <img src="../img/arrow_right.png" alt="arrow_right">
                            </div>
                        </div>
                        <div class="lengthFilter">
                            <div class="textLength">
                                <span>TAILLE</span>
                            </div>
                            <div class="arrowLength">
                                <img src="../img/arrow_right.png" alt="arrow_right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navBarre">
                    <div class="textNavBarre">
                        <input type="text" class="navBarreInput" placeholder="CHERCHER UN QUIZZ...">
                    </div>
                    <div class="imageNavBarre">
                        <img src="../img/search.png" alt="search">
                    </div>
                </div>
            </div>
        </div>
        <div class="secondContainer">
            <div class="themeContainer">
                <div class="titleTheme">
                    <h2>THEME</h2>
                </div>
                <div class="affichesThemes">
                    <div class="afficheTheme">
                        <div class="imageTheme"></div>
                        <div class="nameTheme">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheTheme">
                        <div class="imageTheme"></div>
                        <div class="nameTheme">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheTheme">
                        <div class="imageTheme"></div>
                        <div class="nameTheme">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheTheme">
                        <div class="imageTheme"></div>
                        <div class="nameTheme">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheTheme">
                        <div class="imageTheme"></div>
                        <div class="nameTheme">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheTheme">
                        <div class="imageTheme"></div>
                        <div class="nameTheme">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheTheme">
                        <div class="imageTheme"></div>
                        <div class="nameTheme">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheTheme">
                        <div class="imageTheme"></div>
                        <div class="nameTheme">
                            <span>NAME</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thirdContainer">
            <div class="beginnerContainer">
                <div class="titleBeginner">
                    <h2>DEBUTANT</h2>
                </div>
                <div class="affichesBeginners">
                    <div class="afficheBeginner">
                        <div class="imageBeginner"></div>
                        <div class="nameBeginner">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheBeginner">
                        <div class="imageBeginner"></div>
                        <div class="nameBeginner">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheBeginner">
                        <div class="imageBeginner"></div>
                        <div class="nameBeginner">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheBeginner">
                        <div class="imageBeginner"></div>
                        <div class="nameBeginner">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheBeginner">
                        <div class="imageBeginner"></div>
                        <div class="nameBeginner">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheBeginner">
                        <div class="imageBeginner"></div>
                        <div class="nameBeginner">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheBeginner">
                        <div class="imageBeginner"></div>
                        <div class="nameBeginner">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheBeginner">
                        <div class="imageBeginner"></div>
                        <div class="nameBeginner">
                            <span>NAME</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fourthContainer">
            <div class="releaseContainer">
                <div class="titleRelease">
                    <h2>DERNIERES SORTIES</h2>
                </div>
                <div class="affichesReleases">
                    <div class="afficheRelease">
                        <div class="imageRelease"></div>
                        <div class="nameRelease">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheRelease">
                        <div class="imageRelease"></div>
                        <div class="nameRelease">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheRelease">
                        <div class="imageRelease"></div>
                        <div class="nameRelease">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheRelease">
                        <div class="imageRelease"></div>
                        <div class="nameRelease">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheRelease">
                        <div class="imageRelease"></div>
                        <div class="nameRelease">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheRelease">
                        <div class="imageRelease"></div>
                        <div class="nameRelease">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheRelease">
                        <div class="imageRelease"></div>
                        <div class="nameRelease">
                            <span>NAME</span>
                        </div>
                    </div>
                    <div class="afficheRelease">
                        <div class="imageRelease"></div>
                        <div class="nameRelease">
                            <span>NAME</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="next">
            <div class="boxNext">
                <div class="nextText">
                    <span>TOUT VOIR</span>
                </div>
                <div class="nextImage">
                    <img src="../img/arrow_down.png" alt="arrow_down">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">    
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="script.js"></script>
<script src="../scriptLoginRegister.js"></script>
</html>