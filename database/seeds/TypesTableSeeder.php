<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
        \App\Type::truncate(); 
        // add 1st row
        \App\Type::create( [
            'name' => 'Бүтэн цагийн'
        ] );
        // add 2nd row
        \App\Type::create( [
            'name' => 'Хагас цагийн'
        ] );
        
        \App\Type::create( [
            'name' => 'Гэрээт'
        ] );
        
        \App\Type::create( [
            'name' => 'Түр зуурын'
        ] );
        
        \App\Type::create( [
            'name' => 'Дадлагажилт'
        ] );
    }
}
