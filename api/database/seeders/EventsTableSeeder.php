<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Events;


class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Events::truncate();

        // TODO: Inserir os dados de lá da Marvel
        
        for ($count = 0; $count < 10; $count++) {

            Events::create([
                'name' => Str::random(10),
                'character' => rand(0, 10)
            ]);
        }
        
    }
}