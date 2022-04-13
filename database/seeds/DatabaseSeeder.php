<?php

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

        $this->call(CountrySeeder::class);
        $this->call(AddressSeeder::class);
         $this->call(PersonSeeder::class);
         $this->call(PetSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(PlayerSeeder::class);
        $this->call(CarSeeder::class);
    }
}
