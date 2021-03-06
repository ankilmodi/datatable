<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker\Factory::create();

	     for($i = 0; $i < 50000; $i++) {
	        App\User::create([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'password' => $faker->password,
	            'country' => $faker->country,
	            'city' => $faker->city
	        ]);

	    }
	}

}
