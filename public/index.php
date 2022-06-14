<?php


use app\core\Application;
use app\controllers\SiteController;

require_once __DIR__.'/../vendor/autoload.php';
$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');
$app->router->post('/contact',[SiteController::class,'contact']);


$app->run();