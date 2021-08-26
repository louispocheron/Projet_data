<?php 
require './vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('Projet_data_louis/');

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
      require 'views/404.php';
});


$match = $router->match();
if($match !== null){
if (is_callable($match['target'])){
call_user_func($match['target']);
}
else{
  require 'views/404.php';
}
}