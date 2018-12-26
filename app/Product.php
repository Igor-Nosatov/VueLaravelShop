<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'img', 'description', 'price'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function color()
    {
        return $this->belongsToMany('App\Color');
    }

    public function orders()
        {
            return $this->hasMany('App\Order');
        }

}
