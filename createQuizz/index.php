<!-- DATABASE START -->
<?php 
session_start(); 

include '../phpScripts/database.php'; 
global $db;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quizzeo</title>
        <link rel="icon" href="../img/logo.ico" />
        <link rel="stylesheet" href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
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
    <!-- MAIN PAGE -->
    <div class="content">
        <!-- CREATE QUIZZ CONTAINER -->
        <div class="container">
            <div class="titleContainer">

                <form action="../phpScripts/addQuizToDb.php" method="POST">
                    <!-- <label for="titre">Titre :</label> -->
                    <input type="text" id="titre" name="titre" placeholder="Titre" required><br><br>
                    <!-- <label for="difficulte">Difficulté :</label> -->
                    <input type="number" name="difficulte" placeholder="Difficulté du Quizz (?/10)" required>
                    <br><br>
            </div>
            <!-- QUESTIONS CONTAINER -->
            <div class="questionContainer">      
                <div class="questions" name="questions">
                    <label class="legende">Question 1</label>          
                    <div class="question">
                        <input type="text" id="question1" name="questions[]" placeholder="Question" required><br><br>
                    </div>
                    <div class="question">   
                        <input type="text" id="answer1_1" name="answers[0][]" placeholder="Reponse 1" required>
                        <input type="radio" id="good_answer1_1" name="good_answers[0]" value="1" required>
                        <label for="good_answer1_1">Bonne réponse</label><br>
                    </div> 
                    <div class="question"> 
                        <input type="text" id="answer1_2" name="answers[0][]" placeholder="Reponse 2" required>
                        <input type="radio" id="good_answer1_2" name="good_answers[0]" value="2" required>
                        <label for="good_answer1_2">Bonne réponse</label><br>
                    </div> 
                    <div class="question">    
                        <input type="text" id="answer1_3" name="answers[0][]" placeholder="Reponse 3" required>
                        <input type="radio" id="good_answer1_3" name="good_answers[0]" value="3" required>
                        <label for="good_answer1_3">Bonne réponse</label><br>
                    </div> 
                    <div class="question">    
                        <input type="text" id="answer1_4" name="answers[0][]" placeholder="Reponse 4" required>
                        <input type="radio" id="good_answer1_4" name="good_answers[0]" value="4" required>
                        <label for="good_answer1_4">Bonne réponse</label><br><br>
                    </div> 
                    
                    <div class="remove_question"  id="btn-create">
                        <button class="button_remove_question">SUPPRIMER</button><br><br>
                    </div>
                </div>   
            </div>
            
            <div class="add_question" id="btn-create">
                <button class="button_add_question">AJOUTER</button>
            </div>
        </div>
    </form>
    <!-- SCRIPT THAT ALLOWS TO ADD AND DELETE QUESTIONS DURING THE CREATION OF THE QUIZ -->
    <script>
        let count = 0;
        let q = 1;
        $(document).ready(function() {
            $(".add_question").click(function(e) {
                q++;
                count++;
                e.preventDefault();
                $(".questionContainer").append('<div class="questions" name="questions"><label class="legende">Question ' + q + '</label><div class="question"><input type="text" id="question1" name="questions[]" placeholder="Question" required><br><br></div><div class="question">   <input type="text" id="answer1_1" name="answers[' + count +']" placeholder="Reponse 1" required><input type="radio" id="good_answer1_1" name="good_answers[0]" value="1" required><label for="good_answer1_1">Bonne réponse</label><br></div> <div class="question"> <input type="text" id="answer1_2" name="answers[0][]" placeholder="Reponse 2" required><input type="radio" id="good_answer1_2" name="good_answers[0]" value="2" required><label for="good_answer1_2">Bonne réponse</label><br></div> <div class="question">    <input type="text" id="answer1_3" name="answers[0][]" placeholder="Reponse 3" required><input type="radio" id="good_answer1_3" name="good_answers[0]" value="3" required><label for="good_answer1_3">Bonne réponse</label><br></div><div class="question">    <input type="text" id="answer1_4" name="answers[0][]" placeholder="Reponse 4" required><input type="radio" id="good_answer1_4" name="good_answers[0]" value="4" required><label for="good_answer1_4">Bonne réponse</label><br><br></div> <div class="remove_question" id="btn-create"><button class="button_remove_question">DELETE</button><br><br></div></div>');
            })                 
        })
        $(document).on('click', '.button_remove_question', function(e) {
            e.preventDefault();
            let question = $(this).parent().parent();
            $(question).remove();     
        })
        </script>
        <div class="submitContainer" id="btn-create">
            <input type="submit" name="addQuizz" value="SUBMIT">
        </div>  
        </div>
    </div>
</body>
</html>