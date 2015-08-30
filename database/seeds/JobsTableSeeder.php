<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
        \App\Jobs::truncate(); 
        // add 1st row
        \App\Jobs::create( [
            'posted_by' => 1,
            'company' => 'Google Inc',
            'title' => 'Front-end Developer',
            'description' => 'Required: Web design, Sass, AngularJS, Grunt & Bower',
            'salary' => '30000000',
            'type_id' => 2
        ] );
        // add 2nd row
        \App\Jobs::create( [
            'posted_by' => 2,
            'company' => 'Fender',
            'title' => 'Audio engineer',
            'description' => 'Live mixing, recording, reproduction',
            'salary' => '10000000',
            'type_id' => 1
        ] );
    }
}
