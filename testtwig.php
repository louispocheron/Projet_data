<?php
require 'vendor/autoload.php';
// require '/_config/db.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/views/includes');
$twig = new Twig\Environment($loader, [
    'cache' => false, //  __DIR__.'/tmp'
    
]);

    echo $twig->render('home.twig', [ 'test' => ['laury', 'louis']
    ]);






