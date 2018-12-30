<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'new_price',
     'old_price', 'description', 'image', 'category_id'];

}
