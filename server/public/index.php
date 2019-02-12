<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
require_once '../app/middleware.php';

require_once '../app/Api/RouteIndex.php';
$app->run();
