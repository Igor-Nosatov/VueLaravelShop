<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
          'name', 'new_price','old_price', 'avaibility', 'description', 'image'
      ];

      public function cart(){
          return $this->hasMany(Cart::class);
      }
}
