function validateForm() {
  let isValid = true;



  // First name validation
  let fnamevar = document.forms["admin"]["fname"].value;
  if (fnamevar === "") {
      document.getElementById("ferror").innerHTML = "First name is required";
      isValid = false;
  }

  // Last name validation
  let lnamevar = document.forms["admin"]["lname"].value;
  if (!/^[A-Za-z]+$/.test(lnamevar)) {
      document.getElementById("lerror").innerHTML = "Last name must contain only letters";
      isValid = false;
  }

  // Gender validation
  let gendervar = document.getElementsByName("gender");
  let selectedGender = false;
  for (let i = 0; i < gendervar.length; i++) {
      if (gendervar[i].checked) {
          selectedGender = true;
          break;
      }
  }
  if (!selectedGender) {
      document.getElementById("gerror").innerHTML = "Please select a gender";
      isValid = false;
  }
  let email = document.forms["admin"]["email"].value;
  let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    document.getElementById("mailerror").innerHTML = "Please enter a valid email address";
    isValid = false;
  }

  let username = document.forms["admin"]["username"].value.trim();
  let usernamePattern = /^[\s]{2,}$/;
  if (!usernamePattern.test(username)) {
    document.getElementById("unameerror").innerHTML = "Username must be at least 2 characters with no spaces";
    isValid = false;
  }

  return isValid;
}
