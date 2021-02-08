<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CharactersTableSeeder::class);
        $this->call(ComicsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(StoriesTableSeeder::class);
    }
}
