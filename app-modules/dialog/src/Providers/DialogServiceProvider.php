<?php

namespace Modules\Dialog\Providers;

use Illuminate\Support\ServiceProvider;

class DialogServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'dialog');
    }

    public function boot()
    {
    }
}
