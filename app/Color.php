<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
  protected $fillable = ['name'];

  public function product()
  {
    return $this->hasMany('App\Product','color_id');
  }
}
