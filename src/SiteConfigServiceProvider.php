<?php

namespace LaravelUtils;

use Illuminate\Support\ServiceProvider;

class SiteConfigServiceProvider extends ServiceProvider
{
    public function register()
    {
        throw_unless(env('SITE'), SiteConfigException::class, 'SITE param should be set in .env');

        $this->app->singleton(SiteConfig::class, function () {
            return new SiteConfig(env('SITE'));
        });
    }
}
