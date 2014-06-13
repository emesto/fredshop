<?php

class HomeController extends BaseController {

	public function index()
	{
    $shop_category_list = ShopCategory::build_category_list(0);
    $data = array(
      'shop_category_list' => $shop_category_list
    );
		return View::make('pages.shop.index')->with($data);
	}

  

}
