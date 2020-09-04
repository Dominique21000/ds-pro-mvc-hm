<?php
require_once 'vendor/autoload.php';

class SiteController{
    public static function accueil($rub){
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => false
        ]);
        
        echo $twig->render('index.html.twig', ['rub' => $rub]);
    }

    public static function getNotFound(){
        $loader = new \Twig\Loader\FilesystemLoader('view');
                $twig = new \Twig\Environment($loader, [
                    'cache' => false
                ]);

        echo $twig->render('error/404.html.twig', ['name' => 'Fabien']);
    }
}
