<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
 {
   $products = Product::query()->get();
   return response()->json($products,200);
 }
}
