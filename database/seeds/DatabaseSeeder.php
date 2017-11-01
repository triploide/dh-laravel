<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	//Genre
        \DB::table('genres')->insert(
        	['name' => 'Comedia seed', 'ranking' => 354784395, 'active' => 1]
        );

        \DB::table('actors')->insert([
        	['first_name' => 'Maxi', 'last_name' => 'Yañez', 'rating' => 5],
        	['first_name' => 'Maxi', 'last_name' => 'Yañez', 'rating' => 5],
        	['first_name' => 'Maxi', 'last_name' => 'Yañez', 'rating' => 5],
        	['first_name' => 'Maxi', 'last_name' => 'Yañez', 'rating' => 5],
        	['first_name' => 'Maxi', 'last_name' => 'Yañez', 'rating' => 5],
        	['first_name' => 'Maxi', 'last_name' => 'Yañez', 'rating' => 5]
        ]);
    }
}
