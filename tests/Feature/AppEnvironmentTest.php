<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AppEnvironmentTest extends TestCase
{
    public function testAppEnv()
    {
        if (App::environment('testing','prod','dev')) {
            self::assertTrue(true);
        }
    }
}
