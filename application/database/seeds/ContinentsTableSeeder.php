<?php

use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Country::create([
                'name' => 'Europa',
                'number_of_countries' => '50',
                'native_name' => 'aaa'

        ]);
    }
}
