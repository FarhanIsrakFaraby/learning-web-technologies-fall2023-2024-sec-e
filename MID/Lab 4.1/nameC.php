<html lang="en">
<head>
    <title>Name</title>
</head>
<body>  
        <form method="post" action="" enctype="">
            <fieldset><legend>Name</legend> 
            <input type="text" name="username" value="<?php
                    $username = $_POST["username"];
                    echo "$username";
                    ?>" /> <br>
                    <hr>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>
