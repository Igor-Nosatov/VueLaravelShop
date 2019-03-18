<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
{
  use SoftDeletes;

  protected $table = 'wishlist';

  protected $fillable = [
      'name', 'image', 'price', 'qty'
  ];
}
