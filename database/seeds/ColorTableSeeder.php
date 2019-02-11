<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    public function run()
    {
          DB::table('colors')->insert(['name' => 'Black']);
          DB::table('colors')->insert(['name' => 'Black Leather']);
          DB::table('colors')->insert(['name' => 'Black with red']);
          DB::table('colors')->insert(['name' => 'Gold']);
          DB::table('colors')->insert(['name' => 'SpaceGrey']);
    }
}
