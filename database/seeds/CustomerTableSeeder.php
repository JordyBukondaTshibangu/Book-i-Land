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
        DB::table('customers')->insert([
            'fullName' => 'john Doe',
            'dateOfBirth' => '1 August 1997',
            'email' => 'johndoe@test.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
