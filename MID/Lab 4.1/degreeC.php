<html>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degree" value="SSC" <?php if (isset($_POST['degree']) && $_POST['degree'] === 'SSC') echo 'checked'; ?> /> SSC 
            <input type="checkbox" name="degree" value="HSC" <?php if (isset($_POST['degree']) && $_POST['degree'] === 'HSC') echo 'checked'; ?> /> HSC 
            <input type="checkbox" name="degree" value="BSc" <?php if (isset($_POST['degree']) && $_POST['degree'] === 'BSc') echo 'checked'; ?> /> BSc <br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>
