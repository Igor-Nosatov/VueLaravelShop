<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->insert(['name' => 'Apple']);
        DB::table('brands')->insert(['name' => 'Asus']);
        DB::table('brands')->insert(['name' => 'Gionee']);
        DB::table('brands')->insert(['name' => 'Micromax']);
        DB::table('brands')->insert(['name' => 'Samsung']);
    }
}
