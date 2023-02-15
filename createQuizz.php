

<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quizzeo</title>
        <link rel="icon" href="img/logo.ico" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    </head>

    <body>
        

        <div class="container" id="container">
            <form action="#" method="POST" id="add_form">
                <div class="jsp" id="jsp">

                    <div class="entitled">
                        <input type="text" name = "entitled" class="form-control" placeholder="Intitulé" required>
                    </div>
    
                    <div class="answer1">
                        <input type="text" name="answer" placeholder="Réponse 1" required>
                        <input type="checkbox">
                    </div>
    
                    <div class="answer2">
                        <input type="text" name="answer" placeholder="Réponse 2" required>
                        <input type="checkbox">
                    </div>
    
                    <div class="answer3">
                        <input type="text" name="answer" placeholder="Réponse 3">
                        <input type="checkbox">
                    </div>
    
                    <div class="answer4">
                        <input type="text" name="answer" placeholder="Réponse 4">
                        <input type="checkbox">
                    </div>
    
                    <div class="add_question">
                        <button class="button_add_question">Add More</button>
                    </div>
    
                </div>
                <div class="submit">
                    <button class="button_submit">Soumettre le Quizz</button>
                </div>
            </form>
            <script>
                $(document).ready(function() {
                    $(".add_question").click(function(e) {
                        e.preventDefault();
                        $(".jsp").prepend('<div class="new"><div class="entitled"><input type="text" name = "entitled" class="form-control" placeholder="Intitulé" required></div>     <div class="answer1"><input type="text" name="answer" placeholder="Réponse 1" required><input type="checkbox"></div>       <div class="answer2"><input type="text" name="answer" placeholder="Réponse 2" required><input type="checkbox"></div>       <div class="answer3"><input type="text" name="answer" placeholder="Réponse 3"><input type="checkbox"></div>         <div class="answer4"><input type="text" name="answer" placeholder="Réponse 4"><input type="checkbox"></div>       <div class="add_question"><button class="button_remove_question">Remove</button></div> </div>');
                    })                 
                })
                $(document).on('click', '.button_remove_question', function(e) {
                    e.preventDefault();
                    let jsp_question = $(this).parent().parent();
                    $(jsp_question).remove();     
                })
                $("#add_form").submit(function(e) {
                    e.preventDefault();
                    $(".submit").val('...');
                    $.ajax({
                        url: 'newQuizz.php',
                        method: 'post',
                        data: $(this).serialize(),
                        success: function() {
                            console.log(response);
                        }
                    })
                })
            </script>
        </div>   
    </body>
</html>
?>







