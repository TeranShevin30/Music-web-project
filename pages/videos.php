<?php
  // Include the navbar and footer functions
  include('navbar-footer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Videos - RhythmWave</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Optional: Material Icons for icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!-- Custom styles if necessary -->
  <style>
    .section-heading {
      margin-top: 40px;
      margin-bottom: 20px;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <!-- Call the navbar function -->
  <?php navbar(); ?>

  <div class="container mt-5 pt-5">
    <h1 class="text-center mb-5">Music Tutorials and Performances</h1>

    <section>
      <h2 class="section-heading">Explore Our Video Collection</h2>
      <p>
        Watch video tutorials, music performances, and artist showcases. Learn new techniques or simply enjoy live performances from talented musicians.
      </p>

      <!-- Video Resources (Example) -->
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Guitar-Video.jpg" class="card-img-top" alt="Guitar Tutorial" />
            <div class="card-body">
              <h5 class="card-title">Guitar Tutorial</h5>
              <p class="card-text">Learn how to play your favorite guitar songs with step-by-step video tutorials.</p>
              <!-- Example of embedded YouTube video -->
              <a href="https://www.youtube.com/watch?v=someguitarvideo" target="_blank" class="btn btn-primary">Watch Video</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Piano-Video.jpg" class="card-img-top" alt="Piano Tutorial" />
            <div class="card-body">
              <h5 class="card-title">Piano Tutorial</h5>
              <p class="card-text">Explore our piano tutorials and learn to play both classical and modern pieces.</p>
              <!-- Example of embedded YouTube video -->
              <a href="https://www.youtube.com/watch?v=somepianovideo" target="_blank" class="btn btn-primary">Watch Video</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Drums-Video.jpg" class="card-img-top" alt="Drums Tutorial" />
            <div class="card-body">
              <h5 class="card-title">Drums Tutorial</h5>
              <p class="card-text">Master drumming techniques with tutorials and lessons by expert drummers.</p>
              <!-- Example of embedded YouTube video -->
              <a href="https://www.youtube.com/watch?v=somedrumsvideo" target="_blank" class="btn btn-primary">Watch Video</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <h2 class="section-heading">Live Performances</h2>
      <p>
        Enjoy watching live performances from talented artists across various music genres.
      </p>

      <!-- Performance Video Resources (Example) -->
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Live-Guitar-Performance.jpg" class="card-img-top" alt="Live Guitar Performance" />
            <div class="card-body">
              <h5 class="card-title">Live Guitar Performance</h5>
              <p class="card-text">Watch an electrifying guitar performance from a live concert.</p>
              <!-- Example of embedded YouTube video -->
              <a href="https://www.youtube.com/watch?v=someguitarperformance" target="_blank" class="btn btn-primary">Watch Performance</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Live-Piano-Performance.jpg" class="card-img-top" alt="Live Piano Performance" />
            <div class="card-body">
              <h5 class="card-title">Live Piano Performance</h5>
              <p class="card-text">Watch a beautiful piano performance from a live show.</p>
              <!-- Example of embedded YouTube video -->
              <a href="https://www.youtube.com/watch?v=somepianoperformance" target="_blank" class="btn btn-primary">Watch Performance</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Live-Band-Performance.jpg" class="card-img-top" alt="Live Band Performance" />
            <div class="card-body">
              <h5 class="card-title">Live Band Performance</h5>
              <p class="card-text">Experience a live band performance featuring stunning musical arrangements.</p>
              <!-- Example of embedded YouTube video -->
              <a href="https://www.youtube.com/watch?v=somebandperformance" target="_blank" class="btn btn-primary">Watch Performance</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- Call the footer function -->
  <?php footer(); ?>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
