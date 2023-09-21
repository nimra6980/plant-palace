@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">blogpalace/</span> Add blog</h4>

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
            <form method="POST" action="{{route('updateblog',$blog->id)}}" enctype="multipart/form-data">
              @csrf
               @method('put')
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">title</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-user"></i
                    ></span>
                    <input
                    value="{{ old('title',$blog->title) }}"
                      name="title"
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
                    value="{{ old('detail',$blog->detail) }}"
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
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Detail 1</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-user"></i
                    ></span>
                    <input
                    value="{{ old('detail1',$blog->detail1) }}"
                      name="detail1"
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
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Detail2</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-user"></i
                    ></span>
                    <input
                    value="{{ old('detail2',$blog->detail2) }}"
                      name="detail2"
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
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Detail3</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-user"></i
                    ></span>
                    <input
                    value="{{ old('detail3',$blog->detail3) }}"
                      name="detail3"
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
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">quote</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                      ><i class="bx bx-buildings"></i
                    ></span>
                    <input name="quote"
                    value="{{ old('quote',$blog->quote) }}"
                      type="text"
                      id="basic-icon-default-company"
                      class="form-control"
                      placeholder="lum sum ammount"
                      aria-label="ACME Inc."
                      aria-describedby="basic-icon-default-company2"
                    />
                  </div>
                </div>
              </div>
              
              
              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-phone">Category</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-phone2" class="input-group-text"
                      ><i class="bx bx-phone"></i
                    ></span>
                    <input
                    value="{{ old('category',$blog->category) }}"
                    name="category"
                      type="text"
                      id="basic-icon-default-phone"
                      class="form-control phone-mask"
                      placeholder="Advance"
                      aria-label="658 799 8941"
                      aria-describedby="basic-icon-default-phone2"
                    />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-phone">tags</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-phone2" class="input-group-text"
                      ><i class="bx bx-phone"></i
                    ></span>
                    <input
                    value="{{ old('tags',$blog->tags) }}"
                    name="tags"
                      type="text"
                      id="basic-icon-default-phone"
                      class="form-control phone-mask"
                      placeholder="Rep By"
                      aria-label="658 799 8941"
                      aria-describedby="basic-icon-default-phone2"
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
                    <img src="{{ asset('uploads/product/images/' . $blog->image) }}" alt="" width="400">
                  </div>
                </div>
              </div> 
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">update blog</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection