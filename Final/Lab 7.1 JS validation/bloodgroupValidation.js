function validateBloodGroup() {
    var bloodGroup = document.getElementsByName("bloodgroup")[0].value;

    if (bloodGroup === "") {
        alert("Please select a blood group.");
        return false;
    }
}