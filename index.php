<?php

include __DIR__.'/vendor/autoload.php';


use Silex\Application;

$app = new Application();

$app->mount('/', new Controller\MainController());


$app->run();


