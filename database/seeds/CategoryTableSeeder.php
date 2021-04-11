<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['dramatic', 'sci-fi','computer & science', 'health', 'sport'];
        foreach($categories as $catgeory){
            DB::table('categories')->insert([
                'name' => $catgeory
            ]);
        }
    }
}

