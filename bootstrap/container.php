<?php
 require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder;
$containerBuilder->useAutowiring(true);
//Añadimos al contenedor las definiciones de configuración que tendremos en config.php:
$containerBuilder->addDefinitions(__DIR__ . '/../bootstrap/config.php');
$containerBuilder->addDefinitions(base_path('bootstrap/config.php'));


$container = $containerBuilder->build();




return $container;
