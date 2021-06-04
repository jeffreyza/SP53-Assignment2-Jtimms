function validateForm() {
  var name = document.forms["signupForm"]["name"].value;
  var email = document.forms["signupForm"]["email"].value;
  var consent = document.forms["signupForm"]["agree"].checked;
  var validRegexMail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var x = document.getElementById("myTopnav");
  var custard = document.forms["signupForm"]["Custard Tart"].checked;
  var apple = document.forms["signupForm"]["Apple Cake Slice"].checked;
  var randy = document.forms["signupForm"]["Randy Tart"].checked;
  var vanilla = document.forms["signupForm"]["Vanilla Slice"].checked;


  if (name == "") {
    alert("Please enter your name in the form.");
    return false;
  }
  if (email == "") {
    alert("Please enter your email in the form.");
    return false;
  }

  if(!email.match(validRegexMail)) {
    alert("You have entered an invalid email address!");
    return false;
  }
  if  ( consent == false ) {
    alert ( "Please agree to continue with signup" );
    return false;
	}
  if  (( custard == false ) && ( apple == false ) && ( randy == false ) && ( vanilla == false )) {
    alert ( "Please select at least 1 product you are interested in" );
    return false;
  }
}

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
	   x.className += " responsive";
  } else {
	   x.className = "navbar";
  }
}
