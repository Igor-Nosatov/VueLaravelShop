<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Brand;
use App\Color;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    $products = new Product();
    if($request->name!=""){
        $products = $products->where('name', 'like', '%'.$request->name.'%')->get();
    }
    $data['products'] = $products;
    return response()->json($data, 200);
  }

  public function categoryAndFilter()
  {
    $data['categories'] = Category::get();
    $data['colors'] = Color::get();
    $data['brands'] = Brand::get();
    return response()->json($data, 200);
  }
}
