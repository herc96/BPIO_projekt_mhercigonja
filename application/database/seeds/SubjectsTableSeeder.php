<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Subject::create([
            'name' => 'BPIO',
            'description' => 'laravel',
            'year' => '2018',
            'hour_lesson' => '40',
            'hour_exercise' => '10',
            'teacher_id' => 1
            

            
        ]);
    }
}
