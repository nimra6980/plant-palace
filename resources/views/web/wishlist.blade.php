@extends('layouts.app')
@section('content')
<div class="wishlist_area mt-100">
      <div class="container">
        <form action="#">
          <div class="row">
            <div class="col-12">
              <div class="table_desc wishlist">
                <div class="cart_page table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <th class="product_remove">Delete</th>
                        <th class="product_thumb">Image</th>
                        <th class="product_name">Product</th>
                        <th class="product-price">Price</th>
                       
                        <th class="product_total">Add To Cart</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($item as $item)
                      <tr>
                        <td class="product_remove"><a href="#">X</a></td>
                        <td class="product_thumb">
                          <a href="#"
                            ><img
                              src="{{ asset('uploads/product/images/' . $item->image) }}"
                              alt=""
                          /></a>
                        </td>
                        <td class="product_name">
                          <a href="#">{{$item->name}}</a>
                        </td>
                        <td class="product-price">{{$item->price}}</td>
                        
                        <td class="product_total">
                        <form action="{{route('add_cart',$item->id)}}" method='post'>
                          @csrf
                          <input type="number" value="1" min="1" name="quantity" hidden>
                          <li class="add_to_cart" style="list-style-type:none">
                          <div class="product_total">
                          <button>Add To Cart</button>
                        </div>
                          </li>
                          </form>
                        </td>
                      </tr>
                        @endforeach
                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-12">
            <div class="wishlist_share">
              <h4>Share on:</h4>
              <ul>
                <li>
                  <a href="#"><i class="fa fa-rss"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-vimeo"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--wishlist area end -->

    <!--brand area start-->
    <div class="brand_area brand__three">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="brand_container owl-carousel">
              <div class="single_brand">
                <a href="#"
                  ><img src="{{asset('user/assets/img/brand/brand1.png')}}" alt=""
                /></a>
              </div>
              <div class="single_brand">
                <a href="#"
                  ><img src="{{asset('user/assets/img/brand/brand2.png')}}" alt=""
                /></a>
              </div>
              <div class="single_brand">
                <a href="#"
                  ><img src="{{asset('user/assets/img/brand/brand3.png')}}" alt=""
                /></a>
              </div>
              <div class="single_brand">
                <a href="#"
                  ><img src="{{asset('user/assets/img/brand/brand4.png')}}" alt=""
                /></a>
              </div>
              <div class="single_brand">
                <a href="#"
                  ><img src="{{asset('user/assets/img/brand/brand5.png')}}" alt=""
                /></a>
              </div>
              <div class="single_brand">
                <a href="#"
                  ><img src="{{asset('user/assets/img/brand/brand6.png')}}" alt=""
                /></a>
              </div>
              <div class="single_brand">
                <a href="#"
                  ><img src="{{asset('user/assets/img/brand/brand2.png')}}" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection