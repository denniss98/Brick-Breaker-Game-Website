window.onload = checkLogin; //Sees whether the user is already logged in

function checkLogin() {
  if (sessionStorage.loggedInUsrEmail !== undefined) {
    //Extract details of logged in user
    let usrObj = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]);
    
    //Say hello to logged in user
    document.getElementById("loginPage").innerHTML = usrObj.email + " logged in.";
  }
}

//Extracts cookies and uses them
let cookies = document.cookie;

function login() {
  //Get email address
  let email = document.getElementById("inputEmail").value;
  
  //User does not have an account
  if (localStorage[email] === undefined) {
    //Inform user that they do not have an account
    document.getElementById("loginFailed").innerHTML = "Email not recognized. Do you have an account?";
    return; //Do nothing else
  }
  else {//User has an account
    let usrObj = JSON.parse(localStorage[email]);//Convert to object
    let password = document.getElementById("inputPassword").value;
    if (password === usrObj.password) {//Successful login
      document.getElementById("loginPage").innerHTML = usrObj.email + " logged in.";
      document.getElementById("loginFailed").innerHTML = "";//Clear any login failures
      sessionStorage.loggedInUsrEmail = usrObj.email;
    }
    else {
      document.getElementById("loginFailed").innerHTML = "Password not correct. Please try again.";
    }
  }
}