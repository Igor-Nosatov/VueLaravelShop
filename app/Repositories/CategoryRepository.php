<?php

namespace App\Repositories;
use App\Category;

class CategoryRepository extends BaseRepository
{
  public function __construct(Category $category){
    $this->model = $category;
  }

  public function showCategory()
  {
    return $this->model->get();
  }
}
