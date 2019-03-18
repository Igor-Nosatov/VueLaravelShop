<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

  public function index()
  {
    $orders = Order::query()->get();
    return response()->json($orders,200);
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
     return response()->json('successfully added product to cart');
   }
}
