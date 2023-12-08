<?php

declare(strict_types=1);

require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
$subObject = new SubClass();

print $subObject->publicProperty . PHP_EOL;

print $subObject->getParentProtectedProperty() . PHP_EOL;

print $subObject->getParentPrivateProperty() . PHP_EOL;

