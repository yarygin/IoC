<?php
require_once ("vendor/autoload.php");

$ioc = new Yarygin\IoC();
$ioc->registerContainers([
    "\\Yarygin\\Example\\AppContainer"
]);
$ioc->start();
$test = new $ioc->get("\\Yarygin\\Example\\ExampleInterface");
var_dump($test);