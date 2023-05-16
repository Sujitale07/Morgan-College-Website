function validateForm() {
  var email = document.getElementById("login-email").value;
  var password = document.getElementById("login-password").value;

  if (email == "") {
    document.querySelector('.field.email .error').style.display = "block";
    return false;
  } else {
    document.querySelector('.field.email .error').style.display = "none";
  }

  if (password == "") {
    document.querySelector('.field.password .error').style.display = "block";
    return false;
  } else if (password != "admin123" || email != "sujitale01@gmail.com") {
    document.querySelector('.error-txt').innerHTML = "<p>Incorrect email or password</p>";
    document.querySelector('.error').style.display = "block";
    return false;
  } else {
    document.querySelector('.field.password .error').style.display = "none";
  }

  // If email and password are correct and not blank, submit the form and load the student.html page
  document.getElementById("login-form").action = "student.html";
  document.getElementById("login-form").submit();
}
