<?php
    spl_autoload_register( function ($class){

        if (file_exists( '../bo/' . $class . '.php')){
            require '../bo/' . $class . '.php';
        }
    });



    //parametrage de TWIG -> rename autoload.php en config.php
    require_once '../vendor/autoload.php';


    $loader = new \Twig\Loader\FilesystemLoader('../view');
    $twig = new \Twig\Environment($loader);

   
?>