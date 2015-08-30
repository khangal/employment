<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
        \App\Work::truncate(); 
        // add 1st row
        \App\Work::create( [
            'user_id' => 1,
            'title' => 'Software Engineer',
            'company' => 'Google Inc'
        ] );
        // add 2nd row
        \App\Work::create( [
            'user_id' => 1,
            'title' => 'System Administrator',
            'company' => 'IBM',
            'start' => \Carbon\Carbon::createFromDate(2010,01,10)->toDateTimeString(),
            'end' => \Carbon\Carbon::createFromDate(2014,07,22)->toDateTimeString()
        ] );
    }
}
