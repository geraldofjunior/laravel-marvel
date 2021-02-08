<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Entities\Characters;

class TestCharacters extends TestCase
{
    public function test_get_all_heroes() {
        $characters = Characters::all();
        $this->assertNotEmpty($characters);
    }

    public function test_get_specific_hero() {
        $character = Characters::get(5);
        $this->assertNotEmpty($character)
    }
    
}
