<?php

class CategoryController extends BaseController {

  public function index()
  {
    return View::make('pages.shop.category');
  }

}
