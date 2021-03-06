<div id="footer">
  <div class="container">
    <div class="col-md-3 col-sm-6">
      <h4>Pages</h4>

      <ul>
        <li><a href="text.html">About us</a></li>
        <li><a href="text.html">Terms and conditions</a></li>
        <li><a href="text.html">FAQ</a></li>
        <li><a href="contact.html">Contact us</a></li>
      </ul>

      <hr>

      <h4>User section</h4>

      <ul>
        <li><a href="#">Login</a></li>
        <li><a href="#">Regiter</a></li>
      </ul>     

      <hr class="hidden-md hidden-lg hidden-sm">

    </div><!-- /.col-md-3 -->

    <div class="col-md-3 col-sm-6">

      <h4>Top categories</h4>
      <?php $new_root = 0; $not_first = 0; ?>
      @foreach ($shop_category_list as $shop_category)

        @if($shop_category['depth'] == 0)
          @if($not_first == 1)
          </ul>
          @endif
          <h5>{{ $shop_category['name'] }}</h5>
          <?php $new_root = 1; $not_first = 1; ?>
        @else
          @if($new_root == 1)
          <ul>
          <?php $new_root = 0; ?>
          @endif
          <li>{{ $shop_category['name'] }}</li>
        @endif

      @endforeach
      </ul>

      <hr class="hidden-md hidden-lg">

    </div><!-- /.col-md-3 -->

    <div class="col-md-3 col-sm-6">

      <h4>Where to find us</h4>

      <p><strong>Obaju Ltd.</strong>
        <br>13/25 New Avenue<br>
        New Heaven<br>
        45Y 73J<br>
        England<br>
        <strong>Great Britain</strong></p>    

        <a href="contact.html">Go to contact page</a>

        <hr class="hidden-md hidden-lg hidden-sm">

      </div><!-- /.col-md-3 -->



      <div class="col-md-3 col-sm-6">

        <h4>Get the news</h4>

        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

        <form>
          <div class="input-group">

            <input type="text" class="form-control">

            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Subscribe!</button>
            </span>

          </div><!-- /input-group -->
        </form>

        <hr>

        <h4>Stay in touch</h4>

        <p class="social">
          <a href="#"><i class="fa fa-facebook-square"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>
          <a href="#"><i class="fa fa-envelope"></i></a>
        </p>


      </div><!-- /.col-md-3 -->
    </div><!-- /.container -->
</div> <!-- /#footer -->