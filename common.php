<?php
// Sets the title for each page, links the style sheet, bootstrap and favicon.
function outputHeader($title) {
  echo '<!DOCTYPE html>','<html lang="en"> ','<head>','<meta charset="utf-8">',
  '<meta name="viewport"','content="width=device-width, initial-scale=1, shrink-to-fit=no">','<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">', 
  '<link rel="stylesheet" type="text/css" href="/css/style.css">','<link rel="shortcut icon" href="images/favicon.ico" type="image/icon"/>','</head>', '<body>';
  echo '<title>' . $title . '</title>';
}

//  Navigation bar inside a function that is going to print.
function outputNav() {
  print '
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="../images/logo.svg" width="55" height="45" alt="Site logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="play.php">Play</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="highscores.php">Highscores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="howtoplay.php">How to Play</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  ';
}

// Prints out the footer with rights and social links
function outputFooter() {
  print '
    <!-- Footer -->
    <div class="row">
      <div class="footer">
        <div class="col-md-6">
          <p id="footerrights">&copy; All rights reserved 2019-2020 | Dens Sevcuks</p>
        </div>
        <div class="col-md-6">
          <a href="http://www.facebook.com"><img src="../images/facebook.svg" id="social" /></a>
          <a href="http://www.twitter.com"><img src="../images/twitter.svg" id="social" /></a>
          <a href="http://www.youtube.com"><img src="../images/youtube.svg" id="social" /></a>
        </div>
      </div>
    </div>
  ';
}

// Neccessary bootstrap/javascript libraries and closing tags for the page
function outputClosing() {
  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>',
  '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>',
  '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>',
  '</body>', '</html>';
}