<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($gender) || empty($dob)) {
        echo "All fields are required.";
    }

    if ($password !== $confirmPassword) {
        echo "Password and Confirm Password do not match.";
    }


    else {
       
        echo "Registration successful!";
    } 

?>
