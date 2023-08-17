function validateEmail(email) {
  // A simple email validation check without using regular expressions
  var atIndex = email.indexOf('@');
  var dotIndex = email.lastIndexOf('.');
  return atIndex > 0 && dotIndex > atIndex + 1 && dotIndex < email.length - 1;
}

function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirm_password = document.getElementById("confirm_password").value;
  var gender = document.getElementById("gender").value;

  if (name.trim() === "") {
    alert("Please enter your name.");
    return false;
  }

  if (email.trim() === "") {
    alert("Please enter your email address.");
    return false;
  }

  if (!validateEmail(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (password === "" || password.length < 8) {
    alert("Please enter a password that is at least 8 characters long.");
    return false;
  }

  if (confirm_password !== password) {
    alert("The passwords do not match.");
    return false;
  }

  if (gender === "") {
    alert("Please select your gender.");
    return false;
  }

  return true;
}

document.getElementById("registrationForm").addEventListener("submit", function(event) {
  event.preventDefault();
  if (validateForm()) {
    var data = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      password: document.getElementById("password").value,
      confirm_password: document.getElementById("confirm_password").value,
      gender: document.getElementById("gender").value,
    };

    // Simulate successful registration
    // In a real application, you'd perform an AJAX request to the server here.
    setTimeout(function() {
      document.getElementById("responseMessage").innerText = "You have successfully registered.";
    }, 1000);
  }
});