<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FileStorageTest extends TestCase
{

    public function testStorage()
    {
        $filesystem = Storage::disk('local');

        $filesystem->put("file.txt", "Eko Kurniawan Khannedy");

        $content = $filesystem->get("file.txt");

        self::assertEquals("Eko Kurniawan Khannedy", $content);
    }
    public function testPublic()
    {
        $filesystem = Storage::disk('public');

        $filesystem->put("file.txt", "Eko Kurniawan Khannedy");

        $content = $filesystem->get("file.txt");

        self::assertEquals("Eko Kurniawan Khannedy", $content);
    }
}
