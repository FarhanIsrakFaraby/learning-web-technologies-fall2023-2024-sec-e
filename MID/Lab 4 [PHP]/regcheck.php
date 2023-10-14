<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    $errors = [];

    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($gender) || empty($dob)) {
        $errors[] = "All fields are required.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Password and Confirm Password do not match.";
    }


    if (empty($errors)) {
       
        echo "Registration successful!";
    } 

?>
