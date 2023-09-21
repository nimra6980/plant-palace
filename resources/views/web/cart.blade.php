@extends('layouts.app')
@section('content')

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <a href="{{route('cod')}}" class="btn btn-secondary">COD</a>
          <a href="{{route('cod')}}" class="btn btn-secondary">Bank Transfer</a>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
    </div>
  </div>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Cart</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-100">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cart as $item)
                                        <tr>
                                            <td class="pro duct_remove"><a href="{{route('remove_cart',$item->id)}}"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                src="{{ asset('uploads/product/images/' . $item->image) }}" alt=""></a></td>
                                            <td class="product_name"><a href="#">{{$item->product_title}}</a></td>
                                            <td class="product-price">{{$item->price}}</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                    max="100" value="{{$item->quantity}}" type="number"></td>
                                            


                                        </tr>
                                    @endforeach
                                       

                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button  data-bs-toggle="modal" data-bs-target="#exampleModal">Proceed To Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
               
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->

    <!--brand area start-->
    <div class="brand_area brand__three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand6.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
@endsection