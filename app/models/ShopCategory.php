<?php

class ShopCategory extends Eloquent {

  protected $table = 'shop_categories';
  
  public static function build_category_list($parent_id, $depth = 0, &$category_list = array()){
    $shop_categories = ShopCategory::where('parent_id', '=', $parent_id)->get();
    foreach($shop_categories as $shop_category){
      $category_data = array(
        'id' => $shop_category->id,
        'name' => $shop_category->name,
        'depth' => $depth
        );

      array_push($category_list, $category_data);
      $temp_list = ShopCategory::build_category_list($shop_category->id, $depth+1);
      if($temp_list != array()){ 
        foreach($temp_list as $add){
          array_push($category_list, $add);
        }
        
      }    
    }
    return $category_list;
  }

}
