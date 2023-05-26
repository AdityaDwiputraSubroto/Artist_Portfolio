<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    echo "
                <script>
                    alert('You are not logged in!'); 
                    document.location.href='index.php';
                </script>
            ";

    die();
}
?>

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
    <link rel="stylesheet" href="../../styles/HomePage.css">
    <title>Home</title>
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
    $activePage = "HOME";
    include '../../components/adminComponents/navbar.php';
    ?>

    <?php
    include '../../components/contact-icon.php';
    ?>

    <div class="overlay">
        <img src="" alt="Full-size image">
    </div>
    <div class="mt-4 position-relative mb-5">

        <div class="scroll-images">
            <?php
            include '../../proses/Connection.php';
            $query = "SELECT * FROM gallery";
            $result = $conn->query($query);
            while ($data = $result->fetch_assoc()) {
                $image = urlencode($data['nama_gambar']);
                // $imageEncode = urlencode($data['nama_gambar']);
                // $image = str_replace("+", "%20", $imageEncode);
            ?>
                <div class="image">
                    <img src="../../assets/img/gallery/<?php echo $image; ?>" class="" alt="...">
                </div>
            <?php }
            ?>
        </div>
        <button class="arrow left-arrow"><img class="rotate-180" src="../../assets/img/icons/right-arrow.png" alt="left-arrow"></button>
        <button class="arrow right-arrow"><img src="../../assets/img/icons/right-arrow.png" alt="right-arrow"></button>
    </div>

    <?php
    include '../../components/footer.php';
    ?>
</body>
<script>
    const scrollImages = document.querySelector('.scroll-images');
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');

    leftArrow.addEventListener('click', () => {
        scrollImages.scrollLeft -= 300;
    });

    rightArrow.addEventListener('click', () => {
        scrollImages.scrollLeft += 300;
    });

    scrollImages.addEventListener('scroll', () => {
        if (scrollImages.scrollLeft === 0) {
            leftArrow.classList.add('disabled');
        } else {
            leftArrow.classList.remove('disabled');
        }
        if (scrollImages.scrollLeft + scrollImages.clientWidth === scrollImages.scrollWidth) {
            rightArrow.classList.add('disabled');
        } else {
            rightArrow.classList.remove('disabled');
        }
    });
</script>

<script>
    //imgae overlay
    const gallery = document.querySelector('.scroll-images');
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

</html>