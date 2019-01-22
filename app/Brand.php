<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  protected $fillable = ['name'];

  public function product()
  {
    return $this->hasMany('App\Product','brand_id');
  }
}
