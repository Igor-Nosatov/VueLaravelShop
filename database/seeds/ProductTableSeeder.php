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
      ]);
    }
}
