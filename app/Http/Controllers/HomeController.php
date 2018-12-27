<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
   {
     $products = Product::query()->take(8)->get();
     return response()->json($products,200);
   }
}
