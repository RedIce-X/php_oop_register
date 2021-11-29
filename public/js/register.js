// Input fields
let username = document.getElementById("username");
let email = document.getElementById("email");
let password = document.getElementById("password");
let cpassword = document.getElementById("cpassword");

// Error Divs
let username_error = document.getElementById("username-error");
let email_error = document.getElementById("email-error");
let password_error = document.getElementById("password-error");
let cpassword_error = document.getElementById("cpassword-error");

function validateForm() {
  if (username.value === 0) {
    username_error.innerHTML = "Username is required";
  }
  if (password.value === "") {
  }
}
