<?php
/**
 * Created by PhpStorm.
 * User: MEDIACODE1
 * Date: 20/06/2017
 * Time: 09:14
 */

namespace Leuverink\Scalpel\Repositories;


/**
 * Class ConcernRepository
 * @package Leuverink\Scalpel\Repositories
 */
class ConcernRepository
{
    /**
     * @array $concerns
     */
    public static function register ($concerns) {

        foreach ($concerns as $concern) {
            $directiveConcern = 'Leuverink\Scalpel\Concerns\\' . ucfirst($concern) . 'Directives';
            if(class_exists($directiveConcern))
                $directiveConcern::register();
        }
    }
}