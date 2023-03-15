<?php
include '../phpScripts/database.php';
global $db;

// Requête SQL pour la recherche de quiz
$searchQuestionsDb = $db->prepare("SELECT * FROM titres WHERE titre LIKE search = :search");
$searchQuestionsDb->execute([
    'search' => $_GET['search'],
]);
$result = $searchQuestionsDb->fetchAll();

// Affichage des résultats de la recherche
while ($result = $searchQuestionsDb->fetch()) {
	echo '<h2>' . $quizz['titre'] . '</h2>';
	echo '<p>' . $quizz['description'] . '</p>';
	echo '<a href="quiz.php?id=' . $quizz['id'] . '">Jouer</a>';
}

?>
