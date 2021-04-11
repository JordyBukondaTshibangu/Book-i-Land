<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++){
            DB::table('books')->insert([
                'title' => $faker->name,
                'author' => $faker->name,
                'pages' => $faker->biasedNumberBetween($min = 100, $max = 900, $function = 'sqrt'),
                'edition' => $faker->name,
                'linkToBook' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
                'category_id' => 1
            ]);
        }
    }
}
