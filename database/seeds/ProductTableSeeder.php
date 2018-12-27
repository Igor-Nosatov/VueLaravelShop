<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'new_price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => 'product/p1.jpg'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'new_price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => 'product/p2.jpg'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'new_price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => 'product/p3.jpg'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'new_price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => 'product/p4.jpg'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'new_price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => 'product/p5.jpg'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'new_price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => 'product/p6.jpg'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'new_price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => 'product/p7.jpg'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'new_price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => 'product/p8.jpg'
      ]);
    }
}
