<?php
require_once 'vendor/autoload.php';

class ContactController{
    public static function getList($rub){
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => false
        ]);

        echo $twig->render('contact-list.html.twig', ['rub' => $rub]);

    }
}
