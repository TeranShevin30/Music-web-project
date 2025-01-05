<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../CSS/login.css" />
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
          <!--<li class="nav-item">
            <a class="nav-link" href="#Music"></a>
          </li>-->
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
          <header class="loghead">Log In</header>
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
              <input type="password" placeholder="Password" class="password" name="password"/>
            </div>
            <div class="field button-field">
              <input type="submit" value="Log In" class="btn btn-primary" name="Login">
              <button>Log In</button>
            </div>
          </form>
          <div class="form-link">
            <span
              >Don't have an account?
              <a href="signup.php" class="link login-link">Sign In</a></span
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

        if(isset($_POST['Login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT password FROM users WHERE email='$email'";
            $result = mysqli_query($connect,$sql);

            $row = mysqli_fetch_assoc($result);

            $hash = $row['password'];
            
            if(password_verify($password,$hash)){
              echo "<script>
                      window.location.href = 'index.php'; 
                  </script>";
            }
            else{
              echo "<script></script>"
            }
          

        }


    ?>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
