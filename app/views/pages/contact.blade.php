@extends('layouts.default')
@section('content')
<div id="content">
  <div class="container">

    <div class="col-md-12">
      <ul class="breadcrumb">

        <li><a href="#">Home</a></li>
        <li>Contact</li>
      </ul>

      <div class="box text-center">

        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h1>Contact</h1>

            <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
            <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

          </div>
        </div>
      </div>

      <div class="box" id="contact">
        <div class="row">
          <div class="col-sm-4">
            <h3><i class="fa fa-map-marker"></i> Address</h3>
            <p>13/25 New Avenue<br>
              New Heaven<br>
              45Y 73J<br>
              England<br>
              <strong>Great Britain</strong></p>
            </div><!-- /.col-sm-4 -->
            <div class="col-sm-4">
              <h3><i class="fa fa-phone"></i> Call center</h3>
              <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
              <p><strong>+33 555 444 333</strong></p>
            </div><!-- /.col-sm-4 -->
            <div class="col-sm-4">
              <h3><i class="fa fa-envelope"></i> Electronic support</h3>
              <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
              <ul>
                <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
              </ul>
            </div><!-- /.col-sm-4 -->     
          </div><!-- /.row -->

          <hr>

          <div id="map">

          </div>

          <hr>
          <h2 class='text-center'>Contact form</h2>

          <form>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" class="form-control" id="firstname">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" id="lastname">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject">
                  </div>
                </div>  
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control"></textarea>
                  </div>
                </div>

                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                </div>
              </div>
            </div> <!-- /.row -->
          </form>


        </div> <!-- /#contact -->
      </div>

    </div> <!-- /.container -->
  </div> <!-- /#content -->
@stop

@section('extra-scripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script>
function initialize() {
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(50.800680, -1.987766),
    mapTypeId: google.maps.MapTypeId.ROAD,
    scrollwheel: false
  }
  var map = new google.maps.Map(document.getElementById('map'),
    mapOptions);

  var myLatLng = new google.maps.LatLng(50.800680, -1.987766);
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop