<?php

$loader = require 'vendor/autoload.php';

$loader->addPsr4('Engine\\', __DIR__ . '/vendor/engine');
$loader->addPsr4('App\\', __DIR__ . '/app');

use Engine\Route;

define('APP', __DIR__ . '/app/');

Route::run();