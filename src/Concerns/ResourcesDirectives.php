<?php
namespace Leuverink\Scalpel\Concerns;

use Illuminate\Support\Facades\Blade;

/**
 * Class ResourcesDirectives
 */
class ResourcesDirectives
{
    public static function register()
    {
        /*
         * Register @mix directive
         * Echo's script or link tags for Laravel mix resources.
         */
        Blade::directive('mix', function ($resource) {

            if (ends_with($resource, ".css'")) {
                return "<link href='<?= mix({$resource}) ?>' rel='stylesheet'>";
            } elseif (ends_with($resource, ".js'")) {
                return "<script src='<?= mix({$resource}) ?>' type='text/javascript'></script>";
            }
            return "<?= mix({$resource}); ?>";
        });
    }
}
