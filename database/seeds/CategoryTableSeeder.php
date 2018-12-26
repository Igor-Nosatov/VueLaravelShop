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
      DB::table('categories')->insert([
          'name' => 'Computers & Laptops',
      ]);
      DB::table('categories')->insert([
          'name' => 'Cameras & Photos',
      ]);
      DB::table('categories')->insert([
          'name' => 'Hardware',
      ]);
      DB::table('categories')->insert([
          'name' => 'Smartphones & Tablets',
      ]);
      DB::table('categories')->insert([
          'name' => 'TV & Audio',
      ]);
      DB::table('categories')->insert([
          'name' => 'Gadgets',
      ]);
      DB::table('categories')->insert([
          'name' => 'Car Electronics',
      ]);
      DB::table('categories')->insert([
          'name' => 'Video Games & Consoles',
      ]);
      DB::table('categories')->insert([
          'name' => 'Accessories',
      ]);
    }
}
