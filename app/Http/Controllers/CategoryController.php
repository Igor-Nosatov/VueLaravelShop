<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
 {
   $products = Product::query()->get();
   return response()->json($products,200);
 }

  public function category()
 {
       $data['categories'] = Category::all();
       $data['products'] = Product::all();
       return response()->json($data, 200);
 }

}
