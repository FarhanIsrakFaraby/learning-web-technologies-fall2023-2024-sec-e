<html lang="en">
<head>
    <title>Email</title>
</head>
<body>  
        <form method="post" action="email.php" enctype="">
            <fieldset>
            <legend>Email</legend> 
            <input type="text" name="email" value="" /> <br>
                <hr>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>
<?php
        $email = $_POST["email"];
        
        echo "$email";
    
?>