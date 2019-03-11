<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
      DB::table('products')->insert([

          'name' => 'Big',
          'price' => '135',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '299',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '4',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '146',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '5',
          'color_id' => '3'
      ]);
      DB::table('products')->insert([
          'name' => 'Small',
          'price' => '168',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '298',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '2',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '88',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '99',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '5',
          'color_id' => '5'
      ]);

      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '2',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '100',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '1',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '190',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '180',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '5',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '250',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '290',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '4',
          'color_id' => '1'
      ]);

      DB::table('products')->insert([

          'name' => 'Big',
          'price' => '135',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '299',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '4',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '146',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '5',
          'color_id' => '3'
      ]);
      DB::table('products')->insert([
          'name' => 'Small',
          'price' => '168',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '298',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '2',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '88',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '99',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '5',
          'color_id' => '5'
      ]);

      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '2',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '100',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '1',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '190',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '180',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '5',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '250',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '290',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '4',
          'color_id' => '1'
      ]);


      DB::table('products')->insert([

          'name' => 'Big',
          'price' => '135',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '299',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '4',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '146',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '5',
          'color_id' => '3'
      ]);
      DB::table('products')->insert([
          'name' => 'Small',
          'price' => '168',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '298',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '2',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '88',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '99',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '5',
          'color_id' => '5'
      ]);

      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '2',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '100',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '1',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '190',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '180',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '5',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '250',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '290',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '4',
          'color_id' => '1'
      ]);


      DB::table('products')->insert([

          'name' => 'Big',
          'price' => '135',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '299',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '4',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '146',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '5',
          'color_id' => '3'
      ]);
      DB::table('products')->insert([
          'name' => 'Small',
          'price' => '168',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '298',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '2',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '88',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '99',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '5',
          'color_id' => '5'
      ]);

      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '2',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '100',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '1',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '190',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '180',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '5',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '250',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '290',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '4',
          'color_id' => '1'
      ]);


      DB::table('products')->insert([

          'name' => 'Big',
          'price' => '135',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '299',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '4',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '146',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '5',
          'color_id' => '3'
      ]);
      DB::table('products')->insert([
          'name' => 'Small',
          'price' => '168',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '298',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '2',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '88',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '99',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '5',
          'color_id' => '5'
      ]);

      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '150',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p1.jpg',
          'category_id' => '1',
          'brand_id' => '2',
          'color_id' => '1'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '100',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p2.jpg',
          'category_id' => '2',
          'brand_id' => '1',
          'color_id' => '4'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '190',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '180',
          'image' => '/img/product/p3.jpg',
          'category_id' => '3',
          'brand_id' => '5',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '250',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p4.jpg',
          'category_id' => '4',
          'brand_id' => '3',
          'color_id' => '2'
      ]);
      DB::table('products')->insert([
          'name' => 'New Hammer',
          'price' => '290',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
          'old_price' => '300',
          'image' => '/img/product/p5.jpg',
          'category_id' => '5',
          'brand_id' => '4',
          'color_id' => '1'
      ]);










    }
}
