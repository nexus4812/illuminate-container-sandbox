<?php

namespace IlluminateContainerSandbox\Service;

class ManyDependenciesService
{
    public function __construct(private NoDependenciesService $service)
    {
    }

    public function say(string $string): void
    {
        $this->service->say($string);
    }
}
