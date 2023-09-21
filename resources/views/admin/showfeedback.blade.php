@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Plantspalace /</span> Feedback</h4>
    
    <!-- Basic Bootstrap Table -->
    
    
    <!-- Responsive Table -->
    <div class="card">
        <div class="d-flex align-item-center justify-content-between">
            <h5 class="card-header">Feedback</h5>
            <div class="mt-3">
               
            </div>
        </div>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr class="text-nowrap">
              
                <td>id</td>
                <td>user id</td>
            <td>name</td>
        
            <td>Message</td>
            <td>Action</td>

            </tr>
          </thead>
          <tbody>
         @foreach ($feedback as $item)
             

            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->userid}}</td>
              
              <td>{{$item->name}}</td>
              
              <td>{{$item->message}}</td>
              <td>
              <a href="{{route('removefeedback',$item->id)}}" class="btn btn-danger">Delete</a>
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