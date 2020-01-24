<?php

$containerBuilder->addDefinitions(__DIR__ . '/../bootstrap/config.php');

use Application\Controllers\HomeController;
return [
  HomeController::class => function() {
    return new HomeController;
  }
];
