function storeUser() {
	//Build an object which is going to be stored
	var userObject = {};

	userObject.username = document.getElementById("inputUsername").value;
	userObject.email = document.getElementById("inputEmail").value;
	userObject.password = document.getElementById("inputPassword").value;
	userObject.passwordConfirm = document.getElementById("inputPasswordConfirm").value;
	userObject.mobileNumber = document.getElementById("inputNumber").value;
	userObject.score = 0;

	//Matches passwords 
	if (userObject.password !== userObject.passwordConfirm) {
		Warning.innerHTML = "";
		document.getElementById("Warning").innerHTML = "Your password doesn't match.";	
		return false;
	}

	//No empty fields
	if (userObject.username === "") {
		document.getElementById("Warning").innerHTML = "Please enter your username!";
		return false;
	} 
	
	if (userObject.email === "" ) {
		document.getElementById("Warning").innerHTML = "Please enter your email!";
		return false;
	} 

	if (userObject.password === "") {
		document.getElementById("Warning").innerHTML = "Please enter your password!";
		return false;
	} 

	if (userObject.passwordConfirm === "") {
		document.getElementById("Warning").innerHTML = "Please confirm your password!";
		return false;
	} 

	if (userObject.mobileNumber === "") {
		document.getElementById("Warning").innerHTML = "Please enter your mobile number!";
		return false;
	}

	localStorage[userObject.email] = JSON.stringify(userObject);

	document.getElementById("Warning").innerHTML = "";
	document.getElementById("Result").innerHTML = "Success! You have registered your account.";
	return true;
	}

	function validate() {
		let username = document.getElementById("inputUsername").value;
		let password = document.getElementById("inputPassword").value;
		let feedback = document.getElementById("Warning");

		let strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
		let mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
		
		if(strongRegex.test(password)) {
			feedback.innerHTML = "Strong password";
			return false;
		}
		else {
			feedback.innerHTML = "Weak password. Your password must be atleast 8 characters long and must include atleast one capital letter, number and a special character.";
		}
		storeUser();
		
		return false;
	}