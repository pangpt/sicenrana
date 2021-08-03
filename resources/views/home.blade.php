@extends('layouts.master')

@section('content')

<section class="position-relative py-8 mb-8">

    <!-- Shape -->
    <div class="shape shape-fluid-x shape-blur-1 svg-shim text-gray-200">
        <svg viewBox="0 0 723 569" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M703.969 241.602l-.006-.003C716.081 262.97 723 287.677 723 314c0 68.917-47.425 126.757-111.42 142.665L246.7 556.937C226.465 564.729 204.481 569 181.5 569 81.26 569 0 487.74 0 387.5c0-34.256 9.49-66.296 25.985-93.633l-.016.008L141.512 77.548C162.753 33.305 207.123 2.273 258.951.12l.008-.12h251.04l.003.01c41.848.557 78.081 24.378 96.356 59.12l.001-.005 97.61 182.477z" fill="currentColor"/></svg>
    </div>

    <!-- Contetn -->

    <div class="container">
        <div class="row align-items-center">
        <div class="col-12 col-md-6 order-md-2">

            <!-- Image -->
            <div class="img-skewed img-skewed-left mb-8 mb-md-0">
            <img src="assets/images/banner-pus-1.png" alt="..." class="screenshot img-fluid mw-md-130" data-aos="img-skewed-item-left" data-aos-delay="100">
            </div>

        </div>
        <div class="col-12 col-md-6 order-md-1" data-aos="fade-up">
            <div class="row">
                <div class="col-2">
                    <img src="assets/images/logo-bone.png" alt="" style="max-width: 100px;max-height:100px">
                </div>
                <div class="col-2">
                    <img src="assets/images/logo-puskesmas.png" alt="" style="max-width: 100px;max-height:100px">
                </div>
            </div>

            <!-- Heading -->
            <h1 class="display-3">
            UPT PUSKESMAS CENRANA <br>
            <span class="text-primary">KABUPATEN BONE</span>.
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-6 mb-md-8">
            Kecamatan Cenrana, Kabupaten Bone, Sulawesi Selatan 92754
            </p>

        </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

</section>

<section class="py-4 py-md-4 mb-4 bg-primary">
    <div class="container">
      <div class="flickity-viewport-visible" data-flickity='{"imagesLoaded": true, "initialIndex": 6, "pageDots": false, "prevNextButtons": false, "contain": true}'>
        <div class="col-12 col-md-12 col-lg-12 text-center text-white">

          <!-- Brand -->
          {{-- <div class="img-fluid text-white text-center"> --}}
              <h4>
            Dengan ini kami menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang telah ditetapkan dan apabila tidak menepati janji ini kami siap menerima sanksi sesuai dengan
            peraturan perundang-undangan yang berlaku
        </h4>
          {{-- </div> --}}

        </div>
      </div>
    </div> <!-- / .container -->
</section>

{{-- <section class="py-8 py-md-8">
    <div class="container">
      <div class="row">
        <div class="col-3">

          <!-- Card -->
          <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
            <div class="row no-gutters">
              <div class="col-12 col-md-6 order-md-1">
                <p>Pelayanan 1</p>
              </div>
            </div> <!-- / .row -->
          </div>

        </div>
        <div class="col-3">

            <!-- Card -->
            <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
              <div class="row no-gutters">
                <div class="col-12 col-md-6 order-md-1">
                  <p>Pelayanan 1</p>
                </div>
              </div> <!-- / .row -->
            </div>

          </div>
          <div class="col-3">

            <!-- Card -->
            <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
              <div class="row no-gutters">
                <div class="col-12 col-md-6 order-md-1">
                  <p>Pelayanan 1</p>
                </div>
              </div> <!-- / .row -->
            </div>

          </div>
          <div class="col-3">

            <!-- Card -->
            <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
              <div class="row no-gutters">
                <div class="col-12 col-md-6 order-md-1">
                  <p>Pelayanan 1</p>
                </div>
              </div> <!-- / .row -->
            </div>

          </div>
          <div class="col-3">

            <!-- Card -->
            <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
              <div class="row no-gutters">
                <div class="col-12 col-md-6 order-md-1">
                  <p>Pelayanan 1</p>
                </div>
              </div> <!-- / .row -->
            </div>

          </div>
          <div class="col-3">

            <!-- Card -->
            <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
              <div class="row no-gutters">
                <div class="col-12 col-md-6 order-md-1">
                  <p>Pelayanan 1</p>
                </div>
              </div> <!-- / .row -->
            </div>

          </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> --}}

<section class="py-6 py-md-6">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Flickity -->
          <div class="flickity-viewport-visible pt-2 pb-9" data-flickity='{"cellAlign": "left", "imagesLoaded": true, "pageDots": false, "prevNextButtons": true, "contain": true}'>
            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #FF5A5F;width:100%">
                <div class="card-body text-center">

                  <!-- Text -->
                  <img class="mb-4" src="assets/images/icon/first-aid-kit.png" alt="" style="max-width: 40px">
                  <p class=" mb-5">
                    Penanggungjawab UKM esensial dan keperawatan kesehatan masyarakat
                  </p>

                  <!-- Link -->
                  <a href="#!" style="color: #FF5A5F;">Selengkapnya</a>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #B81D24;">
                <div class="card-body text-center">

                  <!-- Text -->
                  <img class="mb-4" src="assets/images/icon/pharmacist.png" alt="" style="max-width: 40px">
                  <p class=" mb-5">
                    Penanggungjawab UKM Pengembangan Membawahi upaya pengembangan yang dilakukan Puskesmas
                  </p>

                  <!-- Link -->
                  <a href="#!" style="color: #B81D24;">Selengkapnya</a>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #0081C9;">
                <div class="card-body text-center">
                  <!-- Text -->
                  <img class="mb-4" src="assets/images/icon/medical-invoice.png" alt="" style="max-width: 40px">
                  <p class=" mb-5">
                    Penanggungjawab UKP, kefarmasian, dan laboratorium
                  </p>

                  <!-- Link -->
                  <a href="#!" style="color: #0081C9;">Selengkapnya</a>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #6772E5;">
                <div class="card-body text-center">
                  <!-- Text -->
                  <img class="mb-4" src="assets/images/icon/stretcher.png" alt="" style="max-width: 40px">
                  <p class=" mb-5">
                    Penanggungjawab jaringan pelayanan Puskesmas dan jejaring fasilitas pelayanan kesehatan
                  </p>

                  <!-- Link -->
                  <a href="#!" style="color: #6772E5;">Selengkapnya</a>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

 <!-- FLEXIBILITY
    ================================================== -->
<section class="py-8 py-md-8 bg-gray-200">
    <div class="container">
        <h2 class="font-weight-bold">
            Jam Kerja, Pelayanan, Besuk
          </h2>
        <div class="form-row">
            <div class="col-12 col-md-4">
            <!-- Card -->
            <div class="card shadow-lg mb-6 mb-md-0">
                <div class="card-body">

                <!-- Preheading -->
                <div class="text-center mb-3">
                    <span class="badge badge-pill badge-primary-soft">
                    <span class="h6 text-uppercase">Jam Kerja</span>
                    </span>
                </div>

                <!-- List -->
                <div class="d-flex">

                    <!-- Badge -->
                    {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                    </div> --}}

                    <!-- Text -->
                    <p>
                    Senin - Kamis
                    </p>

                </div>
                <div class="d-flex">

                    <!-- Badge -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-clock"></i>
                    </div>

                    <!-- Text -->
                    <p class="mb-5">
                        07.30 - 14.00 WITA
                    </p>

                    </div>
                        <!-- List -->
                        <div class="d-flex">

                            <!-- Badge -->
                            {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                            <i class="fe fe-check"></i>
                            </div> --}}

                            <!-- Text -->
                            <p>
                            Jumat
                            </p>

                        </div>
                        <div class="d-flex">

                            <!-- Badge -->
                            <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                                <i class="fe fe-clock"></i>
                            </div>

                            <!-- Text -->
                            <p class="mb-5">
                                07.30 - 13.00 WITA
                            </p>

                            </div>
                            <!-- List -->
                <div class="d-flex">

                    <!-- Badge -->
                    {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-check"></i>
                    </div> --}}

                    <!-- Text -->
                    <p>
                        Sabtu
                    </p>

                    </div>
                    <div class="d-flex">

                        <!-- Badge -->
                        <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-clock"></i>
                        </div>

                        <!-- Text -->
                        <p class="mb-5">
                        07.30 - 13.30 WITA
                        </p>

                    </div>
                </div>
            </div>

            </div>
            <div class="col-12 col-md-4">

            <!-- Card -->
            <div class="card shadow-lg mb-6 mb-md-0">
                <div class="card-body">

                <!-- Preheading -->
                <div class="text-center mb-3">
                    <span class="badge badge-pill badge-primary-soft">
                    <span class="h6 text-uppercase">Jam Pelayanan</span>
                    </span>
                </div>

                <!-- List -->
                <div class="d-flex">

                    <!-- Badge -->
                    {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                    </div> --}}

                    <!-- Text -->
                    <p>
                    Senin - Kamis
                    </p>

                </div>
                <div class="d-flex">

                    <!-- Badge -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-clock"></i>
                    </div>

                    <!-- Text -->
                    <p class="mb-5">
                        07.30 - 14.00 WITA
                    </p>

                    </div>
                        <!-- List -->
                        <div class="d-flex">

                            <!-- Badge -->
                            {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                            <i class="fe fe-check"></i>
                            </div> --}}

                            <!-- Text -->
                            <p>
                            Jumat
                            </p>

                        </div>
                        <div class="d-flex">

                            <!-- Badge -->
                            <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                                <i class="fe fe-clock"></i>
                            </div>

                            <!-- Text -->
                            <p class="mb-5">
                                07.30 - 14.00 WITA
                            </p>

                            </div>
                            <!-- List -->
                <div class="d-flex">

                    <!-- Badge -->
                    {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-check"></i>
                    </div> --}}

                    <!-- Text -->
                    <p>
                        Sabtu
                    </p>

                    </div>
                    <div class="d-flex">

                        <!-- Badge -->
                        <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-clock"></i>
                        </div>

                        <!-- Text -->
                        <p class="mb-5">
                        07.30 - 14.00 WITA
                        </p>

                    </div>
                </div>
            </div>

            </div>
            <div class="col-12 col-md-4">

            <!-- Card -->
            <div class="card shadow-lg mb-6 mb-md-0">
                <div class="card-body">

                <!-- Preheading -->
                <div class="text-center mb-3">
                    <span class="badge badge-pill badge-primary-soft">
                    <span class="h6 text-uppercase">Jam Besuk</span>
                    </span>
                </div>

                <!-- List -->
                <div class="d-flex">

                    <!-- Badge -->
                    {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                    </div> --}}

                    <!-- Text -->
                    <p>
                    Senin - Kamis
                    </p>

                </div>
                <div class="d-flex">

                    <!-- Badge -->
                    <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-clock"></i>
                    </div>

                    <!-- Text -->
                    <p class="mb-5">
                        07.30 - 14.00 WITA
                    </p>

                    </div>
                        <!-- List -->
                        <div class="d-flex">

                            <!-- Badge -->
                            {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                            <i class="fe fe-check"></i>
                            </div> --}}

                            <!-- Text -->
                            <p>
                            Jumat
                            </p>

                        </div>
                        <div class="d-flex">

                            <!-- Badge -->
                            <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                                <i class="fe fe-clock"></i>
                            </div>

                            <!-- Text -->
                            <p class="mb-5">
                                07.30 - 14.00 WITA
                            </p>

                            </div>
                            <!-- List -->
                <div class="d-flex">

                    <!-- Badge -->
                    {{-- <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-check"></i>
                    </div> --}}

                    <!-- Text -->
                    <p>
                        Sabtu
                    </p>

                    </div>
                    <div class="d-flex">

                        <!-- Badge -->
                        <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                        <i class="fe fe-clock"></i>
                        </div>

                        <!-- Text -->
                        <p class="mb-5">
                        07.30 - 14.00 WITA
                        </p>

                    </div>
                </div>
            </div>

            </div>
        </div> <!-- / .row -->
        </div> <!-- / .container -->
</section>

{{-- <section class="py-6 py-md-6">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <!-- Image -->
            <img src="/assets/images/aboutme.png" alt="..." class="img-fluid mb-6 mb-md-0 rounded">

        </div>
        <div class="col-12 col-md-7 col-lg-6 order-md-1">

            <!-- Heading -->
            <h2>
            Tentang Kami. <br>
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6">
            UPT Puskesmas Bajoe adalah Puskesmas kategori perkotaan Berdasarkan Karakterisitik wilayah kerja
            Wilayah kerja Puskesmas Bajoe meliputi 8 Kelurahan dan 6 Kelurahan berbatasan langsung dengan laut dan 2 lainnya berada didaratan/persawahan.
            Luas wilayah keseluruhan 48,88 km2.
            </p>

        </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> --}}

{{-- <section class="py-6 py-md-6">
    <div class="container rounded py-10 px-10" style="background-color: #f8faff">
      <div class="row align-items-stretch">
        <div class="col-12 col-md-5">

          <!-- Blockquote -->
          <blockquote class="blockquote text-center">

            <!-- Logo -->
            <div class="text-center mb-3">
                <span class="badge badge-pill badge-primary-soft">
                <span class="h6 text-uppercase">VISI</span>
                </span>
            </div>

            <!-- Text -->
            <p class="mb-5 mb-md-7">
              Terciptanya Pelayanan Kesehatan yang Prima, Adil, dan Merata Menuju Terwujudnya Masyarakat yang Sehat, Cerdas, dan Sejahtera.
            </p>

          </blockquote>

        </div>
        <div class="col-12 col-md-1 border-right my-n8 my-md-n8 d-none d-md-block"></div>
        <div class="col-12 col-md-5 offset-md-1">

          <!-- Blockquote -->
          <blockquote class="blockquote text-center">

            <!-- Logo -->
            <div class="text-center mb-3">
                <span class="badge badge-pill badge-primary-soft">
                <span class="h6 text-uppercase">MISI</span>
                </span>
            </div>

            <!-- Text -->
            <p class="mb-5 mb-md-7 text-justify">
              1. Menyelenggarakan upaya kesehatan meliputi kegiatan promotif, preventif, kuratif, dan rehabilitative secara berkesinambungan. <br>
              2. Menyelenggarakan upaya pelayanan kesehatan secara profesional dan bertanggungjawab sesuai standar mutu. <br>
              3. Mengembangkan usaha kesehatan inovatif sesuai dengan sumber daya yang dimiliki dan berorientasi pada kebutuhan masyarakat.<br>
              4. Memberdayakan masyarakat di bidang kesehatan agar terwujud masyarakat sehat yang mandiri. <br>
            </p>


          </blockquote>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> --}}
<section class="pt-7 pt-md-10">
    <div class="container">
      <div class="row">
        <div class="col-12">

            <h2 class="font-weight-bold">
                Informasi Pengunjung <br>
              </h2>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12 col-md-6 d-flex">

          <!-- Card -->
          <div class="card mb-6 shadow-light-lg lift lift-lg">

            <!-- Image -->
            <a class="card-img-top" href="#!">

              <!-- Image -->
              <img src="assets/images/hakwajib.png" alt="..." class="card-img-top">

            </a>

            {{-- <!-- Body -->
            <a class="card-body" href="#!">

              <!-- Heading -->
              <h3>
                Greece Is Having A Tech Renaissance.
              </h3>

              <!-- Text -->
              <p class="mb-0 text-muted">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam. Fusce pellentesque faucibus lorem at viverra. Integer at feugiat odio. In placerat euismod risus proin erat purus.
              </p>

            </a> --}}

            <!-- Meta -->
            <a class="card-meta mt-auto" href="#!">

              <!-- Divider -->
              <hr class="card-meta-divider">

              <!-- Avatar -->
              <div class="avatar avatar-sm mr-2">
                <img src="assets/images/tata-tertib.png" alt="..." class="avatar-img rounded-circle">
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
              <img src="assets/images/tata-tertib.png" alt="..." class="card-img-top" style="max-height:675px;">

            </a>

            {{-- <!-- Body -->
            <a class="card-body" href="#!">

              <!-- Heading -->
              <h3>
                Is Failing Actually Bad for Business?
              </h3>

              <!-- Text -->
              <p class="mb-0 text-muted">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam. Fusce pellentesque faucibus lorem at viverra. Integer at feugiat odio. In placerat euismod risus proin erat purus.
              </p>

            </a> --}}

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
      </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- CASE STUDIES
    ================================================== -->
    <section class="pt-6 pt-md-6">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1">

                <!-- Heading -->
                <h2 class="font-weight-bold">
                    Pelayanan Kami <br>
                  </h2>

            </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

      <!-- CASE STUDIES (CAROUSEL)
      ================================================== -->
      <section class="py-6 py-md-6">
        <div class="container">
          <div class="row">
            <div class="col-12">

              <!-- Flickity -->
              <div class="flickity-viewport-visible pt-2 pb-9" data-flickity='{"cellAlign": "left", "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "contain": true}'>
                <div class="col-12 col-md-5 col-lg-4">

                  <!-- Card -->
                  <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #FF5A5F;width:100%">
                    <div class="card-body text-center">

                      <!-- Text -->
                      <img class="mb-4" src="assets/images/icon/first-aid-kit.png" alt="" style="max-width: 40px">
                      <p class=" mb-5">
                        Penanggungjawab UKM esensial dan keperawatan kesehatan masyarakat
                      </p>

                      <!-- Link -->
                      <a href="#!" style="color: #FF5A5F;">Selengkapnya</a>

                    </div>
                  </div>

                </div>
                <div class="col-12 col-md-5 col-lg-4">

                  <!-- Card -->
                  <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #B81D24;">
                    <div class="card-body text-center">

                      <!-- Text -->
                      <img class="mb-4" src="assets/images/icon/pharmacist.png" alt="" style="max-width: 40px">
                      <p class=" mb-5">
                        Penanggungjawab UKM Pengembangan Membawahi upaya pengembangan yang dilakukan Puskesmas
                      </p>

                      <!-- Link -->
                      <a href="#!" style="color: #B81D24;">Selengkapnya</a>

                    </div>
                  </div>

                </div>
                <div class="col-12 col-md-5 col-lg-4">

                  <!-- Card -->
                  <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #0081C9;">
                    <div class="card-body text-center">
                      <!-- Text -->
                      <img class="mb-4" src="assets/images/icon/medical-invoice.png" alt="" style="max-width: 40px">
                      <p class=" mb-5">
                        Penanggungjawab UKP, kefarmasian, dan laboratorium
                      </p>

                      <!-- Link -->
                      <a href="#!" style="color: #0081C9;">Selengkapnya</a>

                    </div>
                  </div>

                </div>
                <div class="col-12 col-md-5 col-lg-4">

                  <!-- Card -->
                  <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #6772E5;">
                    <div class="card-body text-center">
                      <!-- Text -->
                      <img class="mb-4" src="assets/images/icon/stretcher.png" alt="" style="max-width: 40px">
                      <p class=" mb-5">
                        Penanggungjawab jaringan pelayanan Puskesmas dan jejaring fasilitas pelayanan kesehatan
                      </p>

                      <!-- Link -->
                      <a href="#!" style="color: #6772E5;">Selengkapnya</a>

                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      {{-- <section class="py-6 py-md-6">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-6 img-skewed img-skewed-right">

              <!-- Code -->
              <div class="card rounded-lg bg-black mb-6 mb-md-0 img-skewed-item screenshot">
                <div class="card-header border-white-10">

                  <!-- Controls -->
                  <div class="d-flex">
                    <span class="bg-danger rounded-circle" style="width: 10px; height: 10px;"></span>
                    <span class="bg-warning rounded-circle ml-1" style="width: 10px; height: 10px;"></span>
                    <span class="bg-success rounded-circle ml-1" style="width: 10px; height: 10px;"></span>
                  </div>

                </div>
                <div class="card-body">

                  <!-- Code -->
                  <code class="highlight" data-toggle="typed" data-options='{"backSpeed":2, "strings": ["&gt;&nbsp;$&nbsp;npm&nbsp;install<br/><span class=\"text-success\">Everything&nbsp;is&nbsp;installed</span><br/><br/>&gt;&nbsp;$&nbsp;gulp<br/><span class=\"text-success\">scss&nbsp;watching</span><br/><span class=\"text-success\">LiveReload&nbsp;started</span><br/><span class=\"text-success\">Opening&nbsp;localhost:3000</span><br/><br/>&gt;&nbsp;$&nbsp;that&#x2019;s&nbsp;it<br/><span class=\"text-success\">Yup,&nbsp;that&#x2019;s&nbsp;it.</span>"]}' style="min-height: 183px;"></code>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-5">

              <!-- Heading -->
              <h2>
                Statistik Laporan Survey Kepuasan Masyarakat
              </h2>

              <!-- Text -->
              <p class="font-size-lg text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vehicula auctor ornare. Nulla non ullamcorper tellus.
              </p>

              <!-- Link -->
              <a class="font-weight-bold text-decoration-none" href="#!">
                View our API <i class="fe fe-arrow-right ml-3"></i>
              </a>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section> --}}

      <section class="py-6 py-md-6">
        <div class="container">
            <div class="row align-items-center mb-8">
                <div class="col-12 col-md">

                    <!-- Heading -->
                    <h2 class="font-weight-bold mb-0">
                        Berita Terbaru <br>
                    </h2>

                  </div>
                  <div class="col-12 col-md-auto">

                    <!-- Button -->
                    <a href="#!" class="btn btn-sm btn-outline-gray-300 d-none d-md-inline">
                      Selengkapnya
                    </a>

                  </div>
                {{-- <div class="col-12 col-md-7 col-lg-6 order-md-1">
                    <!-- Heading -->
                    <h2 class="font-weight-bold">
                        Berita Terbaru <br>
                    </h2>
                </div> --}}
            </div> <!-- / .container -->
            <div class="row">
                <div class="col-12 col-md-4" data-aos="fade-up">

                <!-- Card -->
                <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

                    <!-- Image -->
                    <img src="assets/img/photos/photo-4.jpg" alt="..." class="card-img-top">

                    <!-- Shape -->
                    <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                    </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body position-relative">

                    <!-- Badge -->
                    <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                        <span class="badge badge-pill badge-success">
                        <span class="h6 text-uppercase">14 Juli 2021</span>
                        </span>
                    </div>

                    <!-- Heading -->
                    <h3>
                        Shared Coworking
                    </h3>

                    <!-- Text -->
                    <p class="text-muted">
                        Open seating is available weekdays from 7am - 7pm and weekends from 9am - 5pm.
                    </p>

                    </div>

                </div>

                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

                <!-- Card -->
                <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

                    <!-- Image -->
                    <img src="assets/img/photos/photo-5.jpg" alt="..." class="card-img-top">

                    <!-- Shape -->
                    <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                    </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body position-relative">

                    <!-- Badge -->
                    <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                        <span class="badge badge-pill badge-warning">
                        <span class="h6 text-uppercase">$99/mo</span>
                        </span>
                    </div>

                    <!-- Heading -->
                    <h3>
                        Designated Desk
                    </h3>

                    <!-- Text -->
                    <p class="text-muted">
                        A personal space to leave your computer, monitor, and supplies with unlimited access.
                    </p>

                    </div>

                </div>

                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">

                <!-- Card -->
                <div class="card shadow-light-lg lift lift-lg">

                    <!-- Image -->
                    <img src="assets/img/photos/photo-6.jpg" alt="..." class="card-img-top">

                    <!-- Shape -->
                    <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                    </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body position-relative">

                    <!-- Badge -->
                    <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                        <span class="badge badge-pill badge-success">
                        <span class="h6 text-uppercase">$399/mo</span>
                        </span>
                    </div>

                    <!-- Heading -->
                    <h3>
                        Private Offices
                    </h3>

                    <!-- Text -->
                    <p class="text-muted">
                        Need a private space? We have all sizes of offices from 400² ft. available up to 3100² ft.
                    </p>

                    </div>

                </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      {{-- <section class="pt-6 pt-md-6">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">

              <!-- Map (mobile) -->
              <div class="embed-responsive embed-responsive-1by1 d-md-none">
                <div class="embed-responsive-item" data-toggle="map" data-options='{"center": [-118.244615, 34.052979], "zoom": 12}'></div>
              </div>

              <!-- Map -->
              <div class="position-relative h-100 vw-50 float-right d-none d-md-block
              ">

                <!-- Map -->
                <div class="w-100 h-100" data-toggle="map" data-options='{"center": [-118.244615, 34.052979], "zoom": 12}'></div>

                <!-- Shape -->
                <div class="shape shape-right shape-fluid-y svg-shim text-white">
                  <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 386V0h100v1544H50v-386L0 386z" fill="currentColor"/></svg>
                </div>

              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">

              <!-- Heading -->
              <h2>
                Over <span data-toggle="countup" data-from="100" data-to="400" data-aos data-aos-id="countup:in">100</span> locations spread <br>
                <span class="text-success">across the entire planet</span>.
              </h2>

              <!-- Text -->
              <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
                We picked our office locations to maximize our availability to you! We try to keep locations in every major city, as well as common vacatino destinations in case you need to sneak work in on the side.
              </p>

              <!-- Stats -->
              <div class="d-flex">
                <div class="pr-5">
                  <h3 class="text-success mb-0">
                    125
                  </h3>
                  <p class="text-gray-700 mb-0">
                    Countries
                  </p>
                </div>
                <div class="border-left"></div>
                <div class="px-5">
                  <h3 class="text-success mb-0">
                    312
                  </h3>
                  <p class="text-gray-700 mb-0">
                    Cities
                  </p>
                </div>
                <div class="border-left"></div>
                <div class="pl-5">
                  <h3 class="text-success mb-0">
                    40,000
                  </h3>
                  <p class="text-gray-700 mb-0">
                    Desks
                  </p>
                </div>
              </div>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section> --}}
      <!-- INTEGRATION
      ================================================== -->
      <section class="py-6 py-md-6">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">

              <!-- Preheading -->
              <h6 class="text-uppercase text-gray-500 font-weight-bold">
                Seamless integration
              </h6>

              <!-- Heading -->
              <h1 class="font-weight-bold">
                Data transfer is just a few clicks.
              </h1>

              <!-- Text -->
              <p class="font-size-lg text-muted mb-7 mb-md-9">
                If we're no longer the right solution for you, we'll allow you to export and take your data at anytime for any reason.
              </p>

            </div>
          </div> <!-- / .row -->
          <div class="row no-gutters mb-7 mb-md-9">
            <div class="col-12 col-md-4 text-center">

              <div class="row mb-5">
                <div class="col">

                  <!-- Placeholder -->

                </div>
                <div class="col-auto">

                  <!-- Icon -->
                  <div class="icon text-primary mb-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M12 11a4 4 0 110-8 4 4 0 010 8z" fill="#335EEA" opacity=".3"/><path d="M3 20.2c.388-4.773 4.262-7.2 8.983-7.2 4.788 0 8.722 2.293 9.015 7.2.012.195 0 .8-.751.8H3.727c-.25 0-.747-.54-.726-.8z" fill="#335EEA"/></g></svg>
                  </div>

                </div>
                <div class="col">

                  <!-- Divider -->
                  <hr class="d-none d-md-block">

                </div>
              </div> <!-- / .row -->

              <!-- Headin -->
              <h3 class="font-weight-bold">
                Create your account
              </h3>

              <!-- Text -->
              <p class="text-muted mb-6 mb-md-0">
                Our sign up is dead simple. We only require your basic company information and what type of data storage you want.
              </p>

            </div>
            <div class="col-12 col-md-4 text-center">

              <div class="row mb-5">
                <div class="col">

                  <!-- Divider -->
                  <hr class="d-none d-md-block">

                </div>
                <div class="col-auto">

                  <!-- Icon -->
                  <div class="icon text-primary mb-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.747 13.043A6 6 0 1114.811 6.5h2.439a3.75 3.75 0 010 7.5h-9c-.962 0-1.84-.362-2.503-.957z" fill="#335EEA" opacity=".3"/><path d="M9.032 19.492h1.956V21.5a.5.5 0 00.5.5h1.024a.5.5 0 00.5-.5v-2.008h1.956a.5.5 0 00.382-.823l-2.968-3.505a.5.5 0 00-.764 0L8.65 18.669a.5.5 0 00.382.823z" fill="#335EEA"/></g></svg>
                  </div>

                </div>
                <div class="col">

                  <!-- Divider -->
                  <hr class="d-none d-md-block">

                </div>
              </div> <!-- / .row -->

              <!-- Headin -->
              <h3 class="font-weight-bold">
                Upload your data
              </h3>

              <!-- Text -->
              <p class="text-muted mb-6 mb-md-0">
                We support bulk uploading via SQL, integrations with most data storage products, or you can use our API.
              </p>

            </div>
            <div class="col-12 col-md-4 text-center">

              <div class="row mb-5">
                <div class="col">

                  <!-- Divider -->
                  <hr class="d-none d-md-block">

                </div>
                <div class="col-auto">

                  <!-- Icon -->
                  <div class="icon text-primary mb-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M8 7a1 1 0 110-2h8a4 4 0 110 8H8a2 2 0 100 4h9a1 1 0 010 2H8a4 4 0 110-8h8a2 2 0 100-4H8z" fill="#335EEA" opacity=".3"/><path d="M9.707 8.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 1.414L7.414 6l2.293 2.293zM14.293 20.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 00-1.414 1.414L16.586 18l-2.293 2.293z" fill="#335EEA"/></g></svg>
                  </div>

                </div>
                <div class="col">

                  <!-- Placeholder -->

                </div>
              </div> <!-- / .row -->

              <!-- Headin -->
              <h3 class="font-weight-bold">
                Choose where to transfer
              </h3>

              <!-- Text -->
              <p class="text-muted mb-0">
                Simply select where you'd like to transfer your data and we'll being the process of migrating it instantly.
              </p>

            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-12">

              <!-- Text -->
              <p class="font-size-sm text-center text-gray-500 mb-0">
                * Some integrations require a custom API
              </p>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>



      <!-- SHAPE
      ================================================== -->
      {{-- <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
          <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
        </div>
      </div> --}}

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
