<?php
    require_once 'C:/xampp/htdocs/ResonanceBG_Project1'.'/vendor/autoload.php';
 

    $loader = new Twig_Loader_Filesystem('C:/xampp/htdocs/ResonanceBG_Project1'.'/templates/pages');
    $twig = new Twig_Environment($loader, array(
        // Uncomment the line below to cache compiled templates
        // 'cache' => __DIR__.'/../cache',
    ));

    
    echo $twig->render("index.html.twig", array());
 
   

    