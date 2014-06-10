<?php

Route::get('/', 'HomeController@index');

Route::get('category', 'CategoryController@index');

Route::get('detail', 'DetailController@index');

Route::get('contact', function()
{
  return View::make('pages.contact');
});