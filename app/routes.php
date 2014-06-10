<?php

Route::get('/', 'HomeController@index');

Route::get('detail', 'DetailController@index');

Route::get('contact', function()
{
  return View::make('pages.contact');
});