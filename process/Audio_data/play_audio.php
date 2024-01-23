

<!-- requete pour recuperer mon fichier audio -->



<?php

require_once "../../config/connexion.php";

$preparedRequest = $connexion->prepare(
    "SELECT * FROM song"
   
   );


$preparedRequest->execute();
$song = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($song);

