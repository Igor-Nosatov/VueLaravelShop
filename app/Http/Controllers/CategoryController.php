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
        $data['products'] = Product::with(['color','brand'])->paginate(6);
        $data['categories'] = Category::get();
        $data['colors'] = Color::get();
        $data['brands'] = Brand::get();

        return response()->json($data, 200);
    }

    public function show(Request $request)
    {
        $products = new Product;

        if (request()->has('brand'))
        {
         $products = $products->where('brand_id', request('brand'));
        }

        if (request()->has('color'))
        {
         $products = $products->where('color_id', request('color'));
        }

        if (request()->has('sort'))
        {
         $products = $products->orderBy('name',request('sort'));
        }

        if (request()->has('min_price'))
        {
         $products = $products->where('old_price','>=',request('min_price'));
        }

        if (request()->has('max_price'))
        {
         $products = $products->where('old_price','<=',request('max_price'));
        }

        $data['products'] = $products->paginate(6)->appends([
          'brand' => request('brand'),
          'color' => request('color'),
          'sort' => request('sort'),
          'min_price' => request('min_price'),
          'max_price' => request('max_price')
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
