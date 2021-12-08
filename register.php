<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("Register");
  outputNav();
?>

<!-- Import javascript for register form -->
<script src="js/register.js"></script>

<!-- Outputs the registration form -->
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row justify-content-center">
			<div class="col-md-4 col-sm-12 registerpage">
				<form class="form-container" name="registerForm" onsubmit="return validate()">
					<p><b>Please fill out all fields to register your account</b></p>
					<div class="form-group">
						<input type="text" class="form-control" id="inputUsername" aria-describedby="username" placeholder="Username" minlength=3 required>
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
					</div>

					<div class="form-group">
						<input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
					</div>

					<div class="form-group">
						<input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Confirm password" required>
					</div>

					<div class="form-group">
						<input type="tel" class="form-control" id="inputNumber" placeholder="Phone number" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" required> 
					</div>
						<button type="submit" onclick="storeUser()" class="btn btn-primary regstrbtn">Register</button>
						<p id="Result"></p>
						<p id="Warning" style="color: red;"></p>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
  //Outputs the footer and closing tags
  outputFooter();
  outputClosing();
?>