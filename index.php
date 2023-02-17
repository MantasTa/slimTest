<?php


require __DIR__ . '\vendor\autoload.php';

$app = new \Slim\App;

$app-> get('/', function(){
echo "Helo world";
});

$app->run();
