<?php 
    require '../utilitaires/config.php';
    require_once '../pdo/connexion.php';
    require_once '../pdo/ChauffeurPDO.php';
    require_once '../pdo/VoiturePDO.php';

    $chauffeur = ChauffeurPDO::getOneByVoiture($_GET['id']);
    $voiture = VoiturePDO::getOne($_GET['id']);

    echo $twig->render('chauffeur.html.twig',[
        'chauffeur' => $chauffeur[0],
        'voiture' => $voiture[0]
    ]);



?>