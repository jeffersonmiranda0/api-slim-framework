<?php

require_once __DIR__ . "/../vendor/autoload.php";

$app = \Slim\Factory\AppFactory::create();

$app->get("/", function (){
    echo "HELLO WORLD";
});

$app->run();