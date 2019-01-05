<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Color;
use App\Brand;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  public function index()
 {

       $product = Product::paginate(6);
       $data['products'] = [
            'pagination' => [
                'total' => $product->total(),
                'per_page' => $product->perPage(),
                'current_page' => $product->currentPage(),
                'last_page' => $product->lastPage(),
                'from' => $product->firstItem(),
                'to' => $product->lastItem()
            ],
            'products' => $product
        ];
       $data['categories'] = Category::get();
       $data['colors'] = Color::get();
       $data['brands'] = Brand::get();
       return response()->json($data, 200);
 }
 public function category($id)
    {
        $data['products'] = Category::with('products')->findOrFail($id);
        $data['categories'] = Category::get();
        $data['colors'] = Color::get();
        $data['brands'] = Brand::get();
        return response()->json($data, 200);
    }

}
