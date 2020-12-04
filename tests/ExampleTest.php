<?php

namespace Huynhlexuan1995\Datafollowingcalendar\Tests;

use Orchestra\Testbench\TestCase;
use Huynhlexuan1995\Datafollowingcalendar\DatafollowingcalendarServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DatafollowingcalendarServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
