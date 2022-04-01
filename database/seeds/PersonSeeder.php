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
            'name' => 'Ricardo',
            'email' => 'email.'.$i.'@hotmail.com',
            'dateOfBirth' => '1994-04-16',
        ]);}
    }
}
