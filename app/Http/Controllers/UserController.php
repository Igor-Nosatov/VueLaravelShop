<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
      {
          return response()->json(User::with(['orders'])->get());
      }
}
