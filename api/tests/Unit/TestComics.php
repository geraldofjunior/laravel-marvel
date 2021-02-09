<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Entities\Comics;

class TestComics extends TestCase
{
    public function test_get_comics_by_hero() {
        $comics = Comics::where('character', 5)->get();
        $this->assertNotEmpty($characters);
    }

}
