<?php
if (isset($_POST['upload'])) {

    $targetDir = "../../../assets/img/gallery/";
    $imageName = basename($_FILES["image"]["name"]);
    $imageName = str_replace(" ", "%20", $imageName);
    $targetPath = $targetDir . $imageName;

    // Save the image to the target directory with a unique name
    $uniqueName = time() . '_' . $imageName; // Adding timestamp to make it unique
    $targetPathUnique = $targetDir . $uniqueName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPathUnique)) {
        include '../../../proses/Connection.php';
        // Get the selected commission ID from the form
        $commissionID = $_POST['commission'];

        // Insert the image name and commission ID into the database
        $sql = "INSERT INTO gallery (id_admin, nama_gambar, id_commission_info) VALUES (1, '$uniqueName', '$commissionID')";
        // if ($conn->query($sql) === TRUE) {
        //     echo "Image uploaded and database updated successfully!";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        if ($conn->query($sql) === TRUE) {
            // Redirect back to gallery.php with success message
            header("Location: ../GalleryPage.php?status=success");
            exit();
        } else {
            // Redirect back to gallery.php with error message
            header("Location: ../GalleryPage.php?status=error");
            exit();
        }

        // Close the connection
        $conn->close();
    } else {
        // Redirect back to gallery.php with error message
        header("Location: ../GalleryPage.php?status=error&message=Please select an image.");
        exit();
    }
}
