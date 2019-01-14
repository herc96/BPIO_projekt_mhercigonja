<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Student::create([
            'first_name' => 'Mario',
            'last_name' => 'Hercigonja',
            'dateofbirth' => '1996-12-31',
            'address' => 'Zabok',
            'sign' => '2018'

            
        ]);
    }
}
