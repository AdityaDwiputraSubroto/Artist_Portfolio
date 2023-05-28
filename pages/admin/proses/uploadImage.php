<?php
session_start();

if (!isset($_POST['upload'])) {
    echo "
            <script>
                document.location.href='../GalleryPage.php';
            </script>
        ";

    die();
}

if (isset($_POST['upload'])) {

    $id_admin = $_SESSION['id_admin'];
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
        if ($commissionID == "0") {
            // Insert the image name and commission ID into the database
            $sql = "INSERT INTO gallery (id_admin, nama_gambar) VALUES ('$id_admin', '$uniqueName')";
        } else {
            // Insert the image name and commission ID into the database
            $sql = "INSERT INTO gallery (id_admin, nama_gambar, id_commission_info) VALUES ('$id_admin', '$uniqueName', '$commissionID')";
        }

        // if ($conn->query($sql) === TRUE) {
        //     echo "Image uploaded and database updated successfully!";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        if ($conn->query($sql) === TRUE) {
            // Redirect back to gallery.php with success message
            echo "
                <script>
                    document.location.href='../GalleryPage.php?status=success';
                </script>
            ";
        } else {
            // Redirect back to gallery.php with error message
            echo "
                <script>
                    document.location.href='../GalleryPage.php?status=error';
                </script>
            ";
        }

        // Close the connection
        $conn->close();
    } else {
        // Redirect back to gallery.php with error message
        echo "
                <script>
                    document.location.href='../GalleryPage.php?status=error&message=Please select an image.';
                </script>
            ";
    }
}
