<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Teacher::create([
            'first_name' => 'Davor',
            'last_name' => 'Lozic',
            'title' => 'ing. inf. tec.',
            

            
        ]);
    }
}
