<?php
namespace Cxp\Avatar\Facades;

use Illuminate\Support\Facades\Facade;
class Avatar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'avatar';
    }
}