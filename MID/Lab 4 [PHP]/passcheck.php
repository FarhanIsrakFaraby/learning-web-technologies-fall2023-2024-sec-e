<?php
        $currentPassword = $_POST["current_password"];
        $newPassword = $_POST["new_password"];
        $retypePassword = $_POST["retype_password"];
        $errors = [];
        if ($currentPassword === $newPassword) {
            $errors [] = "New Password should not be the same as the Current Password.";
        }

        if ($newPassword !== $retypePassword) {
            $errors [] = "New Password does not match with the Retyped Password.";
        }
        if (empty($errors)) {
            echo "Password change successful!";
        }

    ?>