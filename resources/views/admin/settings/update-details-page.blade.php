@extends("admin.layouts.app")
@section('meta')
<meta name="csrf_token" content="{{ csrf_token() }}" />
@endsection

@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="mb-5 col-12 col-xl-12 mb-xl-0">
            <h3 class="font-weight-bold">Settings</h3>
        </div>
        <div class="mt-3 col-md-6 ">
            @if(session("password_error"))
            <div class="alert alert-danger" role="alert">
                {{ session("password_error") }}
            </div>
            @endif
            @if(session("success"))
            <div class="alert alert-success" role="alert">
                {{ session("success") }}
            </div>
            @endif
            <div class="card">
               
              <div class="card-body">
                <h4 class="card-title">Update Details</h4>
                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('admin.update.details') }}">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" value="{{ $adminDetails->name }}"  name="name"  placeholder="Name">
                    @error("name")
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" value="{{ $adminDetails->email }}"  name="email" id="exampleInputEmail1" placeholder="Email">
                    @error("email")
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Type</label>
                    <input type="text" name="type" value="{{ $adminDetails->type }}" readonly class="form-control" >
                    @error("type")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="{{ $adminDetails->mobile }}">
                    @error("mobile")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  @if($adminDetails->image)
                  <img style="width: 150px;height: 150px; border-radius: 50%;" src="{{ asset($adminDetails->image) }}" alt="">
                  @else
                  <p class="text-primary">You don't have any image</p>
                  @endif
                  <div class="mt-3 form-group">
                    <label for="exampleInputPassword1">Profile Picture</label>
                    <input type="file" name="image" class="form-control" id="image">
                    @error("image")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                 
                  <button type="submit" class="mr-2 btn btn-primary">Update</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection