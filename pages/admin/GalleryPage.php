<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include '../../components/headLink.php' ?>
    <link rel="stylesheet" href="../../styles/icons.css" />
    <link rel="stylesheet" href="../../styles/navbar.css" />
    <link rel="stylesheet" href="../../styles/footer.css" />
    <link rel="stylesheet" href="../../styles/adminStyles/GalleryPage.css">
    <title>Gallery</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: "Karla", sans-serif;
        }
    </style>
</head>

<body>
    <?php
    include '../../components/header.php';
    ?>

    <?php
    $activePage = "GALLERY";
    include '../../components/adminComponents/navbar.php';
    ?>

    <div class="text-center mt-4 mb-4">
        <p class="text-primary" style="font-size: 25px; font-weight: 600;">UPLOAD IMAGE</p>
        <?php
        // Check if the status query parameter is present
        if (isset($_GET['status'])) {
            $status = $_GET['status'];

            if ($status === "success") {
                echo "Image uploaded and database updated successfully!";
            } elseif ($status === "error") {
                echo "Error uploading the image.";
                if (isset($_GET['message'])) {
                    echo "</br>" . $_GET['message'];
                }
            }
        }
        ?>

        <form class="mt-2" action="proses/uploadImage.php" method="POST" enctype="multipart/form-data">
            <label for="commission">Commission:</label>
            <select id="commission" name="commission">
                <?php
                include '../../proses/Connection.php';
                $query = "SELECT * FROM commission_Info";
                $result = $conn->query($query);
                while ($data = $result->fetch_assoc()) { ?>
                    <option value="<?php echo $data['id_commission_info']; ?>"><?php echo $data['jenis_commission']; ?></option>
                <?php }
                ?>
            </select><br>
            <input class="form-control mb-2 mt-2" style="width:400px; margin:auto;" type="file" id="image-upload" name="image" accept="image/*" />
            <div class="image-preview"></div>
            <input class="btn btn-primary" type="submit" value="Upload" name="upload" />
        </form>
    </div>
    <div>
        <div class="overlay">
            <img src="" alt="Full-size image">
        </div>
        <!-- <div id="gallery" class="gallery">
            <img src="../../assets/img/gallery/Gambar1.png" />
            <img src="../../assets/img/gallery/Gambar2.png" />
            <img src="../../assets/img/gallery/Gambar3.png" />
            <img src="../../assets/img/gallery/Gambar1.png" />
            <img src="../../assets/img/gallery/Gambar2.png" />
        </div> -->
        <div id="gallery" class="gallery">
            <?php
            include '../../proses/Connection.php';
            $query = "SELECT * FROM gallery";
            $result = $conn->query($query);
            while ($data = $result->fetch_assoc()) {
                $image = urlencode($data['nama_gambar']);
                // $imageEncode = urlencode($data['nama_gambar']);
                // $image = str_replace("+", "%20", $imageEncode);
            ?>
                <div class="gallery-item">
                    <img src="../../assets/img/gallery/<?php echo $image ?>" />
                    <button class="delete-button"><i class="fa fa-trash"></i></button>
                    <div class="overlay-delete">
                        <div class="overlay-delete-content">
                            <p>Are you sure you want to delete this image?</p>
                            <div class="buttons">
                                <button class="cancel-button btn btn-primary">Cancel</button>
                                <button class="delete-confirm-button btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>

    </div>


    <?php
    include '../../components/footer.php';
    ?>


    <script>
        document.getElementById('image-upload').addEventListener('change', function(e) {
            var reader = new FileReader();
            reader.onload = function(event) {
                var imagePreview = document.querySelector('.image-preview');
                imagePreview.innerHTML = '<img src="' + event.target.result + '">';
            };
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>

    <script>
        const gallery = document.querySelector('.gallery');
        const overlay = document.querySelector('.overlay');
        const overlayImage = overlay.querySelector('img');

        gallery.addEventListener('click', event => {
            if (event.target.tagName === 'IMG') {
                overlayImage.src = event.target.src;
                overlay.style.display = 'flex';
                overlayImage.style.width = '600px';
            }
        });

        overlay.addEventListener('click', event => {
            if (event.target === overlay || event.target === overlayImage) {
                overlay.style.display = 'none';
            }
        });
    </script>

    <script>
        const deleteButtons = document.querySelectorAll('.delete-button');
        const overlayDeletes = document.querySelectorAll('.overlay-delete');
        const cancelButtons = document.querySelectorAll('.cancel-button');
        const deleteConfirmButtons = document.querySelectorAll('.delete-confirm-button');

        deleteButtons.forEach((button, index) => {
            button.addEventListener('click', (event) => {
                event.stopPropagation();
                overlayDeletes[index].style.display = 'flex';
            });
        });

        document.addEventListener('click', (event) => {
            overlayDeletes.forEach((overlayDelete) => {
                if (!overlayDelete.contains(event.target)) {
                    overlayDelete.style.display = 'none';
                }
            });
        });

        overlayDeletes.forEach((overlayDelete) => {
            overlayDelete.addEventListener('click', (event) => {
                if (event.target === overlayDelete) {
                    overlayDelete.style.display = 'none';
                }
            });
        });

        cancelButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                const overlayDelete = event.target.closest('.overlay-delete');
                overlayDelete.style.display = 'none';
            });
        });

        deleteConfirmButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                const galleryItem = event.target.closest('.gallery-item');
                galleryItem.remove();
            });
        });
    </script>
</body>

</html>