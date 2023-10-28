<?php

// ServiceProviderなしであれば`illuminate/container`だけで実装できそう

use Illuminate\Container\Container;
use IlluminateContainerSandbox\Service\NoDependenciesService;

require_once __DIR__ . '/../vendor/autoload.php';

(new Container())->get(NoDependenciesService::class)->say('yes'); // yes


