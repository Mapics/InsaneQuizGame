<?php

$q = $db->query("SELECT * FROM titres");
$result = $q->rowCount(); 
$needLines = $result / 10;
$needLines = ceil($needLines);
for ($made=0; $made < $needLines; $made++) { 
        ?>
    <div class="affichesQuizzes">
        <?php
        for ($quiz=0; $quiz < 9; $quiz++) { 
            if ($titres = $q->fetch()){
                ?>
             <div class="afficheQuizz">
                <div class="imageQuizz">
                    <img src="../img/interrogation-yellow.png" alt="imgQuizz">
                </div>
                <div class="nameQuizz">
                    <span><?= $titres['titre'] ?></span>
                </div>
            </div>
            <?php
            } else {
                break;
            }
        }?>
    </div>
<br></br> <?php
} ?>