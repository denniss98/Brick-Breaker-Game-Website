<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("Login");
  outputNav();
?>

<!-- Import javascript for loginform -->
<script src="js/login.js"></script>

<!-- Outputs the login form -->
<div class="container-fluid">
  <div class="col-md-12">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-12 loginpage">
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
      </div>
    </div>
  </div>
</div>

<?php
	//Outputs the footer and closing tags
  outputFooter();
  outputClosing();
?>