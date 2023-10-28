<?php


use Illuminate\Container\Container;
use IlluminateContainerSandbox\Service\ManyDependenciesService;

require_once __DIR__ . '/../vendor/autoload.php';


$container = new Container();

($container)->get(ManyDependenciesService::class)->say('yes'); // yes

