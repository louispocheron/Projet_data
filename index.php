<?php 
require './vendor/autoload.php';
$router = new AltoRouter();
$router->setBasePath('Projet_data/');

$router->map('GET', '/', function(){
    require 'alto_router/test.php';
});

$match = $router->match();
if($match !== null){
if (is_callable($match['target'])){
call_user_func($match['target']);
}
else{
  require 'alto_router/404.php';
}
}
else{
  echo 'bruhhh';
}

