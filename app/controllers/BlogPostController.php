<?php

class BlogPostController extends BaseController {

  public function index($id)
  {
    $post = BlogPost::find($id);
    return View::make('pages.blog.post')->with('post', $post);
  }

}
