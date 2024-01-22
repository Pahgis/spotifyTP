<?php
    session_start();

    if(!empty($_POST["pseudo"]) && !empty($_POST["password"])){

        require_once '../../config/connexion.php';
        $preparedRequest = $connexion->prepare("SELECT * FROM users WHERE pseudo = ?");
        $preparedRequest->execute([
            $_POST["pseudo"]
        ]);
        $user = $preparedRequest->fetch(PDO::FETCH_ASSOC);
        
        if(password_verify($_POST["password"], $user["password"])){
            $_SESSION["pseudo"] = $user["pseudo"];
            $_SESSION["id"] = $user["id"];
            header('Location: ../../index.php');
        }else{
            header('Location: ../../authentification.php?error=Mauvais mot de passe');
        }
    }


?>

