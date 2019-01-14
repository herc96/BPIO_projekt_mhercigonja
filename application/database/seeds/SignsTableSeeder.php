<?php

use Illuminate\Database\Seeder;

class SignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\Sign::create([
            'test1date' => '2018-04-04',
            'test1grade' => '4',
            'test2date' => '2018-05-05',
            'test2grade' => '4',
            'testdate' => '2018-06-04',
            'testgrade' => '4',
            'presence' => '95',
            'student_id' => 1, 
            'subject_id' => 1

            
        ]);
    
    }
}
