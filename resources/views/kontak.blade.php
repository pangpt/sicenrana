@extends('layouts.page')

@section('content')
    <!-- WELCOME
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax" style="background-image: url(assets/img/covers/cover-13.jpg);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7 text-center">

              <!-- Heading -->
              <h1 class="display-2 font-weight-bold text-white">
                Hubungi Kami
              </h1>

              <!-- Text -->
              <p class="lead mb-0 text-white-75">
                Kami siap melayani Anda!
              </p>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <!-- SHAPE
      ================================================== -->
      {{-- <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
          <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
        </div>
      </div> --}}


      <!-- INFO
    ================================================== -->
    <section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">

              <!-- Button -->
              <a href="#info" class="btn btn-white btn-rounded-circle shadow mt-n11 mt-md-n13" data-toggle="smooth-scroll">
                <i class="fe fe-arrow-down"></i>
              </a>

            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-12 col-md-4 text-center border-right border-gray-300">

              <!-- Heading -->
              <h6 class="text-uppercase text-gray-700 mb-1">
                Message us
              </h6>

              <!-- Link -->
              <div class="mb-5 mb-md-0">
                <a href="#!" class="h4 text-primary">
                  Start a chat!
                </a>
              </div>

            </div>
            <div class="col-12 col-md-4 text-center border-right border-gray-300">

              <!-- Heading -->
              <h6 class="text-uppercase text-gray-700 mb-1">
                Call anytime
              </h6>

              <!-- Link -->
              <div class="mb-5 mb-md-0">
                <a href="#!" class="h4">
                  (555) 123-4567
                </a>
              </div>

            </div>
            <div class="col-12 col-md-4 text-center">

              <!-- Heading -->
              <h6 class="text-uppercase text-gray-700 mb-1">
                Email us
              </h6>

              <!-- Link -->
              <a href="#!" class="h4">
                support@goodthemes.co
              </a>

            </div>
          </div> <!-- / .row -->
        </div>
      </section>

      <!-- FORM
      ================================================== -->
      <section class="pt-8 pt-md-11 pb-8 pb-md-14">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">

              <!-- Heading -->
              <h2 class="font-weight-bold">
                Let us hear from you directly!
              </h2>

              <!-- Text -->
              <p class="font-size-lg text-muted mb-7 mb-md-9">
                We always want to hear from you! Let us know how we can best help you and we'll do our very best.
              </p>

            </div>
          </div> <!-- / .row -->
          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-10">

              <!-- Form -->
              <form>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group mb-5">

                      <!-- Label -->
                      <label for="contactName">
                        Full name
                      </label>

                      <!-- Input -->
                      <input type="text" class="form-control" id="contactName" placeholder="Full name">

                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group mb-5">

                      <!-- Label -->
                      <label for="contactEmail">
                        Email
                      </label>

                      <!-- Input -->
                      <input type="email" class="form-control" id="contactEmail" placeholder="hello@domain.com">

                    </div>
                  </div>
                </div> <!-- / .row -->
                <div class="row">
                  <div class="col-12">
                    <div class="form-group mb-7 mb-md-9">

                      <!-- Label -->
                      <label for="contactMessage">
                        What can we help you with?
                      </label>

                      <!-- Input -->
                      <textarea class="form-control" id="contactMessage" rows="5" placeholder="Tell us what we can help you with!"></textarea>

                    </div>
                  </div>
                </div> <!-- / .row -->
                <div class="row justify-content-center">
                  <div class="col-auto">

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary lift">
                      Send message
                    </button>

                  </div>
                </div> <!-- / .row -->
              </form>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <!-- FOOTER
      ================================================== -->
      <footer class="py-8 py-md-11 bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

              <!-- Brand -->
              <img src="./assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-2">

              <!-- Text -->
              <p class="text-gray-700 mb-2">
                A better way to build.
              </p>

              <!-- Social -->
              <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                <li class="list-inline-item list-social-item mr-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/instagram.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item mr-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item mr-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/pinterest.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Products
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-white mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Page Builder
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    UI Kit
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Styleguide
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Services
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-white mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Pagebuilder
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    UI Kit
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Connect
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-white mb-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Page Builder
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    UI Kit
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Styleguide
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Legal
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-white mb-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Pagebuilder
                  </a>
                </li>
              </ul>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </footer>
@endsection
