<?php

namespace LaravelUtils;

class SiteConfig
{
    /**
     * @var string
     */
    private $site;

    public function __construct(string $site)
    {
        $this->site = $site;
    }

    public function get($name)
    {
        if (is_array($name)) {
            $name = collect($name);

            $key = $name->keys()->first();
            $value = $name->values()->first();

            return config(["sites.{$this->site}.{$key}" => $value]);
        }

        $site = config("sites.{$this->site}.$name");
        if ($site !== null) {
            return $site;
        }

        return config($name);
    }
}
