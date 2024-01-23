<?php 



require_once '../../config/connexion.php';

$preparedRequest = $connexion->prepare("SELECT * FROM titres");
$preparedRequest->execute();
$name = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($name);

?>