function validateForm() {
    var userIdInput = document.getElementById("userId").value.trim();
    var profilePicInput = document.getElementById("profilePic").value.trim();

    if (userIdInput === "" || isNaN(userIdInput) || parseInt(userIdInput) <= 0) {
        alert("User ID must be a non-empty positive number.");
        return false;
    }

    if (profilePicInput === "") {
        alert("Profile Picture cannot be empty.");
        return false;
    }
}