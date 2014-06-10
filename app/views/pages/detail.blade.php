@extends('layouts.default')
@section('content')
<div id="content">
  <div class="container">

    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Ladies</a></li>
        <li><a href="#">Tops</a></li>
        <li>White Blouse Armani</li>
      </ul>
      <div class="box text-center">

        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h1>White Blouse Armani</h1>
            <p class="text-muted">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>
            <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material & care and sizing</a></p>
          </div>
        </div>
      </div>


    </div>        

<!-- *** LEFT COLUMN ***
  _________________________________________________________ -->

  <div class="col-md-9">

    <div class="row" id="productMain">
      <div class="col-sm-6">
        <div id="mainImage">
          <img src="img/detailbig1.jpg" alt="" class="img-responsive">
        </div>

        <div class="ribbon sale">
          <div class="theribbon">SALE</div>
          <div class="ribbon-background"></div>
        </div><!-- /.ribbon -->

        <div class="ribbon new">
          <div class="theribbon">NEW</div>
          <div class="ribbon-background"></div>
        </div><!-- /.ribbon --> 

      </div>
      <div class="col-sm-6">
        <div class="box">

          <form>
            <div class="sizes">

              <h3>Available sizes</h3>

              <label for="size_s">
                <a href="#">S</a>
                <input type="radio" id="size_s" name="size" value="s" class="size-input">
              </label>
              <label for="size_m">
                <a href="#">M</a>
                <input type="radio"  id="size_m" name="size" value="m"  class="size-input">
              </label>
              <label for="size_l">
                <a href="#">L</a>
                <input type="radio"  id="size_l" name="size" value="l"  class="size-input">
              </label>

            </div>

            <p class="price">$124.00</p>

            <p class="text-center"><button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</button></p>
          </form>
        </div>

        <div class="row" id="thumbs">
          <div class="col-xs-4">
            <a href="img/detailbig1.jpg" class="thumb">
              <img src="img/detailsquare.jpg" alt="" class="img-responsive">
            </a>
          </div>
          <div class="col-xs-4">
            <a href="img/detailbig2.jpg" class="thumb">
              <img src="img/detailsquare2.jpg" alt="" class="img-responsive">
            </a>
          </div>
          <div class="col-xs-4">
            <a href="img/detailbig3.jpg" class="thumb">
              <img src="img/detailsquare3.jpg" alt="" class="img-responsive">
            </a>
          </div>            
        </div>
      </div>

    </div>


    <div class="box" id="details">
      <p><h4>Product details</h4>
        <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
        <h4>Material & care</h4>
        <ul>
          <li>Polyester</li>
          <li>Machine wash</li>
        </ul>
        <h4>Size & Fit</h4>
        <ul>
          <li>Regular fit</li>
          <li>The model (height 5'8" and chest 33") is wearing a size S</li>
        </ul>

        <blockquote>
          <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
        </blockquote>

      </div>

      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <h3>You may also like these products</h3>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="product">
            <div class="image">
              <a href="#">
                <img src="img/product2.jpg" alt="" class="img-responsive image1" >
              </a>
            </div>
            <div class="text">
              <h3>Fur coat</h3>
              <p class="price">$143</p>

            </div>
          </div> <!-- /.product -->
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="product">
            <div class="image">
              <a href="#">
                <img src="img/product3.jpg" alt="" class="img-responsive image1" >
              </a>
            </div>
            <div class="text">
              <h3>Fur coat</h3>
              <p class="price">$143</p>
            </div>
          </div> <!-- /.product -->
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="product">
            <div class="image">
              <a href="#">
                <img src="img/product1.jpg" alt="" class="img-responsive image1" >
              </a>
            </div>
            <div class="text">
              <h3>Fur coat</h3>
              <p class="price">$143</p>
            </div>
          </div> <!-- /.product -->
        </div>          

      </div>

      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <h3>Products viewed recently</h3>
          </div>
        </div>


        <div class="col-md-3 col-sm-6">
          <div class="product">
            <div class="image">
              <a href="#">
                <img src="img/product3.jpg" alt="" class="img-responsive image1" >
              </a>
            </div>
            <div class="text">
              <h3>Fur coat</h3>
              <p class="price">$143</p>
            </div>
          </div> <!-- /.product -->
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="product">
            <div class="image">
              <a href="#">
                <img src="img/product1.jpg" alt="" class="img-responsive image1" >
              </a>
            </div>
            <div class="text">
              <h3>Fur coat</h3>
              <p class="price">$143</p>
            </div>
          </div> <!-- /.product -->
        </div>  


        <div class="col-md-3 col-sm-6">
          <div class="product">
            <div class="image">
              <a href="#">
                <img src="img/product2.jpg" alt="" class="img-responsive image1" >
              </a>
            </div>
            <div class="text">
              <h3>Fur coat</h3>
              <p class="price">$143</p>

            </div>
          </div> <!-- /.product -->
        </div>

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
        <li>
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

</div> <!-- /.container -->
</div> <!-- /#content -->
@stop