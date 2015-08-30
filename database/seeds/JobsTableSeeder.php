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
            'name' => 'private'
        ] );
        // add 2nd row
        \App\Jobs::create( [
            'name' => 'public'
        ] );
    }
}
