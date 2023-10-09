<html lang="en">
<head>
    <title>Date of Birth</title>
</head>
<body>  
        <form method="post" action="" enctype="">
            <fieldset>
                <legend>Date Of Birth</legend> 
                <input type="date" name="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : '' ;?>"><br>
                <hr>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>
