<?php

include 'database.php';
global $db;

if (isset($_POST['addQuizz'])) {
    extract($_POST);

    if (empty($titre) || empty($difficulte)) {
        header("Location: signup.php?error=emptyfields&titre=".$titre."&difficulte=".$difficulte);
        exit();
    } else {
        $verifydbl = $db->prepare("SELECT titre FROM quizz WHERE titre=:titre");
        $verifydbl->execute([
            'titre' => $titre,
        ]);
        $result = $verifydbl->rowCount();
        if($result == 0){
            // Boucle sur chaque question et exécute la requête d'insertion pour chaque question
            foreach ($questions as $index => $question) {
                $insert = $db->prepare("INSERT INTO quizz(titre,question,answer1,answer2,answer3,answer4,good_answer) VALUES(:titre,:question,:answer1,:answer2,:answer3,:answer4,:good_answer)");
                $insert->execute([
                    'titre' => $titre,
                    'question' => $question,
                    'answer1' => $answers[$index][0],
                    'answer2' => $answers[$index][1],
                    'answer3' => $answers[$index][2],
                    'answer4' => $answers[$index][3],
                    'good_answer' => $good_answers[$index],
                ]);
            }
            $insertTitres = $db->prepare("INSERT INTO titres(titre,difficulte,auteur) VALUES(:titre,:difficulte,:auteur)");
            $insertTitres->execute([
                'titre' => $titre,
                'difficulte' => $difficulte,
                'auteur' => $_SESSION['pseudo'],
            ]);
            $_SESSION['creer'] += 1;
            header("Location: ../index.php?success=quizzadded");
            exit();
        } else {
            header("Location: ../index.php?error=quizzalreadyexist");
            exit();
        }
    }
}

?>