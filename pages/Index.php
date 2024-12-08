<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music Website</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/Styles.css" />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle"
    />
  </head>
  <body>
    <!--navigation bar-->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm"
    >
      <a class="navbar-brand" href="#">RhythmWave</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#Home">Home</a>
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
          <li class="nav-item">
            <a class="nav-link" href="Signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Login.php">Log In</a>
          </li>
        </ul>
        <form class="d-flex ms-3" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-primary" type="submit">
            <span class="material-icons">Go</span>
            <i class="material-symbols-outlined"></i>
          </button>
        </form>
      </div>
    </nav>
    <section id="Home">
      <nav></nav>
    </section>
    <!-- hero navigation -->
    <header
      class="hero bg-primary text-white text-center py-5"
      style="height: 45rem"
    >
      <div class="container">
        <h1 class="col">Welcome to RhythmWave</h1>
        <p>Your one-stop destination for all things music!</p>
        <a href="#" class="btn btn-light">Listen Now</a>
      </div>
    </header>

    <section class="container my-5" id="Learn">
      <h2 class="text-center mb-5">Master Your Talents</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm">
            <img src="../Photos/Singing.jpg" class="card-img-top" alt="Vocals" />
            <div class="card-body">
              <h5 class="card-title">Vocals</h5>
              <p class="card-text">
                Learn to master your singing skills with expert lessons.
              </p>
              <a href="#" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm">
            <img src="../Photos/Guitar.jpg" class="card-img-top" alt="Practices" />
            <div class="card-body">
              <h5 class="card-title">Practices</h5>
              <p class="card-text">
                Perfect your instrument skills through interactive practices.
              </p>
              <a href="#" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm">
            <img
              src="../Photos/Listening.jpeg"
              class="card-img-top"
              alt="Listening"
            />
            <div class="card-body">
              <h5 class="card-title">Listening</h5>
              <p class="card-text">
                Enhance your listening skills with a variety of music genres.
              </p>
              <a href="#" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="About">
      <div
        id="carouselExampleAutoplaying"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../Photos/Guitar.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="../Photos/Music03.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="../Photos/3D-Music.jpg" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!--Contacts-->
    <section class="description" id="Contact">
      <div class="vector">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="../Photos/P1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">President</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="../Photos/P2.webp" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This card has supporting text below as a natural lead-in to
                  additional content.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Secretary</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="../Photos/P3.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This card has even longer
                  content than the first to show that equal height action.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Treasurer</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-light text-center py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>Follow Us</h5>
            <ul class="list-unstyled">
              <li>
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
              </li>
              <li>
                <a href="https://www.instagram.com" target="_blank"
                  >Instagram</a
                >
              </li>
              <li>
                <a href="https://www.twitter.com" target="_blank">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5>Contact Us</h5>
            <ul class="list-unstyled">
              <li>Email: contact@rhythmwave.com</li>
              <li>Phone: (123) 456-7890</li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5>About Us</h5>
            <p>
              RhythmWave is an innovative online platform offering seamless
              music discovery, streaming, and social interaction. It empowers
              independent artists to share their work, while providing users
              with personalized music experiences.

              <!--RhythmWave is your ultimate destination for all things music, from
              learning to listening and beyond!-->
            </p>
          </div>
        </div>
        <hr />
        <p>&copy; 2024 RhythmWave. All Rights Reserved.</p>
      </div>
    </footer>

    <script src="../JS/Script.js"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
