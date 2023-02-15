<?php 

include 'database.php';
global $db;

$q = $db->query("SELECT * FROM users");
while ($user = $q->fetch()) {
    ?>
    <li>
        <a href="profil.php?id=<?= $user['id'] ?>">
            <?= $user['pseudo'] ?>
        </a>
</li>
    <?php
    // echo "id :" .$userr['id']." pseudo : " . $user['pseudo'] . "<br/>" ;
    // var_dump($user);
}

?>