<?php

use App\Category;

class CategoryController extends Controller
{
   public function index(Category $category)
  {
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
  }
}