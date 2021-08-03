@extends('layouts.page')

@section('content')
    <!-- WELCOME
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-14 py-md-14 overlay overlay-black overlay-30 bg-cover jarallax" style="background-color: #192644">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7 text-center">

              <!-- Heading -->
              <h1 class="display-2 font-weight-bold text-white">
                Tentang Kami
              </h1>

              <!-- Text -->
              <p class="lead mb-0 text-white-75">
                Sambutan, Visi & Misi
              </p>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <section class="py-8 py-md-8 border-bottom">
        <div class="container">
            <h2 class="font-weight-bold text-center">
                Sambutan Kepala Puskesmas
              </h2>
          <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-2 text-center">

              <!-- Image -->
              <img src="assets/images/icon/profile.png" alt="..." class="img-fluid" style="max-width:200px;max-height:200px">

            </div>
            <div class="col-12 col-md-6 order-md-1 text-center">


              <!-- Text -->
              <p class="font-size-lg mb-6 mb-md-6">
                "Selamat datang di website Puskesmas Cenrana"
              </p>

              <p class="text-center">Bustang,SKM,M.Kes</p>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

<section class="py-6 py-md-6 bg-gray-200">
    <div class="container rounded py-10">
      <div class="row">
        <div class="col-12 col-md-6">
            <div class="card px-6 py-6" style="background-color: #007DD1">
                <!-- Blockquote -->
          <blockquote class="blockquote text-center text-white">

            <!-- Logo -->
            <div class="text-center mb-3">
                <span class="badge badge-pill badge-primary">
                <span class="h4 text-uppercase text-white">VISI</span>
                </span>
            </div>

            <!-- Text -->
            <p class="mb-5 mb-md-7">
              Terciptanya Pelayanan Kesehatan yang Prima, Adil, dan Merata Menuju Terwujudnya Masyarakat yang Sehat, Cerdas, dan Sejahtera.
            </p>

          </blockquote>
            </div>

        </div>
        {{-- <div class="col-12 col-md-1 border-right my-n8 my-md-n8 d-none d-md-block"></div> --}}
        <div class="col-12 col-md-6">
            <div class="card px-6 py-6" style="background-color: #00AE4C">
          <!-- Blockquote -->
          <blockquote class="blockquote text-center text-white">

            <!-- Logo -->
            <div class="text-center mb-3">
                <span class="badge badge-pill badge-primary">
                <span class="h4 text-uppercase text-white">MISI</span>
                </span>
            </div>

            <!-- Text -->
            <p class="mb-5 mb-md-7 text-justify">
                <ul class="text-justify">
                    <li>Menyelenggarakan upaya kesehatan meliputi kegiatan promotif, preventif, kuratif, dan rehabilitative secara berkesinambungan. </li>
                    <li>Menyelenggarakan upaya pelayanan kesehatan secara profesional dan bertanggungjawab sesuai standar mutu. </li>
                    <li>Mengembangkan usaha kesehatan inovatif sesuai dengan sumber daya yang dimiliki dan berorientasi pada kebutuhan masyarakat.</li>
                    <li>Memberdayakan masyarakat di bidang kesehatan agar terwujud masyarakat sehat yang mandiri. </li>
                </ul>
            </p>


          </blockquote>
        </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<section class="pt-6 pt-md-8">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2 class="font-weight-bold">
                    Struktur Organisasi <br>
                  </h2>

            </div>
          </div> <!-- / .row -->
      <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">

          <!-- Fugure -->
          <figure class="figure mb-7">

            <!-- Image -->
            <img class="figure-img img-fluid rounded lift lift-lg" src="/assets/images/struktur.jpg" alt="...">

            <div class="card card-row shadow-light-lg bg-dark overlay overlay-80 text-white mb-6">
                <div class="row no-gutters">
                  <div class="col-12 col-md-12">

                    <!-- Body -->
                    <a class="card-body" href="#!">

                      <!-- Heading -->
                      <h5>
                        Dasar Hukum: PERMENKES NOMOR 75 TAHUN 2014
                      </h5>

                    </a>
                  </div>
                </div> <!-- / .row -->
              </div>

          </figure>

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
