<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Association</title>
      <meta charset="utf-8">
        <title>Association</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">









        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/client/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/client/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/client/bootstrap.min.css') }}"  rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/client/style.css') }}"  rel="stylesheet">
</head>
<body>
<section>
     @include('client.components.spinner')
    @include('client.components.navbar')
</section>
<section>
    @yield('content')
</section>
<section>

@include('client.components.footer')

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/client/easing/easing.min.js"></script>
        <script src="lib/client/waypoints/waypoints.min.js"></script>
        <script src="lib/client/counterup/counterup.min.js"></script>
        <script src="lib/client/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/client/lightbox/js/lightbox.min.js"></script>
        <script src="js/client/main.js"></script>

</body>
</html>