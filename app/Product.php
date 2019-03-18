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
  public function brand()
  {
    return $this->belongsTo('App\Brand', 'brand_id');
  }
  public function color()
  {
    return $this->belongsTo('App\Color', 'color_id');
  }

  public function orders()
  {
    return $this->hasMany('App\Order');
  }

}
