<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function search(Request $request)
  {
        $error = ['error' => 'No results found, please try with different keywords.'];
        if($request->has('q')) {
            $posts = Product::search($request->get('q'))->get();
            return $posts->count() ? $posts : $error;
        }
        return $error;
  }
}
