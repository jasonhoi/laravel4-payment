<?php

namespace DE3\Laravel4\Payment;

use Illuminate\Support\Facades\Facade;

/**
 * UuidFacade
 *
 */
class PaymentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'payment';
    }
}
