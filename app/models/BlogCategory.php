<?php

class BlogCategory extends Eloquent {

  protected $table = 'blog_categories';

  public function blog_posts()
  {
        return $this->hasMany('BlogPost');
  }

}
