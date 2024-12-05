<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="CSS/sign.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="Songs/wiru sisu geethaya  lyrics.mp3"
        >~Let Music Move You~</a
      >
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="Index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Learn">Learn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Signup Form -->
    <section class="box">
      <div class="">
        <div class="form-content">
          <header class="signhead">Sign up</header>
          <form action="#">
            <div class="field input-field">
              <input
                type="email"
                placeholder="University Email"
                class="input"
              />
            </div>
            <div class="field input-field">
              <input
                type="password"
                placeholder="Create password"
                class="password"
              />
            </div>
            <div class="field input-field">
              <input
                type="password"
                placeholder="Confirm password"
                class="password"
              />
              <i class="bx bx-hide eye-icon"></i>
            </div>
            <div class="field button-field">
              <button>Sign up</button>
            </div>
          </form>
          <div class="form-link">
            <span
              >Already have an account?
              <a href="Login.html" class="link login-link">Log In</a></span
            >
          </div>
        </div>
        <div class="line"></div>
        <div class="media-options">
          <a href="#" class="field facebook">
            <i class="bx bxl-facebook facebook-icon"></i>
            <span>Login with Facebook</span>
          </a>
        </div>
        <div class="media-options">
          <a href="#" class="field google">
            <img src="images/google.png" alt="Google" class="google-img" />
            <span>Login with Google</span>
          </a>
        </div>
      </div>
    </section>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
