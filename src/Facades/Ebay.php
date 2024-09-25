<?php
/**
 * Created by Josias Montag
 * Date: 10/30/18 11:02 AM
 * Mail: josias@montag.info
 */

namespace Ivnkara\EbaySdkLaravel\Facades;


use Illuminate\Support\Facades\Facade;
use Ivnkara\EbaySdkLaravel\Ebay as EbayInstance;

class Ebay extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return EbayInstance::class;
    }
}
