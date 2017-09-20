<?php

namespace LaravelUtils;

use TestCase;

class SiteConfigTest extends TestCase
{
    public function testGetDefault()
    {
        config(['payments.form' => 'base']);

        $conf = new SiteConfig('dotadrop');

        $this->assertEquals('base', $conf->get('payments.form'));
    }

    public function testGet()
    {
        config(['sites.dotadrop.payments.form' => 'site']);

        $conf = new SiteConfig('dotadrop');

        $this->assertEquals('site', $conf->get('payments.form'));
    }

    public function testSet()
    {
        $conf = new SiteConfig('dotadrop');

        $this->assertNull($conf->get('test.config'));

        $conf->get(['test.config' => 'test set']);

        $this->assertEquals('test set', $conf->get('test.config'));
    }
}
