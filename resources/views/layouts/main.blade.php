<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Isleando BOOKING</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--ESTILOS DE LA PAGINA-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
        <!-- Page Header-->
      <!-- Page Header-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap bg-gray-dark">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="1px" data-xl-stick-up-offset="1px" data-xxl-stick-up-offset="1px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="d-inline-block brand-name" href="index.html"><img class="img-responsive center-block" src="images/logo-white.png" width="166" height="55" alt=""></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="./">Home</a></li>
                  <li><a href="#">About</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="#">Overview</a></li>
                      <li><a href="#">Testimonials</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="#">Classic blog</a></li>
                      <li><a href="#">Grid blog</a></li>
                      <li><a href="#">Masonry blog</a></li>
                      <li><a href="#">Modern blog</a></li>
                      <li><a href="#">Modern blog v.2</a></li>
                      <li><a href="#">Blog single post</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Pages</a>
                    <!-- RD Navbar Megamenu-->
                    <ul class="rd-navbar-megamenu">
                      <li>
                        <h5>Home</h5>
                        <ul>
                          <li><a href="#">Home variant 1</a></li>
                          <li><a href="#">Home variant 2</a></li>
                          <li><a href="#">Home variant 3</a></li>
                        </ul>
                        <h5>Gallery</h5>
                        <ul>
                          <li><a href="#">Cobbles gallery</a></li>
                          <li><a href="#">Grid gallery</a></li>
                          <li><a href="#">Grid gallery fullwidth</a></li>
                          <li><a href="#">Masonry gallery</a></li>
                        </ul>
                      </li>
                      <li>
                        <h5>Extras</h5>
                        <ul>
                          <li><a href="#">404</a></li>
                          <li><a href="#">503</a></li>
                          <li><a href="#">Maintenance</a></li>
                          <li><a href="#">Coming Soon</a></li>
                          <li><a href="#">Login/Register</a></li>
                          <li><a href="#">Site Map</a></li>
                          <li><a href="#">Tickets list</a></li>
                        </ul>
                      </li>
                      <li>
                        <h5>Elements</h5>
                        <ul>
                          <li><a href="#">Grid</a></li>
                          <li><a href="#">Tables</a></li>
                          <li><a href="#">Progress bars</a></li>
                          <li><a href="#">Tabs & Accordions</a></li>
                          <li><a href="#">Forms</a></li>
                          <li><a href="#">Buttons</a></li>
                          <li><a href="#">Typography</a></li>
                        </ul>
                      </li>
                      <li>
                        <h5>Layouts</h5>
                        <ul>
                          <li><a href="#">Header default</a></li>
                          <li><a href="#">Header minimal</a></li>
                          <li><a href="#">Header wide</a></li>
                          <li><a href="#">Footer default</a></li>
                          <li><a href="#">Footer corporate</a></li>
                          <li><a href="#">Footer widget</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Contacts</a></li>
                </ul>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span class="fa-search"></span></a>
                  <form class="rd-search" data-search-live="rd-search-results-live" action="search-results.html" method="GET">
                    <div class="form-wrap">
                      <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                      <input class="form-input rd-navbar-search-form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                    </div>
                    <button class="button fa-search"></button>
                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
        @yield('content')
        <!-- Page Footer-->
      <footer class="page-footer">
        <div class="container container-wide text-md-left">
          <div class="row row-50 section-60 section-lg-90">
            <div class="col-md-6 col-xl-3"><a class="d-inline-block" href="./"><img class="img-responsive center-block" src="images/logo-white.png" width="166" height="55" alt=""></a>
              <p>SkyBooking is a travel search engine which instantly searches all available flight, bus and train prices on an exhaustive number of travel sites such as online travel agencies, major and low-cost airlines and tour-operators. We also compare hotel rooms and car rental deals. You can easily narrow down your search as much (or as little!) as you want. That means that if the trip you'd like is anywhere out there, you'll find it right away.</p>
            </div>
            <div class="col-md-6 col-xl-3">
              <h5 class="text-bold">Latest Blog Posts</h5>
              <hr class="divider divider-50 divider-info divider-sm-left">
              <div class="unit flex-column flex-md-row">
                <div class="unit-left"><img class="img-responsive center-block" src="images/footer-01.jpg" width="100" height="10" alt=""></div>
                <div class="unit-body"><span class="extra-small">Sep 8, 2019</span>
                  <p class="text-bold"><a href="blog-single-post.html">How These 5 People Found The Path to Their Dream Trip</a></p>
                </div>
              </div>
              <div class="unit flex-column flex-md-row">
                <div class="unit-left"><img class="img-responsive center-block" src="images/footer-02.jpg" width="100" height="10" alt=""></div>
                <div class="unit-body"><span class="extra-small">Sep 8, 2019</span>
                  <p class="text-bold"><a href="blog-single-post.html">The Ultimate Packing List for Female Travelers: 10 Useful Tips</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="inset-xxl-left-50">
                <h5 class="text-bold">What People Say</h5>
                <hr class="divider divider-50 divider-info divider-sm-left">
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-dots-left owl-dots-white" data-dots="true" data-items="1" data-margin="30" data-mouse-drag="false">
                  <blockquote class="quote quote-sm">
                    <p>
                      <q>“I must tell you how impressed I am by your customer service. I have contacted you twice now and each time I received a prompt reply plus the additional attention of a manager. I have never received this kind of response from any other airline tickets booking site.”</q>
                    </p>
                    <p>
                      <cite>Phillip Holland</cite>
                    </p>
                  </blockquote>
                  <blockquote class="quote quote-sm">
                    <p>
                      <q>“I found your web site very easy to use. The entire process was very quick, and the price of my ticket was very affordable.”</q>
                    </p>
                    <p>
                      <cite>Amber Barnett</cite>
                    </p>
                  </blockquote>
                  <blockquote class="quote quote-sm">
                    <p>
                      <q>“Thank you for making it so easy. I really love the way I can view the itinerary and put payment info on the same page!”</q>
                    </p>
                    <p>
                      <cite>Ralph Green</cite>
                    </p>
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="inset-xxl-left-50">
                <h5 class="text-bold">Contact Us</h5>
                <hr class="divider divider-50 divider-info divider-sm-left">
                <!-- RD Mailform-->
                <form class="rd-mailform rd-form text-md-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap form-wrap-sm">
                    <label class="text-gray-light form-label" for="footer-name">Your name</label>
                    <input class="form-input form-input-dark" id="footer-name" type="text" name="name" data-constraints="@Required">
                  </div>
                  <div class="form-wrap form-wrap-sm">
                    <label class="text-gray-light form-label" for="footer-email">Your e-mail</label>
                    <input class="form-input form-input-dark" id="footer-email" type="email" name="email" data-constraints="@Email @Required">
                  </div>
                  <div class="form-wrap form-wrap-sm">
                    <label class="text-gray-light form-label" for="footer-message">Message</label>
                    <textarea class="form-input form-input-dark" id="footer-message" style="height: 90px;" name="message" data-constraints="@Required"></textarea>
                  </div>
                  <button class="button button-primary button-xs button-naira button-naira-up" type="submit"><span class="icon fa-envelope-o"></span><span>Send</span></button>
                </form>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <div class="container container-wide page-footer-min small">
          <div class="row row-20 justify-content-end-xs-middle">
            <div class="col-md-6 text-md-left">
              <ul class="list-inline">
                <li><a class="icon fa-facebook" href="#"></a></li>
                <li><a class="icon fa-twitter" href="#"></a></li>
                <li><a class="icon fa-pinterest-p" href="#"></a></li>
                <li><a class="icon fa-vimeo" href="#"></a></li>
                <li><a class="icon fa-google-plus" href="#"></a></li>
                <li><a class="icon fa-rss" href="#"></a></li>
              </ul>
            </div>
            <div class="col-md-6 text-md-right">
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
</body>
    <!-- Java script-->
    <script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</html>
