function validateEmail() {
    var emailInput = document.getElementById("email");
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(emailInput.value.trim())) {
        alert("Please enter a valid email address.");
        return false;
    }
}
