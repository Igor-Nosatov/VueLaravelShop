<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
  protected $table = 'brands';
  protected $fillable =['name'];

  public function product() {
        return $this->hasMany('App\Product');
    }
}
