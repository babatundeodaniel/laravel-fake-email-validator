<?php

namespace Getripay\GetripayVerifyFakeEmails\Tests;

use Orchestra\Testbench\TestCase;
use Getripay\GetripayVerifyFakeEmails\GetripayVerifyFakeEmailsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GetripayVerifyFakeEmailsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
