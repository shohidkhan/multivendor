
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/mdi/css/materialdesignicons.min.css">
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="{{ asset("assets/backend") }}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset("assets/backend") }}/images/favicon.png" />
  <link rel="stylesheet" href="{{ asset("assets/backend") }}/css/custom.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layouts.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    @include('admin.layouts.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.layouts.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset("assets/backend") }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset("assets/backend") }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset("assets/backend") }}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{ asset("assets/backend") }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="{{ asset("assets/backend") }}/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset("assets/backend") }}/js/off-canvas.js"></script>
  <script src="{{ asset("assets/backend") }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset("assets/backend") }}/js/template.js"></script>
  <script src="{{ asset("assets/backend") }}/js/settings.js"></script>
  <script src="{{ asset("assets/backend") }}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset("assets/backend") }}/js/dashboard.js"></script>
  <script src="{{ asset("assets/backend") }}/js/Chart.roundedBarCharts.js"></script>
  <script src="{{ asset("assets/backend") }}/js/custom.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

