<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("Home");
  outputNav();
?>

<!-- Import javascript for loginform -->
<script src="js/login.js"></script>

<!-- Import javascript for highscores -->
<script src="js/highscores.js"></script>

<!-- Play as a guest, login form, register and how to play button -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="row justify-content-center landinglogin">
        <div class="col-md-6 col-sm-12">
            <button type="button" class="btn btn-outline-secondary guestbtnindex col-md-12 disabled">Play as a guest</button>
            <form class="form-container" onsubmit="return false">
              <p><b>Please login to your account</b></p>
              <div class="form-group">
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
              </div>
            <button onclick="login()" type="submit" class="btn btn-primary lgnbtn">Login</button>
            </form>
            <p id="loginFailed" style="color:red;"></p>
            <a href="register.php" class="btn btn-outline-secondary regbtnindex col-md-12">Register</a>
            <a href="howtoplay.php" class="btn btn-outline-secondary howbtnindex col-md-12">How to Play</a>
        </div>
      </div>
    </div>

    <!-- High scores table -->
    <div class="col-md-6 col-sm-12">
      <div id="indextable">
        <h2 id="highscoretitle">High scores</h2>
        <table class="table table-hover">
          <tr>
            <th scope="position">#</th>
            <th scope="username">Username</th>
            <th scope="score">Score</th>
          </tr>
          <tr>
            <th>1</th>
            <td>Username</td>
            <td>Score</td>
          </tr>
          <tr>
            <th>2</th>
            <td>Username</td>
            <td>Score</td>
          </tr>
          <tr>
            <th>3</th>
            <td>Username</td>
            <td>Score</td>
          </tr>
          <tr>
            <th>4</th>
            <td>Username</td>
            <td>Score</td>
          </tr>
          <tr>
            <th>5</th>
            <td>Username</td>
            <td>Score</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
	
<?php
	//Outputs the footer and closing tags
	outputFooter();
	outputClosing();
?>