<?php
if (isset($_POST['lformsend'])) {
    extract($_POST);

    if (!empty($lemail) && !empty($lpassword)) {
        $check = $db->prepare("SELECT * FROM users WHERE email = :email");
        $check->execute([
            'email' => $lemail,
        ]);
        $result = $check->fetch();

        if($result == true)
        {
            if(password_verify($lpassword, $result['password']))
            {
                $_SESSION['id'] = $result['id'];
                $_SESSION['pseudo'] = $result['pseudo'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['role'] = $result['role'];
                $_SESSION['lp'] = $result['lp'];
                $_SESSION['avatar'] = $result['avatar'];
                $_SESSION['creer'] = $result['creer'];
                $_SESSION['jouer'] = $result['jouer'];
                setcookie('stats', $_SESSION['id'],$_SESSION['lp'],$_SESSION['jouer']);
                header("Location: index.php");
                echo 'CONNECTE EN TANT QUE '. $_SESSION['pseudo'];
            } else {
                echo "mot de passe incorrect";
            }
        } else {
            echo "email incorrect";
        }

        // var_dump($result);
    } else {
        echo "veuillez completer touts les champs";
    }
}
?>