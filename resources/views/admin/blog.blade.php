@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">plantpalace /</span> Add blog</h4>
    
    <!-- Basic Bootstrap Table -->
    
    
    <!-- Responsive Table -->
    <div class="card">
        <div class="d-flex align-item-center justify-content-between">
            <h5 class="card-header">blog</h5>
            <div class="mt-3">
                <button onclick="window.location.href='{{route('createblog')}}'" class="btn btn-primary" style="margin-right: 25px;">blog</button>
            </div>
        </div>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr class="text-nowrap">
              <th>#</th>
              <th>Name</th>
              <th>Detail</th>
              <th>Detail1</th>
              <th>Detail2</th>
              <th>Detail3</th>
              <th>category</th>
              <th>quote</th>
              <th>tags</th>
     
              
              <th>image</th>
              <th>Action</th>
           
            </tr>
          </thead>
          <tbody>
         @foreach ($blog as $item)
             

            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->title}}</td>
              <td>{{$item->detail}}</td>
              <td>{{$item->detail1}}</td>
              <td>{{$item->detail2}}</td>
              <td>{{$item->detail3}}</td>
              <td>{{$item->category}}</td>
              <td>{{$item->quote}}</td>
              <td>{{$item->tags}}</td>
   
              <td>
              <img src="{{ asset('uploads/product/images/' . $item->image) }}" alt="Product Image" width="50" class="img-thumbnail">
              </td>
              <td>
                <a href="{{route('editblog',$item->id)}}" class="btn btn-info">Edit</a>
                <a href="{{route('deleteblog',$item->id)}}" class="btn btn-danger">Delete</a>
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