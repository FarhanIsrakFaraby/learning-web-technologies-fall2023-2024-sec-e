function validateForm() {
  const username = document.getElementById("username").value;
  const name = document.getElementById("name").value;
  const phone = document.getElementById("phone").value;
  const password = document.getElementById("password").value;

  // Check for empty values
  if (username === "" || password === "") {
    alert("Empty value! Please provide valid username or password.");
    return false;
  }

  // Check for additional fields if it's signup
  if (document.getElementById("name") && document.getElementById("phone")) {
    if (name === "" || phone === "") {
      alert("Empty value! Please provide valid name and phone number.");
      return false;
    }
  }

  return true;
}
