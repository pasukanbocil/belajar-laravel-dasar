<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Env;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');

        self::assertEquals('Programer Zaman Now', $youtube);
    }

    public function testDefaultEnv()
    {
        $author= Env::get('AUTHOR','EKO');

        self::assertEquals('EKO', $author);
    }
}
