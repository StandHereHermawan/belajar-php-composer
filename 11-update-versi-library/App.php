<?php

require_once __DIR__ . "/vendor/autoload.php";

$customer = new AriefMencobaTeknologi\Data\Customer("Terry");
echo $customer->sayHello("Davis") . PHP_EOL;
echo $customer->sayHello() . PHP_EOL;
