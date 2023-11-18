function validateForm() {
    var errors = "";

    var nameInput = document.getElementById("name").value;
    if (nameInput.trim() === "") {
        errors += "Name cannot be empty\n";
    }

    var nameWords = nameInput.split(" ");
    if (nameWords.length < 2) {
        errors += "Name must contain at least two words\n";
    }

    var nameRegex = /^[a-zA-Z.-]+$/;
    if (!nameRegex.test(nameInput)) {
        errors += "Name can only contain a-z or A-Z or dot(.) or dash(-)\n";
    }

    var emailInput = document.getElementById("email").value;
    if (emailInput.trim() === "") {
        errors += "Email cannot be empty\n";
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput)) {
        errors += "Invalid email address\n";
    }

    var genderInputs = document.getElementsByName("gender");
    var isGenderSelected = false;
    for (var i = 0; i < genderInputs.length; i++) {
        if (genderInputs[i].checked) {
            isGenderSelected = true;
            break;
        }
    }
    if (!isGenderSelected) {
        errors += "At least one gender must be selected\n";
    }

    var dobInput = document.getElementById("dob").value;
    if (dobInput.trim() === "") {
        errors += "Date of Birth cannot be empty\n";
    }

    var degreeInputs = document.getElementsByName("degree");
    var isDegreeSelected = false;
    for (var i = 0; i < degreeInputs.length; i++) {
        if (degreeInputs[i].checked) {
            isDegreeSelected = true;
            break;
        }
    }
    if (!isDegreeSelected) {
        errors += "At least one degree must be selected\n";
    }

    var bloodgroupInput = document.getElementById("bloodgroup").value;
    if (bloodgroupInput === "") {
        errors += "Blood Group must be selected\n";
    }

    var profilePicInput = document.getElementById("profilePic").value;
    if (profilePicInput.trim() === "") {
        errors += "Profile Picture cannot be empty\n";
    }

    if (errors !== "") {
        alert(errors);
        return false;
    }
}