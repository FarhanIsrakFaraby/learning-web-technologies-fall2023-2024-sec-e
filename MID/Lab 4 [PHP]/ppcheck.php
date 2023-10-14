<?php

    if (isset($_FILES["picture"])) {
        $file = $_FILES["picture"];
        $fileType = $file["type"];
        $fileSize = $file["size"];

        $errors = [];

        if (!in_array($fileType, ['image/jpeg', 'image/jpg', 'image/png'])) {
            $errors[] = "Picture format must be JPEG, JPG, or PNG.";
        }
        if ($fileSize > 4 * 1024 * 1024) {
            $errors[] = "Picture size should not be more than 4MB.";
        }

        if (empty($errors)) {
            echo "Image uploaded successfully!";
        }
    }

?>
