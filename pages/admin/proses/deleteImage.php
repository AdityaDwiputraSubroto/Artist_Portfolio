<?php

if (!isset($_POST['imageId'])) {
    echo "
            <script>
                document.location.href='../AddCommissionPage.php';
            </script>
        ";

    die();
}

if (isset($_POST['imageId'])) {
    // Get the image ID from the POST data
    $imageId = $_POST['imageId'];

    // Include the database connection
    include '../../../proses/Connection.php';

    // Retrieve the image information from the database
    $sql = "SELECT nama_gambar FROM gallery WHERE id_gallery = '$imageId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the image information
        $row = $result->fetch_assoc();
        $imageName = $row['nama_gambar'];

        // Delete the image file from the gallery folder
        $targetDir = "../../../assets/img/gallery/";
        $imagePath = $targetDir . $imageName;
        if (file_exists($imagePath)) {
            unlink($imagePath); // Delete the file
        }

        // Delete the image record from the database
        $deleteSql = "DELETE FROM gallery WHERE id_gallery = '$imageId'";
        if ($conn->query($deleteSql) === TRUE) {
            echo "
                <script>
                    document.location.href='../GalleryPage.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Delete failed!');
                    document.location.href='../GalleryPage.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Delete failed!');
                document.location.href='../GalleryPage.php';
            </script>
        ";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "
            <script>
                alert('Delete failed!');
                document.location.href='../GalleryPage.php';
            </script>
        ";
}
