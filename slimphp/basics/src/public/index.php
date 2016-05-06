<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$config['displayErrorDetails'] = true;

$config['db']['host']   = "localhost";
$config['db']['user']   = "user";
$config['db']['pass']   = "password";
$config['db']['dbname'] = "exampleapp";

$app = new \Slim\App(['settings' => $config]);
$app->get('/hello/{name}/{age}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $age = $request->getAttribute('age');
    $response->getBody()->write("Hi $name! You are $age years old!");

    return $response;
});
$app->run();
