<?php
namespace Leuverink\Scalpel\Concerns;

use Illuminate\Support\Facades\Blade;

/**
 * Class ConditionalsDirectives
 */
class ConditionalsDirectives 
{

    public static function register ()
    {
        /*
         * Register @selectedif directive
         * Echo's 'selected' if the expression is true
         */
        Blade::directive('selectedif', function ($expression) {
            return "<?= ($expression) ? 'selected' : null ?>";
        });

        /*
         * Register @checkedif directive
         * Echo's 'checked' if the expression is true
         */
        Blade::directive('checkedif', function ($expression) {
            return "<?= ($expression) ? 'checked' : null ?>";
        });
    }
}
