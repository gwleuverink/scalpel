<?php

namespace Leuverink\Scalpel;

use Illuminate\Support\ServiceProvider;

class ScalpelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Concerns\ConditionalsDirectives::register();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
