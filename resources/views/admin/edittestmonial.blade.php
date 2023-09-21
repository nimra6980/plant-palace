@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">plantpalace/</span> Add testimonial</h4>

    <!-- Basic Layout & supplier  -->
    <div class="row">
      <!-- Basic Layout -->
  
      <!-- supplier  -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">reservation </h5>
            <small class="text-muted float-end">Merged input group</small>
          </div>
          <div class="card-body">
            <form method="POST" action="{{route('updatetestimonial',$testimonial->id)}}" enctype="multipart/form-data">
              @csrf
               @method('put')
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">testimonial name</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-user"></i
                    ></span>
                    <input
                    value="{{ old('name',$testimonial->name) }}"
                      name="name"
                      type="text"
                      class="form-control"
                      id="basic-icon-default-fullname"
                      placeholder="John Doe"
                      aria-label="John Doe"
                      aria-describedby="basic-icon-default-fullname2"
                    />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Detail</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-user"></i
                    ></span>
                    <input
                    value="{{ old('name',$testimonial->name) }}"
                      name="detail"
                      type="text"
                      class="form-control"
                      id="basic-icon-default-fullname"
                      placeholder="John Doe"
                      aria-label="John Doe"
                      aria-describedby="basic-icon-default-fullname2"
                    />
                  </div>
                </div>
              </div>
            
              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-phone">Image </label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-phone2" class="input-group-text"
                      ></span>
                    <input
                    name="image"
                      type="file"
                      id="basic-icon-default-phone"
                      class="form-control phone-mask"
                      placeholder="Phone"
                      aria-label="658 799 8941"
                      aria-describedby="basic-icon-default-phone2"
                    />
                    <img src="{{ asset('uploads/product/images/' . $testimonial->image) }}" alt="" width="400">
                  </div>
                </div>
              </div> 
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">update testimonial</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection