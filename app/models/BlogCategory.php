<?php

class BlogCategory extends Eloquent {

  protected $table = 'blog_categories';

  public function posts()
  {
    return $this->hasMany('BlogPost');
  }

}
