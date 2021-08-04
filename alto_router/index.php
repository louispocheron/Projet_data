<?php 
require './vendor/autoload.php';
$router = new AltoRouter();
$router->setBasePath('Projet_data/alto_router/');

$router->map('GET', '/', 'test');
$router->map('GET', '/langage/[*:langage]', 'langages/langage'); // langages = nom du dossier et langage = nom du fichier


$match = $router->match();
if(is_array($match)){
    $params = $match ['params'];
    require "{$match['target']}.php";
}
else{
    echo '404';
}


