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
      DB::table('categories')->insert(['name' => 'New Hammer']);
      DB::table('categories')->insert(['name' => 'New Hammer1']);
      DB::table('categories')->insert(['name' => 'New Hammer2']);
      DB::table('categories')->insert(['name' => 'New Hammer3']);
      DB::table('categories')->insert(['name' => 'New Hammer4']);
      DB::table('categories')->insert(['name' => 'New Hammer5']);
      DB::table('categories')->insert(['name' => 'New Hammer6']);
      DB::table('categories')->insert(['name' => 'New Hammer7']);
    }
}
