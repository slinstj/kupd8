<?php

use zayny\di\Container;

$file = '..' . DIRECTORY_SEPARATOR . 'zayny'
        . DIRECTORY_SEPARATOR . 'base'
        . DIRECTORY_SEPARATOR . 'Autoloader.php';
$class = require_once $file;

$autoloader = new zayny\base\Autoloader;
$autoloader->addNamespace('zayny', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'zayny');

$di = new Container;
