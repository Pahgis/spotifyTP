<?php

    require_once '../../config/connexion.php';


    $preparedRequest = $connexion->prepare("SELECT * FROM albums INNER JOIN titres WHERE albums.id = titres.id_album");
    $preparedRequest->execute();

    $data = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);


?>