<?php

namespace Bigdaddy\TeresaHrms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class TeresaHrms
 *
 * @author Faisal Yusuf <yussupcazzanova97@gmail.com>
 *
 * @see \Bigdaddy\TeresaHrms\Services\TeresaHrms
 */
class TeresaHrms extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'teresa-hrms';
    }
}
