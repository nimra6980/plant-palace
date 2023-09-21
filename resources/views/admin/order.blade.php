@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Plantspalace /</span> Orders</h4>
    
    <!-- Basic Bootstrap Table -->
    
    
    <!-- Responsive Table -->
    <div class="card">
        <div class="d-flex align-item-center justify-content-between">
            <h5 class="card-header">Orders</h5>
            <div class="mt-3">
                <button onclick="window.location.href='{{route('createplants')}}'" class="btn btn-primary" style="margin-right: 25px;">Plants</button>
            </div>
        </div>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr class="text-nowrap">
              
                <td>Name</td>
                <td>Image</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
            <td>User id</td>

            <td>Product Title</td>
            <td>Quantity </td>
            <td>Price</td>
            <td>Product Id</td>
            
            <td>Payment Status</td>
            <td>Delivery Status</td>
           
            </tr>
          </thead>
          <tbody>
         @foreach ($order as $item)
             

            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>
              <img src="{{ asset('uploads/product/images/' . $item->image) }}" alt="Product Image" width="50" class="img-thumbnail">
              </td>
              <td>{{$item->email}}</td>
              <td>{{$item->phone}}</td>
              <td>{{$item->address}}</td>
              <td>{{$item->user_id}}</td>
              <td>{{$item->product_title}}</td>
              <td>{{$item->quantity}}</td>
              <td>{{$item->Payment_Status}}</td>
              <td>{{$item->delivery_Status}}</td>
              <td>
                <a href="{{route('editplants',$item->id)}}" class="btn btn-info">Edit</a>
                <a href="{{route('deleteplants',$item->id)}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
         @endforeach
        
       
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Responsive Table -->
  </div>
@endsection