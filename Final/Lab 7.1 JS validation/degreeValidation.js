function validateDegrees() {
    var checkboxes = document.getElementsByName("degree");
    var checkedCount = 0;

    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            checkedCount++;
        }
    }

    if (checkedCount === 0) {
        alert("Please select at least one degree.");
        return false;
    }
}