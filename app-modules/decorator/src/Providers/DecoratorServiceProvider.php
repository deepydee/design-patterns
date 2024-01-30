<?php

namespace Modules\Decorator\Providers;

use Illuminate\Support\ServiceProvider;

class DecoratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'decorator');
    }

    public function boot()
    {
    }
}
