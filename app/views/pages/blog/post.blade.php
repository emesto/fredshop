@extends('layouts.default')
@section('content')
<div id="content">
  <div class="container">

    <div class="col-md-12">
      <ul class="breadcrumb">

        <li><a href="index.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li>Blog post</li>
      </ul>


      <div class="box text-center">

        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h1>{{{ $post->title }}}</h1>
            <p class="text-italic text-muted">By <a href="#">{{ $post->user->username }}</a> |  June 20, 2013</p>
            <p class="lead">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
          </div>
        </div>
      </div>

    </div>

<!-- *** LEFT COLUMN ***
  _________________________________________________________ -->

  <div class="col-sm-9"  id="blog-post">

    <div id="post-content">
      {{{ $post->content }}}
    </div> <!-- /#post-content -->

    <div id="comments">
      <h4>2 comments</h4>

      @if ($post->comments->count())
        @foreach ($post->comments as $comment)
          <div class="row comment">
            <div class="col-sm-3 col-md-2 text-center-xs">
              <p><img src="{{ URL::asset('img/profilepics/'.$comment->user->id.'.jpg') }}" class="img-responsive img-circle" alt="{{ $comment->user->username }}"></p>
            </div>
            <div class="col-sm-9 col-md-10">
              <h5>{{ $comment->user->username }}</h5>
              <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2011 at 12:00 am</p>
              <p>{{{ $comment->content }}}</p>
              <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a></p>
            </div>
          </div> <!-- /.comment -->
        @endforeach
      @else
        There are no comments.
      @endif

    </div><!-- /#comments -->


    <div id="comment-form">

      <h4>Leave comment</h4>

      <form>
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label for="name">Name <span class="required">*</span></label>
              <input type="text" class="form-control" id="name">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="email">Email <span class="required">*</span></label>
              <input type="text" class="form-control" id="email">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="comment">Comment <span class="required">*</span></label>
              <textarea class="form-control" id="comment" rows="4"></textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 text-right">
            <button class="btn btn-primary"><i class="fa fa-comment-o"></i> Post comment</button>
          </div>
        </div>


      </form>

    </div> <!-- /#comment-form -->


  </div> <!-- /#blog-post -->

  <!-- *** LEFT COLUMN END *** -->

<!-- *** RIGHT COLUMN ***
  _________________________________________________________ -->

  <div class="col-sm-3">
    <div id="categoryMenu">
      <h3>Blog</h3>

      <ul class="nav nav-pills nav-stacked">
        <li>
          <a href="blog.html">About us</a>
        </li>
        <li class="active">
          <a href="blog.html">Fashion</a>
        </li> 
        <li>
          <a href="blog.html">News and gossip</a>
        </li> 
        <li>
          <a href="blog.html">Design</a>
        </li> 
      </ul>
    </div>

    <div class="banner">
      <a href="category.html">
        <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
      </a>
    </div> <!-- /.banner -->
  </div><!-- /.col-md-3 -->

  <!-- *** RIGHT COLUMN END *** -->       


</div> <!-- /.container -->
</div> <!-- /#content -->
@stop