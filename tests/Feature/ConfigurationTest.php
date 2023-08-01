<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $firstname = config('contoh.author.first');
        $lastName = config('contoh.author.last');
        $email = config('contoh.email');
        $web = config('contoh.web');

        self::assertEquals('Eko', $firstname);
        self::assertEquals('Khannedy', $lastName);
        self::assertEquals('echo.khannedy@gmail.com', $email);
        self::assertEquals('https://www.programerzamannow.com', $web);
    }
}
