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
      DB::table('categories')->insert(['name' => 'Fruits and Vegetables']);
      DB::table('categories')->insert(['name' => 'Meat and Fish']);
      DB::table('categories')->insert(['name' => 'Cooking']);
      DB::table('categories')->insert(['name' => 'Beverages']);
      DB::table('categories')->insert(['name' => 'Home and Cleaning']);
      DB::table('categories')->insert(['name' => 'Pest Control']);
      DB::table('categories')->insert(['name' => 'Office Products']);
      DB::table('categories')->insert(['name' => 'Beauty Products']);
      DB::table('categories')->insert(['name' => 'Health Products']);
      DB::table('categories')->insert(['name' => 'Pet Care']);
      DB::table('categories')->insert(['name' => 'Home Appliances']);
      DB::table('categories')->insert(['name' => 'Baby Care']);
    }
}
