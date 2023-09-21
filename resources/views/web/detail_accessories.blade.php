@extends('layouts.app')
@section('content')
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>accessories details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ asset('uploads/product/images/' . $plant->image) }}"
                                    data-zoom-image="assets/img/product/productbig4.jpg" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h1><a href="#">{{$plant->name}}</a></h1>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="next"><a href="variable-product.html"><i
                                                class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li class="review"></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price">{{$plant->price}}</span>
                             

                            </div>
                            <div class="product_desc">
                                <p>{{$plant->detail}} </p>
                            </div>
                            <div class="product_variant color">
                                
                                
                            </div>
                           
                            <div class="product_variant quantity">
                                 
                                <label>quantity</label>
                               
                                <form action="{{route('add_cart',$plant->id)}}" method='post'>
                                @csrf
                                 <input type="number" value="1" min="1" name="quantity">
                                   <li class="add_to_cart">
                                     <button class="button">Add to Cart</button>
                                    </li>
                                </form>
                            </div>
                        
                            <div class=" product_d_action">
                                
                            </div>
                          

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                        Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a>
                                </li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i>
                                        save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                        share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>
                                        linked</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Related Products </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($related as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="product-details.html">
                          <img src="{{ asset('uploads/product/images/' . $item->image) }}" alt="">
                        </a>
                        <div class="label_product">
                          
                        </div>
                        <div class="action_links">
                          <ul>
                          <form action="{{route('add_cart',$item->id)}}" method='post'>
                          @csrf
                          <input type="number" value="1" min="1" name="quantity" hidden>
                          <li class="add_to_cart">
                            <button><i class="icon-shopping-bag"></i></button>
                          </li>
                          </form>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><i class="icon-sliders"></i></a>
                            </li>
                            <li class="wishlist">
                              <a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i></a>
                            </li>
                            <li class="quick_button">
                              <a href="{{route('productdetail',$item->id)}}" data-bs-toggle="" data-bs-target="#modal_box" title="Quick view">
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
                          <a href="product-details.html">{{$item->name}}</a>
                        </h4>
                        <div class="price_box">
                          <span class="current_price">£{{$item->price}}</span>
                          {{-- <span class="old_price">£74.00</span> --}}
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>
 
@endsection