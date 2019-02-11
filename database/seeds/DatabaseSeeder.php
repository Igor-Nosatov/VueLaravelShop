<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(CategoryTableSeeder::class);
         $this->call(BrandTableSeeder::class);
         $this->call(ColorTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}
