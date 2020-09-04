<?php
require_once 'vendor/autoload.php';

class DiplomaController{
    public static function getList($rub){
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => false
        ]);

        echo $twig->render('diploma-list.html.twig', ['rub' => $rub]);

    }
}
