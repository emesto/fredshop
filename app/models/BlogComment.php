<?php

class BlogComment extends Eloquent {

  protected $table = 'blog_comments';

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function post()
  {
    return $this->belongsTo('BlogPost');
  }

}
