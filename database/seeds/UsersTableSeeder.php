<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
        \App\User::truncate(); 
        // add 1st row
        \App\User::create( [
            'email' => 'khangaljargal@yahoo.com',
            'password' => Hash::make('asdf'),
            'access_id' => 1
        ] );
        // add 2nd row
        \App\User::create( [
            'email' => 'khangalkola@gmail.com',
            'password' => Hash::make('asdf'),
            'access_id' => 2
        ] );
    }
}
