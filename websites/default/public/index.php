<?php
require '../autoload.php';
require '../interface.php';

$routes = new \BarclayCard\Routes();

$entryPoint = new \PHPBackend\EntryPoint($routes);

$entryPoint->run();
