<!-- DATABASE START -->
<?php
    session_start();
    
    include '../phpScripts/database.php';
    global $db;
?>

<!DOCTYPE html>
<html Lang="en">
<html>
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
        <!-- MAIN PAGE -->
        <div class="content">
            <!-- CONTAINER GAMEPLAY -->
            <div class="container">
                <div class="title">
                    <H1><?php echo $_GET['titre'] ?></H1>
                </div>
                <!-- CONTAINER QUESTIONS AND RESPONSES -->
                <div id="question-container">
                    <h2 id="question">Question</h2>
                    <img src="../img/interrogation-yellow.png" alt="imgQuizz">
                    <ul id="choices"></ul>
                </div>
                <div class="bottom-container">
                    <button id="home-button">ACCUEIL</button>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <div class="footer">
        </div>
    </body>
</html>

<script>
// Initialize variables
let currentQuestion = 0;
let score = 0;

// $check = $db->prepare("SELECT titre FROM quizz WHERE titre=:titre");
//     $check->execute([
//         'titre' => $titre,
//     ]);
    
// Define quiz data
const quizData = [
    <?php

    $check = $db->prepare("SELECT * FROM quizz WHERE titre=:titre");
        $check->execute([
            'titre' => $_GET['titre'],
        ]);

        $nbQuestion = $check->rowCount();
        $quizz = $check->fetchAll();

        if($nbQuestion == 0){
            echo "erreur, questionnaire vide";
        } else { 
            for ($i=0; $i < $nbQuestion; $i++) { 
                ?> 
            {
                question: '<?php  echo $quizz[$i]['question'] ?>',
                choices: ['<?php echo $quizz[$i]['answer1']?>', '<?php echo $quizz[$i]['answer2']?>', '<?php echo $quizz[$i]['answer3']?>', '<?php echo $quizz[$i]['answer4']?>'],
                correctAnswer: <?php echo $quizz[$i]['good_answer']?>,
            },
                <?php
            }
        }   
    ?>
];

// Load initial question
loadQuestion();

// Load a question and its choices from quizData
function loadQuestion() {
    const questionElement = document.getElementById("question");
    const choicesElement = document.getElementById("choices");
    const currentQuizData = quizData[currentQuestion];
    // console.log"Ca passe";  
    questionElement.innerText = currentQuizData.question;
    choicesElement.innerHTML = "";
    currentQuizData.choices.forEach(function(choice, index) {
        const li = document.createElement("li");
        li.innerText = choice;
        li.addEventListener("click", function() {
        checkAnswer(index);
        });
        choicesElement.appendChild(li);
    });
}

// Check if user's answer is correct and load next question
function checkAnswer(choice) {
  const currentQuizData = quizData[currentQuestion];
    if (currentQuizData.correctAnswer === choice) {
        score++;
    }
    currentQuestion++;
    if (currentQuestion < quizData.length) {
        loadQuestion();
    } else {
        endQuiz();
    }
}

// End the quiz and show the user's score
function endQuiz() {
    const questionContainerElement = document.getElementById("question-container");
    const submitButtonElement = document.getElementById("home-button");
    questionContainerElement.innerHTML = `<h2>Quiz complete!</h2><p>Your score is: </p><p id="score">${score}</p>/<p>${quizData.length}</p>`;
    submitButtonElement.style.display = "none";
    sendForm();
}

function sendForm() {
   var score = document.getElementById("score").value;
//    window.location.href = "page-php.php?nom=" + quizzStats;
}
</script>