<html>
<head>
    <title>Gender</title>
</head>
<body>
    <?php
        $selectedGender = "";

        $selectedGender = $_POST["gender"];
    
    ?>

    <form method="post" action="">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" <?php if ($selectedGender === "Male") echo "checked"; ?> /> Male
            <input type="radio" name="gender" value="Female" <?php if ($selectedGender === "Female") echo "checked"; ?> /> Female
            <input type="radio" name="gender" value="Other" <?php if ($selectedGender === "Other") echo "checked"; ?> /> Other <br>
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
    

</body>
</html>
