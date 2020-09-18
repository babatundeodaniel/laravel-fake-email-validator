<?php

namespace Getripay\GetripayVerifyFakeEmails;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Getripay\GetripayVerifyFakeEmails\Skeleton\SkeletonClass
 */
class GetripayVerifyFakeEmailsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'getripay-verify-fake-emails';
    }
}
