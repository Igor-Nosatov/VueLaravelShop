<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'new_price',
     'old_price', 'description', 'image', 'category_id','brand_id', 'color_id'];

     public function category()
   {
    return $this->belongsTo('App\Category', 'category_id');
    }

}
