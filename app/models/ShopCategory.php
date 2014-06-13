<?php

class ShopCategory extends Eloquent {

  protected $table = 'shop_categories';
  
  public static function build_category_list($parent_id, &$category_list = array()){
    $shop_categories = ShopCategory::where('parent_id', '=', $parent_id)->get();
    foreach($shop_categories as $shop_category){
      array_push($category_list, $shop_category->name);
      $temp_list = ShopCategory::build_category_list($shop_category->id);
      if($temp_list != array()){ array_push($category_list, $temp_list); }    
    }
    return $category_list;
  }

}
