<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

	public function index()
  {
		$wishlist = Wishlist::query()->get();
		return response()->json($wishlist,200);
	}
  
	public function store(Request $request)
	{
		$order = new Order([
			'name' => $request->get('name'),
			'image' => $request->get('image'),
			'price' => $request->get('price'),
			'qty' => $request ->get('qty')
		]);

		$order->save();
		return response()->json('successfully added product to wishlist');
	}
}
