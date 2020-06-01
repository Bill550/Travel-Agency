<?php
include('includes/Header.php'); 
include('includes/navbar.php');
include('includes/dbconfig.php');
?>
<!-- ================Home Banner Area =================-->
<section class="banner_area ">
  <div class="banner_inner overlay d-flex align-items-center">
    <div class="container">
      <div class="banner_content">
        <div class="page_link">
          <a href="index.php">Home</a>
          <a href="login.php">Login / Signup</a>
        </div>
        <h2>Login/Signup</h2>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<section>
  <div class="row ">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5 ">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
              aria-selected="true">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
              aria-selected="false">SIGNUP</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <!-- //////////////////////////////// Login Boday ////////////////////////////////////////////// -->
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required
                    autofocus>
                  <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                <hr class="my-4">
                <h5 class="card-title text-center">OR</h5>
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                    class="fab fa-google mr-2"></i> Sign in with Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                    class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
              </form>
            </div>
            <!-- //////////////////////////////// Login Boday ////////////////////////////////////////////// -->
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <!-- //////////////////////////////// signup Boday ////////////////////////////////////////////// -->
          <div class="card-body">
              <h5 class="card-title text-center">SignUP</h5>
              <form class="form-signin">
                <div class="form-label-group">
                  <input type="text" id="inputname" class="form-control" placeholder="Full Name" required
                    autofocus>
                  <label for="inputname">Full Name</label>
                </div>
                <div class="form-label-group">
                  <input type="text" id="inputmobile" class="form-control" placeholder="03484792005" required
                    autofocus>
                  <label for="inputmobile">Mobile Number</label>
                </div>
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required
                    autofocus>
                  <label for="inputEmail">Email address</label>
                </div>
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                    class="fab fa-google mr-2"></i> Sign in with Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                    class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
              </form>
            </div>
            <!-- //////////////////////////////// Login Boday ////////////////////////////////////////////// -->
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
  @import url('https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap');

  :root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem;
  }

  .card-signin {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  }

  .card-signin .card-title {
    font-family: 'Lato-black';
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
  }

  .card-signin .card-body {
    padding: 2rem;
  }

  .form-signin {
    width: 100%;
  }

  .form-signin .btn {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
  }

  .form-label-group {
    font-family: 'Lato-black';
    position: relative;
    margin-bottom: 1rem;
  }

  .form-label-group input {
    height: auto;
    border-radius: 2rem;
  }

  .form-label-group>input,
  .form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
  }

  .form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
  }

  .form-label-group input::-webkit-input-placeholder {
    color: transparent;
  }

  .form-label-group input:-ms-input-placeholder {
    color: transparent;
  }

  .form-label-group input::-ms-input-placeholder {
    color: transparent;
  }

  .form-label-group input::-moz-placeholder {
    color: transparent;
  }

  .form-label-group input::placeholder {
    color: transparent;
  }

  .form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
  }

  .form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
  }

  .btn-google {
    color: white;
    background-color: #ea4335;
  }

  .btn-facebook {
    color: white;
    background-color: #3b5998;
  }

  /* Fallback for Edge
-------------------------------------------------- */

  @supports (-ms-ime-align: auto) {
    .form-label-group>label {
      display: none;
    }

    .form-label-group input::-ms-input-placeholder {
      color: #777;
    }
  }

  /* Fallback for IE
-------------------------------------------------- */

  @media all and (-ms-high-contrast: none),
  (-ms-high-contrast: active) {
    .form-label-group>label {
      display: none;
    }

    .form-label-group input:-ms-input-placeholder {
      color: #777;
    }
  }
</style>

<?php
		include('includes/script.php'); 
		include('includes/Footer.php'); 
?>