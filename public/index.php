<?php

$container = require __DIR__ . '/components/bootstrap/container.php';
$dispacher = require base_path('routes/web.php');

Kint::dump($container);
Kint::dump($dispacher);