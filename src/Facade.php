<?php

namespace LaravelUtils;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return SiteConfig::class;
    }
}
