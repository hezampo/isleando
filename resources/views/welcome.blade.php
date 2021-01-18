@extends('layouts.main')

@section('content')
<!-- Swiper-->
<section class="swiper-slide-wrapper">
        <div class="swiper-container swiper-slider" data-simulate-touch="false" data-autoplay="3500" data-slide-effect="fade">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="{{url('images/background-06.jpg')}}"></div>
            <div class="swiper-slide" data-slide-bg="{{url('images/background-08.jpg')}}"></div>
          </div>
        </div>
        <div class="swiper-onSlider">
          <div class="container container-wide section-70 section-xxl-top-200 section-xxl-bottom-220">
            <div class="row justify-content-sm-center">
              <div class="col-xxl-6 col-xl-9 col-lg-11">
                <div class="responsive-tabs text-lg-left nav-custom-dark view-animate fadeInUpSmall" data-type="horizontal">
                  <!-- Responsive-tabs-->
                  <ul class="nav-custom-tabs resp-tabs-list">
                    <li class="nav-item"><span class="icon mdi mdi-airplane"></span><span>Flights</span></li>
                    <li class="nav-item"><span class="icon mdi mdi-hotel"></span><span>Hotels</span></li>
                    <li class="nav-item"><span class="icon mdi mdi-car"></span><span>Car Hire</span></li>
                  </ul>
                  <div class="resp-tabs-container nav-custom-tab nav-custom-wide">
                    <div>
                      <form class="small" method="post" action="#">
                        <div class="row row-20 row-md-23">
                          <div class="col-lg-8">
                            <div class="form-wrap radio-inline-wrapper">
                              <label class="radio-inline">
                                <input name="input-group-radio" value="radio-1" type="radio" checked>Round Trip
                              </label>
                              <label class="radio-inline">
                                <input name="input-group-radio" value="radio-2" type="radio">One Way
                              </label>
                              <label class="radio-inline">
                                <input name="input-group-radio" value="radio-3" type="radio">Multi-city
                              </label>
                            </div>
                          </div>
                          <div class="col-lg-4 text-lg-right">
                            <div class="form-wrap">
                              <label class="checkbox-inline">
                                <input name="input-group-radio" value="checkbox-1" type="checkbox">Direct Flights Only
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="row row-20 row-md-23">
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">From</label>
                                  <!--Select 2-->
                                  <select class="form-input select-filter" data-minimum-results-for-search="Infinity">
                                    <option>New Delhi (DEL)</option>
                                    <option value="2">London (LHR)</option>
                                    <option value="3">Atlanta (ATL)</option>
                                    <option value="4">Tokyo (HND)</option>
                                    <option value="5">Chicago (ORD)</option>
                                  </select>
                                </div>
                                <div class="form-wrap">
                                  <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-1" type="checkbox">Add Nearby Airports
                                  </label>
                                </div>
                              </div>
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">To</label>
                                  <!--Select 2-->
                                  <select class="form-input select-filter" data-minimum-results-for-search="Infinity">
                                    <option>New York (JFK)</option>
                                    <option value="2">Beijing (PEK)</option>
                                    <option value="3">Dubai (DXB)</option>
                                    <option value="4">Los Angeles (LAX)</option>
                                    <option value="5">Hong Kong (HKG)</option>
                                  </select>
                                </div>
                                <div class="form-wrap">
                                  <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-2" type="checkbox">Add Nearby Airports
                                  </label>
                                </div>
                              </div>
                              <div class="col-lg-1-5">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Cabin Class</label>
                                  <!--Select 2-->
                                  <select class="form-input select-filter" data-minimum-results-for-search="Infinity">
                                    <option>Economy</option>
                                    <option value="2">Premium Economy</option>
                                    <option value="3">Business</option>
                                    <option value="4">First</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="row row-20 row-md-23 align-items-md-end">
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Departure</label>
                                  <input class="form-input" type="text" data-time-picker="date" data-constraints="@Required" name="departure">
                                </div>
                              </div>
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Return</label>
                                  <input class="form-input" type="text" data-time-picker="date" data-constraints="@Required" name="return">
                                </div>
                              </div>
                              <div class="col-md-6 col-xl-4">
                                <div class="row row-20 row-md-23">
                                  <div class="col-sm-6">
                                    <div class="form-wrap">
                                      <label class="form-label-outside">Adults (16+)</label>
                                      <input class="form-input" type="number" min="0" value="2" data-constraints="@Numeric">
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-wrap">
                                      <label class="form-label-outside">Children</label>
                                      <input class="form-input" type="number" min="0" value="0" data-constraints="@Numeric">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-xl-clear-flex align-items-md-end text-center text-xl-right">
                                <button class="button button-primary button-sm button-naira button-naira-up"><span class="icon fa-search"></span><span>Search Flight</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div>
                      <form class="small" method="post" action="#">
                        <div class="row row-20 row-md-23">
                          <div class="col-lg-8">
                            <div class="form-wrap radio-inline-wrapper">
                              <label class="radio-inline">
                                <input name="input-group-radio" value="radio-1" type="radio" checked>Work
                              </label>
                              <label class="radio-inline">
                                <input name="input-group-radio" value="radio-2" type="radio">Vacation
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="row row-20 row-md-23">
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Destination</label>
                                  <!--Select 2-->
                                  <select class="form-input select-filter" data-minimum-results-for-search="Infinity">
                                    <option>San Antonio</option>
                                    <option value="2">Hawaii</option>
                                    <option value="3">Budapest</option>
                                    <option value="4">Buenos Aires</option>
                                    <option value="5">Taipei</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Rooms</label>
                                  <input class="form-input" type="number" min="0" value="1" data-constraints="@Numeric">
                                </div>
                              </div>
                              <div class="col-lg-1-5">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Star rating</label>
                                  <!--Select 2-->
                                  <select class="form-input select-filter" data-minimum-results-for-search="Infinity">
                                    <option>5</option>
                                    <option value="2">4</option>
                                    <option value="3">3</option>
                                    <option value="4">2</option>
                                    <option value="5">1</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="row row-20 row-md-23 align-items-md-end">
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Arrival</label>
                                  <input class="form-input" type="text" data-time-picker="date" data-constraints="@Required" name="departure">
                                </div>
                              </div>
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Leave</label>
                                  <input class="form-input" type="text" data-time-picker="date" data-constraints="@Required" name="return">
                                </div>
                              </div>
                              <div class="col-md-6 col-xl-4">
                                <div class="row row-20 row-md-23">
                                  <div class="col-sm-6">
                                    <div class="form-wrap">
                                      <label class="form-label-outside">Adults (16+)</label>
                                      <input class="form-input" type="number" min="0" value="2" data-constraints="@Numeric">
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-wrap">
                                      <label class="form-label-outside">Children</label>
                                      <input class="form-input" type="number" min="0" value="0" data-constraints="@Numeric">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-xl-clear-flex text-center text-xl-right">
                                <button class="button button-primary button-sm button-naira button-naira-up"><span class="icon fa-search"></span><span>Search Hotels</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div>
                      <form class="small" method="post" action="#">
                        <div class="row row-20 row-md-23">
                          <div class="col-lg-8">
                            <div class="form-wrap radio-inline-wrapper">
                              <label class="checkbox-inline">
                                <input name="input-group-radio" value="checkbox-2" type="checkbox">Return car to different location
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="row row-20 row-md-23">
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Select car</label>
                                  <!--Select 2-->
                                  <select class="form-input select-filter" data-minimum-results-for-search="Infinity">
                                    <option>Economy (Suzuki Swift)</option>
                                    <option value="2">Compact (Toyota Corolla)</option>
                                    <option value="3">Intermediate (KIA Cerato)</option>
                                    <option value="4">Standard (Hyundai Elantra)</option>
                                    <option value="5">Full Size (Toyota Camry)</option>
                                    <option value="6">Premium (Holden SV6)</option>
                                    <option value="7">Luxury (Holden Caprice V8)</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">AWD</label>
                                  <input class="form-input" type="text" data-constraints="@Required @Integer" placeholder="000-000-000">
                                </div>
                              </div>
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Car class</label>
                                  <!--Select 2-->
                                  <select class="form-input select-filter" data-minimum-results-for-search="Infinity">
                                    <option>Hatchback</option>
                                    <option value="4">Sedan</option>
                                    <option value="3">Coupe</option>
                                    <option value="2">MPV</option>
                                    <option value="1">SUV</option>
                                    <option value="1">Crossover</option>
                                    <option value="1">Convertible</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="row row-20 row-md-23 align-items-md-end">
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Pick-up Date</label>
                                  <input class="form-input" type="text" data-time-picker="date" data-constraints="@Required" name="departure">
                                </div>
                              </div>
                              <div class="col-12 col-sm">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Drop-off Date</label>
                                  <input class="form-input" type="text" data-time-picker="date" data-constraints="@Required" name="return">
                                </div>
                              </div>
                              <div class="col-md-4 col-xl-3">
                                <div class="form-wrap">
                                  <label class="form-label-outside">Passengers</label>
                                  <input class="form-input" type="number" min="0" value="2" data-constraints="@Numeric">
                                </div>
                              </div>
                              <div class="col-12 col-xl-clear-flex text-center text-xl-right">
                                <button class="button button-primary button-sm button-naira button-naira-up"><span class="icon fa-search"></span><span>Search Cars</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-60 section-xl-top-90 section-xl-bottom-80 bg-gray-lighter">
        <div class="container container-wide">
          <div class="wow fadeInUp" data-wow-delay="0.1s">
            <!-- Owl Carousel-->
            <div class="owl-nav-variant-3 owl-dots-lg owl-carousel owl-carousel-middle owl-dots-primary" data-dots="true" data-nav="true" data-items="3" data-sm-items="4" data-md-items="5" data-lg-items="5" data-xl-items="6" data-margin="30" data-mouse-drag="false"><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-14.png" width="107" height="74" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-15.png" width="190" height="17" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-16.png" width="151" height="71" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-17.png" width="163" height="46" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-18.png" width="183" height="68" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-19.png" width="178" height="53" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-14.png" width="107" height="74" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-15.png" width="190" height="17" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-16.png" width="151" height="71" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-17.png" width="163" height="46" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-18.png" width="183" height="68" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-19.png" width="178" height="53" alt=""></a><a class="thumbnail-opacity" href="#"><img class="img-responsive" src="images/logo-15.png" width="190" height="17" alt=""></a></div>
          </div>
        </div>
      </section>
      <section class="section-80 section-lg-120">
        <div class="container container-wide">
          <h5 class="view-animate fadeInUpBigger delay-04 text-info-dr">Why People Choose Us</h5>
          <h2 class="view-animate fadeInUpBigger delay-04 text-ubold">Our Advantages</h2>
          <hr class="view-animate fadeInUpBigger delay-06 divider divider-primary divider-80">
          <div class="row row-50">
            <div class="col-md-6 col-lg-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-airplane"></span>
              <h5 class="text-bold">The Most Reliable<br class="d-none d-lg-block">Airlines</h5>
              <hr class="divider divider-info divider-50">
              <p class="inset-xxl-left-40 inset-xxl-right-40">We cooperate only with the most reliable airlines who can boast the perfect reputation.</p>
            </div>
            <div class="col-md-6 col-lg-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-account-multiple"></span>
              <h5 class="text-bold">More Than 7M Visitors<br class="d-none d-lg-block">Each Month</h5>
              <hr class="divider divider-info divider-50">
              <p class="inset-xxl-left-40 inset-xxl-right-40">More than 7 million people use our services to find and book airline tickets.</p>
            </div>
            <div class="col-md-6 col-lg-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle fa-search"></span>
              <h5 class="text-bold">User-Friendly<br class="d-none d-lg-block">Search System</h5>
              <hr class="divider divider-info divider-50">
              <p class="inset-xxl-left-40 inset-xxl-right-40">Convenient and fast search for airline tickets, hotels and cars.</p>
            </div>
            <div class="col-md-6 col-lg-3 icon-box view-animate fadeInUpSmall delay-08"><span class="icon icon-lg text-primary-grad icon-primary icon-circle mdi mdi-calendar-multiple-check" style="font-size: 52px;"></span>
              <h5 class="text-bold">Fast and Reliable<br class="d-none d-lg-block">Ticket Booking</h5>
              <hr class="divider divider-info divider-50">
              <p class="inset-xxl-left-40 inset-xxl-right-40">We provide reliable ticket booking system, which is also perfect for first-time travellers.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-image-05 context-dark section-70 section-xl-120">
        <div class="container parallax-scene-wrapper">
          <div class="row justify-content-sm-center">
            <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="text-spacing-60 text-uppercase text-ubold p">24/7 Support</h1>
              <p class="big">Our Support Service is available 24 hours a day, 7 days a week to help you buy your tickets.</p><a class="button button-primary" href="contacts.html">get in touch</a>
            </div>
          </div>
        </div>
      </section>
      <section class="section-80 section-lg-120 bg-gray-lighter">
        <div class="container container-wide">
          <h5 class="text-info-dr wow fadeInUp" data-wow-delay="0.1s">Recent Blog Posts</h5>
          <h2 class="text-ubold wow fadeInUp" data-wow-delay="0.2s">Tips & Tricks</h2>
          <hr class="divider divider-primary divider-80 wow fadeInUp" data-wow-delay="0.3s">
          <div class="row row-50">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
              <!-- Owl Carousel-->
              <div class="owl-carousel-fullheight owl-nav-light owl-nav-position-variant-1 owl-nav-variant-1 owl-carousel" data-nav="true" data-items="1" data-mouse-drag="false">
                <div class="context-dark post-blog post-blog-type-3" style="background: url(&quot;images/post-32.jpg&quot;) right; background-size: cover;">
                  <div class="post-blog-caption">
                    <div class="row row-10 justify-content-end-xs-middle">
                      <div class="col-md-4 text-md-left"><a class="label label-primary" href="blog-classic.html">Photos</a></div>
                      <div class="col-md-8 text-md-right">
                        <p class="text-italic">September 7, 2019</p>
                      </div>
                    </div>
                    <h4 class="post-blog-title text-bold"><a href="blog-single-post.html">Visiting Paris on a Budget</a></h4>
                    <p>Paris is one of top-rated European cities – people  usually try to spend there as much time as possible, and you also may be lucky enough to spend an autumn house-sitting there. But even if you have somewhere to...</p><a class="post-blog-link" href="blog-single-post.html">Read more</a>
                  </div>
                </div>
                <div class="context-dark post-blog post-blog-type-3" style="background: url(&quot;images/post-06.jpg&quot;); background-size: cover;">
                  <div class="post-blog-caption">
                    <div class="row row-10 justify-content-end-xs-middle">
                      <div class="col-md-4 text-md-left"><a class="label label-primary" href="blog-classic.html">Article</a></div>
                      <div class="col-md-8 text-md-right">
                        <p class="text-italic">September 12, 2019</p>
                      </div>
                    </div>
                    <h4 class="post-blog-title text-bold"><a href="blog-single-post.html">How to Make Travel Videos</a></h4>
                    <p>Introducing our new Travel Video Course, taught by experts Sharon Carpenter and Beverly Bennett! They have over 31,000,000 YouTube views, have worked with big brands, tourism boards, and production...</p><a class="post-blog-link" href="blog-single-post.html">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="row row-50 text-left">
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.4s">
                        <!-- Post type 2-->
                        <div class="post-blog post-blog-type-2"><img class="img-responsive" src="images/post-33.jpg" width="420" height="300" alt=""><a class="label label-primary" href="blog-modern.html">Article</a>
                          <div class="post-blog-caption">
                            <p class="text-italic text-gray">September 9, 2019</p>
                            <h4 class="post-blog-title text-bold"><a href="blog-single-post.html">9 Ways to Become a Successful Travel Blogger</a></h4>
                            <p class="text-base">Travel blogging is a crowded field — and it gets more crowded day by day. And a lot of the advice that people give are actually counterintuitive to...</p><a class="post-blog-link" href="blog-single-post.html">Read more</a>
                          </div>
                        </div>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.5s">
                        <!-- Post type 2-->
                        <div class="post-blog post-blog-type-2"><img class="img-responsive" src="images/post-34.jpg" width="420" height="300" alt=""><a class="label label-primary" href="blog-modern.html">Article</a>
                          <div class="post-blog-caption">
                            <p class="text-italic text-gray">September 11, 2019</p>
                            <h4 class="post-blog-title text-bold"><a href="blog-single-post.html">The Ultimate Packing List For Female Travelers</a></h4>
                            <p class="text-base">It can be daunting trying to figure out what to pack for a week, a month, or a year abroad without much — or any — prior experience in the place you want...</p><a class="post-blog-link" href="blog-single-post.html">Read more</a>
                          </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
          <div class="view-animate fadeInUpSmall delay-08"><a class="button button-primary button-naira button-naira-up" href="blog-classic.html"><span class="icon mdi mdi-arrow-right-bold"></span><span>View all blog posts</span></a></div>
        </div>
      </section>
      <section class="section-80 section-lg-120">
        <div class="container container-wide">
          <h5 class="text-info-dr">Hot Deals</h5>
          <h2 class="text-ubold">Popular Destinations</h2>
          <hr class="divider divider-primary divider-80">
        </div>
        <div class="row row-60 isotope-wrap">
          <!-- Isotope Filters-->
          <div class="col-12">
            <div class="isotope-filters isotope-filters-horizontal">
              <ul class="nav-custom">
                <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All Offers</a></li>
                <li><a data-isotope-filter="Type 1" data-isotope-group="gallery" href="#">Europe</a></li>
                <li><a data-isotope-filter="Type 2" data-isotope-group="gallery" href="#">North America</a></li>
                <li><a data-isotope-filter="Type 3" data-isotope-group="gallery" href="#">Asia</a></li>
                <li><a data-isotope-filter="Type 4" data-isotope-group="gallery" href="#">Australia</a></li>
              </ul>
            </div>
          </div>
          <!-- Isotope Content-->
          <div class="col-12">
            <div class="row no-gutters isotope isotope-no-padding" data-isotope-layout="masonry" data-isotope-group="gallery">
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 1"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-35.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">Barcelona</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 2"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-36.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">London</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 3"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-37.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">New York</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 4"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-38.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">Rome</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 1"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-39.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">Paris</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 3"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-40.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">Blue Mountains</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 4"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-42.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">Berlin</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 2"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-43.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">Phuket</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 1"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-41.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">Venice</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 4"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-44.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">San Francisco</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
              <div class="col-12 col-md-6 col-lg-4 col-xl-1-5 isotope-item" data-filter="Type 1"><a class="thumbnail-variant-4" href="tickets.html"><img class="img-responsive center-block thumbnail-image" src="images/post-45.jpg" alt="">
                  <div class="caption">
                    <h3 class="text-ubold">Mediterranean</h3>
                    <p>The cultural, commercial, and financial center of Northern California.</p>
                    <div class="thumbnail-link"></div>
                  </div></a></div>
            </div>
          </div>
        </div>
        <div class="button-wrap"><a class="button button-primary button-naira button-naira-up" href="tickets.html">
            <div class="icon fa-search"></div><span>find tickets</span></a></div>
      </section>
@endsection