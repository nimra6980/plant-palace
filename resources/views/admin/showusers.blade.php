@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Plantspalace /</span> Users</h4>
    
    <!-- Basic Bootstrap Table -->
    
    
    <!-- Responsive Table -->
    <div class="card">
        <div class="d-flex align-item-center justify-content-between">
            <h5 class="card-header">Users</h5>
            <div class="mt-3">
                <button onclick="window.location.href='{{route('createplants')}}'" class="btn btn-primary" style="margin-right: 25px;">Plants</button>
            </div>
        </div>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr class="text-nowrap">
              
                <td>id</td>
                <td>Name</td>
            <td>Email</td>
        
            <td>Role</td>

            </tr>
          </thead>
          <tbody>
         @foreach ($users as $item)
             

            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              
              <td>{{$item->email}}</td>
              
              <td>
                @if($item->role == 1)
                    Admin
                @else
                    User
                @endif
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