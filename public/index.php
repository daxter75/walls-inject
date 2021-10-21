<?php

require_once '../vendor/autoload.php';
require_once '../config/config.php';

$controller = new Controller();

$inject = $controller->getInject();
$display = $controller->getDisplay();

require_once '../views/home.php';