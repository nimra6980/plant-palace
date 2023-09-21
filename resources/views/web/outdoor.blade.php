@extends('layouts.app')
@section('content')
  <!--product area start-->
  <div class="product_area mb-95">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="product_header">
            <div class="section_title">
              <h2>Outdoor Plants</h2>
            </div>
          
          </div>
        </div>
      </div>
      
            <div class="row">
              @foreach ($product as $items)
              <div class="col-lg-3 col-md-4 col-sm-6">
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="product-details.html">
                        <img src="{{ asset('uploads/product/images/' . $items->image) }}" alt="">
                      </a>
                      <div class="label_product">
                        <span class="label_sale">{{$items->badge}}</span>
                      </div>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="cart.html" title="Add to cart"><i class="icon-shopping-bag"></i></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><i class="icon-sliders"></i></a>
                          </li>
                          <li class="wishlist">
                            <a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="Quick view">
                              <i class="icon-eye"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <figcaption class="product_content">
                      <div class="product_rating">
                        <ul>
                          <li><a href="#"><i class="icon-star"></i></a></li>
                          <li><a href="#"><i class="icon-star"></i></a></li>
                          <li><a href="#"><i class="icon-star"></i></a></li>
                          <li><a href="#"><i class="icon-star"></i></a></li>
                          <li><a href="#"><i class="icon-star"></i></a></li>
                        </ul>
                      </div>
                      <h4 class="product_name">
                        <a href="product-details.html">{{$items->name}}</a>
                      </h4>
                      <div class="price_box">
                        <span class="current_price">£{{$items->price}}</span>
                        {{-- <span class="old_price">£74.00</span> --}}
                      </div>
                    </figcaption>
                  </figure>
                </article>
              </div>
              @endforeach
            </div>
      
        </div>
    
   
  </div>
  <!--product area end-->

  <!--newsletter area start-->
  <div class="newsletter_area_start">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section_title">
            <h2>Get <span>20% Off</span> Your Next Order</h2>
          </div>
          <div class="newsletter_container">
            <div class="subscribe_form">
              <form id="mc-form" class="mc-form footer-newsletter">
                <input
                  id="mc-email"
                  type="email"
                  autocomplete="off"
                  placeholder="Enter you email"
                />
                <button id="mc-submit">Subscribe</button>
                <div class="email_icon">
                  <i class="icon-mail"></i>
                </div>
              </form>
              <!-- mailchimp-alerts Start -->
              <div class="mailchimp-alerts text-centre">
                <div class="mailchimp-submitting"></div>
                <!-- mailchimp-submitting end -->
                <div class="mailchimp-success"></div>
                <!-- mailchimp-success end -->
                <div class="mailchimp-error"></div>
                <!-- mailchimp-error end -->
              </div>
              <!-- mailchimp-alerts end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--newsletter area end-->
@endsection