<?php                
if (isset($_SESSION['id'])) 
{
    ?>
    <div class="right-header">
        <div class="username"><span><?= $_SESSION['pseudo']; ?></span></div>
        <div class="userTypeProfil"><span><?= $_SESSION['role']; ?></span></div>
    </div>
    </div>
        <div class="content-description">
            <div class="stats">
                <div id="player-stats" class="player-level"><span>LEVEL :<?= $_SESSION['level']; ?></span></div>
                <div id="player-stats" class="quizz-played"><span>QUIZ JOUER :<?= $_SESSION['jouer']; ?></span></div>
                <div id="player-stats" class="quizz-created"><span>QUIZ CREER :<?= $_SESSION['creer']; ?></span></div>
                <div id="player-stats" class="average-correct-response"><span>% BONNES REPONSES : -11,7%</span></div>
                <div id="player-stats" class="player-elo"><span>ELO :<?= $_SESSION['lp']; ?></span></div>
            </div>
            <div class="rank">
                <img src="../img/maïs.png" alt="">
            </div>
        </div>
    </div>
    <!-- <p>Votre pseudo : <?= $_SESSION['pseudo']; ?></p> -->
    <!-- <p>Votre email : <?= $_SESSION['email']; ?></p> -->
    <?php
    echo '<a href="../phpScripts/deconnexion.php">Se déconnecter</a>';
} else {
    echo '<a href="index.php">Veuiller vous connecter</a>';
}
?>