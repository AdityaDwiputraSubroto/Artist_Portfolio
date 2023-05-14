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
        <div id="gallery" class="gallery">
            <div class="gallery-item"><img src="../../assets/img/gallery/Gambar1.png" /></div>
            <div class="gallery-item"> <img src="../../assets/img/gallery/Gambar2.png" /></div>
            <div class="gallery-item"> <img src="../../assets/img/gallery/Gambar3.png" /></div>
            <div class="gallery-item"> <img src="../../assets/img/gallery/Gambar1.png" /></div>
            <div class="gallery-item"><img src="../../assets/img/gallery/Gambar2.png" /></div>
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

</body>

</html>