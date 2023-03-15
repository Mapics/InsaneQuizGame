<?php
// Vérification des données envoyées via le formulaire d'inscription
if (isset($_POST['formsend'])) {
    extract($_POST);
    
    if (empty($username) || empty($email) || empty($password)) {
        header("Location: signup.php?error=emptyfields&username=".$username."&email=".$email);
        echo "ca passe1";
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: signup.php?error=invalidemailusername");
        echo "ca passe2";
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=invalidemail&username=".$username);
        echo "ca passe3";
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: signup.php?error=invalidusername&email=".$email);
        echo "ca passe4";
        exit();
    } elseif (empty($role)) {
        header("Location: signup.php?error=selectrole");
        echo "ca passe5";
        exit();
    } else {
        echo "ca passe6";
        // Vérification si l'email de l'utilisateur existe déjà
        $verifydbl = $db->prepare("SELECT email FROM users WHERE email=:email");
        $verifydbl->execute([
            'email' => $email,
        ]);
        $result = $verifydbl->rowCount();
        if($result == 0){
            // hashage du mdp
            $options = [
                'cost' => 12,
            ];
            $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

            if ($role == "quizzer")
            {
                $role = 1;
            } else {
                $role = 0;
            }
            $insert = $db->prepare("INSERT INTO users(pseudo,email,password,role) VALUES(:pseudo,:email,:password,:role)");
            // $res = $conn->query($q);
            $insert->execute([
                'pseudo' => $username,
                'email' => $email,
                'password' => $hashpass,
                'role' => $role,
            ]);
            echo "Le Compte a été créée";
        } else {
            echo "L'email existe déjà";
        }
    }
}
?>