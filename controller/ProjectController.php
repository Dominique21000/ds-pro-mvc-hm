<?php
require_once 'vendor/autoload.php';

class ProjectController{
    public static function getList($rub){
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => false
        ]);

        echo $twig->render('project-list.html.twig', ['rub' => $rub]);

    }
}
