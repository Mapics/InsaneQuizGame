<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzeo</title>
    <link rel="icon" href="img/logo.ico" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="left">
            <div class="logo">
                <img src="img/logo.ico" alt="logo">
            </div>
        </div>
        <div class="right">
            <div class="choice">
                <a href="index.php">ACCUEIL</a>
                <a href="catalogue/index.php">CATALOGUE</a>
                <a href="#">PROFIL</a>
            </div>
            <div class="connexion">
                <a href="#" class="loginBtn">LOGIN</a>
                <a href="#" class="registerBtn">REGISTER</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="leftPage">
            <div class="container">
                <div class="slogan">
                    <h1>TO PLAY AND MAKE 
                        <br> YOUR OWN
                        <span class="quizzSlogan">QUIZZ</span>
                    </h1>
                </div>
                <div class="game">
                    <a href="catalogue/index.html"><span>PLAY</span></a>
                    <a href="#"><span>CREATE</span></a>
                </div>
            </div>
        </div>
        <div class="rightPage">
            <div class="containerInterrogation">
                <img src="img/interrogation-green.png" alt="interrogation-green" class="interrogationMainPage1">
                <img src="img/interrogation-green.png" alt="interrogation-green" class="interrogationMainPage2">
                <img src="img/interrogation-green.png" alt="interrogation-green" class="interrogationMainPage3">
                <img src="img/interrogation-green.png" alt="interrogation-green" class="interrogationMainPage4">
            </div>
        </div>
    </div>
    <div class="popupLogin">
        <div class="boxLogin">
            <div class="contentLogin">
                <!-- Formulaire de connexion -->
                <h2>LOGIN</h2>
                <form action="index.php">
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconLogin"></ion-icon>
                        <input type="email" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="lock-closed-outline" class="iconLogin"></ion-icon>
                        <input type="password" required>
                        <label>PASSWORD</label>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Remember me</label>
                    </div>
                </form>
                <div class="submit">
                    <button type="submit" class="btn">Login</button>
                </div>
                <div class="loginRegister">
                    <p>Don't have an account ? <a href="#" class="loginToRegisterBtn">Register</a></p>
                </div>
                <div class="leavePageLogin">
                    <img src="img/back_arrow.png" alt="">
                    <span>BACK</span>
                </div>
            </div>
        </div>
    </div>
    <div class="popupRegister">
        <div class="boxRegister">
            <div class="contentRegister">
                <h2>REGISTER</h2>
                <form method="post">
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconRegister"></ion-icon>
                        <input type="username" required>
                        <label>PSEUDO</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="mail-outline" class="iconRegister"></ion-icon>
                        <input type="email" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="btnContainer">
                        <ion-icon name="lock-closed-outline" class="iconRegister"></ion-icon>
                        <input type="password" required>
                        <label>PASSWORD</label>
                    </div>
                    <div class="userType">
                        <div class="userChoice">
                            <label><input type="checkbox">USER</label>
                        </div>
                        <div class="quizzerChoice">
                            <label><input type="checkbox">QUIZZER</label>
                        </div>
                    </div>
                </form>
                <div class="submit">
                    <button type="submit" class="btn" id="formsend">Register</button>
                </div>
                <?php
                include 'database.php';
                global $db;

                $q = $db->query("SELECT * FROM users");
                while ($user = $q->fetch()) {
                    ?>
                    <li>

                </li>
                    <?php
                    // echo "id :" .$userr['id']." pseudo : " . $user['pseudo'] . "<br/>" ;
                    // var_dump($user);
                }

        // Vérification des données envoyées via le formulaire d'inscription
        if (isset($_POST['formsend'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            // $passwordRepeat = mysqli_real_escape_string($conn, $_POST['password-repeat']);

            // Vérification de la validité des données
            if (empty($username) || empty($email) || empty($password)) {
                header("Location: signup.php?error=emptyfields&username=".$username."&email=".$email);
                header("Refresh:0");
                exit();
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
                header("Location: signup.php?error=invalidemailusername");
                exit();
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: signup.php?error=invalidemail&username=".$username);
                exit();
            } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
                header("Location: signup.php?error=invalidusername&email=".$email);
                exit();
            } elseif ($password !== $passwordRepeat) {
                header("Location: signup.php?error=passwordcheck&username=".$username."&email=".$email);
                exit();
            } else {
                // Requête pour vérifier si le nom d'utilisateur ou l'email existent déjà
                $sql = "SELECT username FROM users WHERE username=?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: signup.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultCheck = mysqli_stmt_num_rows($stmt);
                    if ($resultCheck > 0) {
                        header("Location: .php?error=usertaken&email=".$email);
                        exit();
                        } else {
                        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: signup.php?error=sqlerror");
                        exit();
                        } else {
                        // Hachage du mot de passe
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
                        mysqli_stmt_execute($stmt);
                        header("Location: signup.php?signup=success");
                        exit();
                    }
                }
            }
        }
    }
                ?>
                <div class="registerLogin">
                    <p>You already have an account ? <a href="#" class="registerToLoginBtn">Login</a></p>
                </div>
                <div class="leavePageRegister">
                    <img src="img/back_arrow.png" alt="">
                    <span>BACK</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">    
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="scriptLoginRegister.js"></script>
</html>