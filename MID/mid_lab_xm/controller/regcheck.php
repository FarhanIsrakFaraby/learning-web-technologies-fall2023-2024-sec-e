<?php
session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : '';

    

    if (empty($username) || empty($name) || empty($user_type)) {
        echo "Please fill in all the required fields.<br>";
    }

    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.<br>";
    }

    if ($password !== $confirm_password) {
        echo "Password and Confirm Password do not match.<br>";
    }
    else {
        $user = [
            'username' => $username,
            'password' => $password,
            'name' => $name,
            'user_type' => $user_type,
        ];

        $_SESSION['user'] = $user;
            header('location: ../view/login.php');
    }

?>
