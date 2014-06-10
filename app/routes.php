<?php

Route::get('/', 'HomeController@index');

Route::get('category', 'CategoryController@index');

Route::get('detail', 'DetailController@index');

Route::get('blog/post', 'PostController@index');

Route::get('blog', function()
{
  return View::make('pages.blog.home');
});

Route::get('contact', function()
{
  return View::make('pages.contact');
});