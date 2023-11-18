function validateName() {
    var nameInput = document.getElementById("name").value.trim();

    if (nameInput === "") {
        alert("Name cannot be empty.");
        return false;
    }

    var words = nameInput.split(/\s+/);
    if (words.length < 2) {
        alert("Name must contain at least two words.");
        return false;
    }

    var namePattern = /^[a-zA-Z][a-zA-Z.\- ]*$/;
    if (!namePattern.test(nameInput)) {
        alert("Name can only contain letters (a-z or A-Z), dot(.), or dash(-) and must start with a letter.");
        return false;
    }
}
