function validateDOB() {
    var dobInput = document.getElementsByName("dob")[0].value;

    if (dobInput === "") {
        alert("Date of Birth cannot be empty.");
        return false;
    }

    // Parse the input date string to get individual components
    var parts = dobInput.split("-");
    var day = parseInt(parts[2], 10);
    var month = parseInt(parts[1], 10);
    var year = parseInt(parts[0], 10);

    // Validate day, month, and year ranges
    if (isNaN(day) || isNaN(month) || isNaN(year) ||
        day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2016) {
        alert("Invalid Date of Birth. Please enter a valid date (dd: 1-31, mm: 1-12, yyyy: 1900-2016).");
        return false;
    }

    // If you want to continue with form submission, you can remove the next line
    return true;
}