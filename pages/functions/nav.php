<?php

function navbar(){
    echo '
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
      <a class="navbar-brand" href="#">RhythmWave</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="photos.php">Photos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
          </li>
        </ul>
        <form class="d-flex ms-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">
            <span class="material-icons">Go</span>
          </button>
        </form>
      </div>
    </nav>
    ';
}

function footer(){

    echo '
    <footer class="bg-ash text-center py-4">
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
    </footer>';
}


?>