<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeRepository
{
  public function __construct(Product $product){
		$this->model = $product;
	}

  public function showProduct()
	{
		return $this->model->with('category')->get();
	}
}
