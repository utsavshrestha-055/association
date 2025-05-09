<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Association</title>
      <meta charset="utf-8">

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">









         <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
<link rel="stylesheet" href="{{ asset('lib/admin/owlcarousel/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('lib/admin/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Customized Bootstrap Stylesheet -->
 <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css')}}">>
<link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
</head>
<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">
<!-- Spinner Start -->
@include('admin.components.spinner')
        <!-- Spinner End -->
        <!-- Sidebar Start -->
@include('admin.components.sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
@include('admin.components.navbar')
            <!-- Navbar End -->
            @yield('content')
              <!-- Footer Start -->
@include('admin.components.footer')
            <!-- Footer End -->

            </div>
             <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/admin/chart/chart.min.js"></script>
    <script src="lib/admin/easing/easing.min.js"></script>
    <script src="lib/admin/waypoints/waypoints.min.js"></script>
    <script src="lib/admin/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/admin/tempusdominus/js/moment.min.js"></script>
    <script src="lib/admin/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/admin/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/admin/main.js"></script>

</body>
</html>