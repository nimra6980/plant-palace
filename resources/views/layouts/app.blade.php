<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.js')}}delivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Lukani – Plant and Flower Shop eCommerce HTML Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{url('user/assets/img/favicon.ico')}}"
    />

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{url('user/assets/css/bootstrap.min.css')}}" />
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{url('user/assets/css/owl.carousel.min.css')}}" />
    <!--slick min css-->
    <link rel="stylesheet" href="{{url('user/assets/css/slick.css')}}" />
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{url('user/assets/css/magnific-popup.css')}}" />
    <!--font awesome css-->
    <link rel="stylesheet" href="{{url('user/assets/css/font.awesome.css')}}" />
    <!--animate css-->
    <link rel="stylesheet" href="{{url('user/assets/css/animate.css')}}" />
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{url('user/assets/css/jquery-ui.min.css')}}" />
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{url('user/assets/css/slinky.menu.css')}}" />
    <!--plugins css-->
    <link rel="stylesheet" href="{{url('user/assets/css/plugins.css')}}" />

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('user/assets/css/style.css')}}" />

    <!--modernizr min js here-->
    <script src="{{url('user/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
</head>
<body>

    <div id="app">
    <header>
      <div class="main_header header_five">
        <div class="header_top">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 col-md-7">
                <div class="welcome-text">
                  <p>Free Delivery: Take advantage of our time to save event</p>
                </div>
              </div>
              <div class="col-lg-5 col-md-5">
                <div class="language_currency text-right">
                  <ul>
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header_middle header_middle5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 col-md-3 col-4">
                <div class="logo">
                  <a href="index.html"
                    ><img src="{{asset('user/assets/img/logo/logo.png')}}" alt=""
                  /></a>
                </div>
              </div>
              <div class="col-lg-6 colm_none">
                <!--main menu start-->
                <div class="main_menu menu_position">
                  <nav>
                    <ul>
                      <li><a href="contact.html"> Home</a></li>
                      <li class="mega_items">
                        <a href="{{route('product')}}"
                          >Products</a>
                      
                      </li>
                      <li><a href="#">Blog</a></li>
                      <li><a href=#> AboutUs</a></li>
                      <li><a href="{{route('contact')}}"> ContactUs</a></li>
                      <li><a href="{{route('usaccessories')}}">Accessories</a></li>
                    </ul>
                  </nav>
                </div>
                <!--main menu end-->
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <div class="header_account_area header_account5">
                  <div class="header_account-list top_links">
                    <a href="#"><i class="icon-users"></i></a>
                    <ul class="dropdown_links">
                      <li><a href="checkout.html">Checkout </a></li>
                      <li><a href="my-account.html">My Account </a></li>
                      <li><a href="cart.html">Shopping Cart</a></li>
                      <li><a href="wishlist.html">Wishlist</a></li>
                    </ul>
                  </div>
                  <div class="header_account-list header_wishlist">
                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                  </div>
                  <div class="header_account-list mini_cart_wrapper">
                    <a href="{{route('show_cart')}}"
                      ><i class="icon-shopping-bag"></i
                      ><span class="item_count">2</span></a
                    >
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                          
                                    <a  href="{{ route('logout') }}"
                                       >
                                        {{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>

                              
                                </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                              
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--footer area start-->
    <footer class="footer_widgets">
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="widgets_container contact_us">
                <h3>Opening Time</h3>
                <p><span>Mon - Fri:</span> 8AM - 10PM</p>
                <p><span>Sat:</span> 9AM-8PM</p>
                <p><span>Suns:</span> 14hPM-18hPM</p>
                <p><b>We Work All The Holidays</b></p>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
              <div class="widgets_container widget_menu">
                <h3>Information</h3>
                <div class="footer_menu">
                  <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="faq.html">Frequently Questions</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-5">
              <div class="widgets_container widget_app">
                <div class="footer_logo">
                  <a href="index.html"
                    ><img src="{{url('user/assets/img/logo/logo.png')}}" alt=""
                  /></a>
                </div>
                <div class="footer_widgetnav_menu">
                  <ul>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Internet</a></li>
                  </ul>
                </div>
                <div class="footer_social">
                  <ul>
                    <li>
                      <a href="#"
                        ><i class="fa fa-facebook" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-twitter" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-google-plus" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-youtube" aria-hidden="true"></i
                      ></a>
                    </li>
                  </ul>
                </div>
                <div class="footer_app">
                  <ul>
                    <li>
                      <a href="#"
                        ><img src="{{url('user/assets/img/icon/icon-app.jpg')}}" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="{{url('user/assets/img/icon/icon1-app.jpg')}}" alt=""
                      /></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="widgets_container widget_menu">
                <h3>My Account</h3>
                <div class="footer_menu">
                  <ul>
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.html">Shopping cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="#">Order History</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="widgets_container widget_menu">
                <h3>Customer Service</h3>
                <div class="footer_menu">
                  <ul>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact.html">Site Map</a></li>
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="#">Returns</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer_bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
              <div class="copyright_area">
                <p class="copyright-text">
                  &copy; 2023 <a href="index.html">Plant Palace</a>. Made with
                  <i class="fa fa-heart text-danger"></i> by
                  <a href="https://hasthemes.com/" target="_blank"
                    >Code Crusader</a
                  >
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="footer_payment">
                <a href="#"
                  ><img src="{{url('user/assets/img/icon/payment.png')}}" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--footer area end-->

    <!-- modal area start-->
    <div
      class="modal fade"
      id="modal_box"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <button
            type="button"
            class="close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true"><i class="icon-x"></i></span>
          </button>
          <div class="modal_body">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                  <div class="modal_tab">
                    <div class="tab-content product-details-large">
                      <div
                        class="tab-pane fade show active"
                        id="tab1"
                        role="tabpanel"
                      >
                        <div class="modal_tab_img">
                          <a href="#"
                            ><img
                              src="{{url('user/assets/img/product/productbig1.jpg')}}"
                              alt=""
                          /></a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="modal_tab_img">
                          <a href="#"
                            ><img
                              src="{{url('user/assets/img/product/productbig2.jpg')}}"
                              alt=""
                          /></a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="modal_tab_img">
                          <a href="#"
                            ><img
                              src="{{url('user/assets/img/product/productbig3.jpg')}}"
                              alt=""
                          /></a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab4" role="tabpanel">
                        <div class="modal_tab_img">
                          <a href="#"
                            ><img
                              src="{{url('user/assets/img/product/productbig4.jpg')}}"
                              alt=""
                          /></a>
                        </div>
                      </div>
                    </div>
                    <div class="modal_tab_button">
                      <ul
                        class="nav product_navactive owl-carousel"
                        role="tablist"
                      >
                        <li>
                          <a
                            class="nav-link active"
                            data-bs-toggle="tab"
                            href="#tab1"
                            role="tab"
                            aria-controls="tab1"
                            aria-selected="false"
                            ><img
                              src="{{url('user/assets/img/product/product1.jpg')}}"
                              alt=""
                          /></a>
                        </li>
                        <li>
                          <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#tab2"
                            role="tab"
                            aria-controls="tab2"
                            aria-selected="false"
                            ><img
                              src="{{url('user/assets/img/product/product2.jpg')}}"
                              alt=""
                          /></a>
                        </li>
                        <li>
                          <a
                            class="nav-link button_three"
                            data-bs-toggle="tab"
                            href="#tab3"
                            role="tab"
                            aria-controls="tab3"
                            aria-selected="false"
                            ><img
                              src="{{url('user/assets/img/product/product3.jpg')}}"
                              alt=""
                          /></a>
                        </li>
                        <li>
                          <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#tab4"
                            role="tab"
                            aria-controls="tab4"
                            aria-selected="false"
                            ><img
                              src="{{url('user/assets/img/product/product8.jpg')}}"
                              alt=""
                          /></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                  <div class="modal_right">
                    <div class="modal_title mb-10">
                      <h2>Donec Ac Tempus</h2>
                    </div>
                    <div class="modal_price mb-10">
                      <span class="new_price">$64.99</span>
                      <span class="old_price">$78.99</span>
                    </div>
                    <div class="modal_description mb-15">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Mollitia iste laborum ad impedit pariatur esse
                        optio tempora sint ullam autem deleniti nam in quos qui
                        nemo ipsum numquam, reiciendis maiores quidem aperiam,
                        rerum vel recusandae
                      </p>
                    </div>
                    <div class="variants_selects">
                      <div class="variants_size">
                        <h2>size</h2>
                        <select class="select_option">
                          <option selected value="1">s</option>
                          <option value="1">m</option>
                          <option value="1">l</option>
                          <option value="1">xl</option>
                          <option value="1">xxl</option>
                        </select>
                      </div>
                      <div class="variants_color">
                        <h2>color</h2>
                        <select class="select_option">
                          <option selected value="1">purple</option>
                          <option value="1">violet</option>
                          <option value="1">black</option>
                          <option value="1">pink</option>
                          <option value="1">orange</option>
                        </select>
                      </div>
                      <div class="modal_add_to_cart">
                        <form action="#">
                          <input
                            min="1"
                            max="100"
                            step="2"
                            value="1"
                            type="number"
                          />
                          <button type="submit">add to cart</button>
                        </form>
                      </div>
                    </div>
                    <div class="modal_social">
                      <h2>Share this product</h2>
                      <ul>
                        <li class="facebook">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter">
                          <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="pinterest">
                          <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li class="google-plus">
                          <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="linkedin">
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal area end-->

    <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="{{url('user/assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
    <!--popper min js-->
    <script src="{{url('user/assets/js/popper.js')}}"></script>
    <!--bootstrap min js-->
    <script src="{{url('user/assets/js/bootstrap.min.js')}}"></script>
    <!--owl carousel min js-->
    <script src="{{url('user/assets/js/owl.carousel.min.js')}}"></script>
    <!--slick min js-->
    <script src="{{url('user/assets/js/slick.min.js')}}"></script>
    <!--magnific popup min js-->
    <script src="{{url('user/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--counterup min js-->
    <script src="{{url('user/assets/js/jquery.counterup.min.js')}}"></script>
    <!--jquery countdown min js-->
    <script src="{{url('user/assets/js/jquery.countdown.js')}}"></script>
    <!--jquery ui min js-->
    <script src="{{url('user/assets/js/jquery.ui.js')}}"></script>
    <!--jquery elevatezoom min js-->
    <script src="{{url('user/assets/js/jquery.elevatezoom.js')}}"></script>
    <!--isotope packaged min js-->
    <script src="{{url('user/assets/js/isotope.pkgd.min.js')}}"></script>
    <!--slinky menu js-->
    <script src="{{url('user/assets/js/slinky.menu.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{url('user/assets/js/plugins.js')}}"></script>

    <!-- Main JS -->
    <script src="{{url('user/assets/js/main.js')}}"></script>
    
    <script src="https://cdn.js')}}delivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
