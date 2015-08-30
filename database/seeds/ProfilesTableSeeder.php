<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
        \App\Profile::truncate(); 
        // add 1st row
        \App\Profile::create( [
            'user_id' => 1,
            'firstname' => 'Хангал',
            'lastname' => 'Жаргалсайхан',
            'headline' => 'Оюутан',
            'address' => 'БГД-н 4-р хороолол 45-20',
            'desired_salary' => 800000,
            'phone' => '89237842',
            'summary' => 'Laravel Framework ашиглах болон, Full stack development хийх сонирхолтой'
        ] );
        // add 2nd row
        \App\Profile::create( [
            'user_id' => 2,
            'firstname' => 'Khangal',
            'lastname' => 'Kola',
            'headline' => 'Undergraduate',
            'address' => 'New York',
            'phone' => '12345678',
            'summary' => 'I wanna be a rockstar.'
        ] );
    }
}
