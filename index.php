<?php

require_once 'vendor/autoload.php';
require_once 'config/config.php';

$controller = new Controller();

$inject = $controller->getInject();
$display = $controller->getDisplay();

echo "Inject after function\n";
echo "=====================\n";
echo "Initial array:\n";
print_r(INIT_ARRAY);

echo "After key: " . AFTER_KEY . "\n";
echo "New key: " . NEW_KEY . "\n";
echo "New value: " . NEW_VALUE . "\n";
echo "Injected array:\n";
print_r($inject);

echo "\n";
echo "Display function\n";
echo "================\n";
echo "Clock consume max power amount at " . $display['hours'] . ":" . $display['minutes'] . " (" . $display['totalSegments'] . " LEDs on!)\n\n";