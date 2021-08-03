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
                Berita
              </h1>

              <!-- Text -->
              <p class="lead mb-0 text-white-75">
                Temukan berita terbaru dan peristiwa di sekitar Puskesmas Cenrana di sini
              </p>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <section class="pt-4 pt-md-4 bg-white">
        <div class="container">
          <div class="row">
            <div class="col-12">

              <!-- Divider -->
              <hr class="border-gray-300">
              <hr class="border-gray-300">

            </div>
          </div> <!-- / .row -->
          <div class="row align-items-center">
            <div class="col-12 col-md">
              <!-- Heading -->
              <h2 class="display-4 mb-2">
                INDEKS BERITA
              </h2>
            </div>
          </div> <!-- / .row -->
          {{-- <div class="row">
            <div class="col-12 col-md-9">

                <div class="container py-4">
                    <div class="row no-gutters">
                      <div class="col-12">

                      </div>
                      <a class="col-12 col-md-4 bg-cover" style="background-image: url(assets/img/photos/photo-28.jpg);" href="#!">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-28.jpg" alt="..." class="img-fluid d-md-none invisible">

                      </a>
                      <div class="col-12 col-md-8">

                        <!-- Body -->
                        <a class="card-body" href="#!">

                          <!-- Heading -->
                          <h3>
                            Photo on Left.
                          </h3>

                          <!-- Text -->
                          <p class="mb-0 text-muted">
                            This is the body text of the blog post to give visitors an idea of what the post is about beyond just the title. It can be a long snippet, a short snippet, whatever you prefer the size of card and description to be.
                          </p>

                        </a>

                        <!-- Meta -->
                        <a class="card-meta" href="#!">

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
                            <time datetime="2019-05-29">May 29</time>
                          </p>

                        </a>

                      </div>

                    </div>
                </div>
                <div class="container py-4">
                    <div class="row no-gutters">
                      <div class="col-12">

                      </div>
                      <a class="col-12 col-md-4 bg-cover" style="background-image: url(assets/img/photos/photo-28.jpg);" href="#!">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-28.jpg" alt="..." class="img-fluid d-md-none invisible">

                      </a>
                      <div class="col-12 col-md-8">

                        <!-- Body -->
                        <a class="card-body" href="#!">

                          <!-- Heading -->
                          <h3>
                            Photo on Left.
                          </h3>

                          <!-- Text -->
                          <p class="mb-0 text-muted">
                            This is the body text of the blog post to give visitors an idea of what the post is about beyond just the title. It can be a long snippet, a short snippet, whatever you prefer the size of card and description to be.
                          </p>

                        </a>

                        <!-- Meta -->
                        <a class="card-meta" href="#!">

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
                            <time datetime="2019-05-29">May 29</time>
                          </p>

                        </a>

                      </div>

                    </div>
                </div>

                <div class="container py-4">
                    <div class="row no-gutters">
                      <div class="col-12">

                      </div>
                      <a class="col-12 col-md-4 bg-cover" style="background-image: url(assets/img/photos/photo-28.jpg);" href="#!">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-28.jpg" alt="..." class="img-fluid d-md-none invisible">

                      </a>
                      <div class="col-12 col-md-8">

                        <!-- Body -->
                        <a class="card-body" href="#!">

                          <!-- Heading -->
                          <h3>
                            Photo on Left.
                          </h3>

                          <!-- Text -->
                          <p class="mb-0 text-muted">
                            This is the body text of the blog post to give visitors an idea of what the post is about beyond just the title. It can be a long snippet, a short snippet, whatever you prefer the size of card and description to be.
                          </p>

                        </a>

                        <!-- Meta -->
                        <a class="card-meta" href="#!">

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
                            <time datetime="2019-05-29">May 29</time>
                          </p>

                        </a>

                      </div>

                    </div>
                </div>

                <div class="container py-4">
                    <div class="row no-gutters">
                      <div class="col-12">

                      </div>
                      <a class="col-12 col-md-4 bg-cover" style="background-image: url(assets/img/photos/photo-28.jpg);" href="#!">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-28.jpg" alt="..." class="img-fluid d-md-none invisible">

                      </a>
                      <div class="col-12 col-md-8">

                        <!-- Body -->
                        <a class="card-body" href="#!">

                          <!-- Heading -->
                          <h3>
                            Photo on Left.
                          </h3>

                          <!-- Text -->
                          <p class="mb-0 text-muted">
                            This is the body text of the blog post to give visitors an idea of what the post is about beyond just the title. It can be a long snippet, a short snippet, whatever you prefer the size of card and description to be.
                          </p>

                        </a>

                        <!-- Meta -->
                        <a class="card-meta" href="#!">

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
                            <time datetime="2019-05-29">May 29</time>
                          </p>

                        </a>

                      </div>

                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
            <div class="col-12 col-md-3">

              <h4>BERITA TERBARU</h4>

              <div class="container py-4">
                <div class="row no-gutters">

                  <a class="col-12 col-md-4 bg-cover" style="background-image: url(assets/img/photos/photo-28.jpg);max-height:60px" href="#!">

                    <!-- Image (placeholder) -->
                    <img src="assets/img/photos/photo-28.jpg" alt="..." class="img-fluid d-md-none invisible">


                  </a>
                  <div class="col-12 col-md-8">
                      <h3>
                        Photo on Left.
                      </h3>

                      <!-- Text -->
                      <p class="mb-0 text-muted">
                        This is the body text of the blog post to give visitors an idea of what the post is about beyond just the title. It can be a long snippet, a short snippet, whatever you prefer the size of card and description to be.
                      </p>


                    <!-- Meta -->
                    <a class="card-meta" href="#!">

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
                        <time datetime="2019-05-29">May 29</time>
                      </p>

                    </a>

                  </div>

            </div>
          </div> <!-- / .row --> --}}
          <div class="row py-8">
            <div class="col-12 col-md-3">
                <!-- Image -->
                <div class="card">
                  <img class="shadow-light-lg" src="assets/img/portfolio/portfolio-1.jpg" alt="...">
                </div>
                <div class="card">
                    <p class="mb-0 text-muted">
                        2 July 2021
                    </p>
                </div>
                <div class="card mb-0">
                    <h3>
                        <a href="#!">
                          Hadiri Implementasi Inpres Optimalisasi BPJS Ketenagakerjaan, TP: Alhamdulilah Parepare Sudah Berjalan
                        </a>
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <!-- Image -->
                <div class="card">
                  <img class="shadow-light-lg" src="assets/img/portfolio/portfolio-1.jpg" alt="...">
                </div>

                <!-- Footer -->
                <div class="card">
                    <a href="#!">
                        <h5>
                          Hadiri Implementasi Inpres Optimalisasi BPJS Ketenagakerjaan, TP: Alhamdulilah Parepare Sudah Berjalan
                        </h5>
                    </a>
                          <!-- Text -->
                    <p class="mb-0 text-muted">
                        2 July
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <!-- Image -->
                <div class="card">
                  <img class="shadow-light-lg" src="assets/img/portfolio/portfolio-1.jpg" alt="...">
                </div>

                <!-- Footer -->
                <div class="card">
                    <a href="#!">
                        <h5>
                          Hadiri Implementasi Inpres Optimalisasi BPJS Ketenagakerjaan, TP: Alhamdulilah Parepare Sudah Berjalan
                        </h5>
                    </a>
                          <!-- Text -->
                    <p class="mb-0 text-muted">
                        2 July
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <!-- Image -->
                <div class="card">
                  <img class="shadow-light-lg" src="assets/img/portfolio/portfolio-1.jpg" alt="...">
                </div>

                <!-- Footer -->
                <div class="card">
                    <a href="#!">
                        <h5>
                          Hadiri Implementasi Inpres Optimalisasi BPJS Ketenagakerjaan, TP: Alhamdulilah Parepare Sudah Berjalan
                        </h5>
                    </a>
                          <!-- Text -->
                    <p class="mb-0 text-muted">
                        2 July
                    </p>
                </div>
            </div>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
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
