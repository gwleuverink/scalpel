<?php

namespace Leuverink\Scalpel;

use Illuminate\Support\ServiceProvider;
use Leuverink\Scalpel\Repositories\ConcernRepository;

class ScalpelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $concerns = [
            'Conditionals',
            'Resources',
            'Derps'
        ];

        ConcernRepository::register($concerns);
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
