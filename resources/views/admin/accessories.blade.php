@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">plantpalace /</span> Add accessories</h4>
    
    <!-- Basic Bootstrap Table -->
    
    
    <!-- Responsive Table -->
    <div class="card">
        <div class="d-flex align-item-center justify-content-between">
            <h5 class="card-header">accessories</h5>
            <div class="mt-3">
                <button onclick="window.location.href='{{route('createaccessories')}}'" class="btn btn-primary" style="margin-right: 25px;">accessories</button>
            </div>
        </div>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr class="text-nowrap">
              <th>#</th>
              <th>Name</th>
              <th>Detail</th>
     
              <th>Price</th>
              <th>Badge</th>
         
              <th>image</th>
              <th>Action</th>
           
            </tr>
          </thead>
          <tbody>
         @foreach ($accessories as $item)
             

            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->detail}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->badge}}</td>
          
              <td>
              <img src="{{ asset('uploads/product/images/' . $item->image) }}" alt="Product Image" width="50" class="img-thumbnail">
              </td>
              <td>
                <a href="{{route('editaccessories',$item->id)}}" class="btn btn-info">Edit</a>
                <a href="{{route('deleteaccessories',$item->id)}}" class="btn btn-danger">Delete</a>
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