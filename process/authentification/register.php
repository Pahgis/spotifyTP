<?php

if (
    !empty($_POST["pseudo"]) &&
    !empty($_POST["password"]) &&
    !empty($_POST["password_confirm"]) &&
    $_POST["password"] === $_POST["password_confirm"]
) {

    require_once '../../config/connexion.php';
    $hashpwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $prepareRequest = $connexion->prepare("INSERT INTO users (pseudo, password) VALUES (?,?)");
    $prepareRequest->execute([
        $_POST["pseudo"],
        $hashpwd,
    ]);
    header('Location: ../../authentification.php');
}