<?php
require_once('../model/userModel.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = $_POST['new_password'];
    $retypeNewPassword = $_POST['retype_new_password'];

    $errors = [];

    if ($newPassword !== $retypeNewPassword) {
        $errors[] = "New password and Retype New Password do not match.";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        $newPassword = $newPassword;
        echo "Password changed successfully.";
    }
}
?>
