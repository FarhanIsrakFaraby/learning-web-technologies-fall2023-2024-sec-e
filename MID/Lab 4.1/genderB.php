<!DOCTYPE html>
<html>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" /> Male
            <input type="radio" name="gender" value="Female" /> Female
            <input type="radio" name="gender" value="Other" /> Other <br>
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>

<?php
        $selectedGender = $_POST["gender"];
        echo "$selectedGender";
?>