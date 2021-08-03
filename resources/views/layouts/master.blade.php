<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Libs CSS -->
    @include('includes.styles')

    <title>Puskesmas - Cendrana</title>

  </head>
  <body class="pt-10">

    <!-- MODALS
    ================================================== -->
    <!-- Example -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Image -->
            <div class="text-center">
              <img src="./assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-3" style="width: 200px;">
            </div>

            <!-- Heading -->
            <h2 class="font-weight-bold text-center mb-1" id="modalExampleTitle">
              Schedule a demo with us
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
              We can help you solve company communication.
            </p>

            <!-- Form -->
            <form>
              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- First name -->
                  <div class="form-label-group">
                    <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                    <label for="registrationFirstNameModal">First name</label>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Last name -->
                  <div class="form-label-group">
                    <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                    <label for="registrationLastNameModal">Last name</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- Email -->
                  <div class="form-label-group">
                    <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                    <label for="registrationEmailModal">Email</label>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Password -->
                  <div class="form-label-group">
                    <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                    <label for="registrationPasswordModal">Password</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-12">

                  <!-- Submit -->
                  <button class="btn btn-block btn-primary mt-3 lift">
                    Request a demo
                  </button>

                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <!-- Signup: Horizontal  -->
    <div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row no-gutters">
              <div class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url(./assets/img/photos/photo-8.jpg);">

                <!-- Image (placeholder) -->
                <img src="./assets/img/photos/photo-8.jpg" alt="..." class="img-fluid d-md-none invisible">

                <!-- Shape -->
                <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>
                </div>

              </div>
              <div class="col-12 col-md-6">
                <div class="card-body">

                  <!-- Close -->
                  <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>

                  <!-- Heading -->
                  <h2 class="mb-0 font-weight-bold text-center" id="modalSignupHorizontalTitle">
                    Sign Up
                  </h2>

                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Simplify your workflow in minutes.
                  </p>

                  <!-- Form -->
                  <form class="mb-6">

                    <!-- Email -->
                    <div class="form-group">
                      <label class="sr-only" for="modalSignupHorizontalEmail">
                        Your email
                      </label>
                      <input type="email" class="form-control" id="modalSignupHorizontalEmail" placeholder="Your email">
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="sr-only" for="modalSignupHorizontalPassword">
                        Create a password
                      </label>
                      <input type="password" class="form-control" id="modalSignupHorizontalPassword" placeholder="Create a password">
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" type="submit">
                      Sign up
                    </button>

                  </form>

                  <!-- Text -->
                  <p class="mb-0 font-size-sm text-center text-muted">
                    Already have an account? <a href="./signin-illustration.html">Log in</a>.
                  </p>

                </div>
              </div>

            </div> <!-- / .row -->
          </div>
        </div>
      </div>
    </div>

    <!-- Signup: Vertical  -->
    <div class="modal fade" id="modalSignupVertical" tabindex="-1" role="dialog" aria-labelledby="modalSignupVerticalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card">

            <!-- Close -->
            <button type="button" class="modal-close close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Image -->
            <img src="./assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">

            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body">

              <!-- Heading -->
              <h2 class="mb-0 font-weight-bold text-center" id="modalSignupVerticalTitle">
                Sign Up
              </h2>

              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>

              <!-- Form -->
              <form class="mb-6">

                <!-- Email -->
                <div class="form-group">
                  <label class="sr-only" for="modalSignupVerticalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSignupVerticalEmail" placeholder="Your email">
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="sr-only" for="modalSignupVerticalPassword">
                    Create a password
                  </label>
                  <input type="password" class="form-control" id="modalSignupVerticalPassword" placeholder="Create a password">
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                  Sign up
                </button>

              </form>

              <!-- Text -->
              <p class="mb-0 font-size-sm text-center text-muted">
                Already have an account? <a href="./signin-illustration.html">Log in</a>.
              </p>

            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Signin: Horizontal  -->
    <div class="modal fade" id="modalSigninHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSigninHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row no-gutters">
              <div class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url(./assets/img/photos/photo-1.jpg);">

                <!-- Image (placeholder) -->
                <img src="./assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

                <!-- Shape -->
                <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>
                </div>

              </div>
              <div class="col-12 col-md-6">
                <div class="card-body">

                  <!-- Close -->
                  <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>

                  <!-- Heading -->
                  <h2 class="mb-0 font-weight-bold text-center" id="modalSigninHorizontalTitle">
                    Sign In
                  </h2>

                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Simplify your workflow in minutes.
                  </p>

                  <!-- Form -->
                  <form class="mb-6">

                    <!-- Email -->
                    <div class="form-group">
                      <label class="sr-only" for="modalSigninHorizontalEmail">
                        Your email
                      </label>
                      <input type="email" class="form-control" id="modalSigninHorizontalEmail" placeholder="Your email">
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="sr-only" for="modalSigninHorizontalPassword">
                        Enter your password
                      </label>
                      <input type="password" class="form-control" id="modalSigninHorizontalPassword" placeholder="Enter your password">
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" type="submit">
                      Sign in
                    </button>

                  </form>

                  <!-- Text -->
                  <p class="mb-0 font-size-sm text-center text-muted">
                    Don't have an account yet? <a href="./signin-illustration.html">Sign up</a>.
                  </p>

                </div>
              </div>

            </div> <!-- / .row -->
          </div>
        </div>
      </div>
    </div>

    <!-- Signup: Vertical  -->
    <div class="modal fade" id="modalSigninVertical" tabindex="-1" role="dialog" aria-labelledby="modalSigninVerticalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card">

            <!-- Close -->
            <button type="button" class="modal-close close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Image -->
            <img src="./assets/img/photos/photo-21.jpg" alt="..." class="card-img-top">

            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body">

              <!-- Heading -->
              <h2 class="mb-0 font-weight-bold text-center" id="modalSigninVerticalTitle">
                Sign In
              </h2>

              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>

              <!-- Form -->
              <form class="mb-6">

                <!-- Email -->
                <div class="form-group">
                  <label class="sr-only" for="modalSigninVerticalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSigninVerticalEmail" placeholder="Your email">
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="sr-only" for="modalSigninVerticalPassword">
                    Enter your password
                  </label>
                  <input type="password" class="form-control" id="modalSigninVerticalPassword" placeholder="Enter your password">
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                  Sign in
                </button>

              </form>

              <!-- Text -->
              <p class="mb-0 font-size-sm text-center text-muted">
                Don't have an account yet? <a href="./signin-illustration.html">Sign up</a>.
              </p>

            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Example -->
    <div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="modalPaymentTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Heading -->
            <h2 class="font-weight-bold text-center mb-1" id="modalPaymentTitle">
              Add Payment
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
              Simplify your workflow in minutes.
            </p>

            <!-- Form -->
            <form>

              <!-- Name -->
              <div class="form-group">
                <label for="modalPaymentName">Name on card</label>
                <input class="form-control" id="modalPaymentName" type="text" placeholder="First Last">
              </div>

              <!-- Name -->
              <div class="form-group">
                <label for="modalPaymentNumbber">Card number</label>
                <input class="form-control" id="modalPaymentNumbber" type="number" placeholder="4242 4242 4242 4242">
              </div>

              <!-- Name -->
              <div class="form-group">
                <label for="modalPaymentDate">Exp. Date</label>
                <input class="form-control" id="modalPaymentDate" type="text" placeholder="03/2023">
              </div>

              <!-- Submit -->
              <button class="btn btn-block btn-primary mt-3 lift">
                Add Payment Method
              </button>

            </form>

          </div>
        </div>
      </div>
    </div>


    @include('includes.navbar')


    @yield('content')

    @include('includes.scripts')


  </body>
</html>
