<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('category', 'CategoryController@index');

Route::get('detail', 'DetailController@index');

Route::get('basket', array('as' => 'basket', 'uses' => 'BasketController@index'));

Route::get('blog', array('as' => 'blog.home', function()
{
  $categories = BlogCategory::all();
  $posts = BlogPost::all();

  $data = array(
    'categories' => $categories,
    'posts'      => $posts
  );
  return View::make('pages.blog.home')->with($data);
}));

Route::get('blog/post', array('as' => 'blog.post', 'uses' => 'PostController@index'));

Route::get('contact', array('as' => 'contact', function()
{
  return View::make('pages.contact');
}));