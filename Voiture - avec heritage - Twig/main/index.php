<?php
require '../utilitaires/config.php';

require_once '../pdo/connexion.php';
require_once '../pdo/VoiturePDO.php';

$listVehicule = VoiturePDO::getAll();







// le render dis : Je veux afficher ce fichier('')
// et je veux envoyer ses variables [=>]

echo $twig->render('index.html.twig', [
    'listVehicule' => $listVehicule
]);

?>

