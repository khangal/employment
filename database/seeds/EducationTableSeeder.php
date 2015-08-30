<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
        \App\Education::truncate(); 
        // add 1st row
        \App\Education::create( [
            'user_id' => 1,
            'field' => 'Computer Science',
            'degree' => 'Баклавар'
        ] );
        // add 2nd row
        \App\Education::create( [
            'user_id' => 1,
            'degree' => 'Магистр',
            'field' => 'Art science'
        ] );
    }
}
