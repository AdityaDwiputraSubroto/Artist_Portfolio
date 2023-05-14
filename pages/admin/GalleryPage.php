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
    <link rel="stylesheet" href="../../styles/GalleryPage.css">
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
    include '../../components/publicComponents/navbar.php';
    ?>

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
            <div class="gallery-item">
                <img src="../../assets/img/gallery/Gambar1.png" />
                <button class="delete-button"><i class="fa fa-trash"></i></button>
                <div class="overlay-delete">
                    <div class="overlay-delete-content">
                        <p>Are you sure you want to delete this image?</p>
                        <div class="buttons">
                            <button class="cancel-button">Cancel</button>
                            <button class="delete-confirm-button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="../../assets/img/gallery/Gambar2.png" />
                <button class="delete-button"><i class="fa fa-trash"></i></button>
                <div class="overlay-delete">
                    <div class="overlay-delete-content">
                        <p>Are you sure you want to delete this image?</p>
                        <div class="buttons">
                            <button class="cancel-button">Cancel</button>
                            <button class="delete-confirm-button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="../../assets/img/gallery/Gambar3.png" />
                <button class="delete-button"><i class="fa fa-trash"></i></button>
                <div class="overlay-delete">
                    <div class="overlay-delete-content">
                        <p>Are you sure you want to delete this image?</p>
                        <div class="buttons">
                            <button class="cancel-button">Cancel</button>
                            <button class="delete-confirm-button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="../../assets/img/gallery/Gambar1.png" />
                <button class="delete-button"><i class="fa fa-trash"></i></button>
                <div class="overlay-delete">
                    <div class="overlay-delete-content">
                        <p>Are you sure you want to delete this image?</p>
                        <div class="buttons">
                            <button class="cancel-button">Cancel</button>
                            <button class="delete-confirm-button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="../../assets/img/gallery/Gambar2.png" />
                <button class="delete-button"><i class="fa fa-trash"></i></button>
                <div class="overlay-delete">
                    <div class="overlay-delete-content">
                        <p>Are you sure you want to delete this image?</p>
                        <div class="buttons">
                            <button class="cancel-button">Cancel</button>
                            <button class="delete-confirm-button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php
    include '../../components/footer.php';
    ?>

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