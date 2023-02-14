<?php

define ('HOST', 'localhost');
define ('DB_NAME', 'quizeodb');
define('USER', 'root');
define('PASS', '');

try {
    $db = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion etablie";
} catch(PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
//  session_start();

// // Connexion à la base de données
// $conn = mysqli_connect('hostname', 'username', 'password', 'database_name');

// // Vérification de la connexion
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Vérification des données envoyées via le formulaire d'inscription
// if (isset($_POST['signup-submit'])) {
//     $username = mysqli_real_escape_string($conn, $_POST['username']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $password = mysqli_real_escape_string($conn, $_POST['password']);
//     $passwordRepeat = mysqli_real_escape_string($conn, $_POST['password-repeat']);

//     // Vérification de la validité des données
//     if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
//         header("Location: signup.php?error=emptyfields&username=".$username."&email=".$email);
//         exit();
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
//         header("Location: signup.php?error=invalidemailusername");
//         exit();
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         header("Location: signup.php?error=invalidemail&username=".$username);
//         exit();
//     } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
//         header("Location: signup.php?error=invalidusername&email=".$email);
//         exit();
//     } elseif ($password !== $passwordRepeat) {
//         header("Location: signup.php?error=passwordcheck&username=".$username."&email=".$email);
//         exit();
//     } else {
//         // Requête pour vérifier si le nom d'utilisateur ou l'email existent déjà
//         $sql = "SELECT username FROM users WHERE username=?";
//         $stmt = mysqli_stmt_init($conn);
//         if (!mysqli_stmt_prepare($stmt, $sql)) {
//             header("Location: signup.php?error=sqlerror");
//             exit();
//         } else {
//             mysqli_stmt_bind_param($stmt, "s", $username);
//             mysqli_stmt_execute($stmt);
//             mysqli_stmt_store_result($stmt);
//             $resultCheck = mysqli_stmt_num_rows($stmt);
//             if ($resultCheck > 0) {
//                 header("Location: .php?error=usertaken&email=".$email);
//                 exit();
//                 } else {
//                 $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
//                 $stmt = mysqli_stmt_init($conn);
//                 if (!mysqli_stmt_prepare($stmt, $sql)) {
//                 header("Location: signup.php?error=sqlerror");
//                 exit();
//                 } else {
//                 // Hachage du mot de passe
//                 $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
//                 mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
//                 mysqli_stmt_execute($stmt);
//                 header("Location: signup.php?signup=success");
//                 exit();
//             }
//         }
//     }
// }
// mysqli_stmt_close($stmt);
// mysqli_close($conn);
                ?>