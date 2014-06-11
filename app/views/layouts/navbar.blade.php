<div class="navbar navbar-default navbar-fixed-top yamm" role="navigation" id="navbar">

  <div class="container">
    <div class="navbar-header">

      <a class="navbar-brand home" href="index.html"><img src="{{ URL::asset('img/logo.png') }}" alt="Minimal logo" class="hidden-xs hidden-sm"><img src="img/logo-small.png" alt="Minimal logo" class="visible-xs visible-sm"><span class="sr-only">Minimal - go to homepage</span></a>
      <div class="navbar-buttons">
        <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#navigation">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-align-justify"></i>
        </button>
        <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#search">
          <span class="sr-only">Toggle search</span>
          <i class="fa fa-search"></i>
        </button>
        <a class="btn btn-primary navbar-toggle" href="basket">
          <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">3 items in cart</span>
        </a>
      </div>
    </div> <!--/.navbar-header -->

    <div class="navbar-collapse collapse"  id="navigation">

      <ul class="nav navbar-nav navbar-left">
        <li{{ (Request::is('/') ? ' class="active"' : '') }}>{{ link_to_route('home', 'Home') }}</li>
        <li class="dropdown yamm-fw">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<b class="caret"></b></a>
          <ul class="dropdown-menu">

            <li>
              <div class="yamm-content">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="img/men.jpg" class="img-responsive hidden-xs" alt="">
                  </div>
                  <div class="col-sm-3">
                    <h3>Clothing</h3>
                    <ul>
                      <li><a href="category">T-shirts</a></li>
                      <li><a href="category">Shirts</a></li>
                      <li><a href="category">Pants</a></li>
                      <li><a href="category">Accessories</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h3>Clothing</h3>
                    <ul>
                      <li><a href="category">T-shirts</a></li>
                      <li><a href="category">Shirts</a></li>
                      <li><a href="category">Pants</a></li>
                      <li><a href="category">Accessories</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h3>Shoes</h3>
                    <ul>
                      <li><a href="category">Trainers</a></li>
                      <li><a href="category">Sandals</a></li>
                      <li><a href="category">Hiking shoes</a></li>
                      <li><a href="category">Casual</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer clearfix hidden-xs">
                <h4 class="pull-right">Men</h4>
                <div class="buttons pull-left">
                  <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
                  <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
                  <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
                </div>
              </div>

            </li>
          </ul>
        </li>
        <li class="dropdown yamm-fw">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
          <ul class="dropdown-menu">

            <li>
              <div class="yamm-content">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="img/women.jpg" class="img-responsive hidden-xs" alt="">
                  </div>
                  <div class="col-sm-3">
                    <h3>Clothing</h3>
                    <ul>
                      <li><a href="category">T-shirts</a></li>
                      <li><a href="category">Shirts</a></li>
                      <li><a href="category">Pants</a></li>
                      <li><a href="category">Accessories</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h3>Clothing</h3>
                    <ul>
                      <li><a href="category">T-shirts</a></li>
                      <li><a href="category">Shirts</a></li>
                      <li><a href="category">Pants</a></li>
                      <li><a href="category">Accessories</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h3>Shoes</h3>
                    <ul>
                      <li><a href="category">Trainers</a></li>
                      <li><a href="category">Sandals</a></li>
                      <li><a href="category">Hiking shoes</a></li>
                      <li><a href="category">Casual</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer clearfix hidden-xs">
                <h4 class="pull-right">Women</h4>
                <div class="buttons pull-left">
                  <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
                  <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
                  <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
                </div>
              </div>

            </li>
          </ul>
        </li>     
        <li{{ (Request::is('blog') ? ' class="active"' : '') }}>{{ link_to_route('blog.home', 'Blog') }}</li>
        <li{{ (Request::is('contact') ? ' class="active"' : '') }}>{{ link_to_route('contact', 'Contact') }}</li>
      </ul>

    </div><!--/.nav-collapse -->

    <div class="navbar-collapse collapse right"  id="basket-overview">
      <a href="basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items <span class="hidden-md">in cart</span></span></a>
    </div><!--/.nav-collapse -->

    <div class="navbar-collapse collapse right"  id="search-not-mobile">
      <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
        <span class="sr-only">Toggle search</span>
        <i class="fa fa-search"></i>
      </button>
    </div>

    <div class="collapse clearfix" id="search">

      <form class="navbar-form" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>

    </div><!--/.nav-collapse -->  

  </div>


</div>