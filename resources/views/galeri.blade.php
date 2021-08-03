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
                Galeri Foto
              </h1>

              <!-- Text -->
              <p class="lead mb-0 text-white-75">
                Temukan kumpulan foto peristiwa di sekitar Puskesmas Cenrana di sini
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
                SEMUA FOTO
              </h2>
            </div>
          </div>
          <div class="row py-8">
            <div class="col-12 col-md-3">
                <a
                    href="../assets/img/covers/cover-8.jpg"
                    data-fancybox="gallery"
                    data-caption="Optional caption"
                >
                    <img src="../assets/img/covers/cover-8.jpg" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a
                    href="../assets/img/covers/cover-7.jpg"
                    data-fancybox="gallery"
                    data-caption="Optional caption"
                >
                    <img src="../assets/img/covers/cover-7.jpg" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a
                    href="../assets/img/covers/cover-6.jpg"
                    data-fancybox="gallery"
                    data-caption="Optional caption"
                >
                    <img src="../assets/img/covers/cover-6.jpg" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a
                    href="../assets/img/covers/cover-5.jpg"
                    data-fancybox="gallery"
                    data-caption="Optional caption"
                >
                    <img src="../assets/img/covers/cover-5.jpg" class="img-fluid" alt="...">
                </a>
            </div>
          </div>
          {{-- <nav aria-label="Page navigation example">
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
          </nav> --}}
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

