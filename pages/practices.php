<?php  
      require_once 'functions/nav.php';
      navbar();
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practices - RhythmWave</title>
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
  </style>
</head>
<body>

  <!-- Call the navbar function -->
  <?php navbar(); ?>

  <div class="container mt-5 pt-5">
    <h1 class="text-center mb-5">Practices</h1>

    <section>
      <h2 class="section-heading">Perfect Your Instrument Skills</h2>
      <p>
        Improve your music skills by practicing regularly with our interactive exercises designed for all levels.
      </p>
      <p>
        We offer a range of tools and lessons to help you practice scales, chords, and techniques on various instruments such as guitar, piano, drums, and more.
      </p>

      <!-- Practice Resources (Example) -->
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Guitar-Practice.jpg" class="card-img-top" alt="Guitar Practice" />
            <div class="card-body">
              <h5 class="card-title">Guitar Practice</h5>
              <p class="card-text">Learn guitar techniques, scales, and exercises to become a master guitarist.</p>
              <a href="#" class="btn btn-primary">Start Practicing</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Piano-Practice.jpg" class="card-img-top" alt="Piano Practice" />
            <div class="card-body">
              <h5 class="card-title">Piano Practice</h5>
              <p class="card-text">Explore a range of piano exercises and learning resources for beginners and experts.</p>
              <a href="#" class="btn btn-primary">Start Practicing</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Drum-Practice.jpg" class="card-img-top" alt="Drum Practice" />
            <div class="card-body">
              <h5 class="card-title">Drum Practice</h5>
              <p class="card-text">Enhance your rhythm and coordination with our drum practice exercises.</p>
              <a href="#" class="btn btn-primary">Start Practicing</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Call the footer function -->
  <?php  
      require_once 'functions/nav.php';
      footer();
      ?>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
