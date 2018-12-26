<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'img', 'description', 'price'];

    public function category()
    {
        return $this->hasMany('App\Category');
    }

    public function brand()
    {
        return $this->hasMany('App\Brand');
    }

    public function color()
    {
        return $this->hasMany('App\Color');
    }


}
