<?php

define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', dirname(__DIR__) . DS);
define('PATH_PUBLIC', dirname(__FILE__) . DS);

require PATH_ROOT . 'vendor/autoload.php';
require PATH_ROOT . 'config/constant/init.php';

$app = new Rubricate\Relevant\ApplicationRelevant(
    'App.Controller'
);

$app->setControllerNotFound([
    '/' => 'Error404',
    'Admin' => 'Error404'
]);

$app->setControllerSuffix('Controller');
$app->setActionSuffix('Action');

$app->run();

