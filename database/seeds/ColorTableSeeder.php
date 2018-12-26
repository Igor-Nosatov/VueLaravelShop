<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('colors')->insert([
          'name' => '#b19c83',
      ]);
      DB::table('colors')->insert([
          'name' => '#000000',
      ]);
      DB::table('colors')->insert([
          'name' => '#999999',
      ]);
      DB::table('colors')->insert([
          'name' => '#0e8ce4',
      ]);
      DB::table('colors')->insert([
          'name' => '#df3b3b',
      ]);
    }
}
