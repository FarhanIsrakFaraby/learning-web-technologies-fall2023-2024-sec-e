<html>
<body>
    <form method="post" action="">
        <fieldset>
            <legend> Blood Group </legend>
            <select name="bloodgroup">
                <option value="A+" <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] === 'A+') echo 'selected'; ?>>A+</option>
                <option value="A-" <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] === 'A-') echo 'selected'; ?>>A-</option>
                <option value="AB+" <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] === 'AB+') echo 'selected'; ?>>AB+</option>
                <option value="AB-" <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] === 'AB-') echo 'selected'; ?>>AB-</option>
                <option value="B-" <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] === 'B-') echo 'selected'; ?>>B-</option>
                <option value="B+" <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] === 'B+') echo 'selected'; ?>>B+</option>
                <option value="O+" <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] === 'O+') echo 'selected'; ?>>O+</option>
                <option value="O-" <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] === 'O-') echo 'selected'; ?>>O-</option>
            </select> <br>
            <hr width="150" align="left">
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>
