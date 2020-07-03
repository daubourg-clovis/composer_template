<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);


$title ='Mon Titre';
$nom = 'Moi';
$template = $twig->load('base.html.twig');
echo $template->render(['title' => $title, 'nom' => $nom]);

