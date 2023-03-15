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
                <img src="../img/logo.ico" alt="logo">
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
    include '../phpScripts/login.php';
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
    <!-- INFOS QUIZZ -->
    <div class="popup-information">
    <?php

        $check = $db->prepare("SELECT * FROM titres WHERE titre=:titre");
        $check->execute([
            'titre' => $_GET['titre'],
        ]);

        $nbQuestion = $check->rowCount();
        $quizz = $check->fetch();

        if($nbQuestion == 0){
            echo "erreur, questionnaire vide";
        } else { 
            ;
        }   
        ?>
        <div class="container-information">
            <div class="box-information">
                <div class="image-information">
                    <div class="image-temp-information"></div>
                </div>
                <div class="text-information">
                <div class="name-information"><span><?php  echo $quizz['titre'] ?></span></div>
                    <div class="description-information"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in rutrum nibh, non venenatis est. Sed auctor risus purus, et accumsan magna porta sed. Vivamus mattis, dui vitae rhoncus blandit, orci massa tincidunt ante, ut ullamcorper nisi nulla vitae nunc. </span></div>
                    <div class="infos-barre-information">
                        <span>Crée par: <?php  echo $quizz['auteur'] ?></span>
                        <span>Niveau :<?php  echo $quizz['difficulte'] ?></span>
                        <span>votes :<?php  echo $quizz['votes'] ?></span>
                    </div>
                    <div class="infos-barre-information2">
                        <span>Date :<?php  echo $quizz['creation'] ?></span>
                    </div>
                    <div class="play-information">
                        <div class="back-information">
                            <img src="../img/back_arrow.png" alt="back">
                            <button  class="lunchGame" onclick="window.location.href='index.php'">
                            <span>RETOUR</span>
                        </div>
                        <div class="play-information-btn">
                            <button  class="lunchGame" onclick="window.location.href='../playQuizz/index.php?titre=<?= $quizz['titre'] ?>'">
                                <span>JOUER</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN PAGE -->
    <div class="content">
        <!-- FAMOUS QUIZZ CONTAINER -->
        <div class="firstContainer">
            <div class="populaires">
                <div class="titlePopulaires">
                    <h2>POPULAIRES</h2>
                </div>
                <div class="affichesPopulaires">
                    <?php

                    $q = $db->query("SELECT * FROM `titres` ORDER BY `titres`.`votes` DESC");
                    for ($quiz=0; $quiz < 5; $quiz++) { 
                        if ($titres = $q->fetch()){
                            ?>
                        <div class="affichePopulaire">
                            <div class="imagePopulaire">
                                <img src="../img/interrogation-yellow.png" alt="imgQuizz">
                            </div>
                            <div class="namePopulaire">
                                <button  class="showInfos" type="button" onclick="window.location.href='index.php?titre=<?= $titres['titre'] ?>'"><?= $titres['titre'] ?></button>
                            </div>
                        </div>
                        <?php
                        } else {
                            break;
                        }
                    }?>
                </div>
            </div> 
            <!-- FILTER + SEARCH BAR -->
            <div class="search">
                <div class="filter">
                    <div class="viewFilter">
                        <div class="leftFilter">
                            <div class="textFilter">
                                <span>FILTRE</span>
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
                <div class="rightBoxFilter">
                    <div class="navBarre">
                        <div class="textNavBarre">
                            <input type="text" class="navBarreInput" placeholder="CHERCHER UN QUIZZ...">
                        </div>
                        <div class="imageNavBarre">
                            <img src="../img/search.png" alt="search">
                        </div>
                    </div>
                    <div class="filterChoice">
                        <div class="themeChoice">
                            <input type="text" class="navBarreTheme" placeholder="THEME... ">
                        </div>
                        <div class="levelChoice">
                            <img class="difficulty-indicator1" src="../img/interrogation-normal.png" alt="interrogation-normal1">
                            <img class="difficulty-indicator2" src="../img/interrogation-normal.png" alt="interrogation-normal2">
                            <img class="difficulty-indicator3" src="../img/interrogation-normal.png" alt="interrogation-normal3">
                            <img class="difficulty-indicator4" src="../img/interrogation-normal.png" alt="interrogation-normal4">
                            <img class="difficulty-indicator5" src="../img/interrogation-normal.png" alt="interrogation-normal5">
                        </div>
                        <div class="lengthChoice">
                            <input type="text" class="navBarreTheme" placeholder="TAILLE... ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="secondContainer">
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
                </div>
            </div>
        </div> -->
        <!-- BEGINNER QUIZZ CONTAINER -->
        <div class="thirdContainer">
            <div class="beginnerContainer">
                <div class="titleBeginner">
                    <h2>DEBUTANT</h2>
                </div>
                <div class="affichesBeginners">
                <?php

                    $q = $db->query("SELECT * FROM `titres` ORDER BY `titres`.`difficulte` ASC");
                    for ($quiz=0; $quiz < 7; $quiz++) { 
                        if ($titres = $q->fetch()){
                            ?>
                        <div class="afficheBeginner">
                            <div class="imageBeginner">
                                <img src="../img/interrogation-yellow.png" alt="imgQuizz">
                            </div>
                            <div class="nameBeginner">
                                <span><?= $titres['titre'] ?></span>
                            </div>
                        </div>
                        <?php
                        } else {
                            break;
                        }
                    }?>
                </div>
            </div>
        </div>
        <!-- LAST RELEASE QUIZZ CONTAINER -->
        <div class="fourthContainer">
            <div class="releaseContainer">
                <div class="titleRelease">
                    <h2>DERNIERES SORTIES</h2>
                </div>
                <div class="affichesReleases">
                <?php
                    $q = $db->query("SELECT * FROM `titres` ORDER BY `titres`.`creation` DESC");
                    for ($quiz=0; $quiz < 7; $quiz++) { 
                        if ($titres = $q->fetch()){
                            ?>
                        <div class="afficheRelease">
                            <div class="imageRelease">
                                <img src="../img/interrogation-yellow.png" alt="imgQuizz">
                            </div>
                            <div class="nameRelease">
                                <span><?= $titres['titre'] ?></span>
                            </div>
                        </div>
                        <?php
                        } else {
                            break;
                        }
                    }?>
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
    <!-- FOOTER -->
    <div class="footer">    
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="script.js"></script>
<script src="../phpScripts/scriptLoginRegister.js"></script>
</html>