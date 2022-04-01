
<?php

use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Pet::class, 400 )->create();

        for ($i =1; $i<251; $i++){
            DB::table('pets')->insert([
                'people_id' => rand(1,150),
                'name' => 'Max',
                'color' => 'brown',
                'dateOfBirth' => '2001-04-16'
            ]);}
    }

}

