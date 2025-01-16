<?php
  // Include the navbar and footer functions
  include('navbar-footer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lessons - RhythmWave</title>
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
    <h1 class="text-center mb-5">Lessons</h1>

    <section>
      <h2 class="section-heading">Learn New Techniques</h2>
      <p>
        Explore our comprehensive library of lessons on various instruments and music theory. Whether you're a beginner or an expert, we have lessons suited for all levels.
      </p>
      <p>
        Our lessons cover a wide range of topics including music theory, scales, chords, improvisation, and more.
      </p>

      <!-- Lessons Resources (Example) -->
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Guitar-Lesson.jpg" class="card-img-top" alt="Guitar Lesson" />
            <div class="card-body">
              <h5 class="card-title">Guitar Lesson</h5>
              <p class="card-text">Step-by-step guitar lessons for beginners, intermediate, and advanced players.</p>
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Piano-Lesson.jpg" class="card-img-top" alt="Piano Lesson" />
            <div class="card-body">
              <h5 class="card-title">Piano Lesson</h5>
              <p class="card-text">Explore our piano lessons and learn to play your favorite songs.</p>
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="../Photos/Voice-Lesson.jpg" class="card-img-top" alt="Voice Lesson" />
            <div class="card-body">
              <h5 class="card-title">Voice Lesson</h5>
              <p class="card-text">Develop your vocal skills with our expert-led voice lessons.</p>
              <a href="#" class="btn btn-primary">Start Learning</a>
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
