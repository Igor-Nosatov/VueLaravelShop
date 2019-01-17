<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;

  protected $fillable = ['name', 'new_price',
     'old_price', 'description', 'image',
     'category_id','brand_id', 'color_id'];

  public function category()
  {
    return $this->belongsTo('App\Category', 'category_id');
  }

  public function orders()
  {
    return $this->hasMany(Order::class);
  }

}
