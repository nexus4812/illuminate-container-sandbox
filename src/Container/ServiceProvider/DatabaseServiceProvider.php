<?php

namespace IlluminateContainerSandbox\Container\ServiceProvider;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('a');
    }
}
