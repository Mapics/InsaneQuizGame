<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['pseudo']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['role']);
unset($_SESSION['lp']);
unset($_SESSION['xp']);
unset($_SESSION['niveaux']);
session_destroy();
header('Location: ../index.php');
?>