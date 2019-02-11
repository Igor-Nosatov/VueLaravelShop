<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Color;
use App\Brand;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $products = new Product;

        if (request()->has('brand_id'))
        {
         $products = $products->where('brand_id', request('brand_id'));
        }

        if (request()->has('color_id'))
        {
         $products = $products->where('color_id', request('color_id'));
        }

        if (request()->has('sort'))
        {
         $products = $products->orderBy('name',request('sort'));
        }

        $data['products'] = $products->paginate(6)->appends([
          'brand' => request('brand'),
          'color' => request('color'),
          'sort' => request('sort')
        ]);
        
        $data['categories'] = Category::get();
        $data['colors'] = Color::get();
        $data['brands'] = Brand::get();

        return response()->json($data, 200);
    }

    public function category($id)
    {
        $data['products'] = Product::query()->where('category_id', $id)->paginate(6);
        $data['categories'] = Category::get();
        $data['colors'] = Color::get();
        $data['brands'] = Brand::get();
        return response()->json($data, 200);
    }
}
