<?php

class PostController extends BaseController {

  public function index()
  {
    return View::make('pages.blog.post');
  }

}
