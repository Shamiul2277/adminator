

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

<!-- SEO Meta
  ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="revisit-after" content="2 Days">
<meta name="robots" content="ALL">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fotorama.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}">
<link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.html')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.html')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.html')}}">


@livewireStyles
</head>
<body>
<div class="xpent-loader"></div>

<div class="main">

  <!-- HEADER START -->
  <header class="navbar navbar-custom" id="header">
    <div class="header-top bg-gray">
      <div class="container">
        <div class="row">
            <div class="col-sm-5">
              <div class="top-link top-link-left">
                  <ul class="social-icon">
                    <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                    <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                    <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                    <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                    <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                  </ul>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="top-link right-side">
                <ul>
                  <li class="Compare-icon">
                    <a href="#" title="Compare">
                      <i class="fa fa-sign-in"></i>
                      <span class="hidden-xs hidden-sm hidden-md">Compare</span>
                    </a>
                  </li>
                  <li class="login-icon">
                    <a href="login.html" title="Sing In">
                      <i class="fa fa-user"></i>
                      <span class="hidden-xs hidden-sm hidden-md">Sign In</span>
                    </a>
                  </li>
                  <li class="Register-icon">
                    <a href="register.html" title="Register">
                      <i class="fa fa-user-plus"></i>
                      <span class="hidden-xs hidden-sm hidden-md">Register</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="header-middle">
      <div class="container">
        <div class="header-inner">
          <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
            <a class="navbar-brand page-scroll" href="{{route('home')}}"> <img alt=" " src="{{ asset('assets/images/logo.png')}}"> </a> </div>
          <div class="right-side float-none-sm">
            <div class="right-side float-left-xs header-right-link">

              <ul>
              <li class="main-search">
                  <div class="header_search_toggle desktop-view">
                    <form>
                      <div class="search-box">
                        <input class="input-text" type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                  </div>
                </li>

               <li class="cart-icon"> <a href="#"><span><i class="fa fa-shopping-cart"></i> <small class="cart-notification">0</small> </span> </a>
                  <div class="cart-dropdown header-link-dropdown">
                    <ul class="cart-list link-dropdown-list">
                      <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt=" " src="{{ asset('assets/images/products/item-small-1.jpg')}}"></a>
                          <div class="media-body"> <span><a>Summer Women Nice Cloth</a></span>
                            <p class="cart-price">$29.99</p>
                          </div>
                        </div>
                      </li>
                      <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt=" " src="{{ asset('assets/images/products/item-small-2.jpg')}}"></a>
                          <div class="media-body"> <span><a>Summer Women Nice Cloth</a></span>
                            <p class="cart-price">$29.99</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                    <div class="clearfix"></div>
                    <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
                  </div>
                </li>
                <li class="account-icon"> <a href="#"><span><i class="fa fa-heart-o"></i></span></a></li>
              </ul>
            </div>
          </div>
          <div class="header_search_toggle mobile-view">
            <form>
              <div class="search-box">
                <input class="input-text" type="text" placeholder="Search entire store here...">
                <button class="search-btn"></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  <div class="header-bottom">
    <div class="container position-r">
      <div class="m-0 row">
        <div class="p-0 col-md-3 position-i">
            <div class="sidebar-menu-dropdown home ptb-20">
              <a class="btn-sidebar-menu-dropdown"><span></span> Categories</a>
              <div id="cat" class="cat-dropdown">
                <div class="sidebar-contant">
                  <div id="menu" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a href="{{route('shop')}}" class="page-scroll">Cloths<i class="fa fa-angle-right right-side"></i></a>
                        <div class="megamenu mobile-sub-menu">
                          <div class="megamenu-inner-top">
                            <ul class="sub-menu-level1">
                              <li class="level2">
                                <a href="{{route('shop')}}"><span>Kids Fashion</span></a>
                                <ul class="sub-menu-level2 ">
                                  <li class="level3"><a href="{{route('shop')}}">Baby Suits</a></li>
                                  <li class="level3"><a href="{{route('shop')}}">Tops</a></li>
                                  <li class="level3"><a href="{{route('shop')}}">Trousers</a></li>
                                  <li class="level3"><a href="{{route('shop')}}">Shorts</a></li>
                                  <li class="level3"><a href="{{route('shop')}}">Jackets</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="level"><a href="{{route('shop')}}" class="page-scroll">Women Cloths</a></li>
                      <li class="level"><a href="{{route('shop')}}" class="page-scroll">Playsuits & Jumpsuits</a></li>
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a href="{{route('shop')}}" class="page-scroll">Fashion<i class="fa fa-angle-right right-side"></i></a>
                          <div class="megamenu mobile-sub-menu">
                            <div class="megamenu-inner-top">
                              <ul class="sub-menu-level1">
                                <li class="level2">
                                  <a href="{{route('shop')}}"><span>Women Clothings</span></a>
                                  <ul class="sub-menu-level2">
                                    <li class="level3"><a href="{{route('shop')}}">Dresses</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Skirts</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Tops</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Sleepwear</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Trousers</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Shorts</a></li>
                                  </ul>
                                </li>
                                <li class="level2">
                                  <a href="{{route('shop')}}"><span>Girls Fashion</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="{{route('shop')}}">Dresses</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Skirts</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Tops</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Sleepwear</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Trousers</a></li>
                                    <li class="level3"><a href="{{route('shop')}}">Shorts</a></li>
                                  </ul>
                                </li>
                                <li class="level2 hidden-xs hidden-sm">
                                  <a href="{{route('shop')}}">
                                    <img src="{{ asset('assets/images/banner/menu-banner.jpg')}}" alt="Xpent ">
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                      </li>
                      <li class="level"><a href="{{route('shop')}}" class="page-scroll">Swimwear</a></li>
                      <li class="level"><a href="{{route('shop')}}" class="page-scroll">Jackets</a></li>
                      <li class="level"><a href="{{route('shop')}}" class="page-scroll">Playsuits & Jumpsuits</a></li>
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a class="page-scroll">Pages<i class="fa fa-angle-right right-side"></i></a>
                         <div class="megamenu mobile-sub-menu">
                           <div class="megamenu-inner-top">
                             <ul class="sub-menu-level1">
                               <li class="level2">
                                 <ul class="sub-menu-level2 ">
                                   <li class="level3"><a href="about.html">About</a></li>
                                   <li class="level3"><a href="account.html">Account</a></li>
                                   <li class="level3"><a href="checkout.html">Checkout</a></li>
                                   <li class="level3"><a href="contact.html">Contact</a></li>
                                   <li class="level3"><a href="404.html">404 Error</a></li>
                                   <li class="level3"><a href="blog.html">Blog</a></li>
                                   <li class="level3"><a href="single-blog.html">Single Blog</a></li>
                                 </ul>
                               </li>
                             </ul>
                           </div>
                         </div>
                      </li>
                      <li class="level"><a href="{{route('shop')}}" class="page-scroll">Ladis Coats</a></li>
                      <li class="level"><a href="{{route('shop')}}" class="page-scroll">Tracksuits</a></li>
                      <li class="level"><a href="{{route('shop')}}" class="page-scroll">All Categories >></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="p-0 col-md-9">
          <div class="nav_sec position-r">
            <div class="mobilemenu-title mobilemenu">
              <span>Menu</span>
              <i class="fa fa-bars pull-right"></i>
            </div>
            <div class="mobilemenu-content">
              <ul class="nav navbar-nav" id="menu-main">
                <li>
                  <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                  <a href="{{route('shop')}}">Shop</a>
                </li>
                <li>
                  <a href="about.html">About</a>
                </li>
                <li>
                  <a href="blog.html">Blog</a>
                </li>
                <li>
                  <a href="contact.html">Contact</a>
                </li>
                <li class="level">
                  <span class="opener plus"></span>
                  <a class="page-scroll">Pages</a>
                  <div class="megamenu mobile-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="account.html">Account</a></li>
                            <li class="level3"><a href="checkout.html">Checkout</a></li>
                            <li class="level3"><a href="404.html">404 Error</a></li>
                            <li class="level3"><a href="single-blog.html">Single Blog</a></li>
                            <li class="level3"><a href="product-page.html">Product Details</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </header>
  <!-- HEADER END -->

 {{$slot}}

<!-- BOTTOM PRODUCT WIDGET  -->
  <section class="pb-60 pb-xs-30">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Products</h5></div>

            <ul class="product_list_widget">
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-1.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-2.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-3.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
            </ul>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Top Rated Products</h5></div>

            <ul class="product_list_widget">
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-4.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-5.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-6.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
            </ul>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Recent Reviews</h5></div>

            <ul class="product_list_widget">
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-7.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-8.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">
                  <img width="70" height="85" src="{{ asset('assets/images/products/item-small-9.jpg')}}">
                  <span class="product-title">Ecstasy Ladis Cloth</span>
                </a>
                <div class="price-box">
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </section>
<!-- BOTTOM PRODUCT WIDGET -->

  <!-- FOOTER START -->
  <div class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="newsletter">
          <div class="newsletter-inner center-sm">
            <div class="row">
              <div class="col-md-4">
                <div class="newsletter-title">
                  <div class="newsletter-icon"><img src="{{ asset('assets/images/newsletter-icon.png')}}" alt=" "></div>
                  <h2 class="main_title">Subscribe to our newsletter</h2>
                </div>
              </div>
              <div class="col-md-4">
                <input type="email" placeholder="Your email address">
                <button title="Subscribe"><i class="fa fa-paper-plane"></i> Subscribe</button>
              </div>
              <div class="col-md-4">
                <div class="footer_social right-side float-none-sm pt-sm-15 pb-sm-15 center-sm mt-sm-15">
                  <ul class="social-icon">
                    <li><div class="title">Follow us on :</div></li>
                    <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                    <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                    <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                    <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                    <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-col">
           <div class="footer-static-block">
              <h3 class="title">About Us</h3>
              <p>Lorem khaled ipsum is a major key to success. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Always remember in the jungle there’s a lot of they in there, after you overcome.</p>
            </div>
           </div>
          <div class="col-md-8">
          <div class="row">
            <div class="col-md-4 f-col">
             <div class="footer-static-block">
              <h3 class="title">Information</h3>
            <ul class="link">
              <li><a>About</a></li>
              <li><a>Contact Us</a></li>
              <li><a>Blog</a></li>
              <li><a>Affiliates</a></li>
              <li><a>Career</a></li>
              <li><a>FAQ?</a></li>
            </ul>
              </div>
            </div>

            <div class="col-md-4 f-col">
              <div class="footer-static-block">
                <h3 class="title">Customer care</h3>
                <ul class="link">
                  <li><a>My Account</a></li>
                  <li><a>Order Tracking</a></li>
                  <li><a>Wishlist</a></li>
                  <li><a>Support</a></li>
                  <li><a>Customer Services</a></li>
                  <li><a>Exchange</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 f-col">
             <div class="footer-static-block">
                <h3 class="title">Address</h3>
                <ul class="address-footer">
                  <li class="item"> <i class="fa fa-home"> </i>
                    <p>1056 Arlington Avenue, Mountain View, Arkansas</p>
                  </li>
                  <li class="item"> <i class="fa fa-envelope-o"> </i>
                    <p> <a>info@expent.info</a> </p>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    <a href="tel:+223366554">+223366554</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 center-sm">
            <div class="copy-right">© 2018  All Rights Reserved. Design By <a href="http://themespry.com/">Themespry</a></div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="payment float-none-xs center-sm">
              <img src="{{ asset('assets/images/payment-method.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-top">
    <div id="scrollup"></div>
  </div>
  <!-- FOOTER END -->
  </div>

<script src="{{ asset('assets/js/jquery-1.12.3.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/fotorama.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@livewireScripts
</body>
</html>
