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
          'name' => 'Apple',
          'img' => 'new_1.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '215',
          'category_id' => '1',
          'brand_id' => '1',
          'color_id' => '1',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_2.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '915',
          'category_id' => '2',
          'brand_id' => '2',
          'color_id' => '2',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_3.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '515',
          'category_id' => '3',
          'brand_id' => '3',
          'color_id' => '3',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_4.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '615',
          'category_id' => '4',
          'brand_id' => '4',
          'color_id' => '4',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_5.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '815',
          'category_id' => '5',
          'brand_id' => '5',
          'color_id' => '5',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_6.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '115',
          'category_id' => '1',
          'brand_id' => '1',
          'color_id' => '1',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_7.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '615',
          'category_id' => '2',
          'brand_id' => '2',
          'color_id' => '2',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_8.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '515',
          'category_id' => '3',
          'brand_id' => '3',
          'color_id' => '3',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_9.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '715',
          'category_id' => '4',
          'brand_id' => '4',
          'color_id' => '4',
      ]);
      DB::table('products')->insert([
          'name' => 'Apple',
          'img' => 'new_10.jpg',
          'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
           It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.',
          'price' => '315',
          'category_id' => '5',
          'brand_id' => '5',
          'color_id' => '5',
      ]);
    }
}
