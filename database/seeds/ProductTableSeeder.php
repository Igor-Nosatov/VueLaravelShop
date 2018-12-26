<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
      $products = [
             [
                 'name' => "Ecco",
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua consequat.',
                 'avaibility' => true,
                 'new_price' => 200.10,
                 'old_price' => 400.20,
                 'image' => 'product/p1.jpg',
                 'created_at' => new DateTime,
                 'updated_at' => null,
             ],
             [
                 'name' => "Puma",
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua consequat.',
                 'avaibility' => true,
                 'new_price' => 780.10,
                 'old_price' => 400.20,
                 'image' => 'product/p2.jpg',
                 'created_at' => new DateTime,
                 'updated_at' => null,
             ],
             [
                 'name' => "Addidas",
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua consequat.',
                 'avaibility' => true,
                 'new_price' => 120.10,
                 'old_price' => 400.20,
                 'image' => 'product/p3.jpg',
                 'created_at' => new DateTime,
                 'updated_at' => null,
             ],
             [
                 'name' => "Ecco",
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua consequat.',
                 'avaibility' => true,
                 'new_price' => 150.10,
                 'old_price' => 400.20,
                 'image' => 'product/p4.jpg',
                 'created_at' => new DateTime,
                 'updated_at' => null,
             ],
             [
                 'name' => "Puma",
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua consequat.',
                 'avaibility' => true,
                 'new_price' => 100.10,
                 'old_price' => 400.20,
                 'image' => 'product/p5.jpg',
                 'created_at' => new DateTime,
                 'updated_at' => null,
             ],
             [
                 'name' => "NewBalance",
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua consequat.',
                 'avaibility' => true,
                 'new_price' => 100.10,
                 'old_price' => 400.20,
                 'image' => 'product/p6.jpg',
                 'created_at' => new DateTime,
                 'updated_at' => null,
             ],
             [
                 'name' => "Ecco",
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua consequat.',
                 'avaibility' => true,
                 'new_price' => 340.10,
                 'old_price' => 400.20,
                 'image' => 'product/p7.jpg',
                 'created_at' => new DateTime,
                 'updated_at' => null,
             ],
             [
                 'name' => "Puma",
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua consequat.',
                 'avaibility' => true,
                 'new_price' => 300.10,
                 'old_price' => 400.20,
                 'image' => 'product/p8.jpg',
                 'created_at' => new DateTime,
                 'updated_at' => null,
             ]
         ];

         DB::table('products')->insert($products);
    }
}
