<?php

use App\House;
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
        if (! House::count()) {
            $this->call(HousesTableSeeder::class);
        }
    }
}
