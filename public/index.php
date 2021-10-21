<?php

require_once '../vendor/autoload.php';
require_once '../config/config.php';

$inject = new Inject(
    INIT_ARRAY,
    AFTER_KEY,
    NEW_KEY,
    NEW_VALUE
);

require_once '../views/home.php';