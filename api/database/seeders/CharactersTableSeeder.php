<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Characters;


class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Characters::truncate();

        // TODO: Inserir os dados de lá da Marvel
        
        for ($count = 0; $count < 10; $count++) {

            Characters::create([
                'name' => Str::random(10),
                'description' => Str::random(100),
                'modified' => date('Y-m-d'),
                'thumbnail' => 'there isnt any',
            ]);
        }
        
    }
}
