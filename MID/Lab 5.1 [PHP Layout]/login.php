<?php
        $username = $_POST["Username"];
        $password = $_POST["password"];

        $usernamePattern = '/^[a-zA-Z0-9.-_]{2,}$/';
        $passwordPattern = '/^.{8,}[@#$%]/';


        if (!preg_match($usernamePattern, $username)) {
            echo "Username does not meet the requirements.";
        }

        if (!preg_match($passwordPattern, $password)) {
            echo "Password does not meet the requirements.";
        }

        else {
            echo "Login successful!";
        }
    ?>