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
                <h4 class="card-title">Change Password</h4>
                <form class="forms-sample" method="POST" action="{{ route('admin.password.change') }}">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" value="{{ $adminDetails->email }}" readonly name="email" id="exampleInputEmail1" placeholder="Email">
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
                  <div class="form-group">
                    <label for="exampleInputPassword1">Old Password</label>
                    <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password">
                    <span id="check_password_message" class="mt-2 d-block"></span>
                    @error("old_password")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" name="password" class="form-control" id="new_password" placeholder="New Password">
                    @error("password")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    @error("confirm_password")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <span id="check_confirm_password_message" class="mt-2 d-block"></span>
                  </div>
                 
                  <button type="submit" class="mr-2 btn btn-primary">Update</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection