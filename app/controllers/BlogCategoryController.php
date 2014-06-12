<?php

class BlogCategoryController extends BaseController {

  public function index($id)
  {
    $categories = BlogCategory::all();
    $category = BlogCategory::find($id);

    $data = array(
      'category' => $category,
      'categories' => $categories
      );

    return View::make('pages.blog.category')->with($data);
  }

}
