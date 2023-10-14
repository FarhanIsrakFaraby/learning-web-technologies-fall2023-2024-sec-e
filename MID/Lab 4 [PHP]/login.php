<?php
        $username = $_POST["Username"];
        $password = $_POST["password"];

        $usernamePattern = '/^[a-zA-Z0-9.-_]{2,}$/';
        $passwordPattern = '/^.{8,}[@#$%]/';

        $errors = [];

        if (!preg_match($usernamePattern, $username)) {
            $errors[] = "Username does not meet the requirements.";
        }

        if (!preg_match($passwordPattern, $password)) {
            $errors[] = "Password does not meet the requirements.";
        }

        if (empty($errors)) {
            echo "Login successful!";
        } else {
            echo "<ul>";}
    ?>