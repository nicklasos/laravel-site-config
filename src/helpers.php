<?php

use LaravelUtils\SiteConfig;

if (!function_exists('site_config')) {
    function site_config($name)
    {
        return resolve(SiteConfig::class)->get($name);
    }
}
