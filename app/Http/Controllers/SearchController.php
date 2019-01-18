<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    $products = new Product();
    if($request->name!=""){
        $products = $products->where('name', 'like', '%'.$request->name.'%')->paginate(6);
    }
    $data['products'] = $products;
    return response()->json($data, 200);
  }
}
