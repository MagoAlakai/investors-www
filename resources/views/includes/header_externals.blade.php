<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">

      {{-- Laptop version --}}
      <div id="topbar-laptop">
        <div class="contact-info d-flex align-items-center">
            <div class="d-flex align-items-center mt-3 mr-3">
                <p class="p-2">{{ __( 'investors.top_bar_laptop') }}</p>
            </div>
            <i class="bi bi-envelope d-flex align-items-center p-2"><a href="#contact">info@mergelabs.com</a></i>
          </div>

      </div>

      {{-- Mobile version --}}
      <div id="topbar-mobile">
        <div class="contact-info d-flex align-items-center">
            <div class="d-flex align-items-center mt-3 mr-3">
                <a href="#contact"><p class="p-2">{{ __( 'investors.top_bar_mobile') }}</p></a>
            </div>
            <a href="#contact"><i class="bi bi-envelope d-flex align-items-center p-2"></i></a>
          </div>
      </div>

      {{-- <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div> --}}
    </div>
</section>
<!-- ======= End Top Bar ======= -->

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="" class="logo"><img src="{{ asset('assets/logos/ML_Logo_wide.png') }}" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">{{ __( 'investors.home') }}</a></li>
          <!-- <li><a class="nav-link scrollto" href="#featured-services">{{ __( 'investors.the_challenge') }}</a></li>
          <li><a class="nav-link scrollto" href="#services">{{ __( 'investors.the_solution') }}</a></li>
          <li><a class="nav-link scrollto" href="#about-us">{{ __( 'investors.about') }}</a></li>
          <li><a class="nav-link scrollto" href="#team">{{ __( 'investors.team') }}</a></li>
          <li><a class="nav-link scrollto" href="#contact">{{ __( 'investors.contact') }}</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header>
<!-- ======= End Header ======= -->
