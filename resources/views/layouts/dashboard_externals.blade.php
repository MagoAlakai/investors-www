<!DOCTYPE html>
<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=“https://www.googletagmanager.com/gtag/js?id=G-PJZRTNJ7DH”></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(‘js’, new Date());
  gtag(‘config’, ‘G-PJZRTNJ7DH’);
</script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MergeLabs</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('assets/logos/test_favicon.png') }}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('theme/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet">

</head>
<body>

  <!-- ======= Header ======= -->
    @include('includes.header_externals')
  <!-- ======= End Header ======= -->

  <!-- ======= Main Content ======= -->
    @yield('content')
  <!-- ======= End Main Content ======= -->

  <!-- ======= Footer ======= -->
    @include('includes.footer_externals')
  <!-- ======= End Footer ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('theme/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/mailchimp-form /validate.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('theme/assets/js/main.js') }}"></script>
</body>
</html>