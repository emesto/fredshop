<?php

class BasketController extends BaseController {

  public function index()
  {
    return View::make('pages.shop.basket');
  }

}
