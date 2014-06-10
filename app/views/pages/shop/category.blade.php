@extends('layouts.default')
@section('content')
<div id="content">
  <div class="container">

    <div class="col-md-12">
      <ul class="breadcrumb">

        <li><a href="#">Home</a></li>
        <li>Ladies</li>
      </ul>
      <div class="row">
        <div class="box text-center">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <h1>Ladies</h1>
              <p class="text-muted">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="row">


<!-- *** LEFT COLUMN ***
  _________________________________________________________ -->

  <div class="col-sm-9">

    <div class="row products">

      <div class="col-md-4 col-sm-6">
        <div class="product">
          <div class="image">
            <a href="detail.html">
              <img src="img/product1.jpg" alt="" class="img-responsive image1" >
            </a>
          </div><!-- /.image -->
          <div class="text">
            <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
            <p class="price">$143.00</p>
            <p class="buttons">
              <a href="detail.html" class="btn btn-default">View detail</a>
              <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </p>
          </div><!-- /.text -->
        </div> <!-- /.product -->
      </div> 

      <div class="col-md-4 col-sm-6">
        <div class="product">
          <div class="image">
            <a href="detail.html">
              <img src="img/product2.jpg" alt="" class="img-responsive image1" >
            </a>
          </div><!-- /.image -->
          <div class="text">
            <h3><a href="detail.html">White Blouse Armani</a></h3>
            <p class="price"><del>$280</del> $143.00</p>
            <p class="buttons">
              <a href="detail.html" class="btn btn-default">View detail</a>
              <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </p>
          </div><!-- /.text -->

          <div class="ribbon sale">
            <div class="theribbon">SALE</div>
            <div class="ribbon-background"></div>
          </div><!-- /.ribbon -->

          <div class="ribbon new">
            <div class="theribbon">NEW</div>
            <div class="ribbon-background"></div>
          </div><!-- /.ribbon -->           
        </div> <!-- /.product -->
      </div> 

      <div class="col-md-4 col-sm-6">
        <div class="product">
          <div class="image">
            <a href="detail.html">
              <img src="img/product3.jpg" alt="" class="img-responsive image1" >
            </a>
          </div><!-- /.image -->
          <div class="text">
            <h3><a href="detail.html">Black Blouse Versace</a></h3>
            <p class="price">$143.00</p>
            <p class="buttons">
              <a href="detail.html" class="btn btn-default">View detail</a>
              <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </p>

          </div><!-- /.text -->
        </div> <!-- /.product -->
      </div> 

      <div class="col-md-4 col-sm-6">
        <div class="product">
          <div class="image">
            <a href="detail.html">
              <img src="img/product3.jpg" alt="" class="img-responsive image1" >
            </a>
          </div><!-- /.image -->
          <div class="text">
            <h3><a href="detail.html">Black Blouse Versace</a></h3>
            <p class="price">$143.00</p>
            <p class="buttons">
              <a href="detail.html" class="btn btn-default">View detail</a>
              <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </p>

          </div><!-- /.text -->
        </div> <!-- /.product -->
      </div> 

      <div class="col-md-4 col-sm-6">
        <div class="product">
          <div class="image">
            <a href="detail.html">
              <img src="img/product2.jpg" alt="" class="img-responsive image1" >
            </a>
          </div><!-- /.image -->
          <div class="text">
            <h3><a href="detail.html">White Blouse Versace</a></h3>
            <p class="price">$143.00</p>
            <p class="buttons">
              <a href="detail.html" class="btn btn-default">View detail</a>
              <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </p>

          </div><!-- /.text -->

          <div class="ribbon new">
            <div class="theribbon">NEW</div>
            <div class="ribbon-background"></div>
          </div><!-- /.ribbon -->           
        </div> <!-- /.product -->
      </div> 

      <div class="col-md-4 col-sm-6">
        <div class="product">
          <div class="image">
            <a href="detail.html">
              <img src="img/product1.jpg" alt="" class="img-responsive image1" >
            </a>
          </div><!-- /.image -->
          <div class="text">
            <h3><a href="detail.html">Fur coat</a></h3>
            <p class="price">$143.00</p>
            <p class="buttons">
              <a href="detail.html" class="btn btn-default">View detail</a>
              <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </p>

          </div><!-- /.text -->
        </div> <!-- /.product -->
      </div> <!-- /.col-md-4 -->
    </div><!-- /.products -->

    <div class="row">

      <div class="col-md-12 banner">
        <a href="#"><img src="img/banner2.jpg" alt="" class="img-responsive"></a>
      </div>

    </div>


    <div class="pages">

      <p class="loadMore">
        <a href="#" class="btn btn-primary"><i class="fa fa-chevron-down"></i> Load more</a>
      </p>

      <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </div>


  </div> <!-- /.col-md-9 -->

  <!-- *** LEFT COLUMN END *** -->

<!-- *** RIGHT COLUMN ***
  _________________________________________________________ -->

  <div class="col-sm-3">
    <div id="categoryMenu">
      <h3>Shop</h3>

      <ul class="nav nav-pills nav-stacked">
        <li>
          <a href="category.html">Men</a>
          <ul>
            <li><a href="category.html">T-shirts</a></li>
            <li><a href="category.html">Shirts</a></li>
            <li><a href="category.html">Pants</a></li>
            <li><a href="category.html">Accessories</a></li>
          </ul>
        </li>
        <li class="active">
          <a href="category.html">Ladies</a>
          <ul>
            <li><a href="category.html">T-shirts</a></li>
            <li><a href="category.html">Skirts</a></li>
            <li><a href="category.html">Pants</a></li>
            <li><a href="category.html">Accessories</a></li>
          </ul>
        </li> 
        <li>
          <a href="category.html">Kids</a>
          <ul>
            <li><a href="category.html">T-shirts</a></li>
            <li><a href="category.html">Skirts</a></li>
            <li><a href="category.html">Pants</a></li>
            <li><a href="category.html">Accessories</a></li>
          </ul>
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

</div>

</div> <!-- /.container -->
</div> <!-- /#content -->
@stop