<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Person::class, 100 )->create();

        for ($i =1; $i<51; $i++){
        DB::table('people')->insert([
            'address_id' => rand(1,150),
            'name' => 'Ricardo',
            'email' => 'email.'.$i.'@hotmail.com',
            'dateOfBirth' => '1994-04-16',
        ]);}
    }
}
