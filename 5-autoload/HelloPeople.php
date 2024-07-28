<?php

require_once __DIR__ . "/vendor/autoload.php";

use AriefWorks\Data\People;

echo "Hello World PHP Composer!" . PHP_EOL;

$people = new People("Terry");

echo $people->sayHello("Andrew") . PHP_EOL;
