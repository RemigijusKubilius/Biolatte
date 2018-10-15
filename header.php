<!DOCTYPE html>
<html>
<head>
    <title>Biolatte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=619510728163411&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>

<div class="slider">
    <div class="white-bacglound">
        <div class="top-line">
          <div class="top-line-list-wrapper">
            <span><a href="#"><img src="img/shop-icon.png" alt=""> Cart</a></span>
            <ul>
              <li><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
              <li><a href="#">Facebook</a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="navi-wrapper">
                <div class="logo-wrapper">
                  <a href="#"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="navi">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Store Locator</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">How to Purchase</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="img/slider1.jpg" alt="slider1" style="width:100%;">
          <!--<div class="carousel-caption">
            <h3></h3>
            <p></p>
            Galima užrašyti ant slaiderio.
          </div>-->
      </div>
      <div class="item">
        <img src="img/slider2.jpg" alt="slider2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/slider3.jpg" alt="slider3" style="width:100%;">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
</div>
<div class="banner-wrapper">
  <div class="banner-content-wrapper">
    <ul>
      <li><a href="#">STORE</a></li>
      <li><a id="bunner-button" href="#">Check out our product range</a></li>
      <li><a href="#">STORE</a></li>
    </ul>
  </div>
</div>

</header>