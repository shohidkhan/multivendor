
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset("assets/backend") }}/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="px-0 content-wrapper d-flex align-items-center auth">
        <div class="mx-0 row w-100">
          <div class="mx-auto col-lg-4">
            <div class="px-4 py-5 text-left auth-form-light px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset("assets/backend") }}/images/logo.svg" alt="logo">
              </div>
              
              @if(session("error"))
              <div class=" alert alert-danger" >
                <strong>{{ session("error")  }}</strong>
              </div>
              @endif
              <form class="pt-3" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  {{-- error message --}}
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  {{-- error message --}}
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="text-black auth-link">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mr-2 ti-facebook"></i>Connect using facebook
                  </button>
                </div>
                <div class="mt-4 text-center font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset("assets/backend") }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset("assets/backend") }}/js/off-canvas.js"></script>
  <script src="{{ asset("assets/backend") }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset("assets/backend") }}/js/template.js"></script>
  <script src="{{ asset("assets/backend") }}/js/settings.js"></script>
  <script src="{{ asset("assets/backend") }}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
