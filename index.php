<?php 
require './vendor/autoload.php';
$router = new AltoRouter();
$router->setBasePath('Projet_data/');

$router->map('GET', '/less_popular', function(){
      require 'controllers/less_popular_controller.php';
});

$router->map('GET', '/home', function(){
      require 'controllers/home_controller.php';
});

$router->map('GET', '/popular', function(){
      require 'controllers/popular_controller.php';
});

$router->map('GET', '/[*]', function(){
      require 'view/404_view.php';
});


$match = $router->match();
if($match !== null){
if (is_callable($match['target'])){
call_user_func($match['target']);
}
else{
  require '404.php';
}
}
