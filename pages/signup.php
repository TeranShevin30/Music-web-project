<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../CSS/sign.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="Songs/wiru sisu geethaya  lyrics.mp3"
        >~Let Music Move You~</a
      >
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
          <form action=" " method="POST">
            <div class="field input-field">
              <input
                type="email"
                placeholder="University Email"
                class="input"
                name="email"
              />
            </div>
            <div class="field input-field">
              <input
                type="Regno"
                placeholder="Registration number"
                class="input"
                name="regno"
              />
            </div>
            <div class="field input-field">
              <input
                type="password"
                placeholder="Create password"
                class="password"
                name="password"
              />
            </div>
            <div class="field input-field">
              <input
                type="password"
                placeholder="Confirm password"
                class="password"
                name="confpassword"
              />
              <i class="bx bx-hide eye-icon"></i>
            </div>
            <div class="field button-field">
              <center><input 
              
              type="submit"
              name="submit"
              value="Sign up"></center>
              
            </div>
          </form>
          <?php

      require_once 'functions/dbconf.php';


      try {
        
        if(isset($_POST['submit'])){
          $email = $_POST['email'];
          $regno = $_POST['regno'];
          $pword = $_POST['password'];
          $confpword = $_POST['confpassword'];

          if($pword == $confpword){
            $hash = password_hash($pword,PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (email,regno,password) VALUES ('$email','$regno','$hash')";

            $result=mysqli_query($connect,$sql);
          }
        }

      } catch (Exception $e) {
        // echo "<script>
        //   document.alert("Error")
        // </script>";
      }

      
    
    ?>
          <div class="form-link">
            <span
              >Already have an account?
              <a href="login.php" class="link login-link">Log In</a></span
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
            <img src="../Photos/google.png" alt="Google" class="google-img" />
            <span>Login with Google</span>
          </a>
        </div>
      </div>
    </section>

    <?php
      require_once 'functions/nav.php';
      footer();
    ?>
    </div>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
