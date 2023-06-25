<?php

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function(RequestInterface $request, ResponseInterface $response, array $args = []) {
    $response->getBody()->write("Hello World");
    return $response;
});
$app->run();