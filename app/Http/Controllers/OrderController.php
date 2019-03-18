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

  public function store(Request $request, $id)
   {
        

   }
}
