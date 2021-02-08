<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Stories;


class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stories::truncate();

        // TODO: Inserir os dados de lá da Marvel
        
        for ($count = 0; $count < 10; $count++) {

            Stories::create([
                'name' => Str::random(10),
                'type' => Str::random(5),
                'character' => rand(0, 10)
            ]);
        }
        
    }
}
