function validateForm() {
    var maleRadio = document.getElementById("male");
    var femaleRadio = document.getElementById("female");
    var otherRadio = document.getElementById("other");

    if (!(maleRadio.checked || femaleRadio.checked || otherRadio.checked)) {
        alert("Please select a gender.");
        return false;
    }
}