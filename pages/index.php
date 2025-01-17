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
    <div>
      <?php  
      require_once 'functions/nav.php';
      navbar();
      ?>
    </div>
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
              <a href="lessons.php" class="btn btn-primary">Go</a>
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
              <a href="practices.php" class="btn btn-primary">Go</a>
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
              <a href="videos.php" class="btn btn-primary">Go</a>
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
                <h5 class="card-title">Mr.Jason</h5>
                <p class="card-text">
                Leads a strategic vision, making high-level decisions and ensuring growth, 
                development, and alignment with the mission and goals.
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
                <h5 class="card-title">Ms.Emily</h5>
                <p class="card-text">
                Handles administrative duties, including communication, 
                meeting coordination, and documentation, 
                ensuring the smooth operation of the internal processes.
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
                <h5 class="card-title">Ms.Gemili</h5>
                <p class="card-text">
                Manages the financial aspects, including budgeting, 
                accounting, and financial reporting, 
                ensuring the website operates within its financial means and resources.
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
    
    <div>
    <?php
      require_once 'functions/nav.php';

      footer();

    ?>

    </div>

    <script src="../JS/Script.js"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
