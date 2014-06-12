<?php

class BlogPost extends Eloquent {

  protected $table = 'blog_posts';

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function category()
  {
    return $this->belongsTo('BlogCategory');
  }

  public function comments()
  {
      return $this->hasMany('BlogComment');
  }

}
