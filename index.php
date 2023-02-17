<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '\vendor\autoload.php';

$app = new \Slim\App;



$app->get('/{page}', function (Request $request, Response $response, array $args) {
    $page = $args['page'];

    switch ($page) {
      case 'pav':
        require_once('body/pavadinimai.php');
        break;

      default:
        require_once('body/pavadinimai.php');
        break;
    }



});


$app->run();
