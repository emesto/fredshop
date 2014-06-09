<?php

Route::get('/', 'HomeController@index');

Route::get('contact', function()
{
  return View::make('pages.contact');
});