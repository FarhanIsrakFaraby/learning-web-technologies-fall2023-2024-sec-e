<?php

    if (isset($_FILES["picture"])) {
        $file = $_FILES["picture"];
        $fileType = $file["type"];
        $fileSize = $file["size"];


        if (!in_array($fileType, ['image/jpeg', 'image/jpg', 'image/png'])) {
           echo "Picture format must be JPEG, JPG, or PNG.";
        }
        if ($fileSize > 4 * 1024 * 1024) {
           echo "Picture size should not be more than 4MB.";
        }

        else {
            echo "Image uploaded successfully!";
        }
    }

?>
