@extends('layouts.dashboard')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-block align-items-center col-10 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-5 text-center text-justify justify-content-center" data-aos="zoom-out" data-aos-delay="100">
      <h1 class="mb-4 text-center text-justify">{{ __( 'investors.home_presentation_text') }}</h1>
    </div>
  </section>

  <section id="explanation" class="d-flex align-items-center">
    <div class="container d-block align-items-center col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-5 text-center text-justify justify-content-center" data-aos="zoom-out" data-aos-delay="100">
        <h4 class="text-center text-justify">{{ __( 'investors.home_explanation_text') }}</h4>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= The Challenge Section ======= -->
    <section id="featured-services" class="featured-services">

      <div class="container" data-aos="fade-up">

        {{-- Titles--}}
        <div id="asked" class="d-flex align-items-center mb-3">
            <div class="container d-block align-items-center col-10 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-5 text-center text-justify justify-content-center" data-aos="zoom-out" data-aos-delay="100">
                <h4 class="text-center text-justify">{{ __( 'investors.about_asked') }}</h4>
            </div>
        </div>

        <div id="amazon" class="container d-block align-items-center col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 text-center text-justify justify-content-center mb-5" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="mb-4 text-center text-justify mb-5"><strong>{{ __( 'investors.where_amazon') }}</strong></h1>
        </div>

        {{-- 4 reasons --}}
        <div id="reasons" class="row justify-content-center mb-4">

          <div class="col-11 col-sm-11 col-md-6 col-lg-3 col-xl-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon d-flex justify-content-center"><img class="mb-4" src="{{ asset('assets/icons/1.png') }}" alt=""></div>
              <p class="description m-2">{{ __( 'investors.find_compare') }}</p>
            </div>
          </div>

          <div class="col-11 col-sm-11 col-md-6 col-lg-3 col-xl-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon d-flex justify-content-center"><img class="mb-4" src="{{ asset('assets/icons/2.png') }}" alt=""></div>
              <p class="description m-2">{{ __( 'investors.human_need') }}</p>
            </div>
          </div>

          <div class="col-11 col-sm-11 col-md-6 col-lg-3 col-xl-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon d-flex justify-content-center"><img class="mb-4" src="{{ asset('assets/icons/3.png') }}" alt=""></div>
              <p class="description m-2">{{ __( 'investors.marketing_on_site') }}</p>
            </div>
          </div>

          <div class="col-11 col-sm-11 col-md-6 col-lg-3 col-xl-3 d-flex align-items-stretch justiy-content-center mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon d-flex justify-content-center"><img class="mb-4" src="{{ asset('assets/icons/4.png') }}" alt=""></div>
              <p class="description m-2">{{ __( 'investors.tech_giant') }}</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Leader section -->
    <section id="leader" class="featured-services">

      <div class="container mt-5" data-aos="fade-up">

        {{-- Titles--}}
        <div id="why" class="container d-block align-items-center col-11 col-sm-11 col-md-8 col-lg-8 col-xl-6 col-xxl-6 text-center text-justify justify-content-center" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="mb-4 text-center text-justify mb-5"><strong>{{ __( 'investors.why') }}</strong></h1>
        </div>

        <div id="critical-mass" class="d-flex align-items-center mb-4">
            <div class="container d-block align-items-center col-10 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-5 text-center text-justify justify-content-center" data-aos="zoom-out" data-aos-delay="100">
                <h4 class="text-center text-justify mb-4">{{ __( 'investors.critical_mass') }}</h4>
            </div>
        </div>

        {{-- Reasons --}}
        <div id="global-leader" class="row justify-content-center">

            <div class="col-12 col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center mb-5 mb-lg-0 box">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon d-flex justify-content-center"><img class="mb-4" src="{{ asset('assets/icons/5.png') }}" alt=""></div>
                    <p class="description text-center text-justify align-self-start mb-4">{{ __( 'investors.local_players') }}</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon d-flex justify-content-center"><img class="mb-4" src="{{ asset('assets/icons/6.png') }}" alt=""></div>
                    <p class="description text-center text-justify align-self-start mb-4">{{ __( 'investors.specific_needs') }}</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon d-flex justify-content-center"><img class="mb-4" src="{{ asset('assets/icons/7.png') }}" alt=""></div>
                    <p class="description text-center text-justify align-self-start">{{ __( 'investors.too_busy') }}</p>
                </div>
            </div>

        </div>

      </div>
    </section><!-- ======= End Leader Section ======= -->
    <!-- End The Challenge Section -->

    <!-- ======= The Solution Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title mt-5" data-aos="zoom-out" data-aos-delay="100">
          <h4>{{ __( 'investors.solve_organizers') }}</h4>
        </div>

        <div class="row d-flex justify-content-center">

          <div class="col-11 col-sm-11 col-lg-4 col-md-6 d-flex justify-content-center m-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h3><strong>{{ __( 'investors.step_1') }}</strong></h3>
              <p class="text-center text-justify solutions pt-4">{{ __( 'investors.the_engine') }}</p>
            </div>
          </div>

          <div class="col-11 col-sm-11 col-lg-4 col-md-6 d-flex justify-content-center m-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h3><strong>{{ __( 'investors.step_2') }}</strong></h3>
              <p class="text-center text-justify solutions pt-4">{{ __( 'investors.the_marketplace') }}</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Technologies section -->
    <section id="tech" class="technologies">

        <div class="container mt-5" data-aos="fade-up">

          {{-- Titles--}}
          <div class="container d-block align-items-center col-11 col-sm-11 col-md-8 col-lg-5 col-xl-5 col-xxl-6 text-center text-justify justify-content-center" data-aos="zoom-out" data-aos-delay="100">
              <h3 class="mb-2 text-center text-justify mb-5"><strong>{{ __( 'investors.our_stack') }}</strong></h3>
          </div>

          <div class="d-flex align-items-center mb-5">
              <div class="container d-block align-items-center col-11 col-sm-11 col-md-8 col-lg-6 col-xl-5 col-xxl-5 text-center text-justify justify-content-center" data-aos="zoom-out" data-aos-delay="100">
                  <h5 class="text-center text-justify mb-3">{{ __( 'investors.working_with') }}</h5>
              </div>
          </div>

          {{-- Icons --}}
          <div id="tech-icons" class="row justify-content-center mb-3">

            {{-- Laptop version --}}
            <div class="laptop-tech">
                <div class="d-flex align-items-center justify-content-center">

                    <div class="col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 m-4 icon-box" style="box-shadow: 3px 3px rgba(214, 215, 216, 0.6); width: 200px; height: 180px;" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <div class="icon d-flex justify-content-center"><img height="50px" width="50px" src="{{ asset('assets/icons') }}/net.png"></div>
                            <p class="description text-center text-justify align-self-start pt-4">.NET6</p>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 m-4 icon-box" style="box-shadow: 3px 3px rgba(214, 215, 216, 0.6); width: 200px; height: 180px;" data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <div class="icon d-flex justify-content-center"><img height="50px" width="50px" src="{{ asset('assets/icons') }}/postgresql.png"></div>
                            <p class="description text-center text-justify align-self-start pt-4">Postgres SQL</p>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 m-4 icon-box" style="box-shadow: 3px 3px rgba(214, 215, 216, 0.6); width: 200px; height: 180px;" data-aos="fade-up" data-aos-delay="300">
                        <div>
                            <div class="icon d-flex justify-content-center"><img height="50px" width="50px" src="{{ asset('assets/icons') }}/rabbitmq.png"></div>
                            <p class="description text-center text-justify align-self-start pt-4">Rabbit MQ</p>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 m-4 icon-box" style="box-shadow: 3px 3px rgba(214, 215, 216, 0.6); width: 200px; height: 180px;" data-aos="fade-up" data-aos-delay="400">
                        <div>
                            <div class="icon d-flex justify-content-center"><img height="50px" width="50px"  src="{{ asset('assets/icons') }}/kubernetes.png"></div>
                            <p class="description text-center text-justify align-self-start pt-4">Kubernetes</p>
                        </div>
                    </div>

                </div>
            </div>
            {{-- End Laptop version --}}


            {{-- Mobile Version --}}
            <div class="mobile-tech">

                <div class="fila col-12 align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center mb-3 mb-lg-0 m-2 icon-box" data-aos="fade-up" data-aos-delay="100" style="box-shadow: 3px 3px rgba(214, 215, 216, 0.5);">
                        <div>
                            <div class="icon d-flex justify-content-center"><img id="technologies" src="{{ asset('assets/icons') }}/net.png"></div>
                            <p class="description text-center text-justify align-self-start pt-4">.NET6</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-center mb-3 mb-lg-0 m-2 icon-box" data-aos="fade-up" data-aos-delay="100" style="box-shadow: 3px 3px rgba(214, 215, 216, 0.5);">
                        <div>
                            <div class="icon d-flex justify-content-center"><img id="technologies" src="{{ asset('assets/icons') }}/postgresql.png"></div>
                            <p class="description text-center text-justify align-self-start pt-4">Postgres SQL</p>
                        </div>
                    </div>
                </div>

                <div class="fila col-12 align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center mb-3 mb-lg-0 m-2 icon-box" data-aos="fade-up" data-aos-delay="100" style="box-shadow: 3px 3px rgba(214, 215, 216, 0.5);">
                        <div>
                            <div class="icon d-flex justify-content-center"><img id="technologies" src="{{ asset('assets/icons') }}/rabbitmq.png"></div>
                            <p class="description text-center text-justify align-self-start pt-4">.Rabbit MQ</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-center mb-3 mb-lg-0 m-2 icon-box" data-aos="fade-up" data-aos-delay="100" style="box-shadow: 3px 3px rgba(214, 215, 216, 0.5);">
                        <div>
                            <div class="icon d-flex justify-content-center"><img id="technologies" src="{{ asset('assets/icons') }}/kubernetes.png"></div>
                            <p class="description text-center text-justify align-self-start pt-4">Kubernetes</p>
                        </div>
                    </div>
                </div>

            </div>
            {{--  End mobile Version --}}

          </div>

        </div>
      </section><!-- ======= End Technologies Section ======= -->
      <!-- ======= The Solution Section ======= -->

      <!-- ======= About us Section ======= -->

      {{-- Video --}}
      <section id="about-us" class="d-flex align-items-center">
        <div class="container d-block align-items-center col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-5 text-center text-justify justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-center text-justify mb-4" data-aos="zoom-out"><strong>{{ __( 'investors.about_us') }}</strong></h2>
            <h5 class="text-center text-justify mb-4" data-aos="zoom-out">{{ __( 'investors.our_mission') }}</h5>

            <div class="mb-5" style="padding:56.25% 0 0 0;position:relative;" data-aos="fade-up">
                <iframe src="https://player.vimeo.com/video/607334366?h=177f2443c5&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Introduction to MergeLabs by Ali Taghavi"></iframe>
            </div><script src="https://player.vimeo.com/api/player.js"></script>
        </div>
      </section>

    {{-- Team Section  --}}
    <section id="team" id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

            <div class="section-title mb-4" data-aos="fade-up" data-aos-delay="100">
            <h3>{{ __( 'investors.hardworking') }}</h3>
            <p class="col-11 col-sm-11 col-dm-10">{{ __( 'investors.team_description') }}</p>
            </div>
        {{-- Laptop version --}}
        <div id="team-laptop" class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide d-flex justify-content-center" data-swiper-autoplay="9000">
              <div class="testimonial-item col-3 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{ asset('assets/img') }}/Ali.jpeg" class="testimonial-img" alt="">
                </div>
                <h3>Ali</h3>
                <h4>CEO &amp; Founder</h4>
                <div class="social mt-3">
                    <a href="https://www.linkedin.com/in/ali-taghavi-65a0a81/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>

              <div class="testimonial-item col-3 member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{ asset('assets/img') }}/Kibble.jpg" class="testimonial-img" alt="">
                </div>
                <h3>Kibble</h3>
                <h4>CTO &amp; Founder</h4>
                <div class="social mt-3">
                    <a href="https://www.linkedin.com/in/kibblewhite/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>

              <div class="testimonial-item col-3 member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="{{ asset('assets/img') }}/Mago.jpg" class="testimonial-img" alt="">
                </div>
                <h3>Mago</h3>
                <h4>Developer</h4>
                <div class="social mt-3">
                    <a href="https://www.linkedin.com/in/jose-maria-farfan/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div><!-- End team item -->


            <div class="swiper-slide d-flex justify-content-center" data-swiper-autoplay="9000">

              <div class="testimonial-item col-3 member">
                <div class="member-img">
                    <img src="{{ asset('assets/img') }}/julia.png" class="testimonial-img" alt="">
                </div>
                <h3>Julia</h3>
                <h4>Part-time Designer</h4>
                <div class="social mt-3">
                    <a href="https://www.linkedin.com/in/julia-schadler/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>

              <div class="testimonial-item col-3 member">
                <div class="member-img">
                  <img src="{{ asset('assets/img') }}/Mads.jpeg" class="testimonial-img" alt="">
                </div>
                <h3>Mads</h3>
                <h4>Part-time Developer</h4>
                <div class="social mt-3">
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>

              <div class="testimonial-item col-3 member">
                <div class="member-img">
                  <img src="{{ asset('assets/img') }}/Ben.jpeg" class="testimonial-img" alt="">
                </div>
                <h3>Benedikt</h3>
                <h4>Communication Advisor</h4>
                <div class="social mt-3 mb-2">
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>

            </div><!-- End team item -->

           </div>
          <div class="swiper-pagination"></div>
        </div>
        {{-- End laptop version --}}

        {{-- Mobile version --}}
        <div id="team-mobile" class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide d-flex justify-content-center">

                <div class="testimonial-item col-12 member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="{{ asset('assets/img') }}/Ali.jpeg" class="testimonial-img" alt="">
                  </div>
                  <h3 class="name">Ali</h3>
                  <h4 class="job">CEO &amp; Founder</h4>
                  <div class="social-mobile mt-3">
                    <a href="https://www.linkedin.com/in/ali-taghavi-65a0a81/" target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div><!-- End team item -->

               <div class="swiper-slide d-flex justify-content-center">
                <div class="testimonial-item col-12 member" data-aos="fade-up" data-aos-delay="200">
                  <div class="member-img">
                    <img src="{{ asset('assets/img') }}/Kibble.jpg" class="testimonial-img" alt="">
                  </div>
                  <h3 class="name">Kibble</h3>
                  <h4 class="job">CTO &amp; Founder</h4>
                  <div class="social-mobile mt-3">
                      <a href="https://www.linkedin.com/in/kibblewhite/" target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
               </div><!-- End team item -->

               <div class="swiper-slide d-flex justify-content-center">
                <div class="testimonial-item col-12 member" data-aos="fade-up" data-aos-delay="300">
                  <div class="member-img">
                    <img src="{{ asset('assets/img') }}/Mago.jpg" class="testimonial-img" alt="">
                  </div>
                  <h3 class="name">Mago</h3>
                  <h4 class="job">Developer</h4>
                  <div class="social-mobile mt-3">
                      <a href="https://www.linkedin.com/in/jose-maria-farfan/" target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>

              </div><!-- End team item -->


              <div class="swiper-slide d-flex justify-content-center">

                <div class="testimonial-item col-12 member">
                  <div class="member-img">
                      <img src="{{ asset('assets/img') }}/julia.png" class="testimonial-img" alt="">
                  </div>
                  <h3 class="name">Julia</h3>
                  <h4 class="job">Part-time Designer</h4>
                  <div class="social-mobile mt-3">
                      <a href="https://www.linkedin.com/in/julia-schadler/" target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide d-flex justify-content-center">

                <div class="testimonial-item col-12 member">
                  <div class="member-img">
                    <img src="{{ asset('assets/img') }}/Mads.jpeg" class="testimonial-img" alt="">
                  </div>
                  <h3 class="name">Mads</h3>
                  <h4 class="job">Part-time Developer</h4>
                  <div class="social-mobile mt-3">
                      <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide d-flex justify-content-center">
                <div class="testimonial-item col-12 member">
                  <div class="member-img">
                    <img src="{{ asset('assets/img') }}/Ben.jpeg" class="testimonial-img" alt="">
                  </div>
                  <h3 class="name">Benedikt</h3>
                  <h4 class="job">Communication Advisor</h4>
                  <div class="social-mobile mt-3 mb-2">
                      <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>

              </div><!-- End testimonial item -->

             </div>
            <div class="swiper-pagination"></div>
          </div>
          {{-- End mobile version --}}

      </div>
    </section><!-- End Team Section -->

    <!-- ======= End About us Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title" data-aos="zoom-out" data-aos-delay="100">
          <h3>{{ __( 'investors.contact_us') }}</h3>
          <p class="mb-3">{{ __( 'investors.onboarding_investors') }}</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          {{-- Form Mailchimp --}}
          <div class="col-lg-12 d-flex justify-content-center" style="height: 100%;">
            <iframe class="mb-5" scrolling="no" style="width: 45%; height: 82vh; box-shadow: 0 0 50px rgba(214, 215, 216, 0.6);" src="https://us15.list-manage.com/contact-form?u=c8ad4f9138ae4814c8ec40c55&form_id=100dd70ad386201ed35e068e50eda590">
            </iframe>
          </div>
        </div>

        <h4 data-aos="zoom-out" class="d-flex justify-content-center text-center"><strong>{{ __( 'investors.hear_from') }}</strong></h4>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
