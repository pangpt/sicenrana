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
                Our Newsroom
              </h1>

              <!-- Text -->
              <p class="lead mb-0 text-white-75">
                Keep up to date with what we're working on! Landkit is an ever evolving theme with regular updates.
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


      <!-- ARTICLES
      ================================================== -->
      <section class="pt-7 pt-md-10">
        <div class="container">
          <div class="row">
            <div class="col-12">

              <!-- Card -->
              <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
                <div class="row no-gutters">
                  <div class="col-12">

                    <!-- Badge -->
                    <span class="badge badge-pill badge-light badge-float badge-float-inside">
                      <span class="h6 text-uppercase">Featured</span>
                    </span>

                  </div>
                  <a class="col-12 col-md-6 order-md-2 bg-cover card-img-right" style="background-image: url(assets/img/photos/photo-27.jpg);" href="#!">

                    <!-- Image (placeholder) -->
                    <img src="assets/img/photos/photo-27.jpg" alt="..." class="img-fluid d-md-none invisible">

                    <!-- Shape -->
                    <div class="shape shape-left shape-fluid-y svg-shim text-white d-none d-md-block">
                      <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h62.759v172C38.62 384 112 517 112 517v173H0V0z" fill="currentColor"/></svg>
                    </div>

                  </a>
                  <div class="col-12 col-md-6 order-md-1">

                    <!-- Body -->
                    <a class="card-body" href="#!">

                      <!-- Heading -->
                      <h3>
                        Travel Can Keep You Creatively Inspired.
                      </h3>

                      <!-- Text -->
                      <p class="mb-0 text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam. Fusce pellentesque faucibus lorem at viverra. Integer at feugiat odio. In placerat euismod risus proin erat purus.
                      </p>

                    </a>

                    <!-- Meta -->
                    <a class="card-meta" href="#!">

                      <!-- Divider -->
                      <hr class="card-meta-divider">

                      <!-- Avatar -->
                      <div class="avatar avatar-sm mr-2">
                        <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>

                      <!-- Author -->
                      <h6 class="text-uppercase text-muted mr-2 mb-0">
                        Ab Hadley
                      </h6>

                      <!-- Date -->
                      <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                        <time datetime="2019-05-02">May 02</time>
                      </p>

                    </a>

                  </div>

                </div> <!-- / .row -->
              </div>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <!-- ARTICLES
      ================================================== -->
      <section class="pt-7 pt-md-10">
        <div class="container">
          <div class="row align-items-center mb-5">
            <div class="col-12 col-md">

              <!-- Heading -->
              <h3 class="mb-0">
                Latest Stories
              </h3>

              <!-- Text -->
              <p class="mb-0 text-muted">
                Here’s what we've been up to recently.
              </p>

            </div>
            <div class="col-12 col-md-auto">

              <!-- Button -->
              <a href="#!" class="btn btn-sm btn-outline-gray-300 d-none d-md-inline">
                View all
              </a>

            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4 d-flex">

              <!-- Card -->
              <div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-15.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Cafe Coworking Has Become the Norm.
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Ab Hadley
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex">

              <!-- Card -->
              <div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-14.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Weekly Roundtable Meetings Saved Us.
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Adolfo Hess
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex">

              <!-- Card -->
              <div class="card mb-6 mb-md-0 shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Nature Can Save Your Creative Side.
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Ab Hadley
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex">

              <!-- Card -->
              <div class="card d-lg-none shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-5.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Coffee Can Keep You Going, But At What Cost?
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Ab Hadley
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <!-- ARTICLES
      ================================================== -->
      <section class="pt-7 pt-md-10">
        <div class="container">
          <div class="row align-items-center mb-5">
            <div class="col-12 col-md">

              <!-- Heading -->
              <h3 class="mb-0">
                Case Studies
              </h3>

              <!-- Text -->
              <p class="mb-0 text-muted">
                In-depth looks at our work.
              </p>

            </div>
            <div class="col-12 col-md-auto">

              <!-- Button -->
              <a href="#!" class="btn btn-sm btn-outline-gray-300 d-none d-md-inline">
                View all
              </a>

            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-12">

              <!-- Card -->
              <div class="card card-row shadow-light-lg mb-6">
                <div class="row no-gutters">
                  <div class="col-12 col-md-6">

                    <!-- Slider -->
                    <div class="card-img-slider" data-flickity='{"fade": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "asNavFor": "#blogSlider", "draggable": false}'>
                      <a class="card-img-left bg-cover" style="background-image: url(assets/img/photos/photo-1.jpg);" href="#!">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

                      </a>
                      <a class="card-img-left bg-cover" style="background-image: url(assets/img/photos/photo-26.jpg);" href="#!">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-26.jpg" alt="..." class="img-fluid d-md-none invisible">

                      </a>
                    </div>

                    <!-- Shape -->
                    <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
                      <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>
                    </div>

                  </div>
                  <div class="col-12 col-md-6 position-static">

                    <!-- Slider -->
                    <div class="position-static" data-flickity='{"wrapAround": true, "pageDots": false, "imagesLoaded": true, "adaptiveHeight": true}' id="blogSlider">
                      <div class="w-100">

                        <!-- Body -->
                        <a class="card-body" href="#!">

                          <!-- Heading -->
                          <h3>
                            Spending Time Outside the Office with Coworkers Is Great for Productivity.
                          </h3>

                          <!-- Text -->
                          <p class="mb-0 text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam. Fusce pellentesque faucibus lorem at viverra. Integer at feugiat odio. In placerat euismod risus proin erat purus.
                          </p>

                        </a>

                        <!-- Meta -->
                        <a class="card-meta mt-auto" href="#!">

                          <!-- Divider -->
                          <hr class="card-meta-divider">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm mr-2">
                            <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                          <!-- Author -->
                          <h6 class="text-uppercase text-muted mr-2 mb-0">
                            Adolfo Hess
                          </h6>

                          <!-- Date -->
                          <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                            <time datetime="2019-05-02">May 02</time>
                          </p>

                        </a>

                      </div>
                      <div class="w-100">

                        <!-- Body -->
                        <a class="card-body" href="#!">

                          <!-- Heading -->
                          <h3>
                            Working in Cafes Doesn't Inspire You. It Kills Your Output and Costs Money.
                          </h3>

                          <!-- Text -->
                          <p class="mb-0 text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam. Fusce pellentesque faucibus lorem at viverra. Integer at feugiat odio. In placerat euismod risus proin erat purus.
                          </p>

                        </a>

                        <!-- Meta -->
                        <a class="card-meta mt-auto" href="#!">

                          <!-- Divider -->
                          <hr class="card-meta-divider">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm mr-2">
                            <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                          <!-- Author -->
                          <h6 class="text-uppercase text-muted mr-2 mb-0">
                            Ab Hadley
                          </h6>

                          <!-- Date -->
                          <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                            <time datetime="2019-05-02">May 02</time>
                          </p>

                        </a>

                      </div>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <!-- ARTICLES
      ================================================== -->
      <section class="pt-7 pt-md-10">
        <div class="container">
          <div class="row">
            <div class="col-12">

              <!-- Heading -->
              <h3 class="mb-0">
                Popular Stories
              </h3>

              <!-- Text -->
              <p class="mb-5 text-muted">
                Here’s what’s big in the past week!
              </p>

            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-12 col-md-6 d-flex">

              <!-- Card -->
              <div class="card mb-6 shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-28.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Greece Is Having A Tech Renaissance.
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam. Fusce pellentesque faucibus lorem at viverra. Integer at feugiat odio. In placerat euismod risus proin erat purus.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Ab Hadley
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
            <div class="col-12 col-md-6 d-flex">

              <!-- Card -->
              <div class="card mb-6 shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-29.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Is Failing Actually Bad for Business?
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam. Fusce pellentesque faucibus lorem at viverra. Integer at feugiat odio. In placerat euismod risus proin erat purus.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Adolfo Hess
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex">

              <!-- Card -->
              <div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-6.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Landkit is Moving to an Office In Austin, TX
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Ab Hadley
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex">

              <!-- Card -->
              <div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-4.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Are Hot Desks Great for Digital Nomads?
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Adolfo Hess
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex">

              <!-- Card -->
              <div class="card mb-6 mb-md-0 shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-5.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Coffee Can Keep You Going, But At What Cost?
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Ab Hadley
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex">

              <!-- Card -->
              <div class="card d-lg-none shadow-light-lg lift lift-lg">

                <!-- Image -->
                <a class="card-img-top" href="#!">

                  <!-- Image -->
                  <img src="assets/img/photos/photo-27.jpg" alt="..." class="card-img-top">

                  <!-- Shape -->
                  <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                      <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
                    </div>
                  </div>

                </a>

                <!-- Body -->
                <a class="card-body" href="#!">

                  <!-- Heading -->
                  <h3>
                    Travel Can Keep You Creatively Inspired.
                  </h3>

                  <!-- Text -->
                  <p class="mb-0 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                  </p>

                </a>

                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                  <!-- Divider -->
                  <hr class="card-meta-divider">

                  <!-- Avatar -->
                  <div class="avatar avatar-sm mr-2">
                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                  <!-- Author -->
                  <h6 class="text-uppercase text-muted mr-2 mb-0">
                    Ab Hadley
                  </h6>

                  <!-- Date -->
                  <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                    <time datetime="2019-05-02">May 02</time>
                  </p>

                </a>

              </div>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <!-- MORE
      ================================================== -->
      <section class="py-7 py-md-10">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-8 col-xl-7">

              <!-- Button -->
              <a href="#!" class="btn btn-block btn-outline-gray-300 d-flex align-items-center">
                <span class="mx-auto">Load more</span> <i class="fe fe-arrow-right"></i>
              </a>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <!-- SHAPE
      ================================================== -->
      <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
          <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
        </div>
      </div>

      <!-- CTA
      ================================================== -->
      <section class="pt-6 pt-md-8 bg-gray-200">
        <div class="container pb-6 pb-md-8 border-bottom border-gray-300">
          <div class="row align-items-center">
            <div class="col-12 col-md">

              <!-- Heading -->
              <h3 class="mb-1 font-weight-bold">
                Get our stories delivered
              </h3>

              <!-- Text -->
              <p class="font-size-lg text-muted mb-6 mb-md-0">
                From us to your inbox weekly.
              </p>

            </div>
            <div class="col-12 col-md-5">

              <!-- Form -->
              <form>
                <div class="row">
                  <div class="col">

                    <!-- Input -->
                    <input type="email" class="form-control" placeholder="Enter your email">

                  </div>
                  <div class="col-auto ml-n5">

                    <!-- Button -->
                    <button class="btn btn-primary" type="submit">
                      Subscribe
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
      <footer class="py-8 py-md-11 bg-gray-200">
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
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
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
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
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
              <ul class="list-unstyled text-muted mb-0">
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
              <ul class="list-unstyled text-muted mb-0">
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
