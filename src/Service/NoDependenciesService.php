<?php

namespace IlluminateContainerSandbox\Service;

class NoDependenciesService
{
    public function __construct()
    {
    }

    public function say(string $string): void
    {
        echo $string;
    }
}
