<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'new_price',
     'old_price', 'description', 'image', 'category_id','brand_id', 'color_id'];

   public function categories()
   {
     return $this->belongsTo('App\Category', 'category_id');
   }

   public function brands()
   {
     return $this->belongsTo('App\Brand', 'brand_id');
   }

   public function colors()
   {
     return $this->belongsTo('App\Color', 'color_id');
   }
}
