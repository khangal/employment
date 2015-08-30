<?php

use Illuminate\Database\Seeder;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
        \App\Access::truncate(); 
        // add 1st row
        \App\Access::create( [
            'name' => 'private'
        ] );
        // add 2nd row
        \App\Access::create( [
            'name' => 'public'
        ] );
    }
}
