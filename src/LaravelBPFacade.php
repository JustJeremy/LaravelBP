<?php

namespace JustJeremy\LaravelBP;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JustJeremy\LaravelBP\Skeleton\SkeletonClass
 */
class LaravelBPFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelbp';
    }
}
