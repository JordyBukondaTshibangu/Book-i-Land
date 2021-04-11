<?php

use Illuminate\Database\Seeder;
// use Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            DB::table('customers')->insert([
                'fullName' => $faker->name,
                'dateOfBirth' => $faker->date,
                'email' => $faker->email,
                'password' => bcrypt('12345678')
            ]);
        }
    }
}
