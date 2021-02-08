<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Comics;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comics::truncate();
        
        for ($count = 0; $count < 10; $count++) {

            Comics::create([
                'name' => Str::random(10),
                'character' => rand(0, 10)
            ]);
        }
        
    }
}