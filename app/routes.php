<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('category', 'CategoryController@index');

Route::get('detail', 'DetailController@index');

Route::get('blog/post', 'PostController@index');

Route::get('blog', array('as' => 'blog.home', function()
{
  return View::make('pages.blog.home');
}));

Route::get('contact', array('as' => 'contact', function()
{
  return View::make('pages.contact');
}));