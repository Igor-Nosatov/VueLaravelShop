<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('brands')->insert([
          'name' => 'Apple',
      ]);
      DB::table('brands')->insert([
          'name' => 'Beoplay',
      ]);
      DB::table('brands')->insert([
          'name' => 'Google',
      ]);
      DB::table('brands')->insert([
          'name' => 'Meizu',
      ]);
      DB::table('brands')->insert([
          'name' => 'OnePlus',
      ]);
      DB::table('brands')->insert([
          'name' => 'Samsung',
      ]);
      DB::table('brands')->insert([
          'name' => 'Sony',
      ]);
      DB::table('brands')->insert([
          'name' => 'Xiaomi',
      ]);
    }
}
