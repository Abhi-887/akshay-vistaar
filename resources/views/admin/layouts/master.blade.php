<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @yield('styles')
  <link href="{{("admin/assets/img/favicon.png")}}" rel="icon">
  <link href="{{("admin/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{("admin/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{("admin/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{("admin/assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{("admin/assets/vendor/quill/quill.snow.css")}}" rel="stylesheet">
  <link href="{{("admin/assets/vendor/quill/quill.bubble.css")}}" rel="stylesheet">
  <link href="{{("admin/assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{("admin/assets/vendor/simple-datatables/style.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{("admin/assets/css/style.css")}}" rel="stylesheet">


</head>

<body>

 @include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div>


  @yield('content')
    </main>

  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>AkshayVistaar</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 @yield('script')
 <script src="{{ url('admin') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
 <script src="{{ url('admin') }}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="{{ url('admin') }}/assets/chart.js/chart.umd.js"></script>
 <script src="{{ url('admin') }}/assets/echarts/echarts.min.js"></script>
 <script src="{{ url('admin') }}/assets/quill/quill.min.js"></script>
 <script src="{{ url('admin') }}/assets/simple-datatables/simple-datatables.js"></script>
 <script src="{{ url('admin') }}/assets/tinymce/tinymce.min.js"></script>
 <script src="{{ url('admin') }}/assets/php-email-form/validate.js"></script>
 <!-- Bootstrap JS and Popper.js -->
<script src="{{ url('admin') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('admin') }}/assets/vendor/popper.js/popper.min.js"></script>


 <!-- Template Main JS File -->
 <script src="{{ url('admin') }}/assets/js/main.js"></script>


</body>

</html>
