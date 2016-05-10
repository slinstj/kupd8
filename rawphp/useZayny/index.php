<?php
// AUTOLOADER ##################################################################
$file = '..' . DIRECTORY_SEPARATOR . 'zayny'
        . DIRECTORY_SEPARATOR . 'base'
        . DIRECTORY_SEPARATOR . 'Autoloader.php';
$class = require_once $file;

$autoloader = new zayny\base\Autoloader;
$autoloader->addNamespace('zayny', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'zayny');

// #############################################################################


// withou DI container

$colorizer = new zayny\other\Colorizer();
$item = new zayny\other\Movie($colorizer);
$tv = new \zayny\other\Tv($item);
$tv->showOnScreen();
