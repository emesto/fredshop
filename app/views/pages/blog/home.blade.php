@extends('layouts.default')
@section('content')
<div id="content">
  <div class="container">

    <div class="col-md-12">
      <ul class="breadcrumb">

        <li><a href="#">Home</a></li>
        <li>Blog listing</li>
      </ul>


      <div class="box text-center">

        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h1>The blog!</h1>
            <p>
              Here is a blog which will provide announcements about the site and occasionally provide special offers!
            </p>
          </div>
        </div>
      </div>

    </div>

<!-- *** LEFT COLUMN ***
  _________________________________________________________ -->

  <div class="col-sm-9"  id="blog-listing">

    @if ($posts->count())
      @foreach ($posts as $post)
        <div class="post">
          <h2>{{ link_to('/blog/post/'.$post->id, $post->title) }}</h2>
          <p class="author-category">By <a href="#">{{{ $post->user->username }}}</a> in <a href="">{{{ $categories->find($post->blog_category_id)->name }}}</a></p>
          <hr>
          <p class="date-comments">
            <a href="/blog/post"><i class="fa fa-calendar-o"></i> {{{ date("d F Y",strtotime($post->created_at)) }}}</a><!--LOOK INTO REPLACING THE CODE IN THE VIEW BY USING A MODEL PRESENTER-->
            <a href="/blog/post/{{ $post->id}}#comments"><i class="fa fa-comment-o"></i> {{ $post->comments->count() }} Comments</a>
          </p>
          <div class="image">
            <a href="{{ '/blog/post/'.$post->id }}"><img src="{{ URL::asset('img/blog/posts/'.$post->id.'.jpg') }}" class="img-responsive" alt="{{ $post->title }}"></a>
          </div>
          <p class="intro">{{{ $post->content }}}</p>
          <p class="read-more">{{ link_to('/blog/post/'.$post->id, 'Continue reading', ['class' => 'btn btn-primary']) }}</p>
        </div>
      @endforeach
    @else
      There are no posts.
    @endif

    <ul class="pager">
      <li class="previous"><a href="#">&larr; Older</a></li>
      <li class="next disabled"><a href="#">Newer &rarr;</a></li>
    </ul>



  </div> <!-- /.col-md-9 -->

  <!-- *** LEFT COLUMN END *** -->

<!-- *** RIGHT COLUMN ***
  _________________________________________________________ -->

  <div class="col-sm-3">
    <div id="categoryMenu">
      <h3>Categories</h3>

      <ul class="nav nav-pills nav-stacked">
        @if ($categories->count())
          @foreach ($categories as $category)
            <li>{{ link_to("blog/category/{$category->id}", $category->name) }}</li>
          @endforeach
        @else
          There are no categories.
        @endif
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